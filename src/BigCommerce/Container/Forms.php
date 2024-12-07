<?php


namespace BigCommerce\Container;


use BigCommerce\Forms\Delete_Address_Handler;
use BigCommerce\Forms\Error_Handler;
use BigCommerce\Forms\Form_Redirect;
use BigCommerce\Forms\Messages;
use BigCommerce\Forms\Purchase_Gift_Certificate_Handler;
use BigCommerce\Forms\Product_Review_Handler;
use BigCommerce\Forms\Registration_Handler;
use BigCommerce\Forms\Success_Handler;
use BigCommerce\Forms\Update_Address_Handler;
use BigCommerce\Forms\Update_Profile_Handler;
use BigCommerce\Forms\Switch_Currency_Handler;
use Pimple\Container;

/**
 * Forms class handles various form actions within BigCommerce, such as registration, address updates, product reviews, and more.
 * It registers form handlers and provides functionality to process form actions, handle errors, success messages, redirects, and messaging.
 * This class is part of the container and utilizes dependency injection to manage the various handlers for each action.
 *
 * @package BigCommerce\Container
 */
class Forms extends Provider {
	/**
	 * Constant for deleting an address form action.
	 *
	 * @var string
	 */
	const DELETE_ADDRESS   = 'forms.delete_address';

	/**
	 * Constant for the user registration form action.
	 *
	 * @var string
	 */
	const REGISTER         = 'forms.register';

	/**
	 * Constant for the product review form action.
	 *
	 * @var string
	 */
	const REVIEW           = 'forms.review';

	/**
	 * Constant for updating an address form action.
	 *
	 * @var string
	 */
	const UPDATE_ADDRESS   = 'forms.update_address';

	/**
	 * Constant for updating a user's profile form action.
	 *
	 * @var string
	 */
	const UPDATE_PROFILE   = 'forms.update_profile';

	/**
	 * Constant for purchasing a gift certificate form action.
	 *
	 * @var string
	 */
	const GIFT_CERTIFICATE = 'forms.purchase_gift_certificate';

	/**
	 * Constant for form errors.
	 *
	 * @var string
	 */
	const ERRORS           = 'forms.errors';

	/**
	 * Constant for form success messages.
	 *
	 * @var string
	 */
	const SUCCESS          = 'forms.success';

	/**
	 * Constant for form redirects.
	 *
	 * @var string
	 */
	const REDIRECTS        = 'forms.redirects';

	/**
	 * Constant for form messaging.
	 *
	 * @var string
	 */
	const MESSAGING        = 'forms.messaging';

	/**
	 * Constant for switching currency in a form.
	 *
	 * @var string
	 */
	const SWITCH_CURRENCY  = 'forms.switch_currency';

	/**
	 * Registers all the form actions and handlers into the container.
	 * This method sets up actions for handling form submissions, errors, success, redirects, and messaging.
	 *
	 * @param Container $container The dependency injection container.
	 */
	public function register( Container $container ) {

		$this->actions( $container );
		$this->errors( $container );
		$this->success( $container );
		$this->redirects( $container );
		$this->messaging( $container );

	}

