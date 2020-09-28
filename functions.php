<?php
add_theme_support('post-thumbnails');
add_theme_support('customize-selective-refresh-widgets');


function add_default_widget()
{
    register_sidebar(array(
        'name' => 'blogsSidebar',
        'id' => 'blogsSidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle pl-2 text-secondary text-3xl pt-6 pb-2">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'add_default_widget');

function add_enqueue_styles()
{
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap');
    // wp_enqueue_script('vendorJS',  get_template_directory_uri() . '/assets/js/vendor/flickity.pkgd.min.js', array(), false, true);
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
    // wp_enqueue_style('flickityCSS',  get_template_directory_uri() . '/assets/css/flickity.css', 2);
}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 10);

/*********************************************
 *               Blocks Styling               *
 **********************************************/
function am_enqueue_admin_styles()
{
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap');
    wp_enqueue_script('vendorJS',  get_template_directory_uri() . '/assets/js/vendor/flickity.pkgd.min.js', array(), false, true);
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
    wp_enqueue_style('flickityCSS',  get_template_directory_uri() . '/assets/css/flickity.css', 2);
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles');





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
        add_guttenberg_block('partners');
        add_guttenberg_block('services');
        add_guttenberg_block('team');
        add_guttenberg_block('hero');
        add_guttenberg_block('cards');
        add_guttenberg_block('iconcards');
        add_guttenberg_block('backgroundsection');
        add_guttenberg_block('news');
        add_guttenberg_block('categories');
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
        'category'            => 'custom_blocks',
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


/*********************************************
 *               BreadCrumbs              *
 **********************************************/
function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}



//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wp-emoji-release');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');


/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'jquery', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

add_filter('wp_default_scripts', 'change_default_jquery');

function change_default_jquery(&$scripts)
{
    if (!is_admin()) {
        $scripts->remove('jquery');
        // $scripts->add('jquery', false, array('jquery-core'), '1.10.2');
    }
}

/*********************************************
 *               ACF Theme Settings           *
 **********************************************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}


/*
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH . '/single');

/**
 * Filter the single_template with our custom function
 */
add_filter('single_template', 'my_single_template');

/**
 * Single template function which will choose our template
 */
function my_single_template($single)
{
    global $wp_query, $post;

    /**
     * Checks for single template by category
     * Check by category slug and ID
     */
    foreach ((array)get_the_category() as $cat) :

        if (file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

        elseif (file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

    endforeach;
}
