<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'blog_section',
	[
		'title'       => esc_html__( 'Blog Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'blog_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'blog_section',
		'default'  => 'blog',
		'priority' => 10,
		// 'transport' => 'postMessage',
		// 'js_vars'   => array(
		// 	array(
		// 		'element'  => '#blog',
		// 		'function' => 'html',
		// 	)
		// )
	]
); 

// Heading SubText
new \Kirki\Field\Text(
	[
		'settings' => 'blog_subtitle',
		'label'    => esc_html__( 'Subtitle', 'anoor' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'Blog', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'blog_subtitle' => [
				'selector'        => '.blog-section .section-title h2',
				'render_callback' => function() {
					return get_theme_mod('blog_subtitle');
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
		'settings' => 'blog_title',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'Latest News', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'blog_title' => [
				'selector'        => '.blog-section .section-title h3',
				'render_callback' => function() {
					return get_theme_mod('blog_title');
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

// Post count
new \Kirki\Field\Number(
	[
		'settings' => 'post_number_setting',
		'label'    => esc_html__( 'Post Per Page', 'anoor' ),
		'section'  => 'blog_section',
		'default'  => 3,
		'choices'  => [
			'min'  => 3,
			'max'  => 10,
			'step' => 1,
		],
	]
);
}