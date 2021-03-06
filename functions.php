<?php
/*
Theme Name: Museu Boulieu
Description: WordPress theme for Museu Boulieu a child theme of Blocksy
Author: wetah
Version: 0.1.0
Text Domain: museu-boulieu
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const MUSEU_BOULIEU_VERSION = '0.1.2';

/* Updates import time limit */
add_filter( 'tnc-bg_import_default_time_limit', function () {
    return 10; 
});

/* Enqueues necessary JS and CSS files */
function museu_boulieu_enqueues() {
	wp_enqueue_style( 'blocksy-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'museu-boulieu-child-style', get_stylesheet_uri(), array('blocksy-parent-style'), MUSEU_BOULIEU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'museu_boulieu_enqueues');

/* Enqueues block side CSS files */
function museu_boulieu_editor_side_enqueues() {
	wp_enqueue_style( 'museu-boulieu-editor-styles', get_stylesheet_directory_uri() . '/editor-styles.css', array(), MUSEU_BOULIEU_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'museu_boulieu_editor_side_enqueues');

/* Theme special features */
function museu_boulieu_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', 'vh', 'vw' );
}
add_action( 'after_setup_theme', 'museu_boulieu_theme_supported_features' );

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
			'color' => 'var(--paletteColor3, #272525)'
		),
		array(
			'name' => 'Preto Boulieu',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #000000)'
		), 
		array(
			'name' => 'Cinza Boulieu Escuro',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #231f20)'
		),
		array(
			'name' => 'Cinza Boulieu Claro',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #949494)'
		),
		array(
			'name' => 'Branco Boulieu',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #ffffff)'
		),
		array(
			'name' => 'Cinza Mais Claro Boulieu',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #f2f2f2)'
		),
		array(
			'name' => 'Azul Boulieu',
			'slug' => 'palette-color-9',
			'color' => 'var(--boulieu-blue, #455379)'
		),
		array(
			'name' => 'Verde Boulieu',
			'slug' => 'palette-color-10',
			'color' => 'var(--boulieu-green, #364723)'
		),
		array(
			'name' => 'Laranja Boulieu',
			'slug' => 'palette-color-11',
			'color' => 'var(--boulieu-orange, #3e4929)'
		)
	);
}
add_filter( 'blocksy:editor-color-palette', 'museu_boulieu_filter_palette' );

// Registers CF for displaying images on the sidebar
require get_stylesheet_directory() . '/inc/sidebar.php';

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Registers Block patterns
require get_stylesheet_directory() . '/inc/block-patterns.php';