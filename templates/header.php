<!-- Site header -->
<header class="site-header">
    <div class="wrap">

        <div class="logo" id="logo">
            <a href="<?= esc_url(home_url('/')); ?>"><?= bloginfo('name'); ?></a>
        </div>

        <a href="#" id="hamburger-menu"><span></span></a>
        <a href="#" id="cart-trigger" class="img-replace">Cart</a>

    </div>
</header>


<!-- Site navigation -->
<nav id="site-nav">
    <?php
        if (has_nav_menu('primary_navigation')) :
            wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'items_wrap'     => '<ul>%3$s</ul>',
                'container'      => false,
                'depth'          => 1
            ]);
        endif;
    ?>
</nav>
