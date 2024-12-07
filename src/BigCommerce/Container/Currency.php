<?php

namespace BigCommerce\Container;

use BigCommerce\Currency\Currency as Currency_Manager;
use BigCommerce\Currency\Formatter_Factory;
use Pimple\Container;

/**
 * Currency container provider class.
 *
 * This class provides the necessary bindings for currency functionality, including
 * currency code, currency formatter, and related services. It handles the registration
 * of currency-related services and hooks for filtering currency values in BigCommerce.
 */
class Currency extends Provider {
    
    /**
     * Constant for the currency service identifier.
     *
     * @var string
     */
    const CURRENCY      = 'currency';

    /**
     * Constant for the currency formatter service identifier.
     *
     * @var string
     */
    const FORMATTER     = 'currency.formatter';

    /**
     * Constant for the currency formatter factory service identifier.
     *
     * @var string
     */
    const FACTORY       = 'currency.formatter.factory';

    /**
     * Constant for the currency code service identifier.
     *
     * @var string
     */
    const CURRENCY_CODE = 'currency.code';

    /**
     * Registers the services and hooks related to currency functionality.
     *
     * This method binds the currency manager, formatter, and formatter factory to the
     * container. It also sets up various filters for modifying currency values and currency
     * codes based on the configured currency for the store.
     *
     * @param Container $container The container instance to register services with.
     */
	public function register( Container $container ) {
		$container[ self::CURRENCY ] = function ( Container $container ) {
			return new Currency_Manager();
		};

		$container[ self::CURRENCY_CODE ] = function ( Container $container ) {
			return $container[ self::CURRENCY ]->get_currency_code();
		};

		$container[ self::FACTORY ] = function ( Container $container ) {
			return new Formatter_Factory();
		};

		$container[ self::FORMATTER ] = $container->factory( function ( Container $container ) {
			return $container[ self::FACTORY ]->get( $container[ self::CURRENCY_CODE ] );
		} );

		/**
		 * Filters the currency formatting for a given value.
		 *
		 * This filter allows modification of how a currency value is formatted. It utilizes
		 * the formatter to convert the value into the correct format based on the active currency.
		 *
		 * @param string $formatted The formatted currency value.
		 * @param float $value The raw currency value to be formatted.
		 * 
		 * @return string The formatted currency value.
		 */
		add_filter( 'bigcommerce/currency/format', $this->create_callback( 'format_currency', function ( $formatted, $value ) use ( $container ) {
			return $container[ self::FORMATTER ]->format( $value );
		} ), 10, 2 );

		/**
		 * Filters the currency code.
		 *
		 * This filter allows modification of the currency code being used. It returns
		 * the current currency code based on the configured currency.
		 *
		 * @return string The currency code.
		 */
		add_filter( 'bigcommerce/currency/code', $this->create_callback( 'filter_currency_code', function () use ( $container ) {
			return $container[ self::CURRENCY_CODE ];
		} ) );

		/**
		 * Filters the list of enabled currencies for the current channel.
		 *
		 * This filter returns a list of currencies that are enabled for the current channel,
		 * allowing for dynamic adjustment based on context.
		 *
		 * @return array The list of enabled currencies.
		 */
		add_filter( 'bigcommerce/currency/enabled', $this->create_callback( 'filter_enabled_currencies', function () use ( $container ) {
			return $container[ self::CURRENCY ]->get_channel_aware_currencies();
		} ) );
	}
}
