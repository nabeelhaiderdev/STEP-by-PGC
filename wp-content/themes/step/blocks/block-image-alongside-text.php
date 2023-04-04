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

$step_iat_title        = $block_fields['step_iat_title'];
$step_iat_text         = html_entity_decode( $block_fields['step_iat_text'] );
$step_iat_button       = $block_fields['step_iat_button'];
$step_iat_img_location = $block_fields['step_iat_img_location'];
$step_iat_image        = $block_fields['step_iat_image'];


if ( $step_iat_img_location == 'left' ) {
	$step_iat_img_location = 'image-at-left';
} else {
	$step_iat_img_location = 'image-at-right';
}


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="iat-section two-columns justify-content-between align-items-center <?php echo $step_iat_img_location; ?>">
		<div class="iat-text column">
			<?php if ( $step_iat_title ) { ?>
				<h2><?php echo $step_iat_title; ?></h2>
			<?php } ?>
			<?php if ( $step_iat_text ) { ?>
				<?php echo $step_iat_text; ?>
			<?php } ?>
			<?php if ( $step_iat_button ) { ?>
				<div class="iat-button">
					<?php echo glide_acf_button( $step_iat_button, 'button' ); ?>
				</div>
			<?php } ?>
		</div>
		<?php if ( $step_iat_image ) { ?>
			<div class="iat-image column">
				<img src="<?php echo wp_get_attachment_image_url( $step_iat_image, 'full' ); ?>" alt="">
			</div>
		<?php } ?>
	</div>

</div>
