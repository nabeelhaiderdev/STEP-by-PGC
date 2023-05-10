<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package STEP by PGC
 * @since 1.0.0
 */

/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'glide_theme_acf_init' );
function glide_theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// Register a block - Spacer
		acf_register_block(
			array(
				'name'            => 'spacer',
				'title'           => __( 'Theme Spacer', 'step_td' ),
				'description'     => __( 'A custom spacer block for theme.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Spacer Block' ),
				'align'           => 'full',
				'supports'        => array(
					'align' => array( 'full' ),
				),
			)
		);

		// Register a block - Button
		acf_register_block(
			array(
				'name'            => 'button',
				'title'           => __( 'Theme Buttons', 'step_td' ),
				'description'     => __( 'A custom button block with theme styles.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Button' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'acfblock',
				'title'           => __( 'ACFBlock', 'step_td' ),
				'description'     => __( 'A custom ACFBlock.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'ACFBlock' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'step_td' ),
				'description'     => __( 'A custom image alongside text.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - Icons Alongsite Text
		acf_register_block(
			array(
				'name'            => 'icons-alongsite-text',
				'title'           => __( 'Icons Alongsite Text', 'step_td' ),
				'description'     => __( 'A custom Icons Alongsite Text.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Icons Alongsite Text' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		// Register a block - News and events
		acf_register_block(
			array(
				'name'            => 'news-and-events',
				'title'           => __( 'News and events', 'step_td' ),
				'description'     => __( 'A custom News and events.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'News and events' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);

		acf_register_block(
			array(
				'name'            => 'key-features',
				'title'           => __( 'key Features', 'step_td' ),
				'description'     => __( 'A key Features.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'key Features' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'testimonials',
				'title'           => __( 'Testimonials', 'step_td' ),
				'description'     => __( 'A Testimonials.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Testimonials' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);

		acf_register_block(
			array(
				'name'            => 'Faq',
				'title'           => __( 'Faq', 'step_td' ),
				'description'     => __( 'A Faq.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Faq' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'Event detail',
				'title'           => __( 'Event detail', 'step_td' ),
				'description'     => __( 'A Event detail.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Event detail' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'Features',
				'title'           => __( 'Features', 'step_td' ),
				'description'     => __( 'A Features.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Features' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'Home Posts',
				'title'           => __( 'Home Posts', 'step_td' ),
				'description'     => __( 'A Home Posts.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'Home Posts' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);

		acf_register_block(
			array(
				'name'            => 'contact',
				'title'           => __( 'contact', 'step_td' ),
				'description'     => __( 'A contact.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'contact' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);


	}
}
// Register a block Video
		acf_register_block(
			array(
				'name'            => 'video',
				'title'           => __( 'Video', 'step_td' ),
				'description'     => __( 'A Video.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'video' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);


	}
		// Register a block sidebar news and events
		acf_register_block(
			array(
				'name'            => 'sidebar-event',
				'title'           => __( 'Sidebar-Event', 'step_td' ),
				'description'     => __( 'A Event.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'event' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);

		// Register a block sidebar contact
		acf_register_block(
			array(
				'name'            => 'sidebar-contact',
				'title'           => __( 'Sidebar-Contact', 'step_td' ),
				'description'     => __( 'A Sidebar Contact.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'sidebar-contact' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		// Register a block sidebar recent posts
		acf_register_block(
			array(
				'name'            => 'sidebar-recent-post',
				'title'           => __( 'Sidebar-Recent-Post', 'step_td' ),
				'description'     => __( 'A Sidebar Recent-Post.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'sidebar-recent-post' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
		// Register a block sidebar Category
		acf_register_block(
			array(
				'name'            => 'sidebar-category',
				'title'           => __( 'Sidebar Category', 'step_td' ),
				'description'     => __( 'A Sidebar Category.', 'step_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'sidebar-category' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align' => false,
				),
				// 'example'         => array(
				// 	'attributes' => array(
				// 		'mode' => 'preview',
				// 		'data' => array(
				// 			'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
				// 		),
				// 	),
				// ),
			)
		);
