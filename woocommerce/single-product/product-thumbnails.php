<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();
?>

<div class="product__thumbnails">
    <?php
        if ( $attachment_ids ) {

            foreach ( $attachment_ids as $attachment_id ) {

                echo '<div class="product__thumbnail">';

                    $image_title = esc_attr( get_the_title( $attachment_id ) );

                    $image = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $attr = array(
            				'title'	=> $image_title,
            				'alt'	=> $image_title
            		) );

                    echo $image;

                echo '</div>';

            }
        }
    ?>
</div>
