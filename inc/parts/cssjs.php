<?php

function custom_enqueue(){

	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', false);
    wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/css/bootstrap-rtl.css', false);
    wp_enqueue_style('icons', get_template_directory_uri().'/icons/css/all.css', false);
	wp_enqueue_script( 'comment-reply' );
    
	
}

add_action('wp_enqueue_scripts','custom_enqueue');