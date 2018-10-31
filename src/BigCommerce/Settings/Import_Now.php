<?php


namespace BigCommerce\Settings;


use BigCommerce\Import\Runner\Cron_Runner;
use BigCommerce\Post_Types\Product\Product;
use BigCommerce\Settings\Screens\Settings_Screen;

class Import_Now {
	const ACTION = 'bigcommerce_import_now';

	/** @var Settings_Screen */
	private $settings_screen;

	/**
	 * Import_Now constructor.
	 *
	 * @param Settings_Screen $settings_screen
	 */
	public function __construct( Settings_Screen $settings_screen ) {
		$this->settings_screen = $settings_screen;
	}

	/**
	 * @param string $label    The label for the button.
	 * @param string $redirect The redirect destination after starting the import. Defaults to the settings page.
	 *
	 * @return void
	 * @action bigcommerce/settings/render/frequency
	 */
	public function render_button( $label = '', $redirect = '' ) {
		if ( ! $this->current_user_can_start_import() ) {
			return;
		}
		$label  = $label ?: __( 'Sync Products', 'bigcommerce' );
		$button = '<a href="%s" class="bc-admin-btn bc-admin-btn--outline">%s</a>';
		$button = sprintf( $button, esc_url( $this->get_import_url( $redirect ) ), $label );
		printf( '<div class="bc-settings-header__cta-btn" data-js="bc-product-sync-button">%s</div>', $button );
	}

	/**
	 * @param string $redirect
	 *
	 * @return string
	 */
	public function get_import_url( $redirect = '' ) {
		$url = admin_url( 'admin-post.php' );
		$url = add_query_arg( [
			'action' => self::ACTION,
		], $url );
		if ( ! empty( $redirect ) ) {
			$url = add_query_arg( [ 'redirect_to' => urlencode( $redirect ) ], $url );
		}
		$url = wp_nonce_url( $url, self::ACTION );

		return $url;
	}

	/**
	 * @return void
	 * @action admin_post_ . self::ACTION
	 */
	public function handle_request() {
		check_admin_referer( self::ACTION );

		if ( $this->current_user_can_start_import() ) {
			do_action( Cron_Runner::START_CRON );
		}

		if ( ! empty( $_REQUEST[ 'redirect_to' ] ) ) {
			wp_safe_redirect( esc_url_raw( $_REQUEST[ 'redirect_to' ] ), 303 );
		} elseif ( current_user_can( $this->settings_screen->get_capability() ) ) {
			wp_safe_redirect( esc_url_raw( $this->settings_screen->get_url() ), 303 );
		} else {
			$edit_products_url = add_query_arg( [ 'post_type' => Product::NAME ], admin_url( 'edit.php' ) );
			wp_safe_redirect( esc_url_raw( $edit_products_url ), 303 );
		}
		exit();
	}

	/**
	 * Print the import button into the notices section
	 * of the products admin list table.
	 *
	 * @return void
	 * @action admin_notices
	 */
	public function list_table_notice() {
		if ( ! $this->on_products_list_table() ) {
			return;
		}

		$this->render_button( '', add_query_arg( [ 'post_type' => Product::NAME ], admin_url( 'edit.php' ) ) );
		do_action( 'bigcommerce/settings/import/product_list_table_notice' );

	}

	/**
	 * @return bool Whether the current screen is the products list table
	 */
	private function on_products_list_table() {
		if ( ! is_admin() || ! function_exists( 'get_current_screen' ) ) {
			return false;
		}
		$screen = get_current_screen();
		if ( ! $screen || $screen->base !== 'edit' || $screen->post_type !== Product::NAME ) {
			return false;
		}

		return true;
	}

	private function current_user_can_start_import() {
		$post_type = get_post_type_object( Product::NAME );
		if ( $post_type && current_user_can( $post_type->cap->edit_posts ) ) {
			return true;
		}

		return false;
	}
}
