<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'header_section',
	[
		'title'       => esc_html__( 'Header Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Header Logo White
new \Kirki\Field\Image(
	[
		'settings'    => 'white_logo',
		'label'       => esc_html__( 'Logo For light Version', 'anoor' ),
		'description' => esc_html__( 'Add your white logo here', 'anoor' ),
		'section'     => 'header_section',
		'default'     => get_template_directory_uri('template_directory') .'/assets/images/logo.png',
    ],
);

// Header Logo Dark
new \Kirki\Field\Image(
	[
		'settings'    => 'dark_logo',
		'label'       => esc_html__( 'Logo For Dark Version', 'anoor' ),
		'description' => esc_html__( 'Add your white logo here', 'anoor' ),
		'section'     => 'header_section',
		'default'     => get_template_directory_uri('template_directory') .'/assets/images/logo-2.png',
    ],
);
}