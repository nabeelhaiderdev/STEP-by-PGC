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

$step_tblk_ftr_design = ( isset( $block_fields['step_tblk_ftr_design'] ) ) ? $block_fields['step_tblk_ftr_design'] : null;
$block_design_class = "achievers";
if($step_tblk_ftr_design == 'blue'){
	$block_design_class = ' interbase-scholarship ' ;
}
$step_tblk_ftr_title = ( isset( $block_fields['step_tblk_ftr_title'] ) ) ? $block_fields['step_tblk_ftr_title'] : null;
$step_tblk_ftr_detail = ( isset( $block_fields['step_tblk_ftr_detail'] ) ) ? $block_fields['step_tblk_ftr_detail'] : null;
$step_tblk_ftr_thumbnail = ( isset( $block_fields['step_tblk_ftr_thumbnail'] ) ) ? $block_fields['step_tblk_ftr_thumbnail'] : null;
$step_tblk_ftr_video_title = ( isset( $block_fields['step_tblk_ftr_video_title'] ) ) ? $block_fields['step_tblk_ftr_video_title'] : null;
$step_tblk_ftr_video_icon = ( isset( $block_fields['step_tblk_ftr_video_icon'] ) ) ? $block_fields['step_tblk_ftr_video_icon'] : null;
$step_tblk_ftr_video_description = ( isset( $block_fields['step_tblk_ftr_video_description'] ) ) ? $block_fields['step_tblk_ftr_video_description'] : null;

$step_tblk_ftr_image = ( isset( $block_fields['step_tblk_ftr_image'] ) ) ? $block_fields['step_tblk_ftr_image'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

          
 <section class="high-achivers <?php echo $block_design_class; ?>">
	<div class="container">
		<div class="row-block align-center">
			<div class="col-block-6">
				<?php
				if($step_tblk_ftr_design == 'blue'){
				?>
				<h2>
					<?php echo $step_tblk_ftr_title; ?>
				</h2>
				<?php
				}
				else{
				?>
				<h3>
					<?php echo $step_tblk_ftr_title; ?>
				</h3>
				<?php
					} 
					if($step_tblk_ftr_detail){
						echo html_entity_decode($step_tblk_ftr_detail);
					}
				?>


			</div>
			<?php 
			if($step_tblk_ftr_design == 'blue'){
			?>
			<div class="col-block-6 scholarship-achivers">
				<div class="blog-post">
					<div class="image-holder play-circle">
						<div class="overlay"></div>
						<img src="<?php echo $step_tblk_ftr_thumbnail; ?>" alt="">
						<?php if($step_tblk_ftr_video_url){ ?>
							<a class="btn-play" href="<?php echo $step_tblk_ftr_video_url; ?>" data-fancybox="video-gallery"><i class="fas fa-play"></i></a>
						<?php } ?>
					</div>

					<div class="text-box">
						<?php if($step_tblk_ftr_video_icon){ ?>
							<div class="image-icon"><img src="<?php echo $step_tblk_ftr_video_icon; ?>" alt=""></div>
						<?php } ?>
						<div class="image-desc">
							<h3><?php echo $step_tblk_ftr_video_title; ?></h3>
							<p><?php echo $step_tblk_ftr_video_description; ?></p>
						</div>
					</div>

				</div>
			</div>
			<?php } else { ?>
				<div class="col-block-6 center-img">
					<div class="image-holder">
						<img src="<?php echo $step_tblk_ftr_image ;?>" alt="">
					</div>
				</div>
			<?php } ?>	
		</div>
	</div>

</section>
</div>
