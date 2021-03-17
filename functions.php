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