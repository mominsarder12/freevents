<?php

//initialize codestar framework
require_once get_theme_file_path() . '/libs/codestar-framework/codestar-framework.php';


//setup theme
function freevent_after_setup_theme()
{

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain('freevent', get_template_directory() . '/languages');


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	// This theme uses wp_nav_menu() sponsors.
	register_nav_menus(array(
		'main_menu' => __('Main Menu', 'freevent'),
	));
}

add_action('after_setup_theme', 'freevent_after_setup_theme');



//linking files
function freevent_enqueue_scripts()
{

	wp_enqueue_style('theme_main_style', get_template_directory_uri() . '/style.css', array(), 'v1.0.0', 'all');
	wp_enqueue_script('tailwind_style', 'https://cdn.tailwindcss.com', array(), '3.3.3', false);
	wp_enqueue_script('jquery');
	wp_enqueue_script('freevent_main_script', get_template_directory_uri() . '/assets/main.js', array('jquery'), 'v1.0.0', true);
}

add_action('wp_enqueue_scripts', 'freevent_enqueue_scripts');



// register custom post types
function freevent_custom_post_register()
{
	include_once('inc/custom-post-type.php');
}
add_action('init', 'freevent_custom_post_register');

//metabox option
include_once('inc/codestermetaoption.php');


// elementor widgets register
function freevent_manager_elementor_widget($widgets_manager)
{

	require_once('inc/elementor-widgets.php');


	$widgets_manager->register(new Freevent_Elementor_Widget());
}
add_action('elementor/widgets/register', 'freevent_manager_elementor_widget');





add_action('wp_ajax_get_sponsor_details', 'freevent_get_sponsor_details');
add_action('wp_ajax_nopriv_get_sponsor_details', 'freevent_get_sponsor_details');

function freevent_get_sponsor_details()
{
	$id = $_POST['id'];
	$post = get_post($id);
	$response = [
		'post' => $post,		
	];

	echo json_encode($response);
	die();
}
