<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'portfolio_section',
	[
		'title'       => esc_html__( 'Portfolio Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);
// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'portfolio_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'portfolio_section',
		'default'  => 'portfolio',
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '#portfolio',
				'function' => 'html',
			)
		)
	]
);

// Heading SubText
new \Kirki\Field\Text(
	[
		'settings' => 'portfolio_subtitle',
		'label'    => esc_html__( 'Subtitle', 'anoor' ),
		'section'  => 'portfolio_section',
		'default'  => esc_html__( 'Portfolio', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'portfolio_subtitle' => [
				'selector'        => '.portfolio-section .section-title h2',
				'render_callback' => function() {
					return get_theme_mod('portfolio_subtitle');
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
		'settings' => 'portfolio_title',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'portfolio_section',
		'default'  => esc_html__( 'My Latest Works', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'portfolio_title' => [
				'selector'        => '.portfolio-section .section-title h3',
				'render_callback' => function() {
					return get_theme_mod('portfolio_title');
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

// Repeater
new \Kirki\Field\Repeater(
	[
		'settings' => 'portfolio_repeater',
		'label'    => esc_html__( 'Portfolio Items', 'anoor' ),
		'section'  => 'portfolio_section',
		'priority' => 10,
		'choices' => [
			'limit' => 4
		],
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Portfolio', 'anoor' ),
			'field' => '',
		],

		'fields'   => [
			'portfolio_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Protfolio Title', 'anoor' ),
			],

			'portfolio_cagetroy'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Category', 'anoor' ),
                'default'  => esc_html__( 'Category', 'anoor' ),
			],
			
			'portfolio_image'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'anoor' ),
                'default'     => get_template_directory_uri('template_directory') .'/assets/images/portfolio/1.jpg',
			],
		],
	]
);
}