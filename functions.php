<?php

function wordpress1_theme_support(){
	//adds dynamic title tag support
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wordpress1_theme_support');

function wordpress1_menus(){
	$locations = array(
		'primary' => 'Desktop primary left sidebar',
		'footer' => 'Footer menu items'
	);

	register_nav_menus($locations);
}

add_action('init', 'wordpress1_menus');

function wordpress1_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('wordpress1-main-styles', get_template_directory_uri() . "/style.css", array('wordpress1-bootstrap'), $version, 'all'); 
	wp_enqueue_style('wordpress1-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
	wp_enqueue_style('wordpress1-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'wordpress1_register_styles');

function wordpress1_register_scripts(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_script('wordpress1-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
	wp_enqueue_script('wordpress1-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
	wp_enqueue_script('wordpress1-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
	wp_enqueue_script('wordpress1-mainjs', get_template_directory_uri() . "/assets/js/main.js", array('wordpress1-bootstrap'), $version, 'all');
}

add_action( 'wp_enqueue_scripts', 'wordpress1_register_scripts');

function wordpress1_widget_areas(){
	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget' => '',
			'name' => 'Sidebar Area',
			'id' => 'sidebar-1',
			'description' => 'Sidebar widget Area'
		)
	);

	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget' => '',
			'name' => 'Footer Area',
			'id' => 'footer-1',
			'description' => 'Footer widget Area'
		)
	);
}

add_action( 'widgets_init', 'wordpress1_widget_areas');	

?>