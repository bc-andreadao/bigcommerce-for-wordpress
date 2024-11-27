<?php

namespace BigCommerce\Container;

use BigCommerce\Api\v3\Api\CatalogApi;
use BigCommerce\Logging\Error_Log;
use BigCommerce\Settings\Sections\Troubleshooting_Diagnostics;
use Pimple\Container;
use BigCommerce\Logging\Error_Log as Logger;

/**
 * Class Log
 *
 * This class is responsible for setting up logging functionality in the BigCommerce container.
 * It registers services for logging, defines constants for log paths, and handles log-related actions 
 * during the BigCommerce import process, such as logging errors and diagnostics.
 *
 * @package BigCommerce\Container
 */
class Log extends Provider {

    /**
     * Constant for the logger service.
     *
     * This constant defines the key used to retrieve the logger instance from the container.
     *
     * @var string
     */
	const LOGGER          = 'logger.log';

    /**
     * Constant for the log file path.
     *
     * This constant defines the key used to retrieve the log file path from the container.
     *
     * @var string
     */
	const LOG_PATH        = 'logger.log_path';

    /**
     * Constant for the log folder path.
     *
     * This constant defines the key used to retrieve the log folder path from the container.
     *
     * @var string
     */
	const LOG_FOLDER_PATH = 'logger.log_folder_path';

    /**
     * Registers logging-related services and actions in the container.
     *
     * This method sets up the necessary services for logging, such as the log file path, 
     * log folder path, and logger instance. It also registers various actions and filters 
     * for logging during the BigCommerce import process.
     *
     * @param Container $container The container instance used to register the services.
     */
	public function register( Container $container ) {
		$container[ self::LOG_PATH ] = function ( Container $container ) {
			$log_path = bigcommerce_get_env( 'BIGCOMMERCE_DEBUG_LOG' );
			if ( empty( $log_path ) ) {
				$log_path = trailingslashit( wp_upload_dir()[ 'basedir' ] ) . 'logs/bigcommerce/debug.log';
			}

			/**
			 * Filter the path to the debug logging file
			 *
			 * @param string $log_path The full file system path to the log file
			 */
			return apply_filters( 'bigcommerce/logger/path', $log_path );
		};

		$container[ self::LOG_FOLDER_PATH ] = function ( Container $container ) {
			$log_path = trailingslashit( wp_upload_dir()['basedir'] ) . 'logs/bigcommerce/';

			/**
			 * Filter the path to the debug logging file
			 *
			 * @param string $log_path The full file system path to the log file
			 */
			return apply_filters( 'bigcommerce/logger/custom_path', $log_path );
		};

		$container[ self::LOGGER ] = function ( Container $container ) {
			return new Logger( $container[ self::LOG_PATH ], $container[ self::LOG_FOLDER_PATH ] );
		};


		// Check if the import errors option is active or not, if true, loads the action
		if ( get_option( Troubleshooting_Diagnostics::LOG_ERRORS, true ) ) {
			/**
			 * Action to truncate the log when the BigCommerce import starts.
			 *
			 * This action is triggered at the start of the BigCommerce import process. It clears or truncates the log file to ensure that old logs do not interfere with the new import process.
			 *
			 * @return void
			 */
			add_action( 'bigcommerce/import/start', $this->create_callback( 'truncate_log', function () use ( $container ) {
				$container[ self::LOGGER ]->truncate_log();
			} ), 9, 0 );
			
			/**
			 * Action to log product import errors.
			 *
			 * This action is triggered when a product import encounters an error. It logs the error details including the product ID, catalog API, and the exception that caused the error.
			 *
			 * @param int $product_id The ID of the product being imported.
			 * @param CatalogApi $catalog_api The catalog API instance used to fetch product data.
			 * @param \Exception $exception The exception that was thrown during the import.
			 * @return void
			 */
			add_action( 'bigcommerce/import/product/error', $this->create_callback( 'log_product_import_error', function ( $product_id, CatalogApi $catalog_api, \Exception $exception ) use ( $container ) {
				$container[ self::LOGGER ]->log_product_import_error( $product_id, $catalog_api, $exception );
			} ), 10, 3 );

			/**
			 * Filter to add the log to the diagnostics output.
			 *
			 * This filter is used to add the debug log to the BigCommerce diagnostics, providing valuable information for troubleshooting.
			 *
			 * @param array $diagnostics The array containing diagnostic information.
			 * @return array The updated diagnostics array with the log added.
			 */
			add_filter( 'bigcommerce/diagnostics', $this->create_callback( 'output_log_to_diagnostics', function ( $diagnostics ) use ( $container ) {
				return $container[ self::LOGGER ]->add_log_to_diagnostics( $diagnostics );
			} ), 10, 1 );

			$log = $this->create_callback( 'log', function ( $level = Error_Log::INFO, $message = '', $context = [], $path = '' ) use ( $container ) {
				$container[ self::LOGGER ]->log( $level, $message, $context, $path );
			} );

			/**
			 * Action to log messages during the BigCommerce logging process.
			 *
			 * This action is triggered when a log entry needs to be created. It logs the message, context, level, and path to the log file.
			 *
			 * @param string $level The log level (e.g., INFO, ERROR).
			 * @param string $message The log message to be recorded.
			 * @param array $context Additional context for the log entry.
			 * @param string $path The path where the log is being written.
			 * @return void
			 */
			add_action( 'bigcommerce/log', $log, 10, 4 );

			/**
			 * Action to log messages during the BigCommerce import process.
			 *
			 * This action is triggered during the BigCommerce import process to log important messages. It captures the log level, message, context, and path for further troubleshooting.
			 *
			 * @param string $level The log level (e.g., INFO, ERROR).
			 * @param string $message The log message to be recorded.
			 * @param array $context Additional context for the log entry.
			 * @return void
			 */

			add_action( 'bigcommerce/import/log', $log, 10, 3 );
			/**
			 * Action to log import errors during the BigCommerce import process.
			 *
			 * This action is triggered when there is an error during the import process. It logs the error message and context for further analysis.
			 *
			 * @param string $message The error message to be logged.
			 * @param array $context Additional context for the error.
			 * @return void
			 */

			add_action( 'bigcommerce/import/error', $this->create_callback( 'log_import_error', function ( $message, $context = [] ) use ( $container ) {
				$container[ self::LOGGER ]->log( Error_Log::ERROR, $message, $context );
			} ), 10, 2 );
		}
	}
}