	private function actions( Container $container ) {
        /**
         * Parses incoming requests and triggers the corresponding form action 
         * when the `bc-action` parameter is present. Dynamically fires 
         * a `bigcommerce/form/action=<action>` hook based on the value of `bc-action`.
         */
		add_action( 'parse_request', $this->create_callback( 'handle_form_action', function () use ( $container ) {
			$action = filter_var_array( $_REQUEST, [ 'bc-action' => FILTER_SANITIZE_STRING ] );
			if ( $action['bc-action'] ) {
				do_action( 'bigcommerce/form/action=' . $action['bc-action'], stripslashes_deep( $_REQUEST ) );
			}
		} ), 10, 0 );

		$container[ self::DELETE_ADDRESS ] = function ( Container $container ) {
			return new Delete_Address_Handler();
		};

        /**
         * Triggered when the form submission specifies `delete_address` as the `bc-action` parameter. 
         * Handles the removal of an address from the user's account.
         *
         * @param array $submission The sanitized form submission data containing details for the address to be deleted.
         */
		add_action( 'bigcommerce/form/action=' . Delete_Address_Handler::ACTION, $this->create_callback( 'delete_address', function ( $submission ) use ( $container ) {
			$container[ self::DELETE_ADDRESS ]->handle_request( $submission );
		} ), 10, 1 );

		$container[ self::UPDATE_ADDRESS ] = function ( Container $container ) {
			return new Update_Address_Handler();
		};

        /**
         * Triggered when the form submission specifies `update_address` as the `bc-action` parameter. 
         * Handles updating an existing address in the user account by processing and validating the form data. 
         * Developers can hook into this action to extend or customize address update behavior.
         *
         * @param array $submission The sanitized form submission data (typically from $_POST), containing user-provided fields for the address update.
         */
		add_action( 'bigcommerce/form/action=' . Update_Address_Handler::ACTION, $this->create_callback( 'update_address', function ( $submission ) use ( $container ) {
			$container[ self::UPDATE_ADDRESS ]->handle_request( $submission );
		} ), 10, 1 );

		$container[ self::UPDATE_PROFILE ] = function ( Container $container ) {
			return new Update_Profile_Handler();
		};

        /**
         * Triggered when the form submission specifies `update_profile` as the `bc-action` parameter. 
         * Handles updates to the user's profile details, such as name or email address.
         *
         * @param array $submission The sanitized form submission data containing user profile fields to be updated.
         */
		add_action( 'bigcommerce/form/action=' . Update_Profile_Handler::ACTION, $this->create_callback( 'update_profile', function ( $submission ) use ( $container ) {
			$container[ self::UPDATE_PROFILE ]->handle_request( $submission );
		} ), 10, 1 );

		$container[ self::REGISTER ] = function ( Container $container ) {
			return new Registration_Handler( $container[ Compatibility::SPAM_CHECKER ], $container[ Accounts::LOGIN] );
		};

        /**
         * Triggered when the form submission specifies `register` as the `bc-action` parameter. 
         * Handles user registration by validating input data and creating a new account.
         *
         * @param array $submission The sanitized form submission data containing user registration details such as name, email, and password.
         */
		add_action( 'bigcommerce/form/action=' . Registration_Handler::ACTION, $this->create_callback( 'register', function ( $submission ) use ( $container ) {
			return $container[ self::REGISTER ]->handle_request( $submission );
		} ), 10, 1 );

		$container[ self::GIFT_CERTIFICATE ] = function ( Container $container ) {
			return new Purchase_Gift_Certificate_Handler( $container[ Api::FACTORY ]->cart() );
		};

        /**
         * Triggered when the form submission specifies `purchase_gift_certificate` as the `bc-action` parameter. 
         * Handles the purchase of a gift certificate by processing user input and creating a cart item.
         *
         * @param array $submission The sanitized form submission data containing gift certificate purchase details.
         */
		add_action( 'bigcommerce/form/action=' . Purchase_Gift_Certificate_Handler::ACTION, $this->create_callback( 'purchase_gift_certificate', function ( $submission ) use ( $container ) {
			return $container[ self::GIFT_CERTIFICATE ]->handle_request( $submission );
		} ), 10, 1 );

		$container[ self::REVIEW ] = function ( Container $container ) {
			return new Product_Review_Handler( $container[ Api::FACTORY ]->catalog() );
		};

        /**
         * Triggered when the form submission specifies `product_review` as the `bc-action` parameter. 
         * Processes product reviews submitted by customers and saves them to the catalog system.
         *
         * @param array $submission The sanitized form submission data containing customer review details such as rating and comments.
         */
		add_action( 'bigcommerce/form/action=' . Product_Review_Handler::ACTION, $this->create_callback( 'product_review', function ( $submission ) use ( $container ) {
			$container[ self::REVIEW ]->handle_request( $submission );
		} ), 10, 1 );

		/**
		 * Filters the display of form messages.
		 *
		 * @param bool $show Whether to show messages.
		 * @param int $post_id The post ID.
		 *
		 * @return bool Whether messages should be displayed.
		 */
		add_filter( 'bigcommerce/forms/show_messages', $this->create_callback( 'review_form_messages', function ( $show, $post_id ) use ( $container ) {
			return $container[ self::REVIEW ]->remove_form_messages_from_post_content( $show, $post_id );
		} ), 10, 2 );

		/**
		 * Toggles the review form availability.
		 *
		 * @param bool $enabled Whether the review form is enabled.
		 * @param int $post_id The post ID.
		 *
		 * @return bool Whether the review form is enabled.
		 */
		add_filter( 'bigcommerce/product/reviews/show_form', $this->create_callback( 'toggle_review_form', function ( $enabled, $post_id ) use ( $container ) {
			return $container[ self::REVIEW ]->toggle_reviews_form_availability( $enabled, $post_id );
		} ), 10, 2 );

		$container[ self::SWITCH_CURRENCY ] = function ( Container $container ) {
			return new Switch_Currency_Handler( $container[ Currency::CURRENCY ], $container[ Api::FACTORY ]->cart() );
		};

		/**
		 * Handles the currency switch action in the BigCommerce form submission.
		 *
		 * This action is triggered when the user submits a form that includes a request to switch
		 * the currency. The callback function handles the form submission and invokes the 
		 * `Switch_Currency_Handler` to process the currency change request.
		 *
		 * @action bigcommerce/form/action=Switch_Currency_Handler::ACTION
		 *
		 * @param array $submission The form submission data, including the selected currency.
		 * @param Switch_Currency_Handler $container The container holding the `SWITCH_CURRENCY` handler.
		 * 
		 * @return mixed The result of processing the currency switch request via `handle_request()`.
		 */
		add_action( 'bigcommerce/form/action=' . Switch_Currency_Handler::ACTION, $this->create_callback( 'switch_currency', function ( $submission ) use ( $container ) {
			return $container[ self::SWITCH_CURRENCY ]->handle_request( $submission );
		} ), 10, 1 );
	}

