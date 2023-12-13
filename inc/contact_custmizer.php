<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'contact_section',
	[
		'title'       => esc_html__( 'Contact Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'contact_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'contact_section',
		'default'  => 'contact',
		'priority' => 10,
	]
);

// Heading SubText
new \Kirki\Field\Text(
	[
		'settings' => 'contact_subtitle',
		'label'    => esc_html__( 'Subtitle', 'anoor' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( 'Get in Touch', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'contact_subtitle' => [
				'selector'        => '.contact-section .section-title h2',
				'render_callback' => function() {
					return get_theme_mod('contact_subtitle');
				},
			],
		],
	]
);

// Heading Title
new \Kirki\Field\Text(
	[
		'settings' => 'contact_title',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( 'Contact With Me', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'contact_title' => [
				'selector'        => '.contact-section .section-title h3',
				'render_callback' => function() {
					return get_theme_mod('contact_title');
				},
			],
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'contact_repeater_setting',
		'label'    => esc_html__( 'Contact Info', 'anoor' ),
		'section'  => 'contact_section',
		'priority' => 10,
		'choices' => [
			'limit' => 3
		],
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Contact Info', 'anoor' ),
			'field' => '',
		],

		'fields'   => [
            'contact_icon_white' =>[
                'type'        => 'image',
                'label'       => esc_html__( 'Icon Image White', 'anoor' ),
                'description' => esc_html__( 'Add icons as image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/service/1.png',
              
            ],

            'contact_icon_dark' =>[
                'type'        => 'image',
                'label'       => esc_html__( 'Icon Image Dark', 'anoor' ),
                'description' => esc_html__( 'Add icons as image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/service/img-1.png',
              
            ],

			'contact_title_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Contact Info', 'anoor' ),
			],
			
			'contact_textare'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'anoor' ),
                'default'  => esc_html__( '244 Royal Mesa, New Jersey', 'anoor' ),
			],
		],
	]
);


// Contact Short
new \Kirki\Field\Text(
	[
		'settings' => 'contact_shortcode',
		'label'    => esc_html__( 'Contact Form Shortcode', 'anoor' ),
		'section'  => 'contact_section',
		'priority' => 11,
		'default'  => esc_html__( '[contact-form-7 id="adb856d" title="Contact form 1"]', 'anoor' ),
	]
);
}