<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * This template is for displaying blog page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package STEP by PGC
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;


// $categories=get_categories(array(
// 	'hide_empty' 	=> false,
// ));

$step_post_catagories = get_categories($pID);
// var_dump($step_post_catagories);



?> 
<section class="visual-inner">
            <div class="img-holder" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)"></div>
            <div class="container">
                <div class="text-box">
                    <h1><?php the_title(); ?></h1>
                    <div class="breadcrumb-holder">
                    						<?php my_breadcrumbs(); ?>

                    </div>
                </div>
            </div>
        </section>


<!-- Hero End -->



<div id="content-twocols" class="container blogs">  
                <div id="content">
	<!-- Content Start -->
	<?php
				// WP_Query arguments
				$args = array(
					'post_type'              => array( 'post' ),
					'posts_per_page'         => get_option('posts_per_page'), //how many posts you need
					'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
				);
				// The Query
				$query = new WP_Query( $args );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					//Include specific template for the content.
					get_template_part( 'partials/content', 'archive-post' );
					}
				?> <div class="clear"></div> <?php
				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				}?> 
			<?php if ( function_exists( 'glide_pagination' ) ) { ?>
				<div class="ts-40"></div>
				<div class="center-align"> <?php glide_pagination( $query->max_num_pages ); ?></div>
				<div class="ts-80"></div>
			<?php } ?>
		</div>
		<!-- Content End -->
		<div id="sidebar">
					  <?php dynamic_sidebar( 'sidebar-blog' ); ?>
				</div>	                   
</div>



<?php get_footer();
