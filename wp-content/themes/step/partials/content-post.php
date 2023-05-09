<?php
/**
 * Template part for displaying single post
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

<div id="content-twocols" class="container blogs">                
                <div id="content">
                    <article class="blog-details">
						<div class="img-holder"> <?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
					                                <?php the_post_thumbnail( 'full' ); ?>
</a>
                                          <?php } else { ?>
   <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/defaults/default-image.jpg'; ?>" alt="Default Thumbnail"></a>
<?php } ?></div>
                        <div class="textbox">
                            <div class="post-meta">
                                <span class="post-author">by <?php the_author(); ?></span>
                                <time class="post-date" datetime="2022-03-24"><?php the_date('M m, Y')?></time>
                            </div>
                            <h2><?php the_title();?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </article>
                </div>		
				<div id="sidebar">
					  <?php dynamic_sidebar( 'sidebar-blog' ); ?>
				</div>		
                <!-- <aside id="sidebar">
                    
                </aside> -->
            </div>
