<!-- Site footer -->
<footer class="site-footer">
    <div class="wrap">

        <div class="site-info">
            <div class="logo"><?= bloginfo('name'); ?></div>

            <div class="site-note">&copy; 2016. All rights reserved. Crafted with <span class="heart"></span> by <a href="http://squarepixl.com/">SquarePixl.</a></div>
        </div>

        <div class="site-footer__widget  site-footer__links">
            <h4>Links</h4>
            <?php
                if (has_nav_menu('footer_navigation')) :
                    wp_nav_menu([
                        'theme_location' => 'footer_navigation',
                        'items_wrap'     => '<ul>%3$s</ul>',
                        'container'      => false,
                        'depth'          => 1
                    ]);
                endif;
            ?>
        </div>

        <div class="site-footer__widget  site-footer__social">
            <h4>Follow Us</h4>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>

    </div>
</footer>