	private function errors( Container $container ) {
		$container[ self::ERRORS ] = function ( Container $container ) {
			return new Error_Handler();
		};

        /**
         * Triggered when an error occurs during a form submission. Allows developers to handle or log form submission errors.
         *
         * @param \WP_Error $error      The error object representing the validation or processing error. Contains error codes and messages.
         * @param array     $submission The sanitized form submission data (usually $_POST).
         * @param string    $redirect   The URL to redirect the user after processing the error. Defaults to the home URL.
         */
		add_action( 'bigcommerce/form/error', $this->create_callback( 'error', function ( \WP_Error $error, $submission, $redirect = '' ) use ( $container ) {
			$container[ self::ERRORS ]->form_error( $error, $submission, $redirect );
		} ), 10, 3 );

		/**
		 * Filters the error data for the form state.
		 *
		 * @filter bigcommerce/form/state/errors
		 *
		 * @param array $data Error data.
		 *
		 * @return array The processed error data.
		 */
		add_filter( 'bigcommerce/form/state/errors', $this->create_callback( 'error_data', function ( $data ) use ( $container ) {
			return $container[ self::ERRORS ]->get_errors( $data );
		} ), 10, 1 );
	}

	private function success( Container $container ) {
		$container[ self::SUCCESS ] = function ( Container $container ) {
			return new Success_Handler();
		};

		/**
		 * Handles form success and processes related actions.
		 *
		 * @param string $message The success message.
		 * @param array $submission The form submission data.
		 * @param string|null $url Optional redirect URL.
		 * @param array $data Additional data associated with the submission.
		 *
		 * @return void
		 */
		add_action( 'bigcommerce/form/success', $this->create_callback( 'success', function ( $message = '', $submission = [], $url = null, $data = [] ) use ( $container ) {
			$container[ self::SUCCESS ]->form_success( $message, $submission, $url, $data );
		} ), 10, 4 );
	}

	private function redirects( Container $container ) {
		$container[ self::REDIRECTS ] = function ( Container $container ) {
			return new Form_Redirect();
		};

		/**
		 * Handles the form redirect action.
		 *
		 * @param string $url The redirect URL.
		 *
		 * @return void
		 */
		add_action( 'bigcommerce/form/redirect', $this->create_callback( 'redirect', function ( $url ) use ( $container ) {
			$container[ self::REDIRECTS ]->redirect( $url );
		} ), 10, 1 );
	}

	private function messaging( Container $container ) {
		$container[ self::MESSAGING ] = function ( Container $container ) {
			return new Messages();
		};

		/**
		 * Filters the content to render messages above the main content.
		 *
		 * @param string $content The post content.
		 *
		 * @return string The modified content with rendered messages.
		 */
		add_filter( 'the_content', $this->create_callback( 'content_messages', function ( $content ) use ( $container ) {
			return $container[ self::MESSAGING ]->render_messages_above_content( $content );
		} ), 5, 1 );

		/**
		 * Filters and renders the messages in the form.
		 *
		 * @filter bigcommerce/forms/messages
		 *
		 * @param array $messages The form messages.
		 *
		 * @return array The processed messages to render.
		 */
		add_filter( 'bigcommerce/forms/messages', $this->create_callback( 'messages', function ( $messages ) use ( $container ) {
			return $container[ self::MESSAGING ]->render_messages( $messages );
		} ), 10, 1 );
	}
}
