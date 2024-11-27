<?php

namespace BigCommerce\CLI;

use BigCommerce\Api\v3\Api\CatalogApi;
use BigCommerce\Import\Runner\CLI_Runner;
use BigCommerce\Import\Runner\Lock;
use BigCommerce\Import\Import_Type;

/**
 * Handles the import process for products from BigCommerce.
 *
 * This class defines a WP-CLI command to import products from a connected BigCommerce store. It provides functionality for full or partial imports, the option to force a refresh of products, and hooks for tracking the progress of the import. Additionally, it manages logging for the import process and allows for managing product data through various stages of the import.
 *
 * @package BigCommerce
 * @subpackage CLI
 */
class Import_Products extends Command {
    /**
     * Declare command name
     * @return string The command name for importing products.
     */
	protected function command() {
		return 'import products';
	}

    /**
     * Add a command description
     *
     * @return string|void A description of the import products command.
     */
	protected function description() {
		return __( 'Imports products from the connected BigCommerce store', 'bigcommerce' );
	}

    /**
     * Declare command arguments
     *
     * @return array[] Command arguments for the import products command.
     */
	protected function arguments() {
		return [
			[
				'type'        => 'flag',
				'name'        => 'force',
				'optional'    => true,
				'description' => __( 'Force all products to refresh, even if they have up-to-date data. Defaults to false.', 'bigcommerce' ),
				'default'     => false,
			],
			[
				'type'        => 'flag',
				'name'        => 'partial',
				'optional'    => true,
				'description' => __( 'Fetch only products that were modified since last import.', 'bigcommerce' ),
				'default'     => false,
			],
		];
	}

    /**
     * Execute the import process.
     *
     * @param array $args Arguments passed to the command.
     * @param array $assoc_args Associated arguments, such as flags.
     * @return void
     */
	public function run( $args, $assoc_args ) {

		if ( ! empty( $assoc_args[ 'force' ] ) ) {
			/**
			 * Filter to determine if products need to be refreshed.
			 *
			 * This filter is applied when the 'force' flag is passed in the command arguments, forcing a refresh of all products.
			 *
			 * @param bool $needs_refresh Whether products need to be refreshed.
			 * @return bool Always returns true to force a refresh.
			 */
			add_filter( 'bigcommerce/import/strategy/needs_refresh', '__return_true' );

			/**
			 * Filter to determine if terms need to be refreshed.
			 *
			 * This filter is applied when the 'force' flag is passed in the command arguments, forcing a refresh of terms.
			 *
			 * @param bool $needs_refresh Whether terms need to be refreshed.
			 * @return bool Always returns true to force a refresh.
			 */
			add_filter( 'bigcommerce/import/strategy/term/needs_refresh', '__return_true' );
		}

		if ( ! empty( $assoc_args[ 'partial' ] ) ) {
			update_option( Import_Type::IMPORT_TYPE, Import_Type::IMPORT_TYPE_PARTIAL );
		}

		$this->hook_messages();

		$runner = new CLI_Runner();

		switch ( $runner->run() ) {
			case CLI_Runner::RESPONSE_SUCCESS:
				\WP_CLI::success( __( 'Import complete!', 'bigcommerce' ) );
				break;
			case CLI_Runner::RESPONSE_LOCKED:
				\WP_CLI::warning( sprintf( __( 'Import already in progress. Cannot proceed while the lock is in place. Delete it with: wp option delete %s', 'bigcommerce' ), Lock::OPTION ) );
				break;
			case CLI_Runner::RESPONSE_ERROR:
				\WP_CLI::warning( __( 'Unable to complete import.', 'bigcommerce' ) );
				break;
		}
	}

    /**
     * Add messages to each step of the import process
     *
     * @throws \WP_CLI\ExitException
     */
	private function hook_messages() {
		/**
		 * Hook before the import starts.
		 *
		 * @param string $status Current status of the import.
		 */
		add_action( 'bigcommerce/import/before', function ( $status ) {
			\WP_CLI::debug( sprintf( __( 'Starting import phase. Status: %s', 'bigcommerce' ), $status ) );
		}, 10, 1 );

		/**
		 * Hook after the import ends.
		 *
		 * @param string $status Final status after the import.
		 */
		add_action( 'bigcommerce/import/after', function ( $status ) {
			\WP_CLI::debug( sprintf( __( 'Finished import phase. Status: %s', 'bigcommerce' ), $status ) );
		}, 10, 1 );

		/**
		 * Hook when the import status is set.
		 *
		 * @param string $status The status being set.
		 */
		add_action( 'bigcommerce/import/set_status', function ( $status ) {
			\WP_CLI::debug( sprintf( __( 'Status set to: %s', 'bigcommerce' ), $status ) );
		}, 10, 1 );

		/**
		 * Hook when the import starts.
		 */
		add_action( 'bigcommerce/import/start', function () {
			\WP_CLI::log( __( 'Starting import.', 'bigcommerce' ) );
		}, 10, 0 );

		/**
		 * Hook after fetching product IDs.
		 *
		 * @param int $count Number of products added to the queue.
		 */
		add_action( 'bigcommerce/import/fetched_ids', function ( $count ) {
			\WP_CLI::debug( sprintf( __( 'Added %d products to the queue', 'bigcommerce' ), $count ) );
		}, 10, 1 );

		/**
		 * Hook after marking products for deletion.
		 *
		 * @param int $count Number of products marked for deletion.
		 */
		add_action( 'bigcommerce/import/marked_deleted', function ( $count ) {
			\WP_CLI::debug( sprintf( __( 'Marked %d products to be deleted', 'bigcommerce' ), $count ) );
		}, 10, 1 );

		/**
		 * Hook when a product post is created.
		 *
		 * @param int $post_id The created post ID.
		 * @param array $data Product data.
		 */
		add_action( 'bigcommerce/import/product/created', function ( $post_id, $data ) {
			\WP_CLI::log( sprintf( __( 'Created post %d for product %d', 'bigcommerce' ), $post_id, $data[ 'id' ] ) );
		}, 10, 2 );

		/**
		 * Hook when a product post is updated.
		 *
		 * @param int $post_id The updated post ID.
		 * @param array $data Product data.
		 */
		add_action( 'bigcommerce/import/product/updated', function ( $post_id, $data ) {
			\WP_CLI::log( sprintf( __( 'Updated post %d for product %d', 'bigcommerce' ), $post_id, $data[ 'id' ] ) );
		}, 10, 2 );

		/**
		 * Hook when a product post is skipped due to being up to date.
		 *
		 * @param int $post_id The skipped post ID.
		 * @param array $data Product data.
		 */
		add_action( 'bigcommerce/import/product/skipped', function ( $post_id, $data ) {
			\WP_CLI::log( sprintf( __( 'Skipped post %d for product %d. Already up to date.', 'bigcommerce' ), $post_id, $data[ 'id' ] ) );
		}, 10, 2 );

		/**
		 * Hook after fetching currency code.
		 *
		 * @param string $currency_code The fetched currency code.
		 */
		add_action( 'bigcommerce/import/fetched_currency', function ( $currency_code ) {
			\WP_CLI::log( sprintf( __( 'Set currency code to %s', 'bigcommerce' ), $currency_code ) );
		}, 10, 1 );

		/**
		 * Hook when store settings cannot be fetched.
		 */
		add_action( 'bigcommerce/import/could_not_fetch_store_settings', function () {
			\WP_CLI::log( __( 'Unable to fetch store settings', 'bigcommerce' ) );
		}, 10, 0 );

		/**
		 * Hook when there is an import error.
		 *
		 * @param string $message Error message.
		 * @param array $data Additional error data.
		 */
		add_action( 'bigcommerce/import/error', function ( $message = '', $data = [] ) {
			if ( $data ) {
				\WP_CLI::debug( print_r( $data, true ) );
			}
			\WP_CLI::error( sprintf( __( 'Import failed with message: %s', 'bigcommerce' ), $message ) ?: __( 'Import failed.', 'bigcommerce' ), false );
		}, 10, 2 );

		/**
		 * Hook when a product import fails.
		 *
		 * @param int $product_id The product ID.
		 * @param CatalogApi $catalog_api The catalog API object.
		 * @param \Exception $exception The exception that occurred.
		 */
		add_action( 'bigcommerce/import/product/error', function ( $product_id, CatalogApi $catalog_api, \Exception $exception ) {
			\WP_CLI::warning( sprintf( __( 'Failed to import product with ID %d. Error: %s', 'bigcommerce' ), $product_id, $exception->getMessage() ) );
		}, 10, 3 );

		/**
		 * Hook when a term import is skipped.
		 *
		 * @param array $data Term data.
		 */
		add_action( 'bigcommerce/import/term/skipped', function ( $data ) {
			\WP_CLI::log( sprintf( __( 'Skipped term "%s". Already up to date.', 'bigcommerce' ), $data[ 'name' ] ) );
		}, 10, 2 );
	}

}
