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

$step_blk_sb_cat_title = ( isset( $block_fields['step_blk_sb_cat_title'] ) ) ? $block_fields['step_blk_sb_cat_title'] : null;
$step_blk_sb_cat_noc = ( isset( $block_fields['step_blk_sb_cat_noc'] ) ) ? $block_fields['step_blk_sb_cat_noc'] : null;
$step_blk_sb_cat_choices = ( isset( $block_fields['step_blk_sb_cat_choices'] ) ) ? $block_fields['step_blk_sb_cat_choices'] : null;
?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
<?php 
if ($step_blk_sb_cat_choices == 'blog'){ ?>
	 <div class="widget widget-recent">
		 <div class="widget widget-blog-cat">
			 <h4><?php echo $step_blk_sb_cat_title; ?></h4>
             		<ul>
					<?php 
					$categories = get_categories(array(
						'parent' => 0, // Get only top-level categories
						'hide_empty' => false // Include categories with no posts
					));
					if($categories){
            		foreach($categories as $category) {?>
                            <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" title="<?php echo esc_attr( $category->name ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
					<?php }?>
                        </ul>
                    </div>
			<?php }?>
		</div>	
		<?php } else {
			$terms = get_terms(array(
				'taxonomy' => 'courses',
				'hide_empty' => false,
			));
			?>
			<div class="widget widget-categories">
				<h4>Category</h4>
				<?php if($terms){ ?>
					<ul>
						<?php foreach ($terms as $term ) {
							$term_link = get_term_link($term, 'courses');
							?>
							<li><a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>
<?php }?>
</div>
