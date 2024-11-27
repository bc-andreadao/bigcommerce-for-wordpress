<?php

namespace BigCommerce\Container;

use BigCommerce\Customizer\Sections\Product_Category as Customizer;
use BigCommerce\Customizer\Sections\Product_Single;
use BigCommerce\Post_Types\Product;
use BigCommerce\Post_Types\Queue_Task;
use BigCommerce\Post_Types\Sync_Log;
use BigCommerce\Taxonomies\Channel\Channel;
use Pimple\Container;

class Post_Types extends Provider {
    /**
     * @var string Post type for product.
     */
    const PRODUCT = 'post_type.product';
    /**
     * @var string Configuration for product post type.
     */
    const PRODUCT_CONFIG = 'post_type.product.config';
    /**
     * @var string Query handling for product post type.
     */
    const PRODUCT_QUERY = 'post_type.product.query';
    /**
     * @var string Admin UI for product post type.
     */
    const PRODUCT_ADMIN = 'post_type.product.admin';
    /**
     * @var string Unsupported product handler.
     */
    const PRODUCT_UNSUPPORTED = 'post_type.product.unsupported';
    /**
     * @var string Product deletion handler.
     */
    const PRODUCT_DELETION = 'post_type.product.deletion';
    /**
     * @var string Store links handler for products.
     */
    const STORE_LINKS = 'post_type.product.store_links';
    /**
     * @var string Channel indicator handler for products.
     */
    const CHANNEL_INDICATOR = 'post_type.product.channel_indicator';
    /**
     * @var string Channel synchronization handler for products.
     */
    const CHANNEL_SYNC = 'post_type.product.channel_sync';
    /**
     * @var string Admin list handler for products.
     */
    const PRODUCT_ADMIN_LIST = 'post_type.product.admin_list';
    /**
     * @var string Unique slug generator for products.
     */
    const PRODUCT_UNIQUE_SLUG = 'post_type.product.unique_slug';
    /**
     * @var string Listing reset handler for products.
     */
    const LISTING_RESET = 'post_type.product.listing_reset';
    /**
     * @var string Single product resynchronization handler.
     */
    const PRODUCT_RESYNC = 'post_type.product.resync_single';
    /**
     * @var string SEO handler for products.
     */
    const PRODUCT_SEO = 'post_type.product.seo';

    /**
     * @var string Cart indicator handler.
     */
    const CART_INDICATOR = 'post_type.page.cart_indicator';
    /**
     * @var string Cart creation handler.
     */
    const CART_CREATOR = 'post_type.page.cart_creator';

    /**
     * @var string Queue task handler.
     */
    const QUEUE = 'post_type.queue_task';
    /**
     * @var string Queue task configuration.
     */
    const QUEUE_CONFIG = 'post_type.queue_task.config';

    /**
     * @var string Synchronization log handler.
     */
    const SYNC_LOG = 'post_type.sync_log';
    /**
     * @var string Configuration for synchronization logs.
     */
    const SYNC_LOG_CONFIG = 'post_type.sync_log.config';

    /**
     * @var string GraphQL products configuration.
     */
    const WPGRAPHQL_PRODUCTS = 'bigcommerce.wpgrapql_products';
    /**
     * @var string GraphQL configuration.
     */
    const WPGRAPHQL_CONFIG = 'bigcommerce.wpgrapql_config';

    /**
     * Registers all post types and hooks them into the container.
     *
     * @param Container $container The Pimple container.
     * @return void
     */
    public function register(Container $container) {
        $this->product($container);
        $this->queue($container);
        $this->sync_log($container);

        add_action('init', $this->create_callback('register', function () use ($container) {
            $container[self::PRODUCT_CONFIG]->register();
            $container[self::QUEUE_CONFIG]->register();
            $container[self::SYNC_LOG_CONFIG]->register();
            $container[self::WPGRAPHQL_PRODUCTS]->register();
        }), 1, 0);
    }

