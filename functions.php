<?php
function aero_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aero-theme'),
        'footer' => __('Footer Menu', 'aero-theme'),
    ));
}
add_action('after_setup_theme', 'aero_theme_setup');

function aero_theme_scripts() {
    wp_enqueue_style('aero-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_script('aero-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'aero_theme_scripts');

// Custom excerpt length
function aero_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'aero_custom_excerpt_length', 999);

// Add custom widget areas
function aero_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'aero-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'aero-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer', 'aero-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'aero-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'aero_widgets_init');

// Add custom post type for reviews
function aero_create_review_post_type() {
    register_post_type('review',
        array(
            'labels' => array(
                'name' => __('Reviews'),
                'singular_name' => __('Review')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-star-filled'
        )
    );
}
add_action('init', 'aero_create_review_post_type');

// Add custom post type for FAQ
function aero_create_faq_post_type() {
    register_post_type('faq',
        array(
            'labels' => array(
                'name' => __('FAQs'),
                'singular_name' => __('FAQ')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor'),