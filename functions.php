<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function load_custom_stylesheets() {
    if (is_front_page() || is_home()) {
        // index.phpに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
    } elseif (is_page('menu')) {
        // "menu" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
        wp_enqueue_style('menu-style', get_template_directory_uri() . '/css/menu/menu.css');
    } elseif (is_page('about')) {
        // "about" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
        wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about/about.css');
    }elseif (is_page('access')) {
        // "about" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('access-style', get_template_directory_uri() . '/css/access/access.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
    }elseif (is_page('news')) {
        // "news" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('news-style', get_template_directory_uri() . '/css/news/news.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
    }elseif (is_page('staff')) {
        // "staff" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('staff-style', get_template_directory_uri() . '/css/staff/staff.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
    }elseif (is_page('single')) {
        // "single" ページに適用するCSS
        wp_enqueue_style('index-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
        wp_enqueue_style('staff-style', get_template_directory_uri() . '/css/single/single.css');
    }
    else{
        // wp_enqueue_style('sub-style', get_template_directory_uri() . '/css/sub/sub.css');
    }
}
add_action('wp_enqueue_scripts', 'load_custom_stylesheets');


//アイキャッチ画像有効化
function setup_theme() {
    add_theme_support('post-thumbnails');
    add_image_size('custom-thumbnail', 1200, 628, true);
}
add_action('after_setup_theme', 'setup_theme');
