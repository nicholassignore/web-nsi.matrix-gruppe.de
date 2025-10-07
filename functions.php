<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/css/styles.css');
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/js/app.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');