<?php

/**
 * Add to cart script
 */
function add_to_cart_script() {
    if( is_product() ){
        wp_enqueue_script( 'wc-add-to-cart-variation' );
    }
}
//add_action( 'wp_head', 'add_to_cart_script' );

/**
 * Add WooCommerce support
 */
add_theme_support('woocommerce');


/**
 * Remove single product meta (SKU, categories and tags)
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

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
