<?php

function wordpress1_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('wordpress1-main-styles', get_template_directory_uri() . "/style.css", array('wordpress1-bootstrap'), $version, 'all');
	wp_enqueue_style('wordpress1-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
	wp_enqueue_style('wordpress1-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'wordpress1_register_styles')

?>