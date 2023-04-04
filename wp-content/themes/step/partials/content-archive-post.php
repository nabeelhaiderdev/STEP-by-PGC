<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */



?> <article id="post-<?php the_ID(); ?>" <?php post_class("post-box column"); ?>>
	<div class="post-box-img post-image">
		<a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) { ?> <div class="post-featured-thumb"> <?php the_post_thumbnail(
								'thumb_600',
								array(
									'alt'   => get_the_title(),
									'title' => get_the_title(),
								)
							); ?> </div> <?php } else { ?> <img
				src="<?php echo get_template_directory_uri(); ?>/assets/img/admin/defaults/default-image.webp" class=""
				alt="<?php get_the_title(); ?>" title="<?php get_the_title(); ?>"> <?php } ?> </a>
	</div>
	<div class="post-content"> <?php get_template_part( 'partials/post-meta-archive' ); ?> <div class="post-box-title post-title">
			<h4 id="post-<?php the_ID(); ?>" class="post-title-archive">
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h4>
		</div>
		<div class="post-box-excerpt">
			<p><?php echo glide_excerpt_nomore( 130 ); ?> </p>
		</div>
		<a href="#" class="learn-more">Learn More</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