    /**
     * Configures product-related dependencies in the container.
     *
     * @param Container $container The Pimple container.
     * @return void
     */
    private function product(Container $container) {
        $container[self::PRODUCT_ADMIN_LIST] = function (Container $container) {
            return new Product\Admin_List();
        };

        $container[self::PRODUCT_CONFIG] = function (Container $container) {
            return new Product\Config(Product\Product::NAME);
        };

        $container[self::PRODUCT_QUERY] = function (Container $container) {
            return new Product\Query($container[Api::FACTORY]->catalog(), $container[Taxonomies::PRODUCT_CATEGORY_QUERY_FILTER]);
        };

        $container[self::PRODUCT_ADMIN] = function (Container $container) {
            return new Product\Admin_UI();
        };

        $container[self::WPGRAPHQL_CONFIG] = function (Container $container) {
            return new Product\WPGraph_Config();
        };

        $container[self::WPGRAPHQL_PRODUCTS] = function (Container $container) {
            return new Product\WPGraph_Product($container[self::WPGRAPHQL_CONFIG]);
        };

        $container[self::PRODUCT_UNSUPPORTED] = function (Container $container) {
            return new Product\Unsupported_Products();
        };

        $container[self::PRODUCT_DELETION] = function (Container $container) {
            return new Product\Deletion();
        };

		/**
		 * Action triggered before WordPress queries are retrieved to filter product queries.
		 *
		 * This action hooks into the `pre_get_posts` event and modifies the query by filtering
		 * it using the `filter_queries` method of the `PRODUCT_QUERY` container instance.
		 *
		 * @param \WP_Query $query The WordPress query object to be modified.
		 *
		 * @return void
		 */
		add_action( 'pre_get_posts', $this->create_callback( 'product_pre_get_posts', function ( \WP_Query $query ) use ( $container ) {
			$container[ self::PRODUCT_QUERY ]->filter_queries( $query );
		} ), 10, 1 );

		/**
		 * Filter triggered to modify the request variables before the query is processed.
		 *
		 * This filter applies the `request` filter to modify the request variables by filtering
		 * empty query vars using the `filter_empty_query_vars` method of the `PRODUCT_QUERY` container instance.
		 *
		 * @param array $vars The request variables to be filtered.
		 *
		 * @return array The filtered request variables.
		 */
		add_filter( 'request', $this->create_callback( 'empty_request_vars', function ( $vars ) use ( $container ) {
			return $container[ self::PRODUCT_QUERY ]->filter_empty_query_vars( $vars );
		} ), 10, 1 );

		/**
		 * Filter triggered to add custom query variables.
		 *
		 * This filter applies the `query_vars` filter to add additional query variables using
		 * the `add_query_vars` method of the `PRODUCT_QUERY` container instance.
		 *
		 * @param array $vars The existing query variables.
		 *
		 * @return array The modified query variables.
		 */
		add_filter( 'query_vars', $this->create_callback( 'product_query_vars', function ( $vars ) use ( $container ) {
			return $container[ self::PRODUCT_QUERY ]->add_query_vars( $vars );
		} ), 10, 1 );

		/**
		 * Action triggered before the 404 handler to filter non-visible product categories.
		 *
		 * This action hooks into the `pre_handle_404` event to handle non-visible product categories
		 * by checking if the current category or archive is visible based on the setting in the customizer.
		 * If the category is non-visible, it returns a 404 response.
		 *
		 * @param bool $preempt Whether the 404 handling should be preempted.
		 *
		 * @return mixed An empty string if 404 handling is triggered, otherwise the original `$preempt` value.
		 */
		add_action( 'pre_handle_404', $this->create_callback( 'handle_non_visible_category', function ( $preempt ) use ( $container ) {
			if ( ! ( is_category() || is_archive() ) || is_admin() ) {
				return $preempt;
			}

			if ( get_option( Customizer::CATEGORIES_IS_VISIBLE, 'no' ) !== 'yes' ) {
				return $preempt;
			}

			$result = $container[ Taxonomies::PRODUCT_CATEGORY_QUERY_FILTER ]->get_non_visible_terms();

			if ( empty( $result) || is_wp_error($result) ) {
				return $preempt;
			}

			if ( ! in_array( get_queried_object_id(), $result ) ) {
				return $preempt;
			}

			global $wp_query;
			$wp_query->set_404();
			status_header( 404 );
			nocache_headers();

			return '';
		} ), 10, 1 );

		/**
		 * Only load the post admin hooks when on the post admin page to avoid interfering where we're not welcome
		 */
		$load_post_admin_hooks = $this->create_callback( 'load_post_php', function () use ( $container ) {
			static $loaded = false; // gutenberg calls rest_api_init even when not on rest API requests, causing this to load twice
			if ( ! $loaded ) {
				/**
				 * Filter triggered before inserting post data to prevent changes to the post slug.
				 *
				 * This filter applies the `wp_insert_post_data` filter to prevent changes to the product's
				 * slug during post insert or update using the `prevent_slug_changes` method of the `PRODUCT_ADMIN` container instance.
				 *
				 * @param array $data The post data to be inserted or updated.
				 * @param array $submitted The submitted data from the post form.
				 *
				 * @return array The modified post data, potentially with the slug unchanged.
				 */
				add_filter( 'wp_insert_post_data', $this->create_callback( 'prevent_slug_changes', function ( $data, $submitted ) use ( $container ) {
					return $container[ self::PRODUCT_ADMIN ]->prevent_slug_changes( $data, $submitted );
				} ), 10, 2 );

				/**
				 * Filter triggered to modify the sample permalink HTML for a post.
				 *
				 * This filter applies the `get_sample_permalink_html` filter to override the HTML for the
				 * sample permalink using the `override_sample_permalink_html` method of the `PRODUCT_ADMIN` container instance.
				 *
				 * @param string $html The HTML for the sample permalink.
				 * @param int $post_id The ID of the post.
				 * @param string $title The title of the post.
				 * @param string $slug The slug of the post.
				 * @param \WP_Post $post The post object.
				 *
				 * @return string The modified HTML for the sample permalink.
				 */
				add_filter( 'get_sample_permalink_html', $this->create_callback( 'override_sample_permalink_html', function ( $html, $post_id, $title, $slug, $post ) use ( $container ) {
					return $container[ self::PRODUCT_ADMIN ]->override_sample_permalink_html( $html, $post_id, $title, $slug, $post );
				} ), 10, 5 );

				/**
				 * Action triggered to remove the featured image meta box for product posts.
				 *
				 * This action hooks into the `add_meta_boxes_{post_type}` event and removes the featured
				 * image meta box from the product post type using the `remove_featured_image_meta_box` method
				 * of the `PRODUCT_ADMIN` container instance.
				 *
				 * @param \WP_Post $post The post object for which the meta box is being added.
				 *
				 * @return void
				 */
				add_action( 'add_meta_boxes_' . Product\Product::NAME, $this->create_callback( 'remove_featured_image_meta_box', function ( \WP_Post $post ) use ( $container ) {
					$container[ self::PRODUCT_ADMIN ]->remove_featured_image_meta_box( $post );
				} ), 10, 1 );

				$loaded = true;
			}
		} );
		/**
		 * Action triggered on the 'load-post.php' hook to initialize post admin functionalities.
		 *
		 * This action triggers the `$load_post_admin_hooks` callback when loading the `post.php` page in the WordPress admin
		 * to initialize various post-related admin functionalities.
		 *
		 * @return void
		 */
		add_action( 'load-post.php', $load_post_admin_hooks, 10, 0 );

		/**
		 * Action triggered on the 'wp_ajax_inline-save' hook to handle inline post saving functionality.
		 *
		 * This action triggers the `$load_post_admin_hooks` callback during an AJAX request to save a post inline.
		 *
		 * @return void
		 */
		add_action( 'wp_ajax_inline-save', $load_post_admin_hooks, 0, 0 );

		/**
		 * Action triggered on the 'load-edit.php' hook to initialize the post editing page admin functionalities.
		 *
		 * This action triggers the `$load_post_admin_hooks` callback when loading the `edit.php` page in the WordPress admin
		 * to initialize various editing-related functionalities.
		 *
		 * @return void
		 */
		add_action( 'load-edit.php', $load_post_admin_hooks, 10, 0 );

		/**
		 * Action triggered on the 'rest_api_init' hook to initialize REST API routes for post handling.
		 *
		 * This action triggers the `$load_post_admin_hooks` callback during the REST API initialization process.
		 *
		 * @return void
		 */
		add_action( 'rest_api_init', $load_post_admin_hooks, 10, 0 );

		/**
		 * Filter triggered to handle product out-of-stock behavior and redirect if necessary.
		 *
		 * This filter applies the `pre_handle_404` filter and checks if the queried product is out of stock. If the product
		 * has a defined redirect URL, the user is redirected. Otherwise, the default 404 behavior is triggered.
		 *
		 * @param string $preempt The current preempted status of the 404 response.
		 *
		 * @return string|void The modified preempt status, or no return to allow further processing.
		 */
		add_filter( 'pre_handle_404', $this->create_callback( 'handle_product_out_of_stock_behaviour', function ( $preempt ) use ( $container ) {
			global $wp_query;
			if ( empty($wp_query->query['post_type']) || $wp_query->query['post_type'] !== Product\Product::NAME || is_admin() ) {
				return $preempt;
			}

			$product  = new Product\Product( get_queried_object_id() );
			$redirect = $product->get_redirect_product_link();

			if ( ! empty( $redirect ) ) {
				wp_safe_redirect( $redirect );
				return;
			}

			return $preempt;
		} ), 10, 1 );

		/**
		 * Filter triggered to modify the product list table views for import status.
		 *
		 * This filter adds or modifies views related to product import status in the admin list table for products.
		 *
		 * @param array $views The current set of views for the product list table.
		 *
		 * @return array The modified list of views for the product table.
		 */
		add_filter( 'views_edit-' . Product\Product::NAME, $this->create_callback( 'list_table_import_status', function ( $views ) use ( $container ) {
			return $container[ self::PRODUCT_ADMIN ]->list_table_import_status( $views );
		} ), 10, 1 );

		/**
		 * Filter triggered to modify the product list table views for import tooltip.
		 *
		 * This filter adds a tooltip to the product import status in the product list table in the admin interface.
		 *
		 * @param array $views The current set of views for the product list table.
		 *
		 * @return array The modified list of views with the import tooltip added.
		 */
		add_filter( 'views_edit-' . Product\Product::NAME, $this->create_callback( 'list_import_tooltip', function ( $views ) use ( $container ) {
			return $container[ self::PRODUCT_ADMIN ]->list_import_tooltip( $views );
		} ), 10, 1 );

		/**
		 * Filter triggered to modify the product list table views for the manage link.
		 *
		 * This filter modifies the views in the product list table by adding or modifying the manage link.
		 *
		 * @param array $views The current set of views for the product list table.
		 *
		 * @return array The modified list of views with the manage link updated.
		 */
		add_filter( 'views_edit-' . Product\Product::NAME, $this->create_callback( 'list_table_manage_link', function ( $views ) use ( $container ) {
			return $container[ self::PRODUCT_ADMIN ]->list_table_manage_link( $views );
		} ), 2, 1 );

		/**
		 * Action triggered to show admin notices in the product list table.
		 *
		 * This action is used to display admin notices in the product list table using the `list_table_admin_notices` method.
		 *
		 * @return void
		 */
		add_action( 'admin_notices', $this->create_callback( 'list_table_admin_notices', function () use ( $container ) {
			$container[ self::PRODUCT_ADMIN ]->list_table_admin_notices();
		} ), 10, 0 );

		/**
		 * Filter triggered to modify the meta capabilities for product post types.
		 *
		 * This filter applies the `map_meta_cap` filter to disallow publication capabilities for the product post type.
		 *
		 * @param array $caps The current capabilities for the user.
		 * @param string $cap The capability being checked.
		 * @param int $user_id The ID of the user being checked.
		 * @param array $args Additional arguments.
		 *
		 * @return array The modified set of capabilities.
		 */
		add_filter( 'map_meta_cap', $this->create_callback( 'unsupported_meta_caps', function ( $caps, $cap, $user_id, $args ) use ( $container ) {
			return $container[ self::PRODUCT_UNSUPPORTED ]->disallow_publication( $caps, $cap, $user_id, $args );
		} ), 10, 4 );

		/**
		 * Filter triggered to modify the post states for unsupported products.
		 *
		 * This filter is used to show an unsupported status for certain products in the WordPress admin.
		 *
		 * @param array $post_states The current post states.
		 * @param \WP_Post $post The post object.
		 *
		 * @return array The modified post states, potentially including an unsupported status.
		 */
		add_filter( 'display_post_states', $this->create_callback( 'unsupported_post_state', function ( $post_states, $post ) use ( $container ) {
			return $container[ self::PRODUCT_UNSUPPORTED ]->show_unsupported_status( $post_states, $post );
		} ), 10, 4 );

		/**
		 * Filter triggered to prevent the publication of certain product posts.
		 *
		 * This filter prevents the publication of certain products by modifying the post data using the `prevent_publication` method.
		 *
		 * @param array $data The post data.
		 * @param array $postarr The post array.
		 *
		 * @return array The modified post data with publication prevented.
		 */
		add_filter( 'wp_insert_post_data', $this->create_callback( 'prevent_publication', function ( $data, $postarr ) use ( $container ) {
			return $container[ self::PRODUCT_UNSUPPORTED ]->prevent_publication( $data, $postarr );
		} ), 10, 2 );

		/**
		 * Action triggered before deleting a product to clean up associated data.
		 *
		 * This action is triggered before a product is deleted, allowing for the removal of any associated product data
		 * using the `delete_product_data` method.
		 *
		 * @param int $post_id The ID of the post being deleted.
		 *
		 * @return void
		 */
		add_action( 'before_delete_post', $this->create_callback( 'delete_product', function ( $post_id ) use ( $container ) {
			$container[ self::PRODUCT_DELETION ]->delete_product_data( $post_id );
		} ), 10, 1 );

		/**
		 * Action triggered before the BigCommerce import process begins to disable updates.
		 *
		 * This action disables updates or deletions of product listings in BigCommerce during the import process.
		 * Do not push updates back upstream when running an import.
		 *
		 * @return void
		 */
		add_action( 'bigcommerce/import/before', function () {
			add_filter( 'bigcommerce/channel/listing/should_update', '__return_false', 10, 0 );
			add_filter( 'bigcommerce/channel/listing/should_delete', '__return_false', 10, 0 );
		}, 10, 0 );

		/**
		 * Action triggered after the BigCommerce import process to re-enable updates.
		 *
		 * This action re-enables the updates and deletions of product listings in BigCommerce after the import process.
		 *
		 * @return void
		 */
		add_action( 'bigcommerce/import/after', function () {
			remove_filter( 'bigcommerce/channel/listing/should_update', '__return_false', 10 );
			remove_filter( 'bigcommerce/channel/listing/should_delete', '__return_false', 10 );
		}, 10, 0 );

		/**
		 * Filter triggered to modify the columns in the BigCommerce product list table.
		 *
		 * This filter is used to add additional columns, such as the BigCommerce product ID, to the product list table in the admin.
		 *
		 * @param array $columns The current list of columns.
		 *
		 * @return array The modified list of columns with the BigCommerce product ID column added.
		 */
		add_filter( 'manage_bigcommerce_product_posts_columns', $this->create_callback( 'add_bigcommerce_product_id_column', function ( $columns ) use ( $container ) {
			return $container[ self::PRODUCT_ADMIN_LIST ]->add_product_list_columns( $columns );
		} ), 5, 1 );

		/**
		 * Adds BigCommerce product ID values to custom columns in the admin product list.
		 *
		 * @param array $columns The existing columns in the admin product list.
		 * @param int   $post_id The post ID.
		 * 
		 * @return void
		 */
		add_action( 'manage_bigcommerce_product_posts_custom_column', $this->create_callback( 'add_bigcommerce_product_id_values', function ( $columns, $post_id ) use ( $container ) {
			$container[ self::PRODUCT_ADMIN_LIST ]->get_bigcommerce_product_id_value( $columns, $post_id );
		} ), 5, 2 );

		/**
		 * Adds BigCommerce product thumbnail image to custom columns in the admin product list.
		 *
		 * @param array $columns The existing columns in the admin product list.
		 * @param int   $post_id The post ID.
		 * 
		 * @return void
		 */
		add_action( 'manage_bigcommerce_product_posts_custom_column', $this->create_callback( 'add_bigcommerce_product_thumbnail_image', function ( $columns, $post_id ) use ( $container ) {
			$container[ self::PRODUCT_ADMIN_LIST ]->get_bigcommerce_product_thumbnail_value( $columns, $post_id );
		} ), 5, 2 );


		$this->product_store_links( $container );
		$this->product_listing_reset( $container );
		$this->product_resync( $container );
		$this->product_channel_indicator( $container );
		$this->channel_sync( $container );
		$this->product_slugs( $container );
		$this->product_seo( $container );
	}

