<?php

namespace BigCommerce\Container;

use BigCommerce\Amp\Amp_Admin_Notices;
use BigCommerce\Amp\Amp_Controller_Factory;
use BigCommerce\Amp\Amp_Template_Override;
use BigCommerce\Amp\Amp_Cart;
use BigCommerce\Amp\Classic;
use Pimple\Container;
use BigCommerce\Amp\Amp_Assets;
use BigCommerce\Amp\Overrides;
use BigCommerce\Customizer\Styles;
use BigCommerce\Amp\Amp_Cart_Menu_Item;

/**
 * This class integrates AMP (Accelerated Mobile Pages) functionality into the BigCommerce platform.
 * It registers necessary services and handles template overrides, assets, and customization for AMP compatibility.
 * The class also provides hooks and filters for customizing the AMP-specific behavior of templates, assets, and menus.
 * 
 * The AMP class manages the AMP checkout redirect, template override initialization, and integration with 
 * BigCommerce's storefront rendering system to ensure AMP-compatible pages.
 * 
 * @package BigCommerce
 * @subpackage AMP
 */
class Amp extends Provider {
	/**
	 * The template override identifier for AMP templates.
	 * This constant is used to access the service responsible for overriding AMP templates within the application.
	 * @var string
	 */
	const TEMPLATE_OVERRIDE  = 'amp.template_override';

	/**
	 * The template directory identifier for AMP templates.
	 * This constant is used to access the service that specifies the AMP template directory.
	 * @var string
	 */
	const TEMPLATE_DIRECTORY = 'amp.template_directory';

	/**
	 * The factory override identifier for AMP controller factories.
	 * This constant is used to access the service that provides the custom controller factory for AMP controllers.
	 * @var string
	 */
	const FACTORY_OVERRIDE   = 'amp.controller_factory_override';

	/**
	 * The assets identifier for AMP assets.
	 * This constant is used to access the service responsible for managing AMP-specific assets.
	 * @var string
	 */
	const ASSETS             = 'amp.assets';

	/**
	 * The customizer styles identifier for AMP.
	 * This constant is used to access the service that handles custom styles for AMP customization.
	 * @var string
	 */
	const CUSTOMIZER_STYLES  = 'amp.customize_styles';

	/**
	 * The overrides identifier for AMP-related overrides.
	 * This constant is used to access the service responsible for applying AMP-specific overrides to content and templates.
	 * @var string
	 */
	const OVERRIDES          = 'amp.overrides';

	/**
	 * The classic AMP mode identifier.
	 * This constant is used to access the service that enables or handles the classic AMP mode for templates.
	 * @var string
	 */
	const CLASSIC            = 'amp.classic';

	/**
	 * The AMP cart identifier.
	 * This constant is used to access the service that handles AMP cart functionality, including interactions with the cart.
	 * @var string
	 */
	const AMP_CART           = 'amp.amp_cart';

	/**
	 * The menu item identifier for AMP cart menu item.
	 * This constant is used to access the service that adds AMP-specific functionality to the cart menu item.
	 * @var string
	 */
	const MENU_ITEM          = 'amp.cart_menu_item';

	/**
	 * The AMP admin notices identifier.
	 * This constant is used to access the service that handles AMP-specific admin notices within the application.
	 * @var string
	 */
	const AMP_ADMIN_NOTICES  = 'amp.notices';

	/**
	 * Registers AMP classes and callbacks.
	 *
	 * @param Container $container Plugin container.
	 */
	public function register( Container $container ) {

		$this->admin_notices( $container );

		$container[ self::TEMPLATE_DIRECTORY ] = function ( Container $container ) {
			/**
			 * Filter the name of the AMP template directory
			 *
			 * @param string $directory The base name of the template directory
			 */
			return apply_filters( 'bigcommerce/amp/templates/directory', 'amp' );
		};

		$container[ self::TEMPLATE_OVERRIDE ] = function ( Container $container ) {
			return new Amp_Template_Override( $container[ self::TEMPLATE_DIRECTORY ] );
		};

		$container[ self::FACTORY_OVERRIDE ] = function ( Container $container ) {
			return new Amp_Controller_Factory();
		};

		$container[ self::ASSETS ] = function ( Container $container ) {
			$customizer_template_file = dirname( $container['plugin_file'] ) . '/assets/customizer.template.css';
			return new Amp_Assets(
				trailingslashit( plugin_dir_path( $container['plugin_file'] ) ) . 'assets/',
				trailingslashit( plugin_dir_url( $container['plugin_file'] ) ) . 'assets/',
				$customizer_template_file
			);
		};

		$container[ self::CUSTOMIZER_STYLES ] = function ( Container $container ) {
			$path = dirname( $container['plugin_file'] ) . '/assets/customizer.template.css';

			return new Styles( $path );
		};

		$container[ self::OVERRIDES ] = function ( Container $container ) {
			return new Overrides();
		};

		$container[ self::CLASSIC ] = function ( Container $container ) {
			return new Classic();
		};

		$container[ self::AMP_CART ] = function( Container $container ) {
			return new Amp_Cart( $container[ Proxy::PROXY_BASE ] );
		};

		/**
 		 * This action is triggered when the AMP checkout redirect endpoint is accessed.
 		 * The callback handles the redirection request using the AMP Cart instance.
		 *
		 * @param array $args Arguments passed to the action.
		 */
		add_action(
			'bigcommerce/action_endpoint/' . Amp_Cart::CHECKOUT_REDIRECT_ACTION,
			$this->create_callback(
				'amp_checkout_handle_request',
				function ( $args ) use ( $container ) {
					$container[ self::AMP_CART ]->handle_redirect_request();
				}
			)
		);

		$container[ self::MENU_ITEM ] = function ( Container $container ) {
			return new Amp_Cart_Menu_Item();
		};

		/**
		 * Initializes AMP template overrides based on the current request context.
		 *
		 * This action determines if AMP template overrides should be enabled, typically
		 * for rendering plugin templates in AMP-compatible mode. When enabled, it applies
		 * various filters to modify template paths, data, and behaviors specific to AMP.
		 *
		 * @param WP $wp The WordPress environment object passed to the 'wp' action. Provides access to query variables and the request context.
		 */
		add_action( 'wp', $this->create_callback( 'init_template_override', function ( $wp ) use ( $container ) {

			/**
			 * Toggles whether AMP template overrides will be used to render plugin templates
			 *
			 * @param bool $enable Whether AMP template overrides are enabled
			 */
			if ( apply_filters( 'bigcommerce/amp/templates/enable_override', function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) ) {
				$template_override = $this->create_callback( 'template_override', function ( $path, $relative_path ) use ( $container ) {
					return $container[ self::TEMPLATE_OVERRIDE ]->override_template_path( $path, $relative_path );
				} );

				$controller_factory_override = $this->create_callback( 'controller_factory_override', function ( $factory, $classname ) use ( $container ) {
					return $container[ self::FACTORY_OVERRIDE ];
				} );

				$template_img_src_override = $this->create_callback( 'amp_template_data', function ( $data, $template, $options ) use ( $container ) {
					return $container[ self::OVERRIDES ]->add_amp_img_src( $data, $template );
				} );

				$template_button_override = $this->create_callback( 'amp_purchase_button', function ( $button, $post_id ) use ( $container ) {
					return $container[ self::OVERRIDES ]->amp_enable_button( $button, $post_id );
				} );

				// Remove extra attributes such as data-js from AMP to avoid validation errors.
				$amp_extra_attributes_removal = $this->create_callback( 'amp_remove_extra_attributes', function ( $attributes, $template ) use ( $container ) {
					$keys = array_filter( array_keys( $attributes ), function ( $string ) {
						return strpos( $string, 'data-' ) === 0;
					} );
					foreach ( $keys as $key ) {
						unset( $attributes[ $key ] );
					}

					return $attributes;
				} );

				$amp_filter_fallback_image = $this->create_callback( 'amp_filter_fallback_image', function () use ( $container ) {
					return $container[ self::OVERRIDES ]->filter_fallback_image();
				} );

				$amp_filter_stylesheet = $this->create_callback( 'amp_filter_stylesheet', function ( $stylesheet ) use ( $container ) {
					return $container[ self::ASSETS ]->filter_stylesheet( $stylesheet );
				} );

				$amp_kses_allowed_html = $this->create_callback( 'amp_kses_allowed_html', function ( $allowed_tags, $context ) use ( $container ) {
					return $container[ self::OVERRIDES ]->amp_kses_allowed_html( $allowed_tags, $context );
				} );

				/**
				 * Filters the template path for rendering BigCommerce templates. 
				 * 
				 * This allows AMP-specific overrides to adjust the template path dynamically.
				 *
				 * @param string $path          The original template path.
				 * @param string $relative_path The relative path to the requested template.
				 *
				 * @return string Modified template path for AMP compatibility.
				 */
				add_filter( 'bigcommerce/template/path', $template_override, 5, 2 );

				/**
				 * Filters the controller factory used to load BigCommerce templates.
				 * This allows AMP to replace the default controller factory with an AMP-specific implementation.
				 *
				 * @param object $factory   The current controller factory.
				 * @param string $classname The class name for the requested controller.
				 *
				 * @return object Modified controller factory for AMP templates.
				 */
				add_filter( 'bigcommerce/template/controller_factory', $controller_factory_override, 10, 2 );
				
				/**
				 * Filters the template data used for rendering BigCommerce templates.
				 *
				 * This adds AMP-specific adjustments, such as ensuring valid AMP-compatible `<img>` elements.
				 *
				 * @param array  $data     The data array for the template.
				 * @param string $template The template being rendered.
				 * @param array  $options  Additional options for the template.
				 *
				 * @return array Modified template data for AMP compatibility.
				 */
				add_filter( 'bigcommerce/template/data', $template_img_src_override, 10, 3 );

				/**
				 * Filters the purchase button markup.
				 *
				 * This allows AMP to modify the purchase button for AMP-specific functionality.
				 *
				 * @param string $button  The original purchase button markup.
				 * @param int    $post_id The ID of the product post.
				 *
				 * @return string Modified purchase button markup for AMP compatibility.
				 */
				add_filter( 'bigcommerce/button/purchase', $template_button_override, 10, 2 );

				/**
				 * Filters the attributes of the template wrapper element.
				 *
				 * This removes AMP-incompatible attributes to ensure validation.
				 *
				 * @param array  $attributes    The attributes for the wrapper element.
				 * @param string $template_name The name of the template being rendered.
				 *
				 * @return array Modified attributes for AMP compatibility.
				 */
				add_filter( 'bigcommerce/template/wrapper/attributes', $amp_extra_attributes_removal, 10, 2 );

				/**
				 * Filters the fallback image used in BigCommerce templates.
				 *
				 * This allows AMP to provide a specific fallback image for AMP templates.
				 *
				 * @hook bigcommerce/template/image/fallback
				 *
				 * @return string The URL of the fallback image for AMP templates.
				 */
				add_filter( 'bigcommerce/template/image/fallback', $amp_filter_fallback_image, 10, 0 );

				/**
				 * Filters the allowed HTML tags and attributes for the current context.
				 *
				 * This enables AMP to add or remove specific tags and attributes for validation.
				 *
				 * @param array  $allowed_tags The currently allowed tags and attributes.
				 * @param string $context      The context for which tags are allowed.
				 *
				 * @return array Modified allowed tags and attributes for AMP validation.
				 */
				add_filter( 'wp_kses_allowed_html', $amp_kses_allowed_html, 10, 2 );

				// Only applies to classic AMP mode.
				if ( $container[ self::TEMPLATE_OVERRIDE ]->is_classic() ) {
					$classic_template_override = $this->create_callback( 'classic_template_override', function ( $file, $template_type, $post ) use ( $container ) {
						return $container[ self::TEMPLATE_OVERRIDE ]->override_classic_amp_template_path( $file, $template_type, $post );
					} );

					$header_template_override = $this->create_callback( 'amp_filter_header_bar_template', function ( $file, $type ) use ( $container ) {
						return $container[ self::TEMPLATE_OVERRIDE ]->override_classic_header_bar_template( $file, $type, $container );
					} );

					$rendered_menu_filter = $this->create_callback( 'amp_provide_rendered_menu', function( $data ) use ( $container ) {
						return $container [ self::TEMPLATE_OVERRIDE ]->provide_header_nav_menu( $data );
					} );

					/**
					 * Filters the AMP template file for rendering a post.
					 *
					 * This allows overriding the default AMP template file with a classic template.
					 *
					 * @param string $file     The path to the current template file.
					 * @param string $type     The type of template being loaded (e.g., `single`, `archive`).
					 * @param string $post_type The post type being rendered.
					 *
					 * @return string Modified template file path for AMP compatibility.
					 */
					add_filter( 'amp_post_template_file', $classic_template_override, 10, 3 );

					/**
					 * Filters the AMP template file for rendering the header.
					 *
					 * This allows overriding the default header template with a custom AMP-specific version.
					 *
					 * @param string $file The path to the current header template file.
					 * @param string $type The type of template being loaded (e.g., `header`).
					 *
					 * @return string Modified header template file path for AMP compatibility.
					 */
					add_filter( 'amp_post_template_file', $header_template_override, 10, 2 );

					/**
					 * Filters the data used by AMP post templates.
					 *
					 * This enables customization of the rendered data, such as modifying the menu structure for AMP.
					 *
					 * @param array $data The data array passed to the AMP template.
					 *
					 * @return array Modified data for AMP templates.
					 */
					add_filter( 'amp_post_template_data', $rendered_menu_filter );
				} else {

					/**
					 * Filters the stylesheet URL for BigCommerce assets.
					 *
					 * This allows modifying or replacing the default stylesheet used by BigCommerce, such as providing AMP-compatible styles.
					 *
					 * @param string $stylesheet The URL of the BigCommerce stylesheet.
					 *
					 * @return string Modified stylesheet URL for BigCommerce assets.
					 */
					add_filter( 'bigcommerce/assets/stylesheet', $amp_filter_stylesheet, 10, 1 );
				}

				/**
				 * Filters a single nav menu item during setup.
				 *
				 * This adds custom classes to the nav menu item if it corresponds to the cart page, using data from the BigCommerce container.
				 *
				 * @param WP_Post $menu_item The menu item being processed.
				 *
				 * @return WP_Post The modified menu item with additional classes, if applicable.
				 */
				add_filter( 'wp_setup_nav_menu_item', $this->create_callback( 'menu_item', function ( $menu_item ) use ( $container ) {
					return $container[ self::MENU_ITEM ]->add_classes_to_cart_page( $menu_item, $container[ Proxy::PROXY_BASE ] );
				} ), 11, 1 );
			}
		} ), 10, 1 );

		/**
		 * Action to modify AMP redirect headers before form submission.
		 *
		 * @param string $url The URL being redirected to.
		 */
		add_action( 'bigcommerce/form/before_redirect', $this->create_callback( 'amp_redirect_headers', function ( $url ) use ( $container ) {
			return $container[ self::OVERRIDES ]->add_amp_redirect_headers( $url );
		} ), 10, 1 );

		/** Action to output custom AMP CSS for a post template. */
		add_action( 'amp_post_template_css', $this->create_callback( 'amp_post_template_css', function () use ( $container ) {
			$container[ self::ASSETS ]->styles();
			$container[ self::CUSTOMIZER_STYLES ]->print_css();
		} ), 10, 0 );

		/**
		 * Filters the data passed to AMP post templates.
		 *
		 * @param array $data The data passed to the post template.
		 * @return array Modified template data.
		 */
		add_filter( 'amp_post_template_data', $this->create_callback( 'amp_post_template_data', function ( $data ) use ( $container ) {
			$data['amp_component_scripts'] = array_merge(
				$data['amp_component_scripts'],
				array_fill_keys( $container[ self::ASSETS ]->scripts(), true )
			);
			return $data;
		} ), 11, 1 );

		/** Action to output AMP-specific scripts in the `<head>` section. */
		add_action( 'amp_post_template_head', $this->create_callback( 'amp_post_template_head', function () use ( $container ) {
			$container[ self::ASSETS ]->scripts();
		} ), 11, 0 );

		/** Action to register AMP-specific menus after theme setup. */
		add_action( 'after_setup_theme', $this->create_callback( 'amp_register_menu', function () use ( $container ) {
			if ( $container[ self::TEMPLATE_OVERRIDE ]->is_classic() ) {
				$container[ self::CLASSIC ]->register_amp_menu();
			}
		} ) );
	}

	/**
	 * Sets up AMP admin notices class and callbacks.
	 *
	 * @param Container $container Plugin container instance.
	 */
	private function admin_notices( Container $container ) {
		$container[ self::AMP_ADMIN_NOTICES ] = function( Container $container ) {
			return new Amp_Admin_Notices(
				$container[ Settings::SETTINGS_SCREEN ]->get_hook_suffix(),
				defined( 'AMP__VERSION' ) && class_exists( 'AMP_Options_Manager' )
			);
		};

		/** Action to display AMP admin notices in the WordPress admin. */
		add_action(
			'admin_notices',
			function() use ( $container ) {
				$container[ self::AMP_ADMIN_NOTICES ]->render_amp_admin_notices();
			}
		);
	}
}