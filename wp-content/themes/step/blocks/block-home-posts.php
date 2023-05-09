<?php
/**
 * Block Name: Icons Alongsite Text
 *
 * The template for displaying the custom gutenberg block named Icons Alongsite Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}
// Block variables
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input
$step_blk_hp_title = ( isset( $block_fields['step_blk_hp_title'] ) ) ? $block_fields['step_blk_hp_title'] : null;

$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category' => 1 );
	$myposts = get_posts( $args );	
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<section class="blogs-section">
                <div class="container">
                    <header class="section-head">
                        <h2><span><?php echo $step_blk_hp_title;?></span></h2>
                    </header>
                    <div class="posts-block">
					<?php   
					foreach($myposts as $post){

						$per = get_the_permalink($post->ID);
						//echo '<pre>';
						//print_r($per);
						//echo '</pre>';
						// check for a Featured Image and then assign it to a PHP variable for later use
						$featured_image = "";
						if (has_post_thumbnail($post->ID) ) {
							$featured_image = get_the_post_thumbnail($post->ID,"381");
						}
						$author_id = get_post_field ('post_author', $post->ID);
						$display_auther_name = get_the_author_meta( 'display_name' , $author_id ); 
						$categories = get_the_category($post->ID);
						if ( ! empty( $categories ) ) {
							$category_name = esc_html( $categories[0]->name ); // get the name of the first category
						}
					?>
                        <div class="blog-post">
                            <div class="post-image">
								<?php if($featured_image!="") { ?>
                                <a href="#"><?php echo $featured_image; ?></a>
								<?php } ?>
                                <span class="date"><?php echo date("M j, Y", strtotime($post->post_date));  ;?> </span>
								<!-- Jan 22, 2022 -->
                            </div>
                            <div class="post-body">
                                <div class="post-category">
                                    <span class="course"><a href="#"><?php echo $category_name ;?></a></span>
                                    <span class="author"><a href="#"><?php echo $display_auther_name ;?></a></span>
                                </div>
                                <div class="post-detail">
                                    <h3 class="post-heading">
                                        <a href="#"><?php echo $post->post_title;?></a>
                                    </h3>
                                    <div class="post-description">
                                        <p><?php echo $post->post_content;?></p>
                                    </div>
                                    <div class="btn-block">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn btn-white read-more">
                                            <i class="fas fa-arrow-right"></i> read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php  
					}
					?>	
                    </div>
                </div>
            </section>

             

</div>
