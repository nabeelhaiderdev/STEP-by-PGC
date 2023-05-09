<?php

/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package The Tower Technologies Ltd.
 * @since 1.0.0
 */

// CPT News
function register_cpt_news_and_events() {
	// CPT Labels
	$cpt_singular_capital   = 'News and Event'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'News and Events';
	$cpt_singular_lowercase = 'news and event';
	$cpt_plural_lowercase   = 'news and events';

	// CPT Slug & Name
	$cpt_register_key = 'news';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'news';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/project/single-project-name

	$labels = array(
		'name'                  => _x($cpt_plural_capital, 'Post type general name', 'ttl_td'),
		'singular_name'         => _x($cpt_singular_capital, 'Post type singular name', 'ttl_td'),
		'menu_name'             => _x($cpt_plural_capital, 'Admin Menu text', 'ttl_td'),
		'name_admin_bar'        => _x($cpt_singular_capital, 'Add New on Toolbar', 'ttl_td'),
		'add_new'               => __('Add New ', 'ttl_td'),
		'add_new_item'          => __('Add New ' . $cpt_singular_capital, 'ttl_td'),
		'new_item'              => __('New ' . $cpt_singular_capital, 'ttl_td'),
		'edit_item'             => __('Edit ' . $cpt_singular_capital, 'ttl_td'),
		'update_item'           => __('Update ' . $cpt_singular_capital, 'ttl_td'),
		'view_item'             => __('View  ' . $cpt_singular_capital, 'ttl_td'),
		'view_items'            => __('View  ' . $cpt_plural_capital, 'ttl_td'),
		'all_items'             => __('All ' . $cpt_plural_capital, 'ttl_td'),
		'search_items'          => __('Search ' . $cpt_plural_capital, 'ttl_td'),
		'parent_item_colon'     => __('Parent: ' . $cpt_singular_capital, 'ttl_td'),
		'not_found'             => __('No ' . $cpt_plural_lowercase . ' found.', 'ttl_td'),
		'not_found_in_trash'    => __('No ' . $cpt_plural_lowercase . ' found in Trash.', 'ttl_td'),
		'featured_image'        => _x($cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'ttl_td'),
		'set_featured_image'    => _x('Set featured image', 'Overrides the “Set featured image” phrase.', 'ttl_td'),
		'remove_featured_image' => _x('Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'ttl_td'),
		'use_featured_image'    => _x('Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'ttl_td'),
		'archives'              => _x($cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'ttl_td'),
		'attributes'            => _x($cpt_singular_capital . ' attributes', 'The post type attributes label.', 'ttl_td'),
		'insert_into_item'      => _x('Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'ttl_td'),
		'uploaded_to_this_item' => _x('Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'ttl_td'),
		'filter_items_list'     => _x('Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'ttl_td'),
		'items_list_navigation' => _x($cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'ttl_td'),
		'items_list'            => _x($cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'ttl_td'),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array('title', 'editor', 'thumbnail', 'author', 'excerpt'),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-analytics', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type($cpt_register_key, $args);
}
add_action( 'init', 'register_cpt_news_and_events' );



// CPT Courses
function register_cpt_courses() {
	// CPT Labels
	$cpt_singular_capital   = 'Course'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Courses';
	$cpt_singular_lowercase = 'Course';
	$cpt_plural_lowercase   = 'Courses';

	// CPT Slug & Name
	$cpt_register_key = 'course';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'course';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/project/single-project-name

	$labels = array(
		'name'                  => _x($cpt_plural_capital, 'Post type general name', 'ttl_td'),
		'singular_name'         => _x($cpt_singular_capital, 'Post type singular name', 'ttl_td'),
		'menu_name'             => _x($cpt_plural_capital, 'Admin Menu text', 'ttl_td'),
		'name_admin_bar'        => _x($cpt_singular_capital, 'Add New on Toolbar', 'ttl_td'),
		'add_new'               => __('Add New ', 'ttl_td'),
		'add_new_item'          => __('Add New ' . $cpt_singular_capital, 'ttl_td'),
		'new_item'              => __('New ' . $cpt_singular_capital, 'ttl_td'),
		'edit_item'             => __('Edit ' . $cpt_singular_capital, 'ttl_td'),
		'update_item'           => __('Update ' . $cpt_singular_capital, 'ttl_td'),
		'view_item'             => __('View  ' . $cpt_singular_capital, 'ttl_td'),
		'view_items'            => __('View  ' . $cpt_plural_capital, 'ttl_td'),
		'all_items'             => __('All ' . $cpt_plural_capital, 'ttl_td'),
		'search_items'          => __('Search ' . $cpt_plural_capital, 'ttl_td'),
		'parent_item_colon'     => __('Parent: ' . $cpt_singular_capital, 'ttl_td'),
		'not_found'             => __('No ' . $cpt_plural_lowercase . ' found.', 'ttl_td'),
		'not_found_in_trash'    => __('No ' . $cpt_plural_lowercase . ' found in Trash.', 'ttl_td'),
		'featured_image'        => _x($cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'ttl_td'),
		'set_featured_image'    => _x('Set featured image', 'Overrides the “Set featured image” phrase.', 'ttl_td'),
		'remove_featured_image' => _x('Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'ttl_td'),
		'use_featured_image'    => _x('Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'ttl_td'),
		'archives'              => _x($cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'ttl_td'),
		'attributes'            => _x($cpt_singular_capital . ' attributes', 'The post type attributes label.', 'ttl_td'),
		'insert_into_item'      => _x('Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'ttl_td'),
		'uploaded_to_this_item' => _x('Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'ttl_td'),
		'filter_items_list'     => _x('Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'ttl_td'),
		'items_list_navigation' => _x($cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'ttl_td'),
		'items_list'            => _x($cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'ttl_td'),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array('title', 'editor', 'thumbnail', 'author', 'excerpt'),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-analytics', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type($cpt_register_key, $args);
}
add_action( 'init', 'register_cpt_courses' );

function courses_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'course'; // This is registering name of respective CPT.
	$tax_register_key = 'courses';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'courses'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/courses/single-course-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'ttl_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'ttl_td' ),
		'menu_name'                  => __( 'Categories', 'ttl_td' ),
		'all_items'                  => __( 'All Items', 'ttl_td' ),
		'parent_item'                => __( 'Parent Item', 'ttl_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'ttl_td' ),
		'new_item_name'              => __( 'New Item Name', 'ttl_td' ),
		'add_new_item'               => __( 'Add New Item', 'ttl_td' ),
		'edit_item'                  => __( 'Edit Item', 'ttl_td' ),
		'update_item'                => __( 'Update Item', 'ttl_td' ),
		'view_item'                  => __( 'View Item', 'ttl_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'ttl_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'ttl_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'ttl_td' ),
		'popular_items'              => __( 'Popular Items', 'ttl_td' ),
		'search_items'               => __( 'Search Items', 'ttl_td' ),
		'not_found'                  => __( 'Not Found', 'ttl_td' ),
		'no_terms'                   => __( 'No items', 'ttl_td' ),
		'items_list'                 => __( 'Items list', 'ttl_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'ttl_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'courses_taxonomy', 0 );
