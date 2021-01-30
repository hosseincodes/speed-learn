<?php
function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');
function remove_teachers_from_search() {
    global $wp_post_types;
    $wp_post_types['teachers']->exclude_from_search = true;
}
add_action('init', 'remove_teachers_from_search');
