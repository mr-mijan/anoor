<?php get_header(); ?>

        <div class="page-content">
            <div class="smooth-scrool-animate" id="has_smooth"></div>
            <div id="smooth-wrapper">
                <div id="smooth-content">


                    <!--start about-section -->
                    <section class="about-section" id="<?php echo esc_html( get_theme_mod('about_section_id') ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><?php the_field('portfolio_title'); ?></h3>
                                    <p><?php the_field('description'); ?></p>
                                    <p><?php the_field('number');?></p>
                                </div>
                            </div>
                        </div>
                    </section>


 <?php get_footer(); ?>