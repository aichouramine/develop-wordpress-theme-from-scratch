<?php
function loadCss() {
    // load bootstarp css
    wp_register_style('bootstarp', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstarp');

    // load custom css
    wp_register_style('customCss', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('customeCss');
}

// call the function

add_action('wp_enqueue_scripts', 'loadCss');

function loadScripts() {
    // load bootstarp
    wp_register_script('bootstarp', get_template_directory_uri() . '/js/bootstrap.js', '', 1, true);
    wp_enqueue_script('bootstarp');

    // load custom Js
    wp_register_script('customScript', get_template_directory_uri() . '/js/custom.js', '', 1, true);
    wp_enqueue_script('customScript');
}

// call the function

add_action('wp_enqueue_scripts', 'loadScript');