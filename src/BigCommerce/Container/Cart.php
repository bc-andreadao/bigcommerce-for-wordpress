<?php


namespace BigCommerce\Container;


use BigCommerce\Cart\Add_To_Cart;
use BigCommerce\Cart\Buy_Now;
use BigCommerce\Cart\Cache_Control;
use BigCommerce\Cart\Cart_Menu_Item;
use BigCommerce\Cart\Cart_Recovery;
use BigCommerce\Cart\Checkout;
use BigCommerce\Cart\Mini_Cart;
use Pimple\Container;

class Cart extends Provider {
	const CART_INDICATOR    = 'cart.page_indicator';
	const CART_CREATOR      = 'cart.page_creator';
	const MENU_ITEM         = 'cart.menu_item';
	const MINI_CART         = 'cart.mini_cart';
	const CACHE_CONTROL     = 'cart.cache_control';
	const BUY_NOW           = 'cart.buy_now';
	const ADD_TO_CART       = 'cart.add_to_cart';
	const RECOVER_FROM_CART = 'cart.recover_from_cart';
	const CHECKOUT          = 'cart.checkout';

	public function register( Container $container ) {
		$this->menu_item( $container );
		$this->mini_cart( $container );
		$this->cache_control( $container );

		$this->buy_now( $container );
		$this->cart( $container );
		$this->checkout( $container );
	}

	private function menu_item( Container $container ) {
		$container[ self::MENU_ITEM ] = function ( Container $container ) {
			return new Cart_Menu_Item();
		};

		/**
		 * Filters the navigation menu item to add classes for the cart page.
		 *
		 * This filter is applied when setting up the navigation menu item to ensure that
		 * the appropriate classes are added to the cart page menu item.
		 *
		 * @param \WP_Post $menu_item The menu item object to be filtered.
		 * 
		 * @return \WP_Post The modified menu item with additional classes for the cart page.
		 */
		add_filter( 'wp_setup_nav_menu_item', $this->create_callback( 'menu_item', function ( $menu_item ) use ( $container ) {
			return $container[ self::MENU_ITEM ]->add_classes_to_cart_page( $menu_item );
		} ), 10, 1 );
	}

	private function cache_control( Container $container ) {
		$container[ self::CACHE_CONTROL ] = function ( Container $container ) {
			return new Cache_Control();
		};

		/**
		 * Action hook that checks for the presence of specific shortcodes (`Cart` and `Checkout`) during the template redirect and handles caching logic accordingly.
		 *
		 * @return void
		 */
		add_action( 'template_redirect', $this->create_callback( 'shortcode_check', function () use ( $container ) {
			$container[ self::CACHE_CONTROL ]->check_for_shortcodes( [
				\BigCommerce\Shortcodes\Cart::NAME,
				\BigCommerce\Shortcodes\Checkout::NAME,
			] );
		} ), 10, 0 );
	

		/**
		 * Action hook that disables caching for cart and checkout pages.
		 *
		 * @return void
		 */
		add_action( 'bigcommerce/do_not_cache', $this->create_callback( 'do_not_cache', function () use ( $container ) {
			$container[ self::CACHE_CONTROL ]->do_not_cache();
		} ), 10, 0 );
	}

	private function buy_now( Container $container ) {
		$container[ self::BUY_NOW ] = function ( Container $container ) {
			return new Buy_Now();
		};

		/**
		 * Action hook that handles the Buy Now request.
		 *
		 * This hook is triggered when the `bigcommerce/action_endpoint/<ACTION>` endpoint
		 * for the `Buy_Now` action is called. It processes the Buy Now request and handles
		 * adding the item to the cart.
		 *
		 * @param array $args The arguments passed to the action (e.g., product details).
		 * 
		 * @return void
		 */
		add_action( 'bigcommerce/action_endpoint/' . Buy_Now::ACTION, $this->create_callback( 'buy_now_handle_request', function ( $args ) use ( $container ) {
			$container[ self::BUY_NOW ]->handle_request( reset( $args ), $container[ Api::FACTORY ]->cart() );
		} ), 10, 1 );
	}

	private function cart( Container $container ) {
		$container[ self::ADD_TO_CART ] = function ( Container $container ) {
			return new Add_To_Cart();
		};

		$container[ self::RECOVER_FROM_CART ] = function ( Container $container ) {
			return new Cart_Recovery( $container[ Api::FACTORY ]->abandonedCart(), $container[ Api::FACTORY ]->cart() );
		};

		/**
		 * Action hook that handles adding an item to the cart.
		 *
		 * This hook is triggered when the `bigcommerce/action_endpoint/<ACTION>` endpoint
		 * for the `Add_To_Cart` action is called. It processes the request to add an item to
		 * the cart.
		 *
		 * @param array $args The arguments passed to the action (e.g., product details).
		 * 
		 * @return void
		 */
		add_action( 'bigcommerce/action_endpoint/' . Add_To_Cart::ACTION, $this->create_callback( 'add_to_cart_handle_request', function ( $args ) use ( $container ) {
			$container[ self::ADD_TO_CART ]->handle_request( reset( $args ), $container[ Api::FACTORY ]->cart() );
		} ), 10, 1 );

		/**
		 * Action hook that handles recovering an abandoned cart.
		 *
		 * This hook is triggered when the `bigcommerce/action_endpoint/<ACTION>` endpoint
		 * for the `Cart_Recovery` action is called. It processes the request to recover an
		 * abandoned cart.
		 *
		 * @param array $args The arguments passed to the action (e.g., cart recovery data).
		 * 
		 * @return void
		 */
		add_action( 'bigcommerce/action_endpoint/' . Cart_Recovery::ACTION, $this->create_callback( 'recover_cart_handle_request', function ( $args ) use ( $container ) {
			$container[ self::RECOVER_FROM_CART ]->handle_request();
		} ), 10, 1 );
	}

	private function mini_cart( Container $container ) {
		$container[ self::MINI_CART ] = function ( Container $container ) {
			return new Mini_Cart();
		};

		/**
		 * Filters the JavaScript configuration for the mini cart.
		 *
		 * This filter modifies the `js_config` array to include specific configurations
		 * related to the mini cart, such as display options and functionality.
		 *
		 * @param array $config The existing JavaScript configuration.
		 * 
		 * @return array The modified JavaScript configuration.
		 */
		add_filter( 'bigcommerce/js_config', $this->create_callback( 'mini_cart_js_config', function ( $config ) use ( $container ) {
			return $container[ self::MINI_CART ]->add_mini_cart_config( $config );
		} ), 10, 1 );
	}

	private function checkout( Container $container ) {
		$container[ self::CHECKOUT ] = function ( Container $container ) {
			return new Checkout( $container[ Api::FACTORY ] );
		};

		/**
		 * Action hook that handles the checkout request.
		 *
		 * This hook is triggered when the `bigcommerce/action_endpoint/<ACTION>` endpoint
		 * for the `Checkout` action is called. It processes the checkout request and handles
		 * the cart during the checkout process.
		 *
		 * @param array $args The arguments passed to the action (e.g., checkout data).
		 * 
		 * @return void
		 */
		add_action( 'bigcommerce/action_endpoint/' . Checkout::ACTION, $this->create_callback( 'checkout_handle_request', function ( $args ) use ( $container ) {
			$container[ self::CHECKOUT ]->handle_request( reset( $args ), $container[ Api::FACTORY ]->cart() );
		} ), 10, 1 );
	}
}
