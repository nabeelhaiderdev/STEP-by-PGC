<?php
/**
 * The template for displaying website header
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
// Page Tags - Advanced custom fields variables
$tracking = ( isset( $option_fields['tracking_code'] ) ) ? $option_fields['tracking_code'] : null;
$ccss     = ( isset( $option_fields['custom_css'] ) ) ? $option_fields['custom_css'] : null;
$hscripts = ( isset( $option_fields['head_scripts'] ) ) ? $option_fields['head_scripts'] : null;
$bscripts = ( isset( $option_fields['body_scripts'] ) ) ? $option_fields['body_scripts'] : null;

$step_tohdr_btn     = $option_fields['step_tohdr_btn'];
$step_tohdr_btn_two = $option_fields['step_tohdr_btn_two'];
$step_tohdr_tbar    = $option_fields['step_tohdr_tbar'];
// Page variables - Advanced custom fields variables
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<?php
		// Add Head Scripts
	if ( $hscripts != '' ) {
		echo html_entity_decode( $hscripts, ENT_QUOTES );
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/icon.svg">
	<link rel="manifest"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/site.webmanifest">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="BaseTheme Package">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<?php
		// Tracking Code
	if ( $tracking != '' ) {
		echo html_entity_decode( $tracking, ENT_QUOTES );
	}

		// Custom CSS
	if ( $ccss != '' ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	</script>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?> <?php
if ( $bscripts != '' ) {
	?>
	<div style="display: none;">
		<?php echo html_entity_decode( $bscripts, ENT_QUOTES ); ?> </div> <?php } ?> <a
		class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'step_td' ); ?></a>
	<!-- Main Area Start -->
	<header class="header">
		<div class="header-wrapper">
			<div class="container">
				<div class="header-left">
					<strong class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="logo-blue"
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"
								alt="Step">
							<img class="logo-white"
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-w.png"
								alt="Step">
						</a>
					</strong>
					<ul class="courses-menu">
						<li class="parent courses-drop">
							<a class="courses-drop-opener" href="#">
								<i class="fas fa-th"></i> Courses <i class="fas fa-chevron-down"></i>
							</a>
							<?php
							$categories = get_categories();
							?>
							<ul class="courses-dropdown">
								<li class="courses-submenu">
									<a class="courses-submenu-opener" href="#">mdcat <i
											class="fas fa-chevron-right"></i></a>
									<ul class="courses-submenu-drop">
										<?php 
										foreach ($categories as $category) {
										?>
										<li><a href="<?echo get_category_link($category->term_id);?>"><?php echo $category->name?></a></li>
										<?php  } ?>
										<!-- <li><a href="#">Sub Menu</a></li>
										<li><a href="#">Sub Menu</a></li>
										<li><a href="#">Sub Menu</a></li>
										<li><a href="#">Sub Menu</a></li>
									</ul> -->
								</li>
								<li><a href="#">ecat</a></li>
								<li><a href="#">nts</a></li>
								<li><a href="#">fungat</a></li>
								<li><a href="#">sat-i</a></li>
								<li><a href="#">nust</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="header-right">
					<a href="#" class="nav-opener"><span></span></a>
					<div class="header-holder">
						<div class="header-wrap">
							<div class="header-info">
								<ul class="social-networks">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
								<div class="header-contect">
									<a href="tel:0800-78608">0800-78608</a> (9:00 AM-5:00 PM)
								</div>
							</div>
							<?php  
							$menu_items = wp_get_nav_menu_items('Main Menu');
							foreach ($menu_items as $menu_item) {

							// Check if the current menu item is the active one
							if ($menu_item->current == true) {

								// Mark the menu item as active by adding a CSS class
								$menu_item->classes[] = 'active';

							}

							}

							// Output the menu as a list
							echo '<ul class="main-nav">';
							foreach ($menu_items as $menu_item) {
								echo '<li class="' . implode(' ', $menu_item->classes) . '"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
								
							}
							echo '<li><a href="#" class="btn btn-primary btn-sm">Step Online</a></li>';
							echo '</ul>';
							?>
							<!-- <ul class="main-nav">
								<li class="active"><a href="#">home</a></li>
								<li><a href="#">about</a></li>
								<li><a href="#">scholarships</a></li>
								<li><a href="#">fee structure</a></li>
								<li><a href="#">faqs</a></li>
								<li><a href="#">blogs</a></li>
								<li><a href="#">contact us</a></li>
								<li><a href="#" class="btn btn-primary btn-sm">Step Online</a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main id="main-section" class="main-section">
