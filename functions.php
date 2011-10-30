<?php
/**
 * Functions File
 *
 * This is your child theme's functions.php file.  It is here for adding custom functions and 
 * setting up default functionality for this child theme.  You are free to modify this file in
 * any way you like.
 *
 * @package HybridOriginal
 * @subpackage Functions
 */

function load_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Shanti|Ubuntu+Mono');
	wp_enqueue_style( 'googleFonts');
	}

add_action('wp_print_styles', 'load_fonts');

if (!is_admin()) {
	// script to enable x-axis expansion of large code blocks on hover
	wp_enqueue_script('expanding_code_blocks', get_bloginfo('stylesheet_directory') . '/expanding_code_blocks.js', array('jquery'), 1.0, true);
}

?>
