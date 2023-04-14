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

$step_ed_title = ( isset( $block_fields['step_ed_title'] ) ) ? $block_fields['step_ed_title'] : null;
$step_ed_event_date = ( isset( $block_fields['step_ed_event_date'] ) ) ? $block_fields['step_ed_event_date'] : null;
$step_ed_event_image = ( isset( $block_fields['step_ed_event_image'] ) ) ? $block_fields['step_ed_event_image'] : null;
$step_ed_st = ( isset( $block_fields['step_ed_st'] ) ) ? $block_fields['step_ed_st'] : null;
$step_ed_description = ( isset( $block_fields['step_ed_description'] ) ) ? $block_fields['step_ed_description'] : null;
$step_ed_admissions_title = ( isset( $block_fields['step_ed_admissions_title'] ) ) ? $block_fields['step_ed_admissions_title'] : null;
$step_ed_ao = ( isset( $block_fields['step_ed_ao'] ) ) ? $block_fields['step_ed_ao'] : array();
$step_ed_cn = ( isset( $block_fields['step_ed_cn'] ) ) ? $block_fields['step_ed_cn'] : null;
$step_ed_cst = ( isset( $block_fields['step_ed_cst'] ) ) ? $block_fields['step_ed_cst'] : null;
$step_ed_cet = ( isset( $block_fields['step_ed_cet'] ) ) ? $block_fields['step_ed_cet'] : null;
$step_ed_ce = ( isset( $block_fields['step_ed_ce'] ) ) ? $block_fields['step_ed_ce'] : null;
$step_ed_fb_link = ( isset( $block_fields['step_ed_fb_link'] ) ) ? $block_fields['step_ed_fb_link'] : null;
$step_ed_tl = ( isset( $block_fields['step_ed_tl'] ) ) ? $block_fields['step_ed_tl'] : null;
$step_ed_il = ( isset( $block_fields['step_ed_il'] ) ) ? $block_fields['step_ed_il'] : null;
$step_ed_yl = ( isset( $block_fields['step_ed_yl'] ) ) ? $block_fields['step_ed_yl'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	
            
            <div id="content-twocols" class="container news">                
                <div id="content">
                    <article class="news-details">
                        <h2><?php echo $step_ed_title;?></h2>
                        <div class="post-meta">
                            <time class="post-date" datetime="2022-03-24">March 24, 2022</time>
                        </div>
                        <div class="img-holder"><img src="<?php echo $step_ed_event_image;?>" alt="Image Description"></div>
                        <div class="textbox">
                            <a href="#" class="btn btn-primary btn-sm">View Image</a>
                            <h3><?php echo $step_ed_st;?></h3>
                            <p><?php echo $step_ed_description;?></p>
                        </div>
                    </article>
                </div>
                <aside id="sidebar">
                    <div class="related-box admissions-box">
                        <h4><?php echo $step_ed_admissions_title;?></h4>
                        <ul class="related-list">
							<?php
							foreach($step_ed_ao as $stepRow){
							?>
                            <li>
                                <strong class="subtitle"><?php echo $stepRow['step_ed_program'];?></strong>
                                <time class="text" datetime="2023-02-20"><i class="far fa-calendar"></i><?php echo $stepRow['step_ed_aod'];?></time>
                            </li>
                            <?php
							}
							?>
                        </ul>
                        <a href="#" class="btn btn-secondary btn-sm">Apply Now</a>
                    </div>
                    <div class="related-box">
                        <h4>Contact us</h4>
                        <ul class="related-list">
                            <li>
                                <span class="text"><a href="tel:080078608"><?php echo $step_ed_cn;?></a><br> (<?php echo $step_ed_cn;?> - <?php echo $step_ed_cet;;?>)</span>
                            </li>
                            <li>
                                <span class="text"><a href="mailto:step@pgc.edu"> <?php echo $step_ed_ce;?></a></span>
                            </li>
                        </ul>
                        
                        <h4>Follow Us</h4>
                        <ul class="social-networks">
                            <li><a href="<?php echo $step_ed_fb_link;?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $step_ed_tl;?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $step_ed_il;?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo $step_ed_yl;?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        
</div>
