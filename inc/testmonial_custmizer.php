<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'testimonial_section',
	[
		'title'       => esc_html__( 'Testimonial Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'testimonail_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'testimonial_section',
		'default'  => 'testimonial',
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '#testimonial',
				'function' => 'html',
			)
		)
	]
);
// Heading SubText
new \Kirki\Field\Text(
	[
		'settings' => 'testimonial_subtitle',
		'label'    => esc_html__( 'Subtitle', 'anoor' ),
		'section'  => 'testimonial_section',
		'default'  => esc_html__( 'Testimonial', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'testimonial_subtitle' => [
				'selector'        => '.testimonial-section .section-title h2',
				'render_callback' => function() {
					return get_theme_mod('testimonial_subtitle');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.section-title h2',
				'function' => 'html',
			)
		)
	]
);

// Heading Title
new \Kirki\Field\Text(
	[
		'settings' => 'testimonial_title',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'testimonial_section',
		'default'  => esc_html__( 'What My Client Says', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'testimonial_title' => [
				'selector'        => '.testimonial-section .section-title h3',
				'render_callback' => function() {
					return get_theme_mod('testimonial_title');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.section-title h3',
				'function' => 'html',
			)
		)
	]
);

// Testimonial Repeter
new \Kirki\Field\Repeater(
	[
		'settings' => 'testimonial_repeater_setting',
		'label'    => esc_html__( 'Services', 'anoor' ),
		'section'  => 'testimonial_section',
		'priority' => 10,
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Reviews', 'anoor' ),
			'field' => '',
		],

		'fields'   => [
            'client_images' =>[
                'type'        => 'image',
                'label'       => esc_html__( 'Image', 'anoor' ),
                'description' => esc_html__( 'Select Client Image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/testimonial/1.jpg',
              
            ],

			'client_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Name', 'anoor' ),
                'default'  => esc_html__( 'William Henry', 'anoor' ),
			],

            'client_designiation'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Designation', 'anoor' ),
                'default'  => esc_html__( 'Manager', 'anoor' ),
			],
			
			
			'client_review'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Review', 'anoor' ),
                'default'  => esc_html__( 'I have complete 125+ website design for my clients.', 'anoor' ),
			],
		],
	]
);
}