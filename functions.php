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





/**
 * Custom block category
 */

function my_blocks_plugin_block_categories($categories)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'custom_blocks',
                'title' => __('Custom Blocks', 'mydomain'),
                // 'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter('block_categories', 'my_blocks_plugin_block_categories', 10, 2);

/*********************************************
 *               Adding Blocks                *
 **********************************************/
add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
        add_guttenberg_block('contact');
    }
}

function add_guttenberg_block($blockname)
{
    // register card block
    acf_register_block(array(
        'name'                => $blockname,
        'title'                => __($blockname),
        'description'        => __('A custom block.'),
        'render_callback'    => 'section_block_callback',
        'category'            => 'widgets',
        'icon'                => 'admin-comments',
        // 'keywords'            => array($block_name),
    ));
}

/*********************************************
 *               Blocks Callback              *
 **********************************************/
function section_block_callback($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("block/{$slug}.php"))) {
        include(get_theme_file_path("block/{$slug}.php"));
    }
}
