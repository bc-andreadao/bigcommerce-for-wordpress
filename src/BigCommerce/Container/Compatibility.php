<?php


namespace BigCommerce\Container;

use BigCommerce\Compatibility\Template_Compatibility;
use BigCommerce\Compatibility\Themes\Theme_Factory;
use BigCommerce\Compatibility\Matomo\Matomo;
use BigCommerce\Compatibility\Akismet\Akismet;
use BigCommerce\Compatibility\WooCommerce\Facade;
use BigCommerce\Compatibility\WooCommerce\Cart as WC_Cart;
use BigCommerce\Pages\Account_Page;
use BigCommerce\Pages\Login_Page;
use BigCommerce\Container\Api;
use Pimple\Container;

/**
 * Provides integration with various third-party services and themes, including WooCommerce, Matomo, and Akismet.
 * It handles the registration of necessary services, theme compatibility, and custom functionality for BigCommerce.
 *
 * @package BigCommerce\Container
 */
class Compatibility extends Provider {

    /**
     * Template compatibility service.
     *
     * @var string
     */
    const TEMPLATES = 'theme_compat.templates';

    /**
     * Theme compatibility service.
     *
     * @var string
     */
    const THEME = 'theme_compat.theme';

    /**
     * WooCommerce facade service.
     *
     * @var string
     */
    const WC_FACADE = 'woo_compat.wc_facade';

    /**
     * Matomo tracking service.
     *
     * @var string
     */
    const MATOMO = 'compatibility.matomo';

    /**
     * Akismet spam checker service.
     *
     * @var string
     */
    const SPAM_CHECKER = 'compatibility.spam_checker';

