<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Section(
	'preloader_section',
	[
		'title'       => esc_html__( 'Preloader Section', 'anoor' ),
		// 'description' => esc_html__( 'Description.', 'anoor' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

// Preloader Images
new \Kirki\Field\Image(
	[
		'settings'    => 'preloader_image',
		'label'       => esc_html__( 'Upload your preloader Image from here', 'anoor' ),
		// 'description' => esc_html__( 'Add your white logo here', 'anoor' ),
		'section'     => 'preloader_section',
		'default'     => get_template_directory_uri('template_directory') .'/assets/images/preloader.png',
    ],
);
}