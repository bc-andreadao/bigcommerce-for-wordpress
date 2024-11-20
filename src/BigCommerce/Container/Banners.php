<?php

namespace BigCommerce\Container;

use BigCommerce\Banners\Banners as Banners_Manager;
use Pimple\Container;

class Banners extends Provider {
    const BANNERS = 'banners';

    /**
     * Registers the banners service and related configuration within the container.
     *
     * The `banners` service is instantiated with the banners API factory,
     * allowing the application to manage banners. A filter is also added
     * to integrate banner-specific configurations into JavaScript settings.
     *
     * @param Container $container The dependency injection container used to manage services.
     * @return void
     */
    public function register( Container $container ) {
        $container[ self::BANNERS ] = function ( Container $container ) {
            return new Banners_Manager( $container[ Api::FACTORY ]->banners() );
        };

        /**
         * Filters JavaScript configuration data to include banners settings.
         *
         * Modifies the existing JavaScript configuration array to include
         * any settings or data required by the banners manager.
         *
         * @param array $config The existing JavaScript configuration.
         * @return array The modified JavaScript configuration with banners settings.
         */
        add_filter( 'bigcommerce/js_config', $this->create_callback( 'banners_js_config', function ( $config ) use ( $container ) {
            return $container[ self::BANNERS ]->js_config( $config );
        } ), 10, 1 );
    }
}