    /**
     * Registers the necessary services and actions for compatibility with external plugins and themes.
     *
     * @param Container $container The container to register services with.
     */
	public function register( Container $container ) {
		$container[ self::TEMPLATES ] = function ( Container $container ) {
			return new Template_Compatibility();
		};
		
		$container[ self::THEME ] = function ( Container $container ) {
			$factory = new Theme_Factory();

			$wp_theme = wp_get_theme();

			if ( $wp_theme->parent() ) {
				$version = $wp_theme->parent()->get( 'Version' );
			} else {
				$version = $wp_theme->get( 'Version' );
			}

			return $factory->make( $wp_theme->get_template(), $version );
		};

		$container[ self::WC_FACADE ] = function ( Container $container ) {
			$wc_cart = new WC_Cart( $container[ Api::FACTORY ]->cart() );
			return new Facade( $wc_cart );
		};
		
		$container[ self::SPAM_CHECKER ] = function ( Container $container ) {
			return new Akismet();
		};

		/**
		 * Filters the page template for custom page types.
		 *
		 * @param string $template The current template being used.
		 * @param string $type The type of page (e.g., 'page', 'single', etc.).
		 * @param array $templates Array of available templates.
		 * 
		 * @return string The modified template file path.
		 */
		add_filter( 'page_template', $this->create_callback( 'page_template_override', function ( $template, $type, $templates ) use ( $container ) {
			return $container[ self::TEMPLATES ]->override_page_template( $template, $type, $templates );
		} ), 10, 3 );
		
		/**
		 * Hooks into 'setup_theme' to load compatibility functions for WooCommerce.
		 *
		 * This action is triggered during theme setup to ensure compatibility with WooCommerce
		 * when activating or updating the plugin.
		 *
		 * @return void
		 */
		add_action( 'setup_theme', $this->create_callback( 'woo_compat_functions', function () use ( $container ) {
			if ( filter_input( INPUT_GET, 'action', FILTER_SANITIZE_STRING ) === 'activate' && filter_input( INPUT_GET, 'plugin', FILTER_SANITIZE_STRING ) === 'woocommerce/woocommerce.php' ) {
				return;
			}
			include_once( dirname( $container[ 'plugin_file' ] ) . '/src/BigCommerce/Compatibility/woocommerce-functions.php' );

			$container[ self::THEME ]->load_compat_functions();
		} ), 10, 0 );
		
		/**
		 * Hooks into 'wp' to fix Flatsome theme compatibility for the account page.
		 *
		 * This action is triggered when WordPress initializes the current page to ensure
		 * that the Flatsome theme's content fix is removed for the account page.
		 *
		 * @return void
		 */
		add_action( 'wp', $this->create_callback( 'woo_compat_theme_flatsome_accounts_page_fix', function () {
			if ( is_page( get_option( \BigCommerce\Pages\Account_Page::NAME, 0 ) ) ) {
			    remove_filter( 'the_content', 'flatsome_contentfix' );
			}
		} ) );

		/**
		 * Hooks into 'init' to disable WooCommerce shortcodes in Flatsome theme.
		 *
		 * This action is triggered during the initialization of WordPress to replace
		 * WooCommerce-related shortcodes with a null return for compatibility with the Flatsome theme.
		 *
		 * @return void
		 */
		add_action( 'init', $this->create_callback( 'woo_compat_theme_flatsome_replace_wc_related_shortcodes', function () {
			if ( get_option( 'template' ) !== 'flatsome') {
				return;
			}
			
			global $shortcode_tags;
			foreach ( $shortcode_tags as $tag ) {
				if ( is_string( $tag ) && strpos( $tag, 'ux_product' ) !== false ) {
					add_shortcode( $tag, '__return_null' );
				}
			}
		} ) );
		
		/**
		 * Hooks into 'init' to load compatibility functions for WordPress 4.9.
		 *
		 * This action checks if the current WordPress version is below 4.9 and includes
		 * compatibility functions specific to that version.
		 *
		 * @return void
		 */
		add_action( 'init', $this->create_callback( 'wordpress_4_dot_9', function () use ( $container ) {
			if ( version_compare( $GLOBALS[ 'wp_version' ], '4.9', '<' ) ) {
				include_once( dirname( $container[ 'plugin_file' ] ) . '/src/BigCommerce/Compatibility/wordpress-4-dot-9.php' );
			}
		} ), 10, 0 );

		/**
		 * Hooks into 'init' to load compatibility functions for WordPress 5.1.
		 *
		 * This action checks if the current WordPress version is below 5.1 and includes
		 * compatibility functions specific to that version.
		 *
		 * @return void
		 */
		add_action( 'init', $this->create_callback( 'wordpress_5_dot_1', function () use ( $container ) {
			if ( version_compare( $GLOBALS[ 'wp_version' ], '5.1', '<' ) ) {
				include_once( dirname( $container[ 'plugin_file' ] ) . '/src/BigCommerce/Compatibility/wordpress-5-dot-1.php' );
			}
		} ), 10, 0 );

		/**
		 * Filters the My Account page ID for WooCommerce.
		 *
		 * This action is triggered when retrieving the 'woocommerce_myaccount_page_id' option.
		 * It ensures that the correct page ID is used for logged-in users.
		 *
		 * @return int The My Account page ID.
		 */
		add_action( 'pre_option_woocommerce_myaccount_page_id', $this->create_callback( 'woo_compat_filter_myaccount_page_id', function () {
			if ( is_user_logged_in() ) {
				return get_option( Account_Page::NAME, 0 );
			}
			return get_option( Login_Page::NAME, 0 );
		} ), 10, 0 );

		$this->matomo_integration( $container );
	}

	private function matomo_integration( $container ) {
		$container[ self::MATOMO ] = function ( Container $container ) {
			return new Matomo();
		};

		/**
		 * Filters the JS configuration for Matomo tracking.
		 *
		 * This filter checks if Matomo is enabled and modifies the JS configuration accordingly.
		 * If tracking is enabled, the Matomo integration adds its own JS configuration.
		 *
		 * @param array $config The current JS configuration.
		 * 
		 * @return array The modified JS configuration with Matomo settings.
		 */
		add_filter( 'bigcommerce/js_config', $this->create_callback( 'compatibility.matomo.js_config', function( $config ) use ( $container ) {
			if ( class_exists( 'WpMatomo' ) && \WpMatomo::$settings->is_tracking_enabled() ) {
				return $container[ self::MATOMO ]->js_config( $config );
			}

			return $config;
		}), 10, 1 );
	}
}