<?php
/**
 * Template part for displaying single post of news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */


$post_data=get_queried_object();
$pID  = get_the_ID();
if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$post_fields = get_fields_escaped( $pID );
}

// Post Tags & Categories
// $step_post_tags = get_the_tags($pID);
$step_post_categories = get_categories($pID);

$step_posttitle=glide_page_title('step_posttitle');

?>

	<article class="news-details">
		<h2><?php the_title() ?></h2>
		<div class="post-meta">
			<time class="post-date" datetime="2022-03-24"><?php the_date('M m, Y')?></time>
		</div>
		<div class="img-holder"><?php the_post_thumbnail('full')?></div>
		<div class="textbox">
			<a href="#" class="btn btn-primary btn-sm">View Image</a>
			<h3>Introduction</h3>
			<p><?php the_content()?></p>
		</div>
	</article>
                
