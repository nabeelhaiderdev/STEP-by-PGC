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
$step_tg_title = ( isset( $block_fields['step_tg_title'] ) ) ? $block_fields['step_tg_title'] : null;
$step_testimonials_bakcground_image = ( isset( $block_fields['step_testimonials_bakcground_image'] ) ) ? $block_fields['step_testimonials_bakcground_image'] : null;
$expand_testiminials_opt = ( isset( $block_fields['expand_testiminials_opt'] ) ) ? $block_fields['expand_testiminials_opt'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

             <section class="testimonial-block">
                <div class="bg-image">
                    <img src="<?php echo $step_testimonials_bakcground_image;?>" alt="Image Description">
                </div>
                <div class="container">
                    <div class="testimonial-head">
                        <h2><?php echo html_entity_decode($step_tg_title);?></h2>
                    </div>
                    <div class="testimonialSlider">
						<?php
						foreach($expand_testiminials_opt as $row){
						?>
                        <div class="slick-slide">
                            <blockquote class="testimonial-box">
                                <div class="title-info">
                                    <div class="user-image"><img src="<?php echo  $row['step_testimonials_eo_pic'];?>" alt="<?php echo  $row['step_testimonials_ep_name'];?>"></div>
                                    <div class="profile-info">
                                        <h3><?php echo  $row['step_testimonials_ep_name'];?></h3>
                                        <h5><?php echo  $row['step_eo_testimonial_position'];?></h5>
                                        <span class="tag"><?php echo  $row['step_testi_ponial_ep_degree'];?></span>
                                    </div>
                                </div>
                                <q>
                                    <?php echo  $row['step_ep_testimonials_description'];?>
                                </q>
                            </blockquote>
                        </div>
						<?php
						}
						?>	
                    </div>
                </div>
            </section>

</div>
