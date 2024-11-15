<?php


function u_theme_setup()
{
    add_theme_support('editor-styles');

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        get_theme_file_uri('/assets/bootstrap-icons/bootstrap-icons.css'),
        get_theme_file_uri('/assets/public/index.css')
    ]);
}