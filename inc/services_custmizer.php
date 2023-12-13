<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'service_section',
	[
		'title'       => esc_html__( 'Services Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'services_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'service_section',
		'default'  => 'services',
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '#services',
				'function' => 'html',
			)
		)
	]
);
// Heading SubText
new \Kirki\Field\Text(
	[
		'settings' => 'services_subtitle',
		'label'    => esc_html__( 'Subtitle', 'anoor' ),
		'section'  => 'service_section',
		'default'  => esc_html__( 'My Services', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'services_subtitle' => [
				'selector'        => '.service-section .section-title h2',
				'render_callback' => function() {
					return get_theme_mod('services_subtitle');
				},
			]
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
		'settings' => 'services_title',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'service_section',
		'default'  => esc_html__( 'What I Do', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'services_title' => [
				'selector'        => '.service-section .section-title h3',
				'render_callback' => function() {
					return get_theme_mod('services_title');
				},
			]
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

// Services Repeter
new \Kirki\Field\Repeater(
	[
		'settings' => 'services_repeater_setting',
		'label'    => esc_html__( 'Services', 'anoor' ),
		'section'  => 'service_section',
		'priority' => 10,
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Services', 'anoor' ),
			'field' => 'link_text',
		],
		'default'  => [
			[
				'services_title_text'   => esc_html__( 'Web Design', 'anoor' ),
                'services_textarea'   => esc_html__( '85', 'anoor' ),
			],
		],
		'fields'   => [
            'services_icon_white' =>[
                'type'        => 'image',
                'label'       => esc_html__( 'Icon Image White', 'anoor' ),
                'description' => esc_html__( 'Add icons as image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/service/1.png',
              
            ],

            'services_icon_dark' =>[
                'type'        => 'image',
                'label'       => esc_html__( 'Icon Image Dark', 'anoor' ),
                'description' => esc_html__( 'Add icons as image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/service/img-1.png',
              
            ],

			'services_title_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Website Design', 'anoor' ),
			],
			
			'services_textare'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'anoor' ),
                'default'  => esc_html__( 'I have complete 125+ website design for my clients.', 'anoor' ),

			],
		],
	]
);
}