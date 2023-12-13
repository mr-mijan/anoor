<!--start footer-section -->
<section class="footer-section">
        <div class="container">
            <!-- <h1 class="d-none">hidden content</h1> -->
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <p><?php echo esc_html(get_theme_mod('footer_copyright'));?></p>
                </div>
                <div class="col-md-6 col-12">
                    <ul>
                    <?php 
                        $settings = get_theme_mod( 'footer_social');
                        foreach ( $settings as $social_item){
                            ?>
                        <li><a href="<?php echo esc_url($social_item['footer_social_link']) ?>"><?php echo esc_html( $social_item['footer_social_text'] ) ?></a></li>
                        <?php
                        }?>
                    </ul>
                </div>
            </div>
            </div>
        </section>
    </div>
</div>
</div>


    <!-- theme color buttom -->
        <div class="open-color-icon">
    <button class="switcher-open">
        <i class="ti-settings" id="open-btn"></i>
        <i class="ti-close" id="close-btn"></i>
    </button>
    <div class="color-bar">
        <h3>Mode</h3>
        <div class="color-btn">
            <button class="dark-btn" data-mode="light" aria-label="active">light</button>
            <button class="white-btn" data-mode="dark" aria-label="dark">dark</button>
        </div>
    </div>
    </div>

        <!-- Cursor  -->
        <div class="cursor"></div>

    </div>
    <!-- end of page-wrapper -->
    <?php wp_footer();?>
</body>
</html>