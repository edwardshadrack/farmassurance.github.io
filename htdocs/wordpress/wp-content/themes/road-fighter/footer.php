<div class="footer_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bottom_footer_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom_footer_container">
                <div class="grid_12">
                <div class="copyrightinfo">
                    <?php if (roadfighter_get_option('roadfighter_footertext') != '') { ?>
                    <p class="copyright">
                        <?php echo roadfighter_get_option('roadfighter_footertext'); ?>
                    </p>
                    <?php } else { ?>
                    <p class="copyright">
                        <a href="<?php echo esc_url('https://www.inkthemes.com/market/wordpress-theme-slider/'); ?>" rel="nofollow">RoadFighter Theme</a> Powered By
                        <a href="<?php echo esc_url('http://www.wordpress.org'); ?>">WordPress</a>
                    </p>
                    <?php } ?>
                </div>
                </div>
                <div class="grid_12">
                <ul class="social_logos">
                        <?php if (roadfighter_get_option('roadfighter_facebook') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_facebook')); ?>" title="Facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_twitter') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_twitter')); ?>" title="Twitter">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_yahoo') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_yahoo')); ?>" title="Yahoo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/yahoo.png" alt="Yahoo" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_rss') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_rss')); ?>" title="Rss Feed">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="Digg Icon" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_digg') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_digg')); ?>" title="Digg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/digg.png" alt="Digg icon" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_pinterest') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_pinterest')); ?>" title="Pinterest">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" alt="Pinterest icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (roadfighter_get_option('roadfighter_linkedin') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_linkedin')); ?>" title="Pinterest">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/in.png" alt="Linkedin icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (roadfighter_get_option('roadfighter_instagram') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_instagram')); ?>" title="Instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_google') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_google')); ?>" title="Google">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/g+.png" alt="Google icon"
                                />
                            </a>
                        </li>
                        <?php } ?> 
                        <?php if (roadfighter_get_option('roadfighter_youtube') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_youtube')); ?>" title="Youtube">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="Youtube icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_tumblr') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_tumblr')); ?>" title="Tumblr">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/tumblr.png" alt="Tumblr icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if (roadfighter_get_option('roadfighter_flickr') != '') { ?>
                        <li>
                            <a href="<?php echo esc_url(roadfighter_get_option('roadfighter_flickr')); ?>" title="Flickr">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt="Flickr icon"
                                />
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
