<?php

function sahiba_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sahiba'),
    ));
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));
    add_theme_support('custom-logo', array(
        'width' => '55px',
        'flex-height' => true,
    ));
    
    register_post_type('business', [
        'labels' => [
            'name' => __('Businesses'),
            'singular_name' => __('Business'),
        ],
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => false,
        'show_ui' => true,
        'menu_icon'   => 'dashicons-portfolio',
        'supports' => ['thumbnail', 'title', 'editor', 'excerpt']
    ]);
    
    register_post_type('testimonials', [
        'labels' => [
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial'),
        ],
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => false,
        'show_ui' => true,
        'menu_icon'   => 'dashicons-editor-paste-text',
        'supports' => ['title', 'editor']
    ]);
    
    register_post_type('brands', [
        'labels' => [
            'name' => __('Brands'),
            'singular_name' => __('Brand'),
        ],
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => false,
        'show_ui' => true,
        'menu_icon'   => 'dashicons-layout',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt']
    ]);
    
    register_post_type('jobs', [
        'labels' => [
            'name' => __('Jobs'),
            'singular_name' => __('Job'),
        ],
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'menu_icon'   => 'dashicons-welcome-write-blog',
        'supports' => ['title', 'editor', 'custom-fields']
    ]);
}

add_action('after_setup_theme', 'sahiba_setup');

function sahiba_scripts() {
    wp_enqueue_style('sahiba-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts/stylesheet.css');
    wp_enqueue_style('crousal', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('fotter-css', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css');
}

add_action('wp_enqueue_scripts', 'sahiba_scripts');

function helpwp_custom_logo_output($html) {
    $html = str_replace('custom-logo-link', 'img_logo', $html);
    return $html;
}

add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);

function sahiba_remove_menus() {
    remove_menu_page('users.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'sahiba_remove_menus');

add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

add_filter('wp_nav_menu', 'menu_class');

function menu_class($html) {
    $html = str_replace('<ul id="menu-primary-menu" class="menu">', '<ul class="clearfix">', $html);
    return $html;
}