		/**
		 * Queues the configuration for the Queue_Task.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function queue( Container $container ) {
			$container[ self::QUEUE_CONFIG ] = function ( Container $container ) {
				return new Queue_Task\Config( Queue_Task\Queue_Task::NAME );
			};
		}

		/**
		 * Sets up the synchronization logging.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function sync_log( Container $container ) {
			$container[ self::SYNC_LOG_CONFIG ] = function ( Container $container ) {
				return new Sync_Log\Config( Sync_Log\Sync_Log::NAME );
			};

			$container[ self::SYNC_LOG ] = function ( Container $container ) {
				return new Sync_Log\Sync_Log;
			};

			/**
			 * Creates a sync entry when an import starts.
			 *
			 * @action bigcommerce/import/start
			 * 
			 * @param string $error Error message (if any).
			 *
			 * @return void
			 */
			add_action( 'bigcommerce/import/start', $this->create_callback( 'sync_log_create_sync', function ( $error ) use ( $container ) {
				$container[ self::SYNC_LOG ]->create_sync();
			} ) );

			/**
			 * Logs an error during the import process.
			 *
			 * @action bigcommerce/import/error
			 * 
			 * @param string $error Error message encountered during the import process.
			 *
			 * @return void
			 */
			add_action( 'bigcommerce/import/error', $this->create_callback( 'sync_log_log_error', function ( $error ) use ( $container ) {
				$container[ self::SYNC_LOG ]->log_error( $error );
			} ) );

