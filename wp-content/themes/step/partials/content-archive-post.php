<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

$author_id = get_the_author_meta( 'ID' );
    $first_name = get_the_author_meta( 'first_name', $author_id );
    $last_name = get_the_author_meta( 'last_name', $author_id );
    $display_name = get_the_author_meta( 'display_name', $author_id );

    
    

?>
 
 <article class="blog-details">
	
	<div class="img-holder"> 
		<?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
					    <?php the_post_thumbnail( 'full' ); ?></a>
    	 <?php } else { ?>
   <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/defaults/default-image.jpg'; ?>" alt="Default Thumbnail"></a>
<?php } ?></div>

						<div class="textbox">
                            <div class="post-meta">
                                <span class="post-author">
								<?php if ( ! empty( $first_name ) && ! empty( $last_name ) ) {
									echo $first_name . ' ' . $last_name;
								} else {
									echo $display_name;
								} ?></span>
                                <time class="post-date" datetime="2022-03-24"><?php the_date('M m, Y'); ?></time>
                            </div>
                            <<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
 						<?php if ( has_excerpt() ) {
                            the_excerpt();
                        } else {
                              $content = get_the_content();
                            if ( strlen( $content ) > 150 ) {
                                $content = substr( $content, 0, 151 ) . '...';
                                $read_more_link = '<a href="' . get_permalink() . '">Read more</a>';
                                $content .= $read_more_link;
                        }
                            echo $content;
                        } ?>
                        </div>
                    </article>
					

<!-- #post-<?php the_ID(); ?> -->
