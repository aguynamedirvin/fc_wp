<main class="content">

    <?php while (have_posts()) : the_post(); ?>
        <?php woocommerce_get_template_part('content', 'single-product'); ?>
    <?php endwhile; ?>

</main>
