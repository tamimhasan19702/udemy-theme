<?php

function u_theme_enqueue()
{

    // Register styles
    wp_register_style('u-font-rubik', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', [], null);
    wp_register_style('bootstrap-icons', get_theme_file_uri('/assets/bootstrap-icons/bootstrap-icons.css'));
    wp_register_style('u-css', get_theme_file_uri('/assets/public/index.css'));


    // Enqueue styles
    wp_enqueue_style('u-font-rubik');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('u-css');



}