<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

$step_page_cta_pagevisibility = ( isset( $fields['step_page_cta_pagevisibility'] ) ) ? $fields['step_page_cta_pagevisibility'] : null;


 $step_to_cta_headline = ( isset( $fields['step_to_cta_headline'] ) ) ? $option_fields['step_to_cta_headline'] : null;
$step_ftrcta_headline  = ( isset( $fields['step_page_cta_headline'] ) ) ? $fields['step_page_cta_headline'] : $step_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo $step_ftrcta_headline; ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