			/**
			 * Completes the sync when the logs are rotated.
			 *
			 * @action bigcommerce/import/logs/rotate
			 * 
			 * @param string $log The log data.
			 *
			 * @return void
			 */
			add_action( 'bigcommerce/import/logs/rotate', $this->create_callback( 'sync_log_complete_sync', function ( $log ) use ( $container ) {
				$container[ self::SYNC_LOG ]->complete_sync( $log );
			} ) );

			/**
			 * Adds diagnostic data related to the sync log.
			 *
			 * @filter bigcommerce/diagnostics
			 * 
			 * @param array $data Diagnostic data to be included in the output.
			 *
			 * @return array The modified diagnostic data.
			 */
			add_filter( 'bigcommerce/diagnostics', $this->create_callback( 'sync_log_diagnostics', function ( $data ) use ( $container ) {
				return $container[ self::SYNC_LOG ]->diagnostic_data( $data );
			} ), 10, 1 );
		}

		/**
		 * Adds product store links to various admin actions.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_store_links( Container $container ) {
			$container[ self::STORE_LINKS ] = function ( Container $container ) {
				return new Product\Store_Links( $container[ Api::FACTORY ] );
			};

			/**
			 * Adds a row action for the product post actions in the admin.
			 *
			 * @filter post_row_actions
			 * 
			 * @param array  $actions The current actions for the post.
			 * @param WP_Post $post The post object being displayed.
			 *
			 * @return array The modified list of actions.
			 */
			add_filter( 'post_row_actions', $this->create_callback( 'post_row_link', function ( $actions, $post ) use ( $container ) {
				return $container[ self::STORE_LINKS ]->add_row_action( $actions, $post );
			} ), 10, 2 );

			/**
			 * Adds a link to the submit box on the product post edit screen.
			 *
			 * @filter post_submitbox_misc_actions
			 * 
			 * @param WP_Post $post The post object being edited.
			 *
			 * @return void
			 */
			add_filter( 'post_submitbox_misc_actions', $this->create_callback( 'submitbox_store_link', function ( $post ) use ( $container ) {
				$container[ self::STORE_LINKS ]->add_submitbox_link( $post );
			} ), 10, 1 );

			/**
			 * Adds a store link to the Gutenberg block editor configuration.
			 *
			 * @filter bigcommerce/gutenberg/js_config
			 * 
			 * @param array $data The existing Gutenberg block editor configuration data.
			 *
			 * @return array The modified configuration data.
			 */
			add_filter( 'bigcommerce/gutenberg/js_config', $this->create_callback( 'gutenberg_store_link', function ( $data ) use ( $container ) {
				return $container[ self::STORE_LINKS ]->add_link_to_gutenberg_config( $data );
			} ), 10, 1 );

			/**
			 * Modifies the admin bar links for editing products.
			 *
			 * @action admin_bar_menu
			 * 
			 * @param WP_Admin_Bar $wp_admin_bar The admin bar instance.
			 *
			 * @return void
			 */
			add_action( 'admin_bar_menu', $this->create_callback( 'admin_bar_edit_link', function ( $wp_admin_bar ) use ( $container ) {
				$container[ self::STORE_LINKS ]->modify_edit_product_links_admin_bar( $wp_admin_bar );
			} ), 81, 1 );
		}

		/**
		 * Resets product listings based on specific actions.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_listing_reset( Container $container ) {
			$container[ self::LISTING_RESET ] = function ( Container $container ) {
				return new Product\Reset_Listing();
			};

			/**
			 * Adds a reset action to the post row actions for product listings.
			 *
			 * @filter post_row_actions
			 * 
			 * @param array  $actions The current actions for the post.
			 * @param WP_Post $post The post object being displayed.
			 *
			 * @return array The modified list of actions.
			 */
			add_filter( 'post_row_actions', $this->create_callback( 'post_row_reset', function ( $actions, $post ) use ( $container ) {
				return $container[ self::LISTING_RESET ]->add_row_action( $actions, $post );
			} ), 10, 2 );

			/**
			 * Handles the reset listing request via an admin action.
			 *
			 * @action admin_post_{action}
			 * 
			 * @return void
			 */
			add_action( 'admin_post_' . Product\Reset_Listing::ACTION, $this->create_callback( 'handle_reset_listing', function () use ( $container ) {
				$container[ self::LISTING_RESET ]->handle_request();
			} ), 10, 0 );
		}

		/**
		 * Resyncs a single product based on user action.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_resync( Container $container ) {
			$container[ self::PRODUCT_RESYNC ] = function ( Container $container ) {
				return new Product\Single_Product_Sync();
			};

			/**
			 * Adds a resync action to post row actions.
			 *
			 * @param array $actions The list of actions for the post.
			 * @param WP_Post $post The post object.
			 * 
			 * @return array Modified actions list.
			 */
			add_filter( 'post_row_actions', $this->create_callback( 'post_row_resync', function ( $actions, $post ) use ( $container ) {
				return $container[ self::PRODUCT_RESYNC ]->add_row_action( $actions, $post );
			} ), 10, 2 );

			/**
			 * Handles product resync on admin post action.
			 *
			 * @return void
			 */
			add_action( 'admin_post_' . Product\Single_Product_Sync::ACTION, $this->create_callback( 'handle_resync_product', function () use ( $container ) {
				$container[ self::PRODUCT_RESYNC ]->handle_request();
			} ), 10, 0 );
		}

		/**
		 * Adds a channel indicator for products when enabled.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_channel_indicator( Container $container ) {
			$container[ self::CHANNEL_INDICATOR ] = function ( Container $container ) {
				return new Product\Channel_Indicator();
			};

			/**
			 * Adds a channel indicator message in the post submitbox.
			 *
			 * @param WP_Post $post The post object.
			 * 
			 * @return void
			 */
			add_action( 'post_submitbox_misc_actions', $this->create_callback( 'submitbox_channel_indicator', function ( $post ) use ( $container ) {
				if ( Channel::multichannel_enabled() ) {
					$container[ self::CHANNEL_INDICATOR ]->add_submitbox_message( $post );
				}
			} ), 10, 1 );

			/**
			 * Adds a channel indicator to the Gutenberg JS config.
			 *
			 * @param array $data The Gutenberg JS config data.
			 * 
			 * @return array Modified JS config data.
			 */
			add_filter( 'bigcommerce/gutenberg/js_config', $this->create_callback( 'gutenberg_channel_indicator', function ( $data ) use ( $container ) {
				if ( Channel::multichannel_enabled() ) {
					return $container[ self::CHANNEL_INDICATOR ]->add_message_to_gutenberg_config( $data );
				}

				return $data;
			} ), 10, 1 );
		}

		/**
		 * Synchronizes product data with external channels.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function channel_sync( Container $container ) {
			$container[ self::CHANNEL_SYNC ] = function ( Container $container ) {
				return new Product\Channel_Sync( $container[ Api::FACTORY ]->channels() );
			};

			/**
			 * Syncs post data to an external channel when the post is saved.
			 *
			 * @param int     $post_id The post ID.
			 * @param WP_Post $post    The post object.
			 * 
			 * @return void
			 */
			add_action( 'save_post', $this->create_callback( 'sync_to_channel', function ( $post_id, $post ) use ( $container ) {
				$container[ self::CHANNEL_SYNC ]->post_updated( $post_id, $post );
			} ), 10, 2 );

			/**
			 * Deletes post data from an external channel when the post is deleted.
			 *
			 * @param int $post_id The post ID.
			 * 
			 * @return void
			 */
			add_action( 'before_delete_post', $this->create_callback( 'delete_from_channel', function ( $post_id ) use ( $container ) {
				$container[ self::CHANNEL_SYNC ]->post_deleted( $post_id );
			} ), 5, 1 );
		}

		/**
		 * Adds unique slugs for products based on the channel context.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_slugs( Container $container ) {
			$container[ self::PRODUCT_UNIQUE_SLUG ] = function ( Container $container ) {
				return new Product\Unique_Slug_Filter();
			};

			/**
			 * Filters the unique post slug per channel.
			 *
			 * @param string  $slug          The current post slug.
			 * @param int     $post_id       The post ID.
			 * @param string  $post_status   The post status.
			 * @param string  $post_type     The post type.
			 * @param int     $post_parent   The parent post ID.
			 * @param string  $original_slug The original slug.
			 * 
			 * @return string The filtered unique slug.
			 */
			add_filter( 'wp_unique_post_slug', $this->create_callback( 'unique_slug_per_channel', function ( $slug, $post_id, $post_status, $post_type, $post_parent, $original_slug ) use ( $container ) {
				if ( Channel::multichannel_enabled() ) {
					return $container[ self::PRODUCT_UNIQUE_SLUG ]->get_unique_slug( $slug, $post_id, $post_status, $post_type, $post_parent, $original_slug );
				}

				return $slug;
			} ), 10, 6 );
		}

		/**
		 * Handles product SEO settings.
		 *
		 * @param Container $container The service container.
		 *
		 * @return void
		 */
		private function product_seo( Container $container ) {
			$container[ self::PRODUCT_SEO ] = function ( Container $container ) {
				return new Product\Seo();
			};

			/**
			 * Modifies the WordPress title parts for products.
			 *
			 * @param array $title_parts The parts of the title.
			 * 
			 * @return array The modified title parts.
			 * 
			 * @hook wp_title_parts
			 */
			add_filter( 'wp_title_parts', $this->create_callback( 'product_wp_title', function ( $title_parts ) use ( $container ) {
				return $container[ self::PRODUCT_SEO ]->filter_wp_title( $title_parts );
			} ), 10, 1 );

			/**
			 * Filters the product document title parts.
			 *
			 * @param array $title_parts The document title parts.
			 * 
			 * @return array The modified title parts.
			 */
			add_filter( 'document_title_parts', $this->create_callback( 'product_document_title', function ( $title_parts ) use ( $container ) {
				return $container[ self::PRODUCT_SEO ]->filter_document_title( $title_parts );
			} ), 10, 1 );

			/**
			 * Filters the product page meta description.
			 *
			 * @return string|null The meta description if enabled, otherwise null.
			 */
			add_filter( 'wp_head', $this->create_callback( 'product_page_meta_description', function () use ( $container ) {
				if ( get_option( Product_Single::META_DESC_DISABLE, 'yes' ) !== 'yes' ) {
					return null;
				}
	
				return $container[ self::PRODUCT_SEO ]->print_meta_description();
			} ), 0, 0 );
		}
}
