<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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


// $step_pagetitle = (isset($fields['step_pagetitle'])) ? $fields['step_pagetitle'] : null;
// if(!$step_pagetitle){
// 	$step_pagetitle = get_the_title();
// }
$step_pagetitle = glide_page_title('step_pagetitle');
?>


<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>
