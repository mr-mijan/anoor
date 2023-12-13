<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
        <div class="page-content">
            <div class="smooth-scrool-animate" id="has_smooth"></div>
            <div id="smooth-wrapper">
                <div id="smooth-content">

                    <!--start blog-section -->
                    <section class="blog-section">
                        <div class="container">
                            <div class="blog-wrap">
                            <div class="blog-content">
                                    <div class="post format-standard-image">
                                        <div class="entry-media">
                                            <img class="media-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="fi flaticon-user"></i> By <?php echo get_the_author_meta( 'display_name', $author_id ); ?>
                                                </li>
                                                <li><i class="fi flaticon-comment-white-oval-bubble"></i><?php comments_number(); ?></li>
                                                <li><i class="fi flaticon-calendar"></i><?php echo get_the_date(); ?></li>
                                            </ul>
                                        </div>
                                        <h2 class="modal-title"><?php the_title(); ?></h2>
                                        <p><?php the_content() ?></p>
                    
                                    </div>
                                    <div class="tag-share clearfix">
                                        <div class="tag">
                                            <?php
                                            $before = '<span >Tags</span>';
                                            $seperator = ''; // blank instead of comma
                                            $after = '';
                                            the_tags( $before, $seperator, $after );
                                            ?>
                                        </div>
                                    </div> <!-- end tag-share -->
                                    <div class="tag-share-s2 clearfix">
                                        <div class="tag">
                                            <span>Share: </span>
                                            <ul>
                                                <li><a href="#">facebook</a></li>
                                                <li><a href="#">twitter</a></li>
                                                <li><a href="#">linkedin</a></li>
                                                <li><a href="#">pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end tag-share -->

                                    <div class="author-box">
                                        <div class="author-avatar">
                                                <img class="entry-media-img" src="<?php echo get_avatar_url('ID'); ?>" alt="">
                                        </div>
                                        <div class="author-content">
                                            <a href="#" class="author-name">Author: <?php echo get_the_author_meta( 'display_name', $author_id ); ?></a>
                                            <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>

                                            <div class="socials">
                                                <ul class="social-link">
                                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> <!-- end author-box -->
                                    <div class="more-posts">
                                        <div class="previous-post">
                                            <a href="#">
                                                <span class="post-control-link mb-3">Previous Post</span>
                                                <span class="post-name"><?php previous_post_link(); ?></span>
                                            </a>
                                        </div>
                                        <div class="next-post">
                                            <a href="#">
                                                <span class="post-control-link mb-3">Next Post</span>
                                                <span class="post-name"><?php next_post_link(); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="comments-area">
                                        <div class="comments-section">
                                        <?php comments_template(); ?>
                                        </div> <!-- end comments-section -->
                                    </div> <!-- end comments-area -->
                                </div>
                            </div>
                        </div>
                    </section>




 <?php get_footer(); ?>