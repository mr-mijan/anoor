<?php 
require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function anoor_activation(){
    $plugins = array(
        array(
            'name' => __('Kirki Customizer Framework', 'anoor'),
            'slug' => 'kirki',
            'required' => true,
        ),

        array(
            'name' => __('Contact Form 7', 'anoor'),
            'slug' => 'contact-form-7',
            'required' => true,
        ),
        
        array(
            'name' => __('One Click Demo Import', 'anoor'),
            'slug' => 'one-click-demo-import',
            'required' => true,
        )
    );
    $config = array(
        'id'            => 'anoor_plugin_active',
        'menu'          => 'tgmpa-install-plugins',
        'parent_slug'   => 'themes.php',
        'has_notices'   => true,
    );

    tgmpa ($plugins, $config);

}
add_action('tgmpa_register', 'anoor_activation');