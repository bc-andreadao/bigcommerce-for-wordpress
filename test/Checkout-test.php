<?php

namespace BigCommerce\Container;

use BigCommerce\Checkout\Customer_Login;
use BigCommerce\Checkout\Requirements_Notice;
use BigCommerce\Settings\Sections\Channels;
use Pimple\Container;

/**
 * Registers checkout-related functionality for the BigCommerce platform, including customer login and checkout requirements.
 * This class extends the Provider class and interacts with various BigCommerce services, such as customer login and checkout 
 * requirements, through a Pimple container. test.
 */
class Checkout extends Provider {
	/**
	 * Constant for the requirements notice action in the checkout process. 
	 * It is used to trigger the display of a requirements notice during the checkout process, 
	 * informing customers about any prerequisites or terms they need to acknowledge before proceeding.
	 * @var string
	 */
	const REQUIREMENTS_NOTICE = 'checkout.requirements_notice';

	/**
	 * Constant for the customer login action in the checkout process.
	 * It is used to trigger the corresponding handler for customer login during checkout.
	 * @var string
	 */
	const LOGIN               = 'checkout.customer_login';

    /**
     * Registers the checkout-related functionality in the container.
     * @param Container $container The Pimple container to register services in.
     * 
     * @return void
     */
	public function register( Container $container ) {
		$this->requirements( $container );
		$this->customer_login( $container );
	}

    /**
     * Registers services related to the checkout requirements.
     * This method sets up services for the requirements notice, admin actions, and filters.
     *
     * @param Container $container The Pimple container to register services in.
     * 
     * @return void
     */
	private function requirements( Container $container ) {
		$container[ self::REQUIREMENTS_NOTICE ] = function ( Container $container ) {
			return new Requirements_Notice( $container[ Merchant::SETUP_STATUS ] );
		};

		/**
		 * Displays an admin notice to verify checkout requirements if the setup status meets the requirements.
		 */
		add_action( 'admin_notices', $this->create_callback( 'verify_checkout_requirements', function () use ( $container ) {
			if ( $container[ Settings::CONFIG_STATUS ] >= Settings::STATUS_COMPLETE ) {
				$container[ self::REQUIREMENTS_NOTICE ]->check_requirements();
			}
		} ), 10, 0 );

		/**
		 * Refreshes the checkout requirements status by calling the `refresh_status` method.
		 */
		add_action( 'admin_post_' . Requirements_Notice::REFRESH, $this->create_callback( 'refresh_checkout_requirements', function () use ( $container ) {
			$container[ self::REQUIREMENTS_NOTICE ]->refresh_status();
		} ), 10, 0 );

		/**
		 * Filters the value of the "Embedded Checkout" option based on setup requirements.
		 *
		 * @param mixed $value The current option value.
		 * @return mixed The modified option value after validation by the requirements notice logic.
		 */
		add_filter( 'pre_option_' . \BigCommerce\Settings\Sections\Cart::OPTION_EMBEDDED_CHECKOUT, $this->create_callback( 'embedded_checkout_requirement_check', function ( $value ) use ( $container ) {
			return $container[ self::REQUIREMENTS_NOTICE ]->filter_embedded_checkout( $value );
		} ), 10, 1 );

		/**
		 * Determines whether the embedded checkout can be enabled based on current requirements.
		 *
		 * @param bool $supported Indicates if embedded checkout is currently supported.
		 * @return bool Updated value indicating whether embedded checkout can be enabled.
		 */
		add_filter( 'bigcommerce/checkout/can_embed', $this->create_callback( 'embedded_checkout_supported', function ( $supported ) use ( $container ) {
			return $container[ self::REQUIREMENTS_NOTICE ]->can_enable_embedded_checkout();
		} ), 1, 1 );
	}

    /**
     * Registers services related to the customer login functionality during checkout.
     * This method sets up the customer login service and modifies the checkout URL to include the login token.
     *
     * @param Container $container The Pimple container to register services in.
     * 
     * @return void
     */
	private function customer_login( Container $container ) {
		$container[ self::LOGIN ] = function ( Container $container ) {
			return new Customer_Login( $container[ Merchant::ONBOARDING_API ], $container[ Api::FACTORY ]->store() );
		};

		/**
		 * Modifies the checkout URL by adding a login token for customer authentication.
		 *
		 * @param string $url The original checkout URL.
		 * @return string The modified URL with the login token included.
		 */
		add_filter( 'bigcommerce/checkout/url', $this->create_callback( 'checkout_url', function ( $url ) use ( $container ) {
			return $container[ self::LOGIN ]->set_login_token_for_checkout( $url );
		} ), 10, 1 );
	}
}
