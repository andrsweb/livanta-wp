<?php

/**
 * Theme functions.
 *
 * @package WordPress
 * @subpackage livanta
 */

const THEME_NAME = 'livanta';
const THEME_VERSION = '1.0.0';
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_DIR', get_template_directory() );

add_action( 'after_setup_theme', 'liv_load_theme_dependencies' );
/**
 * Theme dependencies.
 */
function liv_load_theme_dependencies(): void
{
	// Register theme menus.
	register_nav_menus( [
		'header_menu'	=> esc_html__( 'Header Menu', 'livanta' ),
		'footer_menu_1'	=> esc_html__( 'Footer Menu 1', 'livanta' ),
		'footer_menu_2'	=> esc_html__( 'Footer Menu 2', 'livanta' )
	] );

	// Auto-generate ACF Flexible Content templates files.
	require_once( 'theme-functions/acf-fc-templates-generator.php' );
	// Please place all custom functions declarations in this file.
	require_once( 'theme-functions/theme-functions.php' );
	require_once( 'theme-functions/custom-post-types.php' );
	require_once( 'theme-functions/ajax.php' );
}

add_action( 'init', 'liv_init_theme' );
/**
 * Theme initialization.
 */
function liv_init_theme(): void
{
	// Remove extra styles and default SVG tags.
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	// Manage the document title - WordPress automatically add title
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes.
	add_image_size( 'icon', 22, 22 );
	add_image_size( 'social', 30, 30 );
	add_image_size( 'contact-icon', 40, 40 );
	add_image_size( 'dropdown-icon', 74, 74 );
	add_image_size( 'dropdown-icon-2', 120, 120 );
	add_image_size( 'logo', 160 );
	add_image_size( 'logo-footer', 408 );
	add_image_size( 'banner-vertical-3', 468, 522 );
	add_image_size( 'banner-vertical-2', 552, 624 );
	add_image_size( 'banner-vertical', 611, 664 );
	add_image_size( 'banner-vertical-4', 720 );
	add_image_size( 'full-hd', 1920 );
}

add_action( 'wp_enqueue_scripts', 'liv_inclusion_enqueue' );
/**
 * Enqueue styles and scripts.
 */
function liv_inclusion_enqueue(): void
{
	// Remove Gutenberg styles on front-end.
	if( ! is_admin() && ! is_singular( 'post' ) ){
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
	}

	// Styles.
	wp_enqueue_style( 'main', THEME_URI . '/static/css/main.min.css', [], THEME_VERSION, 'all' );

	// Scripts.
	wp_enqueue_script( 'scripts', THEME_URI . '/static/js/main.min.js', ['jquery'], THEME_VERSION, true );
}

add_action( 'acf/init', 'liv_acf_init' );
/**
 * Add ACF Options pages and subpages.
 */
function liv_acf_init(): void
{
	$acf_parent_options = null;

	// Add ACF Options Page.
	if( function_exists( 'acf_add_options_page' ) ){
		$acf_parent_options = acf_add_options_page( [
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme_settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		] );
	}

	// Options subpages.
	if( function_exists( 'acf_add_options_sub_page' ) && $acf_parent_options ){
		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Global', 'livanta' ),
			'menu_title'	=> __( 'Global', 'livanta' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Header', 'livanta' ),
			'menu_title'	=> __( 'Header', 'livanta' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Footer', 'livanta' ),
			'menu_title'	=> __( 'Footer', 'livanta' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );
	}
}

