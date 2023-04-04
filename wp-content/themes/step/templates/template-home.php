<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * This template is for displaying home page.
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

$step_pagetitle = (isset($fields['step_pagetitle']) && $fields['step_pagetitle']!='' ) ? $fields['step_pagetitle'] : get_the_title();

?> <section id="hero-section" class="hero-section">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
			<h1><?php echo $step_pagetitle; ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Content Start --> <?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?> <div class="clear"></div>
	<div class="ts-80"></div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
