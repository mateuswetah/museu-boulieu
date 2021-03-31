<?php

/* Registers the custom post field for sidebar items, using ACF plugin */
if ( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array(
        'key' => 'group_6052830124756',
        'title' => 'Imagens laterais',
        'fields' => array(
            array(
                'key' => 'field_605283283a9ab',
                'label' => 'Imagem Lateral 1',
                'name' => 'imagem_lateral_1',
                'type' => 'image',
                'instructions' => 'Insira aqui alguma imagem que você deseja usar para complementar o seu post ou pagina, na barra lateral abaixo do título',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_605283b83a9ac',
                'label' => 'Imagem Lateral 2',
                'name' => 'imagem_lateral_2',
                'type' => 'image',
                'instructions' => 'Insira aqui alguma outra imagem que você deseja usar para complementar o seu post ou pagina, na barra lateral abaixo do título',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'default',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
}

/* Renders the content of the aside part of pages and posts, bellow the title */
function museu_boulieu_page_side_layout() {
	global $post;
?>
	<div class="museu-boulieu-extra-page-info">
		<?php 
			$aside_post_image_1_id = get_post_meta($post->ID, 'imagem_lateral_1');

			if ( $aside_post_image_1_id ): 

				if ( is_array($aside_post_image_1_id) && !empty($aside_post_image_1_id) )
					$aside_post_image_1_id = $aside_post_image_1_id[0];

				$aside_post_image_1 = wp_get_attachment_image( $aside_post_image_1_id, 'medium', false );

				if ( $aside_post_image_1 ) :
			?>
			<figure>
				<?php 
					echo $aside_post_image_1;

					$aside_post_image_1_caption = wp_get_attachment_caption( $aside_post_image_1_id );
					if ( $aside_post_image_1_caption  ) :
				?>
				<figcaption>
					<?php echo $aside_post_image_1_caption; ?>
				</figcaption>
				<?php endif; ?>
			</figure>
			<?php endif; ?>
		
		<?php endif; ?>
	</div>
<?php
}
add_action( 'blocksy:single:content:bottom', 'museu_boulieu_page_side_layout' );