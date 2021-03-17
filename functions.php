<?php
/*
Theme Name: Museu Boulieu
Description: WordPress theme for Museu Boulieu a child theme of Blocksy
Author: wetah
Version: 0.0.1
Text Domain: museu-boulieu
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const MUSEU_BOULIEU_VERSION = '0.0.1';

/* Enqueues necessary JS and CSS files */
function museu_boulieu_enqueues() {
	wp_enqueue_style( 'blocksy-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'museu-boulieu-child-style', get_stylesheet_uri(), array('blocksy-parent-style'), MUSEU_BOULIEU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'museu_boulieu_enqueues');

/* Renders the content of the aside part of pages and posts, bellow the title */
function museu_boulieu_page_side_layout() {
?>
	
	<div class="museu-boulieu-extra-page-info">
		Aqui vai o conteúdo lateral
	</div>
<?php
}
add_action( 'blocksy:single:content:bottom', 'museu_boulieu_page_side_layout' );

/* Filters possible Blocksy color palletes */
function museu_boulieu_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Vermelho Boulieu 1',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #8b3527)'
		),
		array(
			'name' => 'Vermelho Boulieu 2',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #a13121)'
		),
		array(
			'name' => 'Cinza Boulieu 1',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #231f20)'
		),
		array(
			'name' => 'Cinza Boulieu 2',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #272525)'
		), 
		array(
			'name' => 'Branco Boulieu',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #ffffff)'
		)
	);
}
add_filter( 'blocksy:editor-color-palette', 'museu_boulieu_filter_palette' );