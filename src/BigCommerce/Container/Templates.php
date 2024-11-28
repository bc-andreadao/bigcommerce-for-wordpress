<?php


namespace BigCommerce\Container;


use BigCommerce\Templates\Body_Classes;
use BigCommerce\Templates\Template_Override;
use Pimple\Container;

/**
 * Handles template overrides and body class modifications
 * within the BigCommerce integration. It registers various filters to modify the template paths and
 * the body class dynamically based on the context, such as product pages, archives, taxonomies, and search results.
 */
class Templates extends Provider {
    /**
     * The container key for the template override service.
     *
     * This constant is used to define the key for the `Template_Override` service within the container.
     * It is utilized when accessing the template override functionality, such as rendering product templates.
	 * @var string
     */
    const OVERRIDE   = 'template.override';

    /**
     * The container key for the body class service.
     *
     * This constant is used to define the key for the `Body_Classes` service within the container.
     * It is used to modify the body class on the front end by adding relevant classes.
	 * @var string
     */
    const BODY_CLASS = 'template.body_class';

    /**
     * Register the template-related services and filters.
     *
     * This method registers all the necessary services and filters related to templates, including
     * template overrides, body classes, and template hierarchy modifications. It is called when the
     * container is initialized and hooks into various WordPress actions and filters for template management.
     *
     * @param Container $container The container instance used to register services.
     */
    public function register( Container $container ) {
		$container[ self::OVERRIDE ] = function ( Container $container ) {
			return new Template_Override();
		};

		$container[ self::BODY_CLASS ] = function ( Container $container ) {
			return new Body_Classes();
		};

		/**
		 * Look for plugin templates in [plugin]/templates/public.
		 *
		 * This filter hooks into the `bigcommerce/template/directory/plugin` event and sets the
		 * plugin template directory to `[plugin]/templates/public` if no directory is provided.
		 *
		 * @param string $directory The current plugin template directory.
		 *
		 * @return string The directory where plugin templates are located.
		 */
		add_filter( 'bigcommerce/template/directory/plugin', $this->create_callback( 'plugin_directory', function ( $directory ) use ( $container ) {
			return $directory ?: plugin_dir_path( $container['plugin_file'] ) . 'templates/public';
		} ), 20, 1 );

		/**
		 * Look for template overrides in [theme]/bigcommerce.
		 *
		 * This filter hooks into the `bigcommerce/template/directory/theme` event and sets the
		 * theme template directory to `bigcommerce` if no directory is provided.
		 *
		 * @param string $directory The current theme template directory.
		 *
		 * @return string The directory where theme template overrides are located.
		 */
		add_filter( 'bigcommerce/template/directory/theme', $this->create_callback( 'theme_directory', function ( $directory ) {
			return $directory ?: 'bigcommerce';
		} ), 20, 1 );

		/**
		 * Render the product single page template.
		 *
		 * This filter hooks into the `bigcommerce/template/product/single` event and checks if a
		 * custom product single template is available. If not, it renders the template using
		 * the `render_product_single` method of the `Template_Override` class.
		 *
		 * @param string $output The current output of the product single template.
		 * @param int    $post_id The ID of the current product post.
		 *
		 * @return string The rendered product single page template.
		 */
		add_filter( 'bigcommerce/template/product/single', $this->create_callback( 'product_single', function ( $output, $post_id ) use ( $container ) {
			if ( ! empty( $output ) ) {
				return $output;
			}

			return $container[ self::OVERRIDE ]->render_product_single( $post_id );
		} ), 10, 2 );

		/**
		 * Render the product archive page template.
		 *
		 * This filter hooks into the `bigcommerce/template/product/archive` event and checks if a
		 * custom product archive template is available. If not, it renders the template using
		 * the `render_product_archive` method of the `Template_Override` class.
		 *
		 * @param string $output The current output of the product archive template.
		 *
		 * @return string The rendered product archive page template.
		 */
		add_filter( 'bigcommerce/template/product/archive', $this->create_callback( 'product_archive', function ( $output ) use ( $container ) {
			if ( ! empty( $output ) ) {
				return $output;
			}

			return $container[ self::OVERRIDE ]->render_product_archive();
		} ), 10, 2 );

		$single_template_hierarchy = $this->create_callback( 'single_template_hierarchy', function ( $templates ) use ( $container ) {
			return $container[ self::OVERRIDE ]->set_product_single_template_path( $templates );
		} );

		/**
		 * Set the product single template path in the template hierarchy.
		 *
		 * This filter hooks into the `single_template_hierarchy` event and modifies the template
		 * hierarchy for single product pages by calling the `set_product_single_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the product single template.
		 */
		add_filter( 'single_template_hierarchy', $single_template_hierarchy, 10, 1 );

		/**
		 * Set the singular template path in the template hierarchy.
		 *
		 * This filter hooks into the `singular_template_hierarchy` event and modifies the template
		 * hierarchy for singular pages (e.g., single posts or pages) by calling the `set_product_single_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the singular template.
		 */
		add_filter( 'singular_template_hierarchy', $single_template_hierarchy, 10, 1 );

		/**
		 * Set the index template path in the template hierarchy.
		 *
		 * This filter hooks into the `index_template_hierarchy` event and modifies the template
		 * hierarchy for the index page (homepage) by calling the `set_product_single_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the index template.
		 */
		add_filter( 'index_template_hierarchy', $single_template_hierarchy, 10, 1 );

		$archive_template_hierarchy = $this->create_callback( 'archive_template_hierarchy', function ( $templates ) use ( $container ) {
			return $container[ self::OVERRIDE ]->set_product_archive_template_path( $templates );
		} );

		/**
		 * Set the product archive template path in the template hierarchy.
		 *
		 * This filter hooks into the `archive_template_hierarchy` event and modifies the template
		 * hierarchy for product archive pages by calling the `set_product_archive_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the product archive template.
		 */
		add_filter( 'archive_template_hierarchy', $archive_template_hierarchy, 10, 1 );
		add_filter( 'index_template_hierarchy', $archive_template_hierarchy, 10, 1 );

		$tax_template_hierarchy = $this->create_callback( 'taxonomy_template_hierarchy', function ( $templates ) use ( $container ) {
			return $container[ self::OVERRIDE ]->set_taxonomy_archive_template_path( $templates );
		} );

		/**
		 * Set the taxonomy archive template path in the template hierarchy.
		 *
		 * This filter hooks into the `taxonomy_template_hierarchy` event and modifies the template
		 * hierarchy for taxonomy archive pages by calling the `set_taxonomy_archive_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the taxonomy archive template.
		 */
		add_filter( 'taxonomy_template_hierarchy', $tax_template_hierarchy, 10, 1 );

		/**
		 * Set the product archive template path in the template hierarchy.
		 *
		 * This filter hooks into the `archive_template_hierarchy` event and modifies the template
		 * hierarchy for product archive pages by calling the `set_product_archive_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the product archive template.
		 */
		add_filter( 'archive_template_hierarchy', $tax_template_hierarchy, 10, 1 );
		add_filter( 'index_template_hierarchy', $tax_template_hierarchy, 10, 1 );

		$search_template_hierarchy = $this->create_callback( 'search_template_hierarchy', function ( $templates ) use ( $container ) {
			return $container[ self::OVERRIDE ]->set_search_template_path( $templates );
		} );

		/**
		 * Set the search template path in the template hierarchy.
		 *
		 * This filter hooks into the `search_template_hierarchy` event and modifies the template
		 * hierarchy for search results pages by calling the `set_search_template_path`
		 * method of the `Template_Override` class.
		 *
		 * @param array $templates An array of available templates in the hierarchy.
		 *
		 * @return array The modified template hierarchy with the search template.
		 */
		add_filter( 'search_template_hierarchy', $search_template_hierarchy, 10, 1 );
		add_filter( 'index_template_hierarchy', $search_template_hierarchy, 10, 1 );

		/**
		 * Includes the product template if it matches the path.
		 *
		 * This filter hooks into the `template_include` event and checks if a custom product template
		 * is available. If so, it includes the template using the `include_product_template`
		 * method of the `Template_Override` class.
		 *
		 * @param string $path The current template path.
		 *
		 * @return string The path of the product template to include.
		 */
		add_filter( 'template_include', $this->create_callback( 'template_include', function ( $path ) use ( $container ) {
			return $container[ self::OVERRIDE ]->include_product_template( $path );
		} ), 10, 1 );

		/**
		 * Add custom body classes.
		 *
		 * This filter hooks into the `body_class` event and allows the modification of the body
		 * classes by calling the `set_body_classes` method of the `Body_Classes` class.
		 *
		 * @param array $classes An array of the current body classes.
		 *
		 * @return array The modified array of body classes.
		 */
		add_filter( 'body_class', $this->create_callback( 'set_body_classes', function ( $classes ) use ( $container ) {
			return $container[ self::BODY_CLASS ]->set_body_classes( $classes );
		} ), 10, 1 );

	}
}
