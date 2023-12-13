<?php
// Theme Functions
function anoor_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on the_theme, use a find and replace
    * to change 'the_theme' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'the_theme', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page'));

    // Custom Header
    add_theme_support('custom-header');

    // responsive-embeds
    add_theme_support('responsive-embeds');

    //custom-background
    add_theme_support('custom-background');

    //wp-block-styles
    add_theme_support('wp-block-styles');

    // Custom logo
    add_theme_support(
        'custom-logo',
        [
            'height'      => 100,
            'width'       => 350,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Main Menu', 'anoor'));

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    // add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
    add_action( 'after_setup_theme', 'anoor_after_setup_theme' );

    /* Editor Style.
    */
   add_editor_style( 'classic-editor.css' );

   /*
    * Gutenberg wide images.
    */
   add_theme_support( 'align-wide' );

   function wpdocs_register_block_patterns() {
    register_block_pattern(
        'wpdocs/my-example',
        array(
            'title'         => __( 'My First Block Pattern', 'anoor' ),
            'description'   => _x( 'This is my first block pattern', 'Block pattern description', 'anoor' ),
            'content'       => '<!-- wp:paragraph --><p>A single paragraph block style</p><!-- /wp:paragraph -->',
            'categories'    => array( 'text' ),
            'keywords'      => array( 'cta', 'demo', 'example' ),
            'viewportWidth' => 800,
        )
    );
}
add_action( 'init', 'wpdocs_register_block_patterns' );


if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/quote',
        array(
            'name'         => 'blue-quote',
            'label'        => __( 'Blue Quote', 'anoor' ),
            'is_default'   => true,
            'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
        )
    );
}

// CSS JS Enqueue
function anoor_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('themify-icons', get_template_directory_uri().'/assets/css/themify-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.1', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.5.0', 'all' );
    wp_enqueue_style('nice-select', get_template_directory_uri().'/assets/css/nice-select.css', array(), '3.5.0', 'all' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('owl.theme', get_template_directory_uri().'/assets/css/owl.theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('owl.transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array(), '2.1.5', 'all' );
    wp_enqueue_style('odometer', get_template_directory_uri().'/assets/css/odometer-theme-default.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('custom-animation', get_template_directory_uri().'/assets/css/custom-animation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/sass/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
    // wp_enqueue_style( 'line-icons', 'https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css' );
  
    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), '5.0.1', 'true' );
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.custom.js', array(), '2.6.2', 'true' );
    wp_enqueue_script('lenis', get_template_directory_uri().'/assets/js/lenis.min.js', array(), '1.0.1', 'true' );
    wp_enqueue_script('simpleParallax', get_template_directory_uri().'/assets/js/simpleParallax.js', array(), '1.0.1', 'true' );
    wp_enqueue_script('plugin-collection', get_template_directory_uri().'/assets/js/jquery-plugin-collection.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('custom-animation', get_template_directory_uri().'/assets/js/custom-animation.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'anoor_theme_style');




// Comment Form
function katen_comment_textarea_placeholder( $args ) {
	$args['comment_field']   = str_replace( 'textarea', 'textarea placeholder="Your comment here..."', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'katen_comment_textarea_placeholder' );

function katen_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email Address"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'katen_comment_form_fields' );



/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'anoor' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'anoor' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


// Customizer 
require_once('inc/customizer.php');
require_once ('inc/theme_active.php');
require_once('inc/demo_content.php');