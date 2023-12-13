<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);
// Footer Copyright
new \Kirki\Field\Textarea(
	[
		'settings' => 'footer_copyright',
		'label'    => esc_html__( 'Copyright Text', 'anoor' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '©copyright by anoor', 'anoor' ),
		'priority' => 10,
		'partial_refresh'    => [
			'footer_copyright' => [
				'selector'        => '.footer-section p',
				'render_callback' => function() {
					return get_theme_mod('footer_copyright');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.footer-section p',
				'function' => 'html',
			)
		)
	]
);

// Footer Social
new \Kirki\Field\Repeater(
	[
		'settings' => 'footer_social',
		'label'    => esc_html__( 'Social', 'anoor' ),
		'section'  => 'footer_section',
		'priority' => 10,
        'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Link', 'anoor' ),
			'field' => '',
		],

		'fields'   => [
			'footer_social_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'anoor' ),
                'default'  => esc_html__( 'Facebook', 'anoor' ),
			],
			
			'footer_social_link'   => [
				'type'        => 'url',
				'label'       => esc_html__( 'Link', 'anoor' ),
                'default'  => 'www.facebook.com',
			],
		],
	]
);
}