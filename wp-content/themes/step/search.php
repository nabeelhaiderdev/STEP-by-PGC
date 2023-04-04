<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

// Include header.
get_header();

// Global variables.
global $option_fields;
global $pID;
global $fields;

// Required if you want different search results style for separate CPT etc
// $post_type = get_post_type();

 /**
 * Search Masthead
 *
 */
?> <section id="hero-section" class="hero-section">
	<!-- Hero Start -->
	<div class="hero-single search-hero">
		<div class="wrapper">
			<h1><?php _e( 'Search Results', 'aperiambio_td' ); ?></h1>
			<p> <?php
					printf(
						/* translators: %s: search term. */
						esc_html__( 'Results for "%s"', 'aperiambio_td' ),
						'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
					);
				?> </p>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="wrapper">
			<div class="post-archive three-columns">
				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						// Include specific template for the content
						get_template_part( 'partials/content-archive',get_post_type() );
					} ?>
				<?php }else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				} ?>
			</div>
			<div class="ts-40"></div>
			<?php if ( function_exists( 'glide_pagination' ) ) {
				glide_pagination( $wp_query->max_num_pages );
			} ?>
			<div class="ts-80"></div>

	</div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
