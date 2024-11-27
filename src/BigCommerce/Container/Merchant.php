<?php


namespace BigCommerce\Container;


use BigCommerce\Merchant\Account_Status;
use BigCommerce\Merchant\Connect_Account;
use BigCommerce\Merchant\Create_Account;
use BigCommerce\Merchant\Onboarding_Api;
use BigCommerce\Merchant\Setup_Status;
use BigCommerce\Settings\Screens\Pending_Account_Screen;
use Pimple\Container;

/**
 * Handles merchant-related onboarding and account management for BigCommerce integration.
 *
 * Provides functionality for creating and connecting merchant accounts, checking account
 * statuses, and setting up the onboarding API.
 *
 * @package BigCommerce\Container
 */
class Merchant extends Provider {
    /**
     * The URL for the middleman used in onboarding processes.
     *
     * @var string
     */
	const MIDDLEMAN_URL   = 'merchant.middleman.url';

    /**
     * The key for accessing the Onboarding API service in the container.
     *
     * @var string
     */
	const ONBOARDING_API  = 'merchant.onboarding.api';

    /**
     * The key for accessing the Create Account service in the container.
     *
     * @var string
     */
	const CREATE_ACCOUNT  = 'merchant.onboarding.create_account';

    /**
     * The key for accessing the Connect Account service in the container.
     *
     * @var string
     */
	const CONNECT_ACCOUNT = 'merchant.onboarding.connect_account';

    /**
     * The key for accessing the Account Status service in the container.
     *
     * @var string
     */
	const ACCOUNT_STATUS  = 'merchant.onboarding.account_status';

    /**
     * The key for accessing the Setup Status service in the container.
     *
     * @var string
     */
	const SETUP_STATUS    = 'merchant.onboarding.setup_status';

    /**
     * Registers services into the dependency container.
     *
     * Sets up account onboarding services including account creation, connection,
     * status checks, and setup status.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	public function register( Container $container ) {
		$this->account_onboarding( $container );
	}

    /**
     * Sets up account onboarding services in the container.
     *
     * Initializes and registers services for onboarding, including the middleman URL,
     * onboarding API, account creation, account connection, and account status.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	private function account_onboarding( Container $container ) {
		$container[ self::MIDDLEMAN_URL ] = function ( Container $container ) {
			/**
			 * Filters oauth connector url
			 *
			 * @param string $url Oauth connector URL.
			 */
			return apply_filters( 'bigcommerce/oauth_connector/url', 'https://wp-login.bigcommerce.com/v1' );
		};

		$container[ self::ONBOARDING_API ] = function ( Container $container ) {
			return new Onboarding_Api( $container[ self::MIDDLEMAN_URL ] );
		};

		$this->create_account( $container );
		$this->connect_account( $container );
		$this->account_status( $container );
		$this->setup_status( $container );
	}

    /**
     * Registers the Create Account service and hooks into the account creation process.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	private function create_account( Container $container ) {
		$container[ self::CREATE_ACCOUNT ] = function ( Container $container ) {
			return new Create_Account( $container[ self::ONBOARDING_API ] );
		};

        /**
         * Action to handle the submission of account creation requests.
         *
         * This action processes data submitted for account creation, logs errors,
         * and invokes the Create_Account service to handle the request.
         *
         * @param array $data Submitted data for account creation.
         * @param array $errors An array of errors, if any, encountered during submission.
         * @return void
         * @throws \Exception If an error occurs during account creation.
         */
		add_action( 'bigcommerce/create_account/submit_request', $this->create_callback( 'request_account', function ( $data, $errors ) use ( $container ) {
			$container[ self::CREATE_ACCOUNT ]->request_account( $data, $errors );
		} ), 10, 2 );
	}

    /**
     * Registers the Connect Account service and hooks into the account connection process.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	private function connect_account( Container $container ) {
		$container[ self::CONNECT_ACCOUNT ] = function ( Container $container ) {
			return new Connect_Account( $container[ self::ONBOARDING_API ] );
		};

        /**
         * Filter to modify the account connection URL.
         *
         * Allows customization of the URL used to connect a BigCommerce account.
         *
         * @param string $url The default account connection URL.
         * @return string The modified URL.
         */
		add_filter( 'bigcommerce/settings/connect_account_url', $this->create_callback( 'connect_account_url', function ( $url ) use ( $container ) {
			return $container[ self::CONNECT_ACCOUNT ]->connect_account_url( $url );
		} ), 10, 1 );

        /**
         * Action to handle the account connection process.
         *
         * Triggers the Connect_Account service to connect the merchant's account.
         *
         * @return void
         */
		add_action( 'admin_post_' . Connect_Account::CONNECT_ACTION, $this->create_callback( 'connect_account_handler', function () use ( $container ) {
			$container[ self::CONNECT_ACCOUNT ]->connect_account();
		} ), 10, 0 );
	}

    /**
     * Registers the Account Status service and hooks into status rendering and checks.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	private function account_status( Container $container ) {
		$container[ self::ACCOUNT_STATUS ] = function ( Container $container ) {
			return new Account_Status( $container[ self::ONBOARDING_API ] );
		};

        /**
         * Action to render the account status placeholder on settings pages.
         *
         * Displays a placeholder for account status on specific admin settings pages.
         *
         * @return void
         */
		add_action( 'bigcommerce/settings/after_content/page=' . Pending_Account_Screen::NAME, $this->create_callback( 'account_status_placeholder', function () use ( $container ) {
			$container[ self::ACCOUNT_STATUS ]->render_status_placeholder();
		} ), 10, 0 );

        /**
         * Action to handle AJAX requests for account status updates.
         *
         * Handles requests to check and refresh the merchant's account status.
         *
         * @return void
         */
		add_action( 'wp_ajax_' . Account_Status::STATUS_AJAX, $this->create_callback( 'ajax_account_status', function () use ( $container ) {
			$container[ self::ACCOUNT_STATUS ]->handle_account_status_request();
		} ), 10, 0 );

        /**
         * Action to handle status checks for pending accounts.
         *
         * Processes errors during status checks and updates the account status as needed.
         *
         * @param array $errors An array of errors encountered during the status check.
         * @return void
         */
		add_action( 'bigcommerce/pending_account/check_status', $this->create_callback( 'pending_check_status', function ( $errors ) use ( $container ) {
			$container[ self::ACCOUNT_STATUS ]->handle_refresh_status_request( $errors );
		} ), 10, 1 );
	}

    /**
     * Registers the Setup Status service in the container.
     *
     * @param Container $container The dependency injection container.
     * @return void
     */
	private function setup_status( Container $container ) {
		$container[ self::SETUP_STATUS ] = function ( Container $container ) {
			return new Setup_Status( $container[ Api::FACTORY ] );
		};
	}
}
