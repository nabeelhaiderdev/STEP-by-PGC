<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STEP by PGC
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if ( function_exists( 'get_fields' ) && function_exists( 'get_fields_escaped' ) ) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
?> <?php

// Default Footer Options

$footer_scripts = ( isset( $option_fields['footer_scripts'] ) ) ? $option_fields['footer_scripts'] : null;



// Schema Markup - ACF variables.


$step_schema_check = isset($option_fields['step_schema_check'])? $option_fields['step_schema_check']:array();
if ( $step_schema_check ) {
	$step_schema_business_name       = html_entity_remove( $option_fields['step_schema_business_name'] );
	$step_schema_business_legal_name = html_entity_remove( $option_fields['step_schema_business_legal_name'] );
	$step_schema_street_address      = html_entity_remove( $option_fields['step_schema_street_address'] );
	$step_schema_locality            = html_entity_remove( $option_fields['step_schema_locality'] );
	$step_schema_region              = html_entity_remove( $option_fields['step_schema_region'] );
	$step_schema_postal_code         = html_entity_remove( $option_fields['step_schema_postal_code'] );
	$step_schema_map_short_link      = html_entity_remove( $option_fields['step_schema_map_short_link'] );
	$step_schema_latitude            = html_entity_remove( $option_fields['step_schema_latitude'] );
	$step_schema_longitude           = html_entity_remove( $option_fields['step_schema_longitude'] );
	$step_schema_opening_hours       = html_entity_remove( $option_fields['step_schema_opening_hours'] );
	$step_schema_telephone           = html_entity_remove( $option_fields['step_schema_telephone'] );
	$step_schema_business_email      = html_entity_remove( $option_fields['step_schema_business_email'] );
	$step_schema_business_logo       = html_entity_remove( $option_fields['step_schema_business_logo'] );
	$step_schema_price_range         = html_entity_remove( $option_fields['step_schema_price_range'] );
	$step_schema_type                = html_entity_remove( $option_fields['step_schema_type'] );
}
// Custom - ACF variables.

$step_ftrop_title     = ( isset( $option_fields['step_ftrop_title'] ) ) ? $option_fields['step_ftrop_title'] : null;
$step_ftrop_text      = (isset($option_fields['step_ftrop_text'])) ? html_entity_decode( $option_fields['step_ftrop_text'] ):"";
$step_ftrop_copyright = (isset($option_fields['step_ftrop_copyright'])) ? html_entity_decode( $option_fields['step_ftrop_copyright'] ) : "";
$step_social_fb       = ( isset( $option_fields['step_social_fb'] ) ) ? $option_fields['step_social_fb'] : null;
$step_social_tw       = ( isset( $option_fields['step_social_tw'] ) ) ? $option_fields['step_social_tw'] : null;
$step_social_li       = ( isset( $option_fields['step_social_li'] ) ) ? $option_fields['step_social_li'] : null;
$step_social_in       = ( isset( $option_fields['step_social_in'] ) ) ? $option_fields['step_social_in'] : null;

?>
 <?php get_template_part( 'partials/cta' ); ?> </main>
<footer id="footer-section" class="footer-section step_footer">
	<!-- Footer Start -->
	<div class="pri-footer">
                <div class="container">
                    <strong class="logo">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.png" width="145" height="44"
                                alt="Steps School"></a>
                    </strong>
                    <ul class="additional-info">
                        <li>
                            <strong class="title">Email</strong>
                            <a href="mailto:step@pgc.edu" class="text">step@pgc.edu</a>
                        </li>
                        <li>
                            <strong class="title">Contact</strong>
                            <span class="text"><a class="text" href="tel:080078608">0800-78608</a> (9:00 AM - 5:00 PM)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sec-footer">
                <div class="container">
                    <div class="theme-info">
                        <p>STEP- The Largest Entry
                            Test Preparation Network in Pakistan- offers entry test preparatory courses</p>
                    </div>
                    <div class="columns-holder">
                        <ul class="social-links">
                            <li><a href="#" target="_blank">Facebook</a></li>
                            <li><a href="#" target="_blank">Instagram</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            <li><a href="#" target="_blank">linkedin</a></li>
                        </ul>
                        <div class="usefull-links">
                            <strong class="title">Useful Links</strong>
                            <div class="links-wrap">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Our Pricing</a></li>
                                    <li><a href="#">Latest News</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-column">
                            <strong class="title">Contact Us</strong>
                            <ul class="contact-info">
                                <li>
                                    <strong class="subtitle">Helpline</strong>
                                    <a href="tel=080078608" class="number">0800-78608</a>
                                </li>
                                <li>
                                    <strong class="subtitle">Location</strong>
                                    <span class="text">123-C, Block E1, Gulberg, III Lahore</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyrights">
                <div class="container">
                    <p>Copyright © Step by PGC</p>
                </div>
            </div>
	<!-- Footer End --> 
	<?php
	if ( $step_schema_check ) {
		?>
		 <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo $step_schema_type; ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo $step_schema_locality; ?>",
			"addressRegion": "<?php echo $step_schema_region; ?>",
			"postalCode": "<?php echo $step_schema_postal_code; ?>",
			"streetAddress": "<?php echo $step_schema_street_address; ?>"
		},
		"hasMap": "<?php echo $step_schema_map_short_link; ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo $step_schema_latitude; ?>",
			"longitude": "<?php echo $step_schema_longitude; ?>"
		},
		"name": "<?php echo $step_schema_business_name; ?>",
		"openingHours": "<?php echo $step_schema_opening_hours; ?>",
		"telephone": "<?php echo $step_schema_telephone; ?>",
		"email": "<?php echo $step_schema_business_email; ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo $step_schema_business_logo; ?>",
		"legalName": "<?php echo $step_schema_business_legal_name; ?>",
		"priceRange": "<?php echo $step_schema_price_range; ?>"
	}
	</script> <?php } ?>
</footer> <?php wp_footer(); ?> <?php
if ( $footer_scripts != '' ) {
	?>
	 <div style="display: none;">
	<?php echo html_entity_decode( $footer_scripts, ENT_QUOTES ); ?> </div> <?php } ?> </body>

</html>
