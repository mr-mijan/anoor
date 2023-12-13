<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start main preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="<?php echo esc_url(get_theme_mod('preloader_image')); ?>" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <header class="header-section" id="sticky">
            <div class="container">
                <div class="hrader-topbar">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-9">

                        <?php if (get_theme_mod('white_logo', 'dark_logo')){
                                    ?> 
                                    <a href="<?php echo get_home_url();?>" class="logo">
                                        <img class="logo-on" src="<?php echo esc_url(get_theme_mod('white_logo')); ?>" alt="">
                                        <img class="logo-two" src="<?php echo esc_url(get_theme_mod('dark_logo')); ?>" alt="">
                                    </a> 
                                    <?php
                                    } else{ 
                                    ?><a href="<?php echo esc_url(get_home_url()); ?>" class="text-logo"><?php esc; ?></a><?php
                                    } ?>

 
                        </div>
                        <div class="col-lg-3 col-3">
                            <div class="menu-open">
                                <i class="ti-align-justify" id="bar_close"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-menu" id="menu_wrap">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'Primary_Menu',
                        ));
                        ?>
                </div>
            </div>
        </header>