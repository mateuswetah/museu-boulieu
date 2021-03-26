<?php

/**
 * Carousel slider using blocksy_flexy
 */
function museu_boulieu_carousel_shortcode() {
    add_shortcode('museu_boulieu_carousel', function ($atts = []) {
        // Get parameter(s) from the shortcode
        extract( shortcode_atts( array(
            "ids" => 'ids',
        ), $atts ) );
        
        if ( isset($atts['ids']) ) {
            return blocksy_flexy([
                'images' => explode(',', $atts['ids']),
                'images_ratio' => '2/1'
            ]);
        }
        return '';
    });
}
add_action('init', 'museu_boulieu_carousel_shortcode');