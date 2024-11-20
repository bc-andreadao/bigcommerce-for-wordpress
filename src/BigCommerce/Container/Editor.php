<?php

namespace BigCommerce\Container;

use BigCommerce\Editor\Gutenberg;
use Pimple\Container;
use BigCommerce\Editor\Add_Products_Button;
use BigCommerce\Editor\Editor_Dialog_Template;
use BigCommerce\Customizer\Styles;
use BigCommerce\Settings\Sections\Cart as Cart_Settings;
use BigCommerce\Settings\Sections\Gift_Certificates as Gift_Certificate_Settings;
use BigCommerce\Settings\Sections\Wishlists as Wishlist_Settings;

/**
 * Class Editor
 *
 * Load behavior relevant to the admin post editor
 */
class Editor extends Provider {
	const SHORTCODE_BUTTON  = 'admin.shortcode_button';
	const UI_DIALOG         = 'admin.ui_dialog';
	const GUTENBERG_BLOCKS  = 'gutenberg.blocks';
	const GUTENBERG_MIGRATE = 'gutenberg.migrate';
	const STYLES            = 'gutenberg.styles';

	public function register( Container $container ) {
		$this->render_button( $container );
		$this->render_dialog_template( $container );
		$this->gutenberg( $container );
	}

	private function render_button( Container $container ) {
		$container[ self::SHORTCODE_BUTTON ] = function () {
			return new Add_Products_Button();
		};

		/**
		 * Renders the "Add Products" button in the media buttons section of the editor.
		 *
		 * This action adds a custom button to the media buttons section in the WordPress admin
		 * editor, which triggers the rendering of the products button when clicked.
		 *
		 * @param string $editor_id The ID of the editor instance.
		 */
		add_action( 'media_buttons', $this->create_callback( 'render_products_button', function ( $editor_id ) use ( $container ) {
			echo $container[ self::SHORTCODE_BUTTON ]->render_button();
		} ), 10, 1 );
	}

	private function render_dialog_template( Container $container ) {
		$container[ self::UI_DIALOG ] = function ( Container $container ) {
			$path = dirname( $container[ 'plugin_file' ] ) . '/templates/admin';

			return new Editor_Dialog_Template( $path );
		};

		$render_callback = $this->create_callback( 'render_editor_dialog_template', function () use ( $container ) {
			echo $container[ self::UI_DIALOG ]->render_dialog_once();
		} );

		/**
		 * Enqueues the dialog template assets for the block editor.
		 *
		 * This action ensures that the dialog template is loaded when the block editor is used,
		 * either by directly rendering it or by delaying the output until the appropriate time.
		 */
		add_action( 'enqueue_block_editor_assets', $this->create_callback( 'block_editor_enqueue_dialog_template', function() use ( $container, $render_callback ) {
			$current_screen = get_current_screen();
			
			if ( is_a( $current_screen, 'WP_Screen' ) && method_exists( $current_screen, 'is_block_editor' ) && ! $current_screen->is_block_editor() ) {
				return;
			}

			if ( did_action( 'admin_enqueue_scripts' ) ) { // if the Gutenberg plugin is enabled, the action will already be called
				$render_callback();
			} else {
				/** 
				 * Enqueues the dialog template assets for the block editor.
				 *
				 * This action ensures that the dialog template is loaded when the block editor is used,
				 * either by directly rendering it or by delaying the output until the appropriate time.
				 * If Gutenberg is already enabled, the callback is triggered immediately, otherwise,
				 * it is delayed until the `admin_enqueue_scripts` action is called.
				 */
				add_action( 'admin_enqueue_scripts', $render_callback, 10, 0 );
			}
		}), 10, 0 );

		/**
		 * Prints the editor dialog template in the footer when the block editor is not enabled.
		 *
		 * This action ensures that the dialog template is included in the footer when not using
		 * the block editor, so that it can still be rendered for the classic editor.
		 */
		add_action( 'admin_print_footer_scripts', $render_callback, 10, 0 ); // if the block editor is disabled, print scripts in the footer

		/**
		 * Filters the JavaScript configuration for the admin editor dialog.
		 *
		 * This filter allows modification of the JavaScript configuration for the dialog template
		 * based on the provided settings, including necessary data for handling the products and
		 * shortcode configurations.
		 *
		 * @param array $config The current JavaScript configuration for the editor dialog.
		 * 
		 * @return array The modified JavaScript configuration.
		 */
		add_filter( 'bigcommerce/admin/js_config', $this->create_callback( 'editor_dialog_js_config', function ( $config ) use ( $container ) {
			return $container[ self::UI_DIALOG ]->js_config( $config, $container[ Rest::PRODUCTS ], $container[ Rest::SHORTCODE ] );
		} ), 10, 1 );
	}

