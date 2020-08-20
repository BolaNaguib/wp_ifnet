<?php

function add_enqueue_styles()
{
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap');
    // wp_enqueue_script('uikit_js',  get_template_directory_uri() . '/assets/js/custom.min.js', array(), false, true);
    // wp_enqueue_script('vendorJS',  get_template_directory_uri() . '/assets/js/vendor.min.js', array(), false, true);
    wp_enqueue_script('vendorJS',  get_template_directory_uri() . '/assets/js/vendor/flickity.pkgd.min.js', array(), false, true);

    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
    wp_enqueue_style('flickityCSS',  get_template_directory_uri() . '/assets/css/flickity.css', 2);
}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 10);
