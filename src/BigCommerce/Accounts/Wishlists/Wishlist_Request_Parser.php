<?php


namespace BigCommerce\Accounts\Wishlists;

use BigCommerce\Api\v3\Api\WishlistsApi;
use BigCommerce\Api\v3\ApiException;
use BigCommerce\Post_Types\Product\Product;

/**
 * Class Wishlist_Request_Parser
 *
 * This class parses and processes wishlist-related requests, such as filtering 
 * the product archive to display wishlist items. It integrates with the BigCommerce 
 * Wishlists API to fetch and handle wishlist data and applies necessary filters 
 * and actions to the WordPress environment.
 *
 * @package BigCommerce\Accounts\Wishlists
 */
class Wishlist_Request_Parser {

    /**
     * Query parameter for the wishlist identifier.
     *
     * @var string
     */
	const LIST_PARAM  = 'list';

    /**
     * Query parameter for the wishlist token.
     *
     * @var string
     */
	const TOKEN_PARAM = 'token';

	/** @var WishlistsApi */
	private $wishlists;

    /**
     * Constructor for Wishlist_Request_Parser.
     *
     * @param WishlistsApi $wishlists The Wishlists API instance for fetching wishlist data.
     */
	public function __construct( WishlistsApi $wishlists ) {
		$this->wishlists = $wishlists;
	}

    /**
     * Setup the wishlist request.
     *
     * Determines whether the current request is a wishlist request. If so, it fetches the 
     * wishlist data and applies appropriate actions and filters to render the wishlist.
     *
     * @param \WP $wp The WordPress request object.
     */
	public function setup_wishlist_request( \WP $wp ) {
		if ( ! $this->is_wishlist_request( $wp ) ) {
			return;
		}

		$list = $this->requested_list();
		$token = $this->requested_token();

		try {
			$wishlist = new Wishlist( $this->wishlists->getWishlist( $list )->getData() );
			if ( $wishlist->is_public() && $wishlist->token() === $token ) {
				$archive = new Public_Wishlist( $wishlist );
			} else {
				$archive = new Missing_Wishlist();
			}
		} catch ( ApiException $e ) {
			// treat an API error like a missing wishlist
			$archive = new Missing_Wishlist();
		}

		/**
		 * Modify the main query to filter products based on wishlist conditions.
		 *
		 * @param \WP_Query $query The main WordPress query object, which is filtered to show only wishlist-relevant products.
		 */
		add_action( 'pre_get_posts', [ $archive, 'filter_main_query' ], 0, 1 ); // needs to run before Query::filter_queries() at 10

		/**
		 * Remove the refinery component from the product archive template.
		 *
		 * This method filters the product archive template data to remove the refinery
		 * component, which may be used for facets or filtering options in the catalog.
		 *
		 * @param array $template_data The template data array, which is modified to remove the refinery component.
		 * @return array The modified template data with the refinery component removed.
		 */
		add_filter( 'bigcommerce/template=components/catalog/product-archive.php/data', [ $archive, 'remove_refinery' ], 10, 1 );

		/**
		 * Customize the page title for the product archive based on wishlist information.
		 *
		 * @param array $template_data The template data array, which is modified to include the wishlist name as the page title.
		 * @return array Modified template data with the wishlist-specific page title.
		 */
		add_filter( 'bigcommerce/template=components/catalog/product-archive.php/data', [ $archive, 'set_page_title' ], 10, 1 );

		/**
		 * Customize the WordPress archive title for wishlist pages.
		 *
		 * @param string $title     The current archive title.
		 * @param string $post_type The post type for which the archive is being displayed.
		 * @return string Modified title reflecting the wishlist name or a "not found" message.
		 */
		add_filter( 'post_type_archive_title', [ $archive, 'set_wp_title' ], 10, 2 );

		/**
		 * Customize the "No Results" message for wishlist-related templates.
		 *
		 * @param array $template_data The template data array, modified to include wishlist-specific "No Results" messages and labels.
		 * @return array Modified template data with wishlist-relevant messaging.
		 */
		add_filter( 'bigcommerce/template=components/catalog/no-results.php/data', [ $archive, 'set_no_results_message' ], 10, 1 );
	}

	private function is_wishlist_request( \WP $wp ) {
		$post_type = array_key_exists( 'post_type', $wp->query_vars ) ? $wp->query_vars[ 'post_type' ] : '';
		if ( $post_type !== Product::NAME ) {
			return false;
		}

		if ( ! $this->requested_list() || ! $this->requested_token() ) {
			return false;
		}

		return true;
	}

	private function requested_list() {
		return filter_input( INPUT_GET, self::LIST_PARAM, FILTER_VALIDATE_INT );
	}

	private function requested_token() {
		return filter_input( INPUT_GET, self::TOKEN_PARAM, FILTER_SANITIZE_STRING );
	}
}