	private function gutenberg( Container $container ) {
		$container[ self::GUTENBERG_BLOCKS ] = function ( Container $container ) {
			$blocks = [
				new Gutenberg\Blocks\Products( $container[ Assets::PATH ], $container[ Rest::SHORTCODE ] ),
				new Gutenberg\Blocks\Account_Profile( $container[ Assets::PATH ] ),
				new Gutenberg\Blocks\Address_List( $container[ Assets::PATH ] ),
				new Gutenberg\Blocks\Order_History( $container[ Assets::PATH ] ),
				new Gutenberg\Blocks\Login_Form( $container[ Assets::PATH ] ),
				new Gutenberg\Blocks\Product_Reviews( $container[ Assets::PATH ] ),
				new Gutenberg\Blocks\Product_Components( $container[ Assets::PATH ], $container[ Rest::COMPONENT_SHORTCODE ] ),
			];
			if ( ( (bool) get_option( Cart_Settings::OPTION_ENABLE_CART, true ) ) === true ) {
				$blocks[] = new Gutenberg\Blocks\Cart( $container[ Assets::PATH ] );
			}
			if ( ( (bool) get_option( Cart_Settings::OPTION_EMBEDDED_CHECKOUT, true ) ) === true ) {
				$blocks[] = new Gutenberg\Blocks\Checkout( $container[ Assets::PATH ] );
			}
			if ( ( (bool) get_option( Gift_Certificate_Settings::OPTION_ENABLE, true ) ) === true ) {
				$blocks[] = new Gutenberg\Blocks\Gift_Certificate_Form( $container[ Assets::PATH ] );
				$blocks[] = new Gutenberg\Blocks\Gift_Certificate_Balance( $container[ Assets::PATH ] );
			}
			if ( get_option( 'users_can_register' ) ) {
				$blocks[] = new Gutenberg\Blocks\Registration_Form( $container[ Assets::PATH ] );
			}
			if ( get_option( Wishlist_Settings::ENABLED ) ) {
				$blocks[] = new Gutenberg\Blocks\Wishlist( $container[ Assets::PATH ] );
			}
			return $blocks;
		};

		/**
		 * Registers the Gutenberg blocks for the block editor.
		 *
		 * This action registers all the custom blocks related to BigCommerce that will be available
		 * in the Gutenberg editor. It checks if the `register_block_type` function is available
		 * before registering the blocks.
		 */
		add_action( 'init', $this->create_callback( 'register_gutenberg_blocks', function () use ( $container ) {
			if ( ! function_exists( 'register_block_type' ) ) {
				return;
			}
			foreach ( $container[ self::GUTENBERG_BLOCKS ] as $block ) {
				/** @var Gutenberg\Blocks\Gutenberg_Block $block */
				$block->register();
			}
		} ), 10, 0 );

		/**
		 * Filters the JavaScript configuration for the BigCommerce Gutenberg blocks.
		 *
		 * This filter modifies the JavaScript configuration to include the necessary settings
		 * for all registered Gutenberg blocks in the BigCommerce system, based on the available
		 * block types.
		 *
		 * @param array $data The current JavaScript configuration for Gutenberg blocks.
		 * 
		 * @return array The modified JavaScript configuration with updated block settings.
		 */
		add_filter( 'bigcommerce/gutenberg/js_config', $this->create_callback( 'gutenberg_js_config', function ( $data ) use ( $container ) {
			if ( ! function_exists( 'register_block_type' ) ) {
				$data[ 'blocks' ] = new \stdClass();

				return $data;
			}
			foreach ( $container[ self::GUTENBERG_BLOCKS ] as $block ) {
				/** @var Gutenberg\Blocks\Gutenberg_Block $block */
				$data[ 'blocks' ][ $block->name() ] = $block->js_config();
			}

			return $data;
		} ), 10, 1 );

		$container[ self::STYLES ] = function ( Container $container ) {
			$path = dirname( $container[ 'plugin_file' ] ) . '/assets/customizer.template.css';

			return new Styles( $path );
		};

		/**
		 * Enqueues customizer styles for the admin area.
		 *
		 * This action ensures that customizer styles are applied to the admin area, affecting
		 * how elements are displayed and styled within the backend of the WordPress site.
		 */
		add_action( 'admin_head', $this->create_callback( 'customizer_styles', function () use ( $container ) {
			$container[ self::STYLES ]->print_styles();
		} ), 10, 0 );

		$container[ self::GUTENBERG_MIGRATE ] = function ( Container $container ) {

			return new Gutenberg\Migrate_Blocks();
		};

		/**
		 * Checks if the Gutenberg editor should be used for the current post.
		 *
		 * This filter determines whether the Gutenberg editor or classic editor should be
		 * used, based on the provided post and the state of the Gutenberg migration process.
		 *
		 * @param bool $passthrough Whether to pass through the original value.
		 * @param WP_Post $post The current post object.
		 * 
		 * @return bool The modified value for whether the Gutenberg editor should be used.
		 */
		add_filter( 'replace_editor', $this->create_callback( 'check_for_gutenberg', function ( $passthrough, $post ) use ( $container ) {
			return $container[ self::GUTENBERG_MIGRATE ]->check_if_gutenberg_editor( $passthrough, $post );
		} ), 9, 2 );

		/**
		 * Checks if the classic editor should be used for the current post.
		 *
		 * This filter determines whether the classic editor should be used, based on the
		 * provided post and the state of the Gutenberg migration process.
		 *
		 * @param bool $passthrough Whether to pass through the original value.
		 * @param WP_Post $post The current post object.
		 * 
		 * @return bool The modified value for whether the classic editor should be used.
		 */
		add_filter( 'replace_editor', $this->create_callback( 'check_for_classic', function ( $passthrough, $post ) use ( $container ) {
			return $container[ self::GUTENBERG_MIGRATE ]->check_if_classic_editor( $passthrough, $post );
		} ), 11, 2 );
	}
}
