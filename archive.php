<?php get_header(); ?>

        <div class="page-content">
            <div class="smooth-scrool-animate" id="has_smooth"></div>
            <div id="smooth-wrapper">
                <div id="smooth-content">

                    <!--start blog-section -->
                    <section class="blog-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title_archive mb-5">
                                        <h2><?php the_archive_title();?></h2>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap">
                            <?php 
                                if (have_posts() ) : 
                                    while(have_posts() ) : the_post();
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
                                       <a href="<?php the_permalink(); ?>"><h4 class="modal-blog"><span> Read More</span></a> 
                                        </h4>
                                    </div>
                                </div>

                                <?php endwhile; else: _e('No post found', 'anoor');
                                endif; 
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-left">
                        <ul class="pg-pagination">
                        <?php wp_link_pages(); ?>

                        <?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( '<i class="fi ti-angle-left"></i>', 'anoor' ),
                                'next_text' => __( '<i class="fi ti-angle-right"></i>', 'anoor' ),
                            ) ); ?>
                        </ul>
                        </div>
                    </section>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <?php dynamic_sidebar(); ?>
                            </div>
                        </div>
                    </div>




<?php get_footer(); ?>