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

$icons = ( isset( $block_fields['icons'] ) ) ? $block_fields['icons'] : null;
$step_blk_iat_title = ( isset( $block_fields['step_blk_iat_title'] ) ) ? $block_fields['step_blk_iat_title'] : null;
$step_blk_iat_button = ( isset( $block_fields['step_blk_iat_button'] ) ) ? $block_fields['step_blk_iat_button'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

<section class="section-courses ">
                <div class="container">
                    <div class="explore-courses">
                        <div class="courses-header">
                            <h2><?php echo htmlspecialchars_decode($step_blk_iat_title);?></h2>
                            <a class="viewall-link" href="<?php echo $step_blk_iat_button;?>">View all <i class="fas fa-arrow-right"></i></a>

                        </div>
                        <ul class="popular-courses">
							<?php							
							foreach($icons as $icon){
							?>
                            <li>
                                <a href="#" class="course-box">
                                    <div class="img-holder">
                                        <img class="clr-img" src="<?php echo $icon['icon'];?>" alt="course-icon">
                                        <img class="white-img" src="<?php echo $icon['hover_icon'];?>" alt="course-icon">
                                    </div>
                                    <div class="course-detail">
                                        <h4><?php echo $icon['title'];?></h4>
                                        <h5><?php echo $icon['description'];?></h5>
                                    </div>
                                </a>
                            </li>
							<?php
							}
							?>
                        </ul>
                    </div>
                </div>
            </section>

</div>
