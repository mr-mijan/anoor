<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'404_section',
	[
		'title'       => esc_html__( '404 Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);
// About Images
new \Kirki\Field\Image(
	[
		'settings'    => '404_image',
		'label'       => esc_html__( 'Upload Image', 'anoor' ),
		'section'     => '404_section',
		'default'     => get_template_directory_uri('template_directory') .'/assets/images/error-404.png',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => '404_page_tilte',
		'label'    => esc_html__( 'Title', 'anoor' ),
		'section'  => '404_section',
		'default'  => esc_html__( 'Oops! Page Not Found!', 'anoor' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.error-message h3',
				'function' => 'html',
			)
		)
	]
);

// Description
new \Kirki\Field\Textarea(
	[
		'settings' => '404_page_description',
		'label'    => esc_html__( 'Description', 'anoor' ),
		'section'  => '404_section',
		'default'  => esc_html__( 'We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address incorrectly.', 'anoor' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.error-message p',
				'function' => 'html',
			)
		)
	]
);

new \Kirki\Field\Text(
	[
		'settings' => '404_page_button_text',
		'label'    => esc_html__( 'Button Text', 'anoor' ),
		'section'  => '404_section',
		'default'  => esc_html__( 'Back To Home', 'anoor' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.error-message a',
				'function' => 'html',
			)
		)
	]
);
}