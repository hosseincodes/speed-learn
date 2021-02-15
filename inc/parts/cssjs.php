<?php

function custom_enqueue(){

	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', false);
    wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', false);
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', false);
    wp_enqueue_script('speedlearn', get_template_directory_uri().'/assets/js/speedlearn.js', false);
    wp_enqueue_script('icons', 'https://use.fontawesome.com/releases/v5.0.7/js/all.js', false);
	wp_enqueue_script( 'comment-reply' );
}

add_action('wp_enqueue_scripts','custom_enqueue');