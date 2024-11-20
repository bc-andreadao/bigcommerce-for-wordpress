<?php


namespace BigCommerce\Container;


use BigCommerce\Gift_Certificates\Sub_Nav;
use Pimple\Container;

class Gift_Certificates extends Provider {
	const SUB_NAV = 'gift_certificates.sub_nav';

	public function register( Container $container ) {
		$container[ self::SUB_NAV ] = function ( Container $container ) {
			return new Sub_Nav();
		};

		/**
		 * Adds the gift certificates sub-navigation above the content.
		 *
		 * This callback function is hooked into the `the_content` filter to insert the gift
		 * certificates sub-navigation at the beginning of the content.
		 *
		 * @param string $content The post content.
		 *
		 * @return string Modified content with the gift certificates sub-navigation added above.
		 */
		add_filter( 'the_content', $this->create_callback( 'gift_certificates_subnav', function ( $content ) use ( $container ) {
			return $container[ self::SUB_NAV ]->add_subnav_above_content( $content );
		} ), 10, 1 );
	}

}