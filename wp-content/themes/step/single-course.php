<?php
/**
 * The template for displaying all posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package STEP by PGC
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;
?>


<section class="visual-inner">
            <div class="img-holder" style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)"></div>
            <div class="container">
                <div class="text-box">
                    <h1><?php the_title(); ?></h1>
                    <div class="breadcrumb-holder">
						<?php my_breadcrumbs(); ?>
                    </div>
                </div>
            </div>
        </section>


<?php
global $courseterms;
?>
<section id="page-section" class="page-section">
	
	<div id="content-twocols" class="container">                
		<div id="sidebar">
			<div class="alignwide  block-acf-sidebar-category glide-block-sidebar-category">
				<div class="widget widget-categories">
				<h4>Category</h4>
				<?php
				$courseterms = get_terms( array(
					'taxonomy' => 'courses',
					'hide_empty' => false,
				) );
				?>
					<ul>
						<?php
						if (!empty($courseterms)) {
							foreach ($courseterms as $course_term) {
								?>
								<li><a href="#" class="course-catbtn-itm" data-id="<?php echo ($course_term->term_id) ?>"><?php echo ($course_term->name) ?></a></li>
								<?php
							}
						}
						?>
					</ul>
				</div>
			</div>

			<div class="widget widget-checklist">
				<ul>
					<?php
					$q_args = array(
						'post_type' => 'course',
						'posts_per_page' => 25,
						'fields' => 'ids',
						'order' => 'ASC',
					);
					$query = new WP_Query( $q_args );
					$post_ids = $query-> posts;
					if (isset($post_ids[0])) {
						foreach ($post_ids as $course_id) {
							?>
							<li>
								<label class="custom-checkbox">
									<input type="checkbox" class="course-chkbtn" value="<?php echo ($course_id) ?>"<?php echo $pID == $course_id ? ' checked' : '' ?>>
									<span class="label">
										<span class="checkbox"><i class="fa fa-check"></i></span>
										<?php echo get_the_title($course_id) ?>
									</span>
								</label>
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
		
	<!-- Content Start -->
	<div id="content">
	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', get_post_type() );
	} ?>
	</div>

	</div>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php 
add_action('wp_footer', function() {
	?>
	<script>
		jQuery('.course-catbtn-itm').on('click', function(ev) {
			ev.preventDefault();
			var this_id = jQuery(this).attr('data-id');
			jQuery('.course-categitm-con').hide();
			jQuery('.course-catitm-' + this_id).removeAttr('style');
		});

		jQuery('.course-chkbtn').on('change', function() {
			var this_chk = jQuery(this);
			chk_ids = [];
			jQuery('.course-chkbtn').each(function() {
				var this_id = jQuery(this).val();
				if (jQuery(this).is(":checked")) {
					chk_ids.push(this_id);
					jQuery('.course-postitm-' + this_id).removeAttr('style');
				} else {
					jQuery('.course-postitm-' + this_id).hide();
				}
			});
			//console.log(chk_ids);
		});
	</script>
	<?php
}, 50);
get_footer();
