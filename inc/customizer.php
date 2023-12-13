<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Panel(
	'panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Option', 'anoor' ),
		'description' => esc_html__( 'The Theme Option', 'anoor' ),
	]
);
}

require_once('header_customizer.php');
require_once('about_customizer.php');
require_once('services_custmizer.php');
require_once('portfolio_custmizer.php');
require_once('testmonial_custmizer.php');
require_once('counter_custmizer.php');
require_once('blog_custmizer.php');
require_once('contact_custmizer.php');
require_once('footer_custmizer.php');
require_once('preloader_custmizer.php');
require_once('404_custmizer.php');


