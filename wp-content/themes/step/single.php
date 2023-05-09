<?php
/**
 * The template for displaying all posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
?>

	<!-- Hero Start -->

<section class="visual-inner">
            <div class="img-holder" style="background-image:url(<?php if (get_the_post_thumbnail_url( get_the_ID(), 'full' ))
			echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
			else 
			echo get_template_directory_uri() . '/assets/images/defaults/default-image.jpg'; ?>)"></div>
            <div class="container">
                <div class="text-box">
                    <h1><?php the_title(); ?></h1>
                    <div class="breadcrumb-holder">
						<?php my_breadcrumbs(); ?>
                    </div>
                </div>
            </div>
        </section>
	
	<!-- Hero End  -->

<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', get_post_type() );
	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer();
