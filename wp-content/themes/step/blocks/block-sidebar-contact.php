<?php
/**
 * Block Name: Sidebar News and Events
 *
 * The template for displaying the custom gutenberg block named Icons Alongsite Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

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

// Custom - ACF variables.


$step_social_fb       = ( isset( $option_fields['step_social_fb'] ) ) ? $option_fields['step_social_fb'] : null;
$step_social_tw       = ( isset( $option_fields['step_social_tw'] ) ) ? $option_fields['step_social_tw'] : null;
$step_social_li       = ( isset( $option_fields['step_social_li'] ) ) ? $option_fields['step_social_li'] : null;
$step_social_in       = ( isset( $option_fields['step_social_in'] ) ) ? $option_fields['step_social_in'] : null;
$step_social_yt       = ( isset( $option_fields['step_social_in'] ) ) ? $option_fields['step_social_in'] : null;





// Block variables
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input

$step_blk_sb_ct_title = ( isset( $block_fields['step_blk_sb_ct_title'] ) ) ? $block_fields['step_blk_sb_ct_title'] : null;
$step_blk_sb_ct_phone = ( isset( $block_fields['step_blk_sb_ct_phone'] ) ) ? $block_fields['step_blk_sb_ct_phone'] : null;
$step_blk_sb_ct_time = ( isset( $block_fields['step_blk_sb_ct_time'] ) ) ? $block_fields['step_blk_sb_ct_time'] : null;
$step_blk_sb_ct_email = ( isset( $block_fields['step_blk_sb_ct_email'] ) ) ? $block_fields['step_blk_sb_ct_email'] : null;
$step_blk_sb_ct_sub_title = ( isset( $block_fields['step_blk_sb_ct_sub_title'] ) ) ? $block_fields['step_blk_sb_ct_sub_title'] : null;



?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<!-- id="sidebar" -->
<aside >
					  <div class="related-box">
                        <h4><?php echo $step_blk_sb_ct_title; ?></h4>
                        <ul class="related-list">
                            <li>
                                <span class="text"><a href="tel:<?php echo $step_blk_sb_ct_phone; ?>"><?php echo $step_blk_sb_ct_phone; ?></a><br> <?php echo $step_blk_sb_ct_time; ?></span>
                            </li>
                            <li>
                                <span class="text"><a href="mailto:<?php echo $step_blk_sb_ct_email; ?>"> <?php echo $step_blk_sb_ct_email; ?></a></span>
                            </li>
                        </ul>
                        
                        <h4><?php echo $step_blk_sb_ct_sub_title; ?></h4>
                        <ul class="social-networks">
                            <li><a href="<?php echo $step_social_fb; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $step_social_tw; ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $step_social_in; ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo $step_social_yt; ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </aside>
</div>
