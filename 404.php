<?php get_header();?>
<div class="page-content">
    <div class="smooth-scrool-animate" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            
    <!-- start error-404-section -->
    <section class="error-404-section contact-section">
        <div class="container">
            <div class="error-wrap">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content clearfix">
                            <div class="error">
                                <img src="<?php echo esc_url(get_theme_mod('404_image')); ?>" alt="">
                            </div>
                            <div class="error-message">
                                <h3><?php echo esc_html( get_theme_mod('404_page_tilte') );?></h3>
                                <p><?php echo esc_html( get_theme_mod('404_page_description') );?></p>
                                <a href="<?php echo esc_url(get_home_url()); ?>" class="theme-btn"><?php echo esc_html( get_theme_mod('404_page_button_text') ); ?></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end error-404-section -->

<?php get_footer(); ?>