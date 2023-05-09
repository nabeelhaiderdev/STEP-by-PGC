<?php
/**
 * Template part for displaying single post of news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */


 
$post_data=get_queried_object();
$pID  = get_the_ID();
if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$post_fields = get_fields_escaped( $pID );
}


// Post Tags & Categories
// $step_post_tags = get_the_tags($pID);
$step_post_categories = wp_get_post_terms($pID, 'courses');
$step_posttitle=glide_page_title('step_posttitle');
$step_post_short_intro = $post_fields ['step_spo_crs_sh_intro'];
$video_link = $post_fields['step_spo_crs_video_link'];
$course_categ_id = isset($step_post_categories[0]->term_id) ? $step_post_categories[0]->term_id : '';

global $courseterms;
?>
		<h4 class="heading-covered">Courses</h4>

		<div class="course-categitm-con course-catitm-<?php echo ($course_categ_id) ?> course-postitm-<?php echo ($pID) ?>">
			<h2><?php the_title()?></h2>
			<p><?php echo $step_post_short_intro; ?></p>
			<?php
			the_content();
			?>
		</div>
		<?php
		
		if (!empty($courseterms)) {
			foreach ($courseterms as $course_term) {
				$q_args = array(
					'post_type' => 'course',
					'posts_per_page' => 1,
					'fields' => 'ids',
					'post__not_in' => array($pID),
					'tax_query' => array(
						array(
							'taxonomy' => 'courses',
							'field' => 'id',
							'terms' => $course_term->term_id,
						)
					)
				);
				$query = new WP_Query( $q_args );
				$post_ids = $query-> posts;
				if (isset($post_ids[0])) {
					$cat_course_id = $post_ids[0];
					$cat_course_post = get_post($cat_course_id);

					$course_post_fields = get_fields_escaped( $cat_course_id );
					$course_post_short_intro = $course_post_fields ['step_spo_crs_sh_intro'];
					?>
					<div class="course-categitm-con course-catitm-<?php echo ($course_term->term_id) ?> course-postitm-<?php echo ($cat_course_id) ?>" style="display: none;">
						<h2><?php echo ($cat_course_post->post_title) ?></h2>
						<p><?php echo $course_post_short_intro; ?></p>
						<?php
						echo apply_filters('the_content', $cat_course_post->post_content)
						?>
					</div>
					<?php
				}
				?>
				
				<?php
			}
		}
		?>

	</div>
</div>
            <section class="section-video">
                <div class="container">
					<?php if($video_link){?>

                    <h2><?php echo $video_link['title']; ?></h2>
                    <div class="video-holder">
                        <a href="<?php echo $video_link['url']; ?>" data-fancybox="video-gallery" class="video-frame">
                            <img src="<?php echo $video_link['poster']; ?>" alt="<?php echo $video_link['title']; ?>">
                            <span class="btn-play"><i class="fa fa-play"></i></span>
                        </a>
						<?php }?>
                
