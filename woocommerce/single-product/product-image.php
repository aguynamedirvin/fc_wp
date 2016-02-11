<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

$attachment_ids = $product->get_gallery_attachment_ids();

?>

<div class="product__preview">

    <div class="slider  product__slider">
        <?php
            if ( $attachment_ids ) {

                foreach ( $attachment_ids as $attachment_id ) {

                    echo '<div class="product__slide">';

                        $image_title = esc_attr( get_the_title( $attachment_id ) );

                        $image         = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
                            'title'	=> $image_title,
                            'alt'	=> $image_title
            			) );

                        echo $image;

                    echo '</div>';

                }
            }
        ?>
    </div>

    <?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>
