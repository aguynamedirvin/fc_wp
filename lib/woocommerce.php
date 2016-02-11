<?php

/**
 * Add WooCommerce support
 */
add_theme_support('woocommerce');


add_filter('woocommerce_order_button_html', 'order_button_html');

function order_button_html() {

}


/**
 * Remove single product meta (SKU, categories and tags)
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

/**
 * Remove single product sale tag
 */
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

/**
 * Remove single product rating & excerpt
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

/**
 * Single product show similar products
 */
add_action( 'similar_products', 'woocommerce_output_related_products', 10 );


/**
 * Product loop thumbnail
 *
 */
function show_thumbnail() {

    echo '<div class="product-item__preview">';

        echo woocommerce_template_loop_product_link_open();
        echo woocommerce_get_product_thumbnail();
        echo woocommerce_template_loop_product_link_close();

    echo '</div>';

}
add_action( 'product-item_thumbnail', 'show_thumbnail', 10 );

/**
 * Product loop title (custom)
 */
function woocommerce_template_loop_product_title() {
    echo '<h3 class="product-item__title"><a href="' . get_the_permalink() . '">' . get_the_title() .  '</a></h3>';
}

/**
 * Product loop desc
 */
function show_desc() {

    echo '<div class="product-item__desc">';

        echo woocommerce_template_loop_product_title();
        echo woocommerce_template_loop_price();

    echo '</div>';

}
add_action( 'product-item_desc', 'show_desc', 10 );

?>
