<?php

function cafe_files() {
    wp_enqueue_style('cafe_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','cafe_files');

function cafe_features() {
    register_nav_menu('headerMenuLocation','Header Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cafe_features');