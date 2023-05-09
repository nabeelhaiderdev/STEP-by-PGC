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

$step_blk_sb_rp_title = ( isset( $block_fields['step_blk_sb_rp_title'] ) ) ? $block_fields['step_blk_sb_rp_title'] : null;
$step_blk_sb_rp_number_of_posts = ( isset( $block_fields['step_blk_sb_rp_number_of_posts'] ) ) ? $block_fields['step_blk_sb_rp_number_of_posts'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<?php 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $step_blk_sb_rp_number_of_posts,
    'orderby' => array(
        'date' => 'DESC',
    ),
);
$query = new WP_Query( $args );
?>
	 <div class="widget widget-recent">
		 <h4><?php echo $step_blk_sb_rp_title; ?></h4>
		 <?php if ( $query->have_posts() ) {?>
			<?php  while ( $query->have_posts() ) {
				$query->the_post()
				?>
			<article class="post-small">
				<div class="img-holder"> 
					<?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
					                                <?php the_post_thumbnail( 'thumbnail' ); ?></a>
                     <?php } else { ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/defaults/default-image.jpg'; ?>" alt="Default Thumbnail"></a>
						<?php } ?></div>
				<div class="text-box">
					<?php  if ( get_the_date() ) {?>
					<time class="date" datetime="2023-02-20"><?php the_date('M m, Y'); ?></time>
							<?php } ?>
					<?php  if (get_the_title()) {?>
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<?php } ?>
				</div>
			</article>
			<?php }?>
			<?php } wp_reset_postdata(); wp_reset_query(  ); ?>
		</div>
</div>
