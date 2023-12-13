<?php get_header(); ?>

        <div class="page-content">
            <div class="smooth-scrool-animate" id="has_smooth"></div>
            <div id="smooth-wrapper">
                <div id="smooth-content">

                    <!--start about-section -->
                    <section class="about-section" id="<?php echo esc_html( get_theme_mod('about_section_id') ); ?>">
                        <div class="container">
                            <div class="about-wrap">
                                <div class="image">
                                    <img src="<?php echo esc_url(get_theme_mod('about_image_setting_url'));?>" alt="" class="white-img">
                                    <img src="<?php echo esc_url(get_theme_mod('about_image_setting_url'));?>" alt="" class="dark-img">
                                </div>
                                <div class="content">
                                    <h2><?php echo esc_html(get_theme_mod('About_subtitle_text_setting'));?></h2>
                                    <h3><?php echo esc_html(get_theme_mod('About_title_text_setting'));?></h3>
                                    <p><?php echo esc_html(get_theme_mod('About_description_text_setting'));?></p>
                                </div>
                                <div class="progras-wrap">
                                    <div class="row">
                                    <?php 
                                    $settings = get_theme_mod( 'repeater_setting');
                                    foreach ( $settings as $item){
                                        ?>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="progras-card">
                                            <div class="percent">
                                                <svg>
                                                    <circle cx="70" cy="70" r="59"></circle>
                                                    <circle cx="70" cy="70" r="59" style="--percent: <?php echo esc_html($item['link_text']);?>"></circle>
                                                </svg>
                                                <div class="number">
                                                    <h3><?php echo esc_html($item['link_text']);?><span>%</span></h3>
                                                </div>
                                            </div>
                                            <div class="title">
                                                <h2><?php echo esc_html($item['Title_text']);?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }?>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="left-text">
                            <h2 class="text-outline text-outline-hover" data-text="Creative"><?php echo esc_html( get_theme_mod('About_animation_text_setting_01') ); ?></h2>
                        </div>
                        <div class="right-text">
                            <h2 class="text-outline text-outline-hover" data-text="Designer"><?php echo esc_html( get_theme_mod('About_animation_text_setting_02') ); ?></h2>
                        </div>
                    </section>

                    <!--start service-section -->
                    <section class="service-section" id="<?php echo esc_html( get_theme_mod('services_section_id') ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2><?php echo esc_html( get_theme_mod('services_subtitle') ); ?></h2>
                                        <h3><?php echo esc_html( get_theme_mod('services_title') ); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <?php 
                                $settings = get_theme_mod( 'services_repeater_setting');
                                foreach ( $settings as $servces_item){
                                    ?>
                                <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                                    <div class="service_item">
                                        <div class="icon">
                                            <img src="<?php echo esc_url($servces_item['services_icon_white']); ?>" alt="" class="white-img">
                                            <img src="<?php echo esc_url($servces_item['services_icon_dark']); ?>" alt="" class="black-img">
                                        </div>
                                        <div class="content">
                                            <h4 class="click-modal-service"><?php echo esc_html( $servces_item['services_title_text'] ); ?> </h4>
                                            <span class="service_item_content"><?php echo esc_html( $servces_item['services_textare'] ); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }?>
                            </div>
                        </div>
                    </section>

                    <!--start portfolio-section -->
                    <section class="portfolio-section" id="<?php echo esc_html( get_theme_mod('portfolio_section_id') ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title mb-5">
                                        <h2><?php echo esc_html( get_theme_mod('portfolio_subtitle') ); ?></h2>
                                        <h3><?php echo esc_html( get_theme_mod('portfolio_title') ); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrap">
                                <div class="row gallery-container">
                                    <?php 
                                        $settings = get_theme_mod( 'portfolio_repeater');
                                        foreach ( $settings as $portfolio_item){
                                            ?>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="portfolio_card">
                                                <div class="image">
                                                    <img class="thumbnail" src="<?php echo esc_url($portfolio_item['portfolio_image']); ?>" alt="">
                                                    <span> <?php echo esc_html( $portfolio_item['portfolio_cagetroy'] ); ?></span>
                                                </div>
                                                <h2 class="text-center"><?php echo esc_html( $portfolio_item['portfolio_title'] ); ?></h2>
                                            </div>
                                        </div>
                                            <?php
                                        }?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--start testimonial-section -->
                    <section class="testimonial-section" id="<?php echo esc_html( get_theme_mod('testimonail_section_id') ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2><?php echo esc_html( get_theme_mod('testimonial_subtitle') ); ?></h2>
                                        <h3><?php echo esc_html( get_theme_mod('testimonial_title') ); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-wrap testimonial-slider owl-carousel">
                             <?php 
                                $settings = get_theme_mod( 'testimonial_repeater_setting');
                                foreach ( $settings as $review_item){
                                    ?>
                                <div class="testimonial-card">
                                    <div class="top-content">
                                        <div class="image">
                                            <img src="<?php echo esc_url($review_item['client_images']); ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <h2><?php echo esc_html( $review_item['client_name'] ); ?></h2>
                                            <span><?php echo esc_html( $review_item['client_designiation'] ); ?></span>
                                        </div>
                                    </div>
                                    <h3><?php echo esc_html( $review_item['client_review'] ); ?></h3>
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/testimonial/quote.png" alt="">
                                    </div>
                                </div>
                                <?php
                                }?>
                            </div>
                        </div>
                    </section>

                    <!--start funfact-section -->
                    <section class="funfact-section" id="FunFact">
                        <div class="container">
                            <div class="row">
                            <?php 
                                $settings = get_theme_mod( 'counter_repeater_setting');
                                foreach ( $settings as $counter_item){
                                    ?>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                    <div class="item">
                                        <h2><span class="odometer" data-count="<?php echo esc_html( $counter_item['counter_text'] ); ?>">00</span><?php echo esc_html( $counter_item['counter_text_prefix'] ); ?></h2>
                                        <h4><?php echo esc_html( $counter_item['counter_text_title'] ); ?></h4>
                                    </div>
                                </div>
                                <?php
                                }?>
                            </div>
                        </div>
                    </section>

                    <!--start blog-section -->
                    <section class="blog-section" id="<?php echo esc_html( get_theme_mod('blog_section_id') );?>" id="post-<?php the_ID(); ?><?php post_class(); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2><?php echo esc_html( get_theme_mod('blog_subtitle') ); ?></h2>
                                        <h3><?php echo esc_html( get_theme_mod('blog_title') ); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap">
                            <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => get_theme_mod('post_number_setting'),
                                    );
                                $query = new WP_Query( $args );
                                if ($query-> have_posts() ) : 
                                    while($query-> have_posts()  ) : $query-> the_post();
                                    ?>

                                <div class="item">
                                    <div class="image">
                                        <img class="thumbnail2" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="content">
                                        <ul class="date">
                                            <li><?php echo get_the_date(); ?></li>
                                            <li><?php the_author(); ?></li>
                                        </ul>
                                        <a href="<?php the_permalink(); ?>"><h2 class="modal-blog"><?php the_title(); ?></a>
                                        </h2>
                                       <a href="<?php esc_url(the_permalink()); ?>"><h4 class="modal-blog"><span> <?php echo esc_html('Read More')?></span></a> 
                                        </h4>
                                    </div>
                                </div>

                                <?php endwhile; else: _e('No post found', 'anoor');
                                endif; 
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </section>

                    <!--start contact-section -->
                    <section class="contact-section" id="<?php echo esc_html( get_theme_mod('contact_section_id') ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2><?php echo esc_html( get_theme_mod('contact_subtitle') ); ?></h2>
                                        <h3><?php echo esc_html( get_theme_mod('contact_title') ); ?></h3>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="contact-info">
                            <?php 
                                $settings = get_theme_mod( 'contact_repeater_setting');
                                foreach ( $settings as $contact_item){
                                    ?>
                                <div class="info-item">
                                    <div class="icon">
                                        <img src="<?php echo esc_url($contact_item['contact_icon_white']) ?>" alt="" class="white-img">
                                        <img src="<?php echo esc_url($contact_item['contact_icon_dark']) ?>" alt="" class="black-img">
                                    </div>
                                    <div class="text">
                                        <h2><?php echo esc_html( $contact_item['contact_title_text'] ) ?></h2>
                                        <span><?php echo esc_html( $contact_item['contact_textare'] ) ?></span>
                                    </div>
                                </div>
                                <?php
                                }?>
                            </div>
                            
                            <div class="contact-form-area">
                            <?php 
                            $shortcode = get_theme_mod('contact_shortcode', '');
                            if (!empty($shortcode)) {
                                echo do_shortcode($shortcode);
                            }?>
                            </div>
                        </div>
                    </section>


 <?php get_footer(); ?>