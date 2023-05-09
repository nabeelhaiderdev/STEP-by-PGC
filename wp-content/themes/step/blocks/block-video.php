<?php
/**
 * Block Name: ACF Video
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
$step_blk_vid_title = ( isset( $block_fields['step_blk_vid_title'] ) ) ? $block_fields['step_blk_vid_title'] : null;
$step_blk_video_video_url = ( isset( $block_fields['step_blk_video_video_url'] ) ) ? $block_fields['step_blk_video_video_url'] : null;
$step_blk_vid_video_thumbnail = ( isset( $block_fields['step_blk_vid_video_thumbnail'] ) ) ? $block_fields['step_blk_vid_video_thumbnail'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

 <section class="section-video">
                <div class="container">
                    <h2><?php echo $step_blk_vid_title; ?></h2>
                    <div class="video-holder">
                        <a href="<?php echo $step_blk_video_video_url; ?>" data-fancybox="video-gallery" class="video-frame">
                            <img src="<?php echo $step_blk_vid_video_thumbnail;?>" alt="<?php echo $step_blk_vid_title; ?>">
                            <span class="btn-play"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </section>            

</div>
