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

$step_blk_nae_title = ( isset( $block_fields['step_blk_nae_title'] ) ) ? $block_fields['step_blk_nae_title'] : null;
$step_blk_nae_number_of_posts = ( isset( $block_fields['step_blk_nae_number_of_posts'] ) ) ? $block_fields['step_blk_nae_number_of_posts'] : null;
$step_blk_nae_button = ( isset( $block_fields['step_blk_nae_button'] ) ) ? $block_fields['step_blk_nae_button'] : null;


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<?php 
$args = array(
    'post_type' => 'news',
    'posts_per_page' => $step_blk_nae_number_of_posts,
    'orderby' => array(
        'date' => 'DESC',
    ),
);
$query = new WP_Query( $args );
?>
	
 <section class="section-news-events">
                <div class="container">
                    <header class="section-head">
                        <h2><span><?php echo $step_blk_nae_title; ?></span></h2>
                    </header>
					<?php if ( $query->have_posts() ) {?>
				
                    <div class="news-block">
						<?php  while ( $query->have_posts() ) {
        $query->the_post();
		$title = get_the_title();
		if (strlen($title) > 45) {
			$title = substr($title, 0, 51) . '...';
		}

?>
                        <a class="news-box" href="<?php the_permalink()?>">
                            <div class="textbox">
                                <span class="date"><?php the_date('M m, Y'); ?></span>
                                <h3><?php echo $title; ?></h3>
                            </div>
                            <span class="view-more-btn">
                                View More <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                        <?php }?>
				</div>
					<?php }
wp_reset_postdata(); ?>
                    <div class="btn-block">
						<?php
							if( $step_blk_nae_button ) :
								echo glide_acf_button( $step_blk_nae_button, 'btn btn-primary btn-lg' );
							endif;
						?>
                    </div>
                </div>
            </section>

</div>
