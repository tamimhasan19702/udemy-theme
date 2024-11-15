<?php

// variables

// includes
include_once(get_theme_file_path('/includes/front/enqueue.php'));
include_once(get_theme_file_path('/includes/front/head.php'));
include_once(get_theme_file_path('/includes/setup.php'));
// hooks



add_action('wp_enqueue_scripts', 'u_theme_enqueue');
add_action('wp_head', 'u_theme_head', 5);
add_action('after_setup_theme', 'u_theme_setup');