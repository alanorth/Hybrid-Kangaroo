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
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:400,700,400italic,700italic|Comfortaa');
	wp_enqueue_style( 'googleFonts');
	}

add_action('wp_enqueue_scripts', 'load_fonts');

?>
