<?php declare(strict_types=1);

namespace BigCommerce\Container;

use BigCommerce\Import\Image_Importer;
use Pimple\Container;

/**
 * This class provides functionality for registering image-related services and hooks related to 
 * image import and CDN management within the BigCommerce container. It includes hooks that 
 * determine if image import is allowed and modify image HTML to load images from a CDN if applicable.
 *
 * @package BigCommerce\Container
 */
class Image extends Provider {

    /**
     * Registers image import and CDN-related filters.
     *
     * This method registers two filters:
     * - A filter that checks if image import is allowed.
     * - A filter that modifies image HTML to load images from CDN if a valid BigCommerce ID is found.
     *
     * @param Container $container The Pimple container instance used for managing dependencies.
     */
	public function register( Container $container ) {

		/**
		 * Checks if image import is allowed.
		 *
		 * This callback function is hooked into the `bigcommerce/import/product/import_images` filter 
		 * to determine whether image import is permitted.
		 *
		 * @return bool Returns `true` if image import is allowed, otherwise `false`.
		 */
		add_filter( 'bigcommerce/import/product/import_images', $this->create_callback( 'images_import_full_disabled', function ( ) {
			return Image_Importer::is_image_import_allowed();
		} ), 10, 0 );

		/**
		 * Modifies the image HTML to load images from CDN if applicable.
		 *
		 * This callback function is hooked into the `wp_get_attachment_image` filter to check 
		 * if the image should be loaded from a CDN. If a valid BigCommerce ID and CDN URL are found, 
		 * the image source is replaced with the CDN URL.
		 *
		 * @param string $html The HTML of the image tag.
		 * @param int    $thumb_id The attachment ID of the image.
		 *
		 * @return string Modified image HTML with the CDN URL if applicable.
		 */
		add_filter( 'wp_get_attachment_image', $this->create_callback( 'handle_attachment_via_cdn', function ( $html, $thumb_id ) {
			$bigcommerce_id = get_post_meta( $thumb_id, 'bigcommerce_id', true );

			if ( empty( $bigcommerce_id ) ) {
				return $html;
			}

			if ( ! Image_Importer::should_load_from_cdn() ) {
				return $html;
			}

			$src = get_post_meta( $thumb_id, Image_Importer::URL_THUMB, true );

			if ( empty( $src ) ) {
				return $html;
			}

			$html = preg_replace( '/src="[^"]*"/', 'src="' . $src . '"', $html );
			$html = preg_replace( '/srcset="[^"]*"/', '', $html );

			return $html;
		} ), 10, 2 );
	}

}
