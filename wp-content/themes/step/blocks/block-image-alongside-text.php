<?php
/**
 * Block Name: Image Alongside Text
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$step_iat_title        = isset($block_fields['step_iat_title']) ? $block_fields['step_iat_title']:NULL;
$step_blk_iat_kicker_text        = isset($block_fields['step_blk_iat_kicker_text'])? $block_fields['step_blk_iat_kicker_text']:"";
$step_iat_text         = isset($block_fields['step_iat_text']) ? html_entity_decode( $block_fields['step_iat_text'] ):NULL;
$step_blk_iat_description         = isset($block_fields['step_blk_iat_description']) ? html_entity_decode( $block_fields['step_blk_iat_description'] ):NULL;
$step_iat_button       = isset($block_fields['step_iat_button']) ? $block_fields['step_iat_button']:NULL;
$step_iat_img_location = isset($block_fields['step_iat_img_location'])? $block_fields['step_iat_img_location']:NULL;
$step_iat_image        = isset($block_fields['step_iat_image'])? $block_fields['step_iat_image']:NULL;
$step_blk_iat_image        = isset($block_fields['step_blk_iat_image'])? $block_fields['step_blk_iat_image']:NULL;
$step_blk_iat_image_text        = isset($block_fields['step_blk_iat_image_text'])? $block_fields['step_blk_iat_image_text']:NULL;


if ( $step_iat_img_location == 'left' ) {
	$step_iat_img_location = 'image-at-left';
} else {
	$step_iat_img_location = 'image-at-right';
}


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<section class="high-achivers about">
                <div class="container">
                    <div class="row-block align-center">
                        <div class="col-block-6 column-left">
                            <h4><?php echo $step_iat_title; ?></h4>
                            <h2><span><?php echo $step_blk_iat_kicker_text; ?></span></h2>
                            <p><?php echo $step_blk_iat_description; ?></p>
                        </div>
                        <div class="col-block-6 column-right center-img">
                            <div class="image-holder with-caption">
                                <img src="<?php echo $step_blk_iat_image?>" alt="About Step">
                                <div class="image-caption">
                                    <h3>
                                       <?php echo $step_blk_iat_image_text;?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

</div>
