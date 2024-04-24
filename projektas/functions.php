<?php

function myFirstThemeStylesAndScripts()
{

    wp_enqueue_style(
        'projects_fonts',
        'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap'
    );

    wp_enqueue_style(
        'fancybox_style',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
        ['projects_fonts']
    );

    wp_enqueue_style(
        'project_style',
        get_stylesheet_uri(),
        ['projects_fonts', 'fancybox_style']
    );

    wp_enqueue_script(
        'fancybox_script',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
        [],
        false,
        true
    );

    wp_enqueue_script(
        'project_script',
        get_template_directory_uri() . '/scripts/script.js',
        ['fancybox_script'],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'myFirstThemeStylesAndScripts');

function registerMyMenus()
{
    register_nav_menus(
        [
            'header-menu' => 'Header Menu',
            'projects-menu' => 'Projects Menu',
        ]
    );
}

add_action('init', 'registerMyMenus');

 ?>
