<?php

function slider_init() {
    $args = array(
        'public' => true,
        'label' => 'Slider',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );

    register_post_type('slider_images', $args);
}

add_action('init', 'slider_init');

?>
