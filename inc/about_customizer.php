<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Section Id
new \Kirki\Field\URL(
	[
		'settings' => 'about_section_id',
		'label'    => esc_html__( 'Section ID', 'anoor' ),
		'section'  => 'about_section',
		'default'  => 'about',
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '#about',
				'function' => 'html',
			)
		)
	]
);

// Animation Text
new \Kirki\Field\Text(
	[
		'settings' => 'About_animation_text_setting_01',
		'label'    => esc_html__( 'Animation Text -1', 'anoor' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Creative', 'anoor' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.about-section .left-text h2',
				'function' => 'html',
			)
		)
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'About_animation_text_setting_02',
		'label'    => esc_html__( 'Animation Text -2', 'anoor' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Designer', 'anoor' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.about-section .right-text h2',
				'function' => 'html',
			)
		)
	]
);

// About Images
new \Kirki\Field\Image(
	[
		'settings'    => 'about_image_setting_url',
		'label'       => esc_html__( 'Upload About Image', 'anoor' ),
		'section'     => 'about_section',
		'default'     => get_template_directory_uri('template_directory') .'/assets/images/about-1.jpg',
	]
);

// Subtitle
new \Kirki\Field\Text(
	[
		'settings' => 'About_subtitle_text_setting',
		'label'    => esc_html__( 'Sub Title', 'anoor' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Hello I’m Jenny Wilson', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'About_subtitle_text_setting' => [
				'selector'        => '.about-wrap .content h2',
				'render_callback' => function() {
					return get_theme_mod('About_subtitle_text_setting');
				},
			],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.content h2',
				'function' => 'html',
			)
			),
	]
]);

// Title
new \Kirki\Field\Text(
	[
		'settings' => 'About_title_text_setting',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'A Graphics Designer', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'About_title_text_setting' => [
				'selector'        => '.about-wrap .content h3',
				'render_callback' => function() {
					return get_theme_mod('About_title_text_setting');
				},
			],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.content h3',
				'function' => 'html',
			)
			)
	]
]);

// Description
new \Kirki\Field\Textarea(
	[
		'settings'    => 'About_description_text_setting',
		'label'       => esc_html__( 'Desctiption', 'anoor' ),
		'section'     => 'about_section',
		'default'     => esc_html__( 'I am a creative Designer. I use animation as a third dimension by which to simplify experiences and kuiding thro each and every interaction. I’m not adding motion just to spruce things up, but doing it in ways that.', 'anoor' ),
		'partial_refresh'    => [
			'About_description_text_setting' => [
				'selector'        => '.about-wrap .content p',
				'render_callback' => function() {
					return get_theme_mod('About_description_text_setting');
				}
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.content p',
				'function' => 'html',
			)
		)
	]
);

// Progress Bar

new \Kirki\Field\Repeater(
	[
		'settings' => 'repeater_setting',
		'label'    => esc_html__( 'Progress Section', 'anoor' ),
		'section'  => 'about_section',
		'priority' => 10,
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Progress Number', 'anoor' ),
			'field' => 'link_text',
		],
		'default'  => [
			[
				'Title_text'   => esc_html__( 'Web Design', 'anoor' ),
				'link_text'   => esc_html__( '85', 'anoor' ),
			],
		],
		'fields'   => [
			'link_text'   => [
				'type'        => 'number',
				'label'       => esc_html__( 'Progress Number', 'anoor' ),
				'description' => esc_html__( 'You can your progress number.', 'anoor' ),
				'default'     => '10',
                'choices'  => [
                    'min'  => -10,
                    'max'  => 80,
                    'step' => 1,
                ],
				'transport' => 'postMessage',
				'js_vars'   => array(
					array(
						'element'  => '.number h3',
						'function' => 'html',
					)
				)
			],
			
			'Title_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Web Design', 'anoor' ),
			],
		],
	]
);
}