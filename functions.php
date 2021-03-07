<?php
/*
Theme Name: Museu Boulieu
Description: WordPress theme for Museu Boulieu a child theme of Blocksy
Author: wetah
Version: 0.0.1
Text Domain: museu-boulieu
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const MUSEU_BOULIEU_VERSION = '0.0.1';

function museu_boulieu_enqueues() {
	wp_enqueue_style( 'blocksy-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'museu-boulieu-child-style', get_stylesheet_uri(), array('blocksy-parent-style'), MUSEU_BOULIEU_VERSION );
}
add_action( 'wp_enqueue_scripts', 'museu_boulieu_enqueues');