<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

// function register_cpt_testimonials() {
// 	// CPT Labels
// 	$cpt_singular_capital   = 'Testimonial'; // Name of the post type shown in the menu
// 	$cpt_plural_capital     = 'Testimonials';
// 	$cpt_singular_lowercase = 'testimonial';
// 	$cpt_plural_lowercase   = 'testimonials';

// 	// CPT Slug & Name
// 	$cpt_register_key = 'testimonial';  // This is the registering name of the single CPT post. (Try to keep it singular).
// 	$cpt_slug         = 'testimonial';  // This is the permalink slug of single CPT post. (Try to keep it singular).
// 	// The slug will become - www.website.com/testimonial/single-testimonial-name

// 	$labels = array(
// 		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'step_td' ),
// 		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'step_td' ),
// 		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'step_td' ),
// 		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'step_td' ),
// 		'add_new'               => __( 'Add New ', 'step_td' ),
// 		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'step_td' ),
// 		'new_item'              => __( 'New ' . $cpt_singular_capital, 'step_td' ),
// 		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'step_td' ),
// 		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'step_td' ),
// 		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'step_td' ),
// 		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'step_td' ),
// 		'all_items'             => __( 'All ' . $cpt_plural_capital, 'step_td' ),
// 		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'step_td' ),
// 		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'step_td' ),
// 		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'step_td' ),
// 		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'step_td' ),
// 		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'step_td' ),
// 		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'step_td' ),
// 		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'step_td' ),
// 		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'step_td' ),
// 		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'step_td' ),
// 		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'step_td' ),
// 		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'step_td' ),
// 		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'step_td' ),
// 		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'step_td' ),
// 		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'step_td' ),
// 		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'step_td' ),
// 	);
// 	$args   = array(
// 		'labels'             => $labels,
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'menu_position'      => null,
// 		'map_meta_cap'       => true,
// 		'show_in_rest'       => true,
// 		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
// 		'capability_type'    => 'page', // Set this value for each CPT.
// 		'has_archive'        => false, // Set this value for each CPT.
// 		'hierarchical'       => true, // Set this value for each CPT.
// 		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
// 		'rewrite'            => array(
// 			'slug'       => $cpt_slug,
// 			'with_front' => true, // If required only then set this value for each CPT.
// 		),
// 	);
// 	register_post_type( $cpt_register_key, $args );
// }
// function register_cpt_resources() {
// 	// CPT Labels
// 	$cpt_singular_capital   = 'Resource'; // Name of the post type shown in the menu
// 	$cpt_plural_capital     = 'Resources';
// 	$cpt_singular_lowercase = 'resource';
// 	$cpt_plural_lowercase   = 'resources';

// 	// CPT Slug & Name
// 	$cpt_register_key = 'resource';  // This is the registering name of the single CPT post. (Try to keep it singular).
// 	$cpt_slug         = 'resource';  // This is the permalink slug of single CPT post. (Try to keep it singular).
// 	// The slug will become - www.website.com/testimonial/single-testimonial-name

// 	$labels = array(
// 		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'step_td' ),
// 		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'step_td' ),
// 		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'step_td' ),
// 		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'step_td' ),
// 		'add_new'               => __( 'Add New ', 'step_td' ),
// 		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'step_td' ),
// 		'new_item'              => __( 'New ' . $cpt_singular_capital, 'step_td' ),
// 		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'step_td' ),
// 		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'step_td' ),
// 		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'step_td' ),
// 		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'step_td' ),
// 		'all_items'             => __( 'All ' . $cpt_plural_capital, 'step_td' ),
// 		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'step_td' ),
// 		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'step_td' ),
// 		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'step_td' ),
// 		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'step_td' ),
// 		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'step_td' ),
// 		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'step_td' ),
// 		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'step_td' ),
// 		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'step_td' ),
// 		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'step_td' ),
// 		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'step_td' ),
// 		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'step_td' ),
// 		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'step_td' ),
// 		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'step_td' ),
// 		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'step_td' ),
// 		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'step_td' ),
// 	);
// 	$args   = array(
// 		'labels'             => $labels,
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'menu_position'      => null,
// 		'map_meta_cap'       => true,
// 		'show_in_rest'       => true,
// 		'supports'           => array( 'editor', 'title', 'thumbnail' ),
// 		'capability_type'    => 'page', // Set this value for each CPT.
// 		'has_archive'        => false, // Set this value for each CPT.
// 		'hierarchical'       => true, // Set this value for each CPT.
// 		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
// 		'rewrite'            => array(
// 			'slug'       => $cpt_slug,
// 			'with_front' => true, // If required only then set this value for each CPT.
// 		),

// 	);
// 	register_post_type( $cpt_register_key, $args );
// }
// function register_cpt_team() {
// 	// CPT Labels
// 	$cpt_singular_capital   = 'Team Member'; // Name of the post type shown in the menu
// 	$cpt_plural_capital     = 'Team Members';
// 	$cpt_singular_lowercase = 'team member';
// 	$cpt_plural_lowercase   = 'team members';

// 	// CPT Slug & Name
// 	$cpt_register_key = 'team';  // This is the registering name of the single CPT post. (Try to keep it singular).
// 	$cpt_slug         = 'team';  // This is the permalink slug of single CPT post. (Try to keep it singular).
// 	// The slug will become - www.website.com/testimonial/single-testimonial-name

// 	$labels = array(
// 		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'step_td' ),
// 		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'step_td' ),
// 		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'step_td' ),
// 		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'step_td' ),
// 		'add_new'               => __( 'Add New ', 'step_td' ),
// 		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'step_td' ),
// 		'new_item'              => __( 'New ' . $cpt_singular_capital, 'step_td' ),
// 		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'step_td' ),
// 		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'step_td' ),
// 		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'step_td' ),
// 		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'step_td' ),
// 		'all_items'             => __( 'All ' . $cpt_plural_capital, 'step_td' ),
// 		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'step_td' ),
// 		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'step_td' ),
// 		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'step_td' ),
// 		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'step_td' ),
// 		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'step_td' ),
// 		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'step_td' ),
// 		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'step_td' ),
// 		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'step_td' ),
// 		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'step_td' ),
// 		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'step_td' ),
// 		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'step_td' ),
// 		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'step_td' ),
// 		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'step_td' ),
// 		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'step_td' ),
// 		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'step_td' ),
// 	);
// 	$args   = array(
// 		'labels'              => $labels,
// 		'public'              => true,
// 		'exclude_from_search' => true,
// 		'publicly_queryable'  => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'query_var'           => true,
// 		'menu_position'       => null,
// 		'map_meta_cap'        => true,
// 		'show_in_rest'        => true,
// 		'supports'            => array( 'title', 'thumbnail' ),
// 		'capability_type'     => 'page', // Set this value for each CPT.
// 		'has_archive'         => false, // Set this value for each CPT.
// 		'hierarchical'        => true, // Set this value for each CPT.
// 		'menu_icon'           => 'dashicons-groups', // Set this value for each CPT.
// 		'rewrite'             => array(
// 			'slug'       => $cpt_slug,
// 			'with_front' => false, // If required only then set this value for each CPT.
// 		),

// 	);
// 	register_post_type( $cpt_register_key, $args );
// }

// add_action( 'init', 'register_cpt_team' );
// add_action( 'init', 'register_cpt_resources' );
// add_action( 'init', 'register_cpt_testimonials' );

// /**
//  * Register custom tags for Experiments cpt
//  */
// function testimonials_taxonomy() {

// 	// CPT Slug & Name
// 	$tax_parent       = 'testimonial'; // This is registering name of respective CPT.
// 	$tax_register_key = 'testimonials';  // This is the registering name of the taxonomy (Try to keep it plural).
// 	$tax_slug         = 'testimonials'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
// 	// The slug will become - www.website.com/testimonials/single-testimonial-category

// 	$labels = array(
// 		'name'                       => _x( 'Category', 'Taxonomy General Name', 'step_td' ),
// 		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'step_td' ),
// 		'menu_name'                  => __( 'Categories', 'step_td' ),
// 		'all_items'                  => __( 'All Items', 'step_td' ),
// 		'parent_item'                => __( 'Parent Item', 'step_td' ),
// 		'parent_item_colon'          => __( 'Parent Item:', 'step_td' ),
// 		'new_item_name'              => __( 'New Item Name', 'step_td' ),
// 		'add_new_item'               => __( 'Add New Item', 'step_td' ),
// 		'edit_item'                  => __( 'Edit Item', 'step_td' ),
// 		'update_item'                => __( 'Update Item', 'step_td' ),
// 		'view_item'                  => __( 'View Item', 'step_td' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'step_td' ),
// 		'add_or_remove_items'        => __( 'Add or remove items', 'step_td' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'step_td' ),
// 		'popular_items'              => __( 'Popular Items', 'step_td' ),
// 		'search_items'               => __( 'Search Items', 'step_td' ),
// 		'not_found'                  => __( 'Not Found', 'step_td' ),
// 		'no_terms'                   => __( 'No items', 'step_td' ),
// 		'items_list'                 => __( 'Items list', 'step_td' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'step_td' ),
// 	);
// 	$args   = array(
// 		'labels'            => $labels,
// 		'hierarchical'      => true,
// 		'public'            => true,
// 		'show_ui'           => true,
// 		'show_in_rest'      => true,
// 		'show_admin_column' => true,
// 		'show_in_nav_menus' => true,
// 		'query_var'         => true,
// 		'rewrite'           => array(
// 			'slug'       => $tax_slug,
// 			'with_front' => false, // If required only then set this for each taxonomy.
// 		),
// 	);
// 	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

// }

// add_action( 'init', 'testimonials_taxonomy', 0 );