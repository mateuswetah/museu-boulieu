<?php

/**
 * Block Pattern
 */
function museu_boulieu_block_patterns() {
    register_block_pattern(
        'boulieu/cover-pattern',
        array(
            'title'       => 'Museu Boulieu Evento com Data',
            'description' => 'Dê destaque à um evento ou exposição que acontecerá em uma data',
            'categories'  => array('columns'),
            'content'     => '
                <!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) . '/images/image_sample_block_pattern.png' . '","id":830,"dimRatio":60,"minHeight":510,"minHeightUnit":"px","contentPosition":"center center","align":"full"} -->
                <div class="wp-block-cover alignfull has-background-dim-60 has-background-dim" style="min-height:510px">
                    <img class="wp-block-cover__image-background wp-image-830" alt="" src="' . esc_url( get_stylesheet_directory_uri() ) . '/images/image_sample_block_pattern.png' . '" data-object-fit="cover"/>
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:columns {"textColor":"palette-color-8","className":"is-style-column-museu-boulieu"} -->
                        <div class="wp-block-columns is-style-column-museu-boulieu has-palette-color-8-color has-text-color">
                            
                            <!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
                            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%">
                            
                                <!-- wp:heading {"textAlign":"right","style":{"typography":{"fontSize":130}}} -->
                                <h2 class="has-text-align-right" style="font-size:130px">arte sacra andina</h2>
                                <!-- /wp:heading -->

                                <!-- wp:spacer {"height":129} -->
                                <div style="height:129px" aria-hidden="true" class="wp-block-spacer"></div>
                                <!-- /wp:spacer -->

                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%">
                                
                                <!-- wp:spacer {"height":315} -->
                                <div style="height:315px" aria-hidden="true" class="wp-block-spacer"></div>
                                <!-- /wp:spacer -->

                                <!-- wp:paragraph {"style":{"typography":{"fontSize":24}}} -->
                                <p style="font-size:24px">DE 10 DE OUTUBRO A 20 DE DEZEMBRO DE 2021</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->'
        )
    );
}
add_action('init', 'museu_boulieu_block_patterns');