<?php
/**
 * Block Name: BlockName
 *
 * The template for displaying the custom gutenberg block named BlockName.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package The Tower Technologies Ltd.
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

$step_blk_map_url = ( isset( $block_fields['step_blk_map_url'] ) ) ? $block_fields['step_blk_map_url'] : null;
$step_blk_ca = ( isset( $block_fields['step_blk_ca'] ) ) ? $block_fields['step_blk_ca'] : null;
$step_blk_ct = ( isset( $block_fields['step_blk_ct'] ) ) ? $block_fields['step_blk_ct'] : null;
$step_blk_cstime = ( isset( $block_fields['step_blk_cstime'] ) ) ? $block_fields['step_blk_cstime'] : null;
$stp_blk_cclose_time = ( isset( $block_fields['stp_blk_cclose_time'] ) ) ? $block_fields['stp_blk_cclose_time'] : null;

$step_blk_ce = ( isset( $block_fields['step_blk_ce'] ) ) ? $block_fields['step_blk_ce'] : null;
$step_blk_cfb_url = ( isset( $block_fields['step_blk_cfb_url'] ) ) ? $block_fields['step_blk_cfb_url'] : null;
$step_blk_tw_url = ( isset( $block_fields['step_blk_tw_url'] ) ) ? $block_fields['step_blk_tw_url'] : null;
$step_blk_yt_url = ( isset( $block_fields['step_blk_yt_url'] ) ) ? $block_fields['step_blk_yt_url'] : null;
$step_blk_cins_url = ( isset( $block_fields['step_blk_cins_url'] ) ) ? $block_fields['step_blk_cins_url'] : null;
$step_contact_form_id = ( isset( $block_fields['step_contact_form_id'] ) ) ? $block_fields['step_contact_form_id'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<!-- Contact Form -->
            <section class="contact-block">
                <div class="container">
                    <div class="map-block">
                        <iframe src="<?php echo $step_blk_map_url; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row-block flex-direction-reverse">
                        <div class="col-block col-block-7">
                            <h3>Send Message</h3>
                            <!-- Contact Form -->
                            <?php
								echo do_shortcode('[contact-form-7 id="'.$step_contact_form_id.'" title="Contact form 1"]');
								?>
                        </div>
                        <div class="col-block col-block-5">
                            <h3>Contact Details</h3>
                            <ul class="contact-information">
                                <li>
                                    <strong class="title">Address</strong>
                                    <div class="textbox">
                                        <address><?php echo $step_blk_ca;?></address>
                                    </div>
                                </li>
                                <li>
                                    <strong class="title">Telephone</strong>
                                    <div class="textbox">
                                        <span class="text"><a href="tel:<?php echo $step_blk_ct; ?>"><?php echo $step_blk_cstime; ?></a> (<?php echo $stp_blk_cclose_time; ?>)</span>
                                    </div>
                                </li>
                                <li>
                                    <strong class="title">E-mail</strong>
                                    <div class="textbox">
                                        <span class="text email"><a href="mailto:<?php echo $step_blk_ce; ?>"><?php echo $step_blk_ce; ?></a></span>
                                    </div>
                                </li>
                                <li>
                                    <strong class="title">Social</strong>
                                    <div class="textbox">
                                        <ul class="social-networks">
                                            <li><a href="<?php echo $step_blk_cfb_url;?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $step_blk_tw_url;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $step_blk_yt_url;?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="<?php echo $step_blk_cins_url;?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

</div>
