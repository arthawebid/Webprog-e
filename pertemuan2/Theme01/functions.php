<?php
// 1. Memuat CSS dan JS (Bootstrap, Icons, Fonts, Style Utama)
function tokoku_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), '5.3.8');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('tokoku-style', get_stylesheet_uri(), array('bootstrap-css'), '1.0');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array(), '5.3.8', true);
}
add_action('wp_enqueue_scripts', 'tokoku_enqueue_scripts');

// 2. Pengaturan Fitur Tema (Menu, Logo, Title, WooCommerce)
function tokoku_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce'); // Wajib untuk halaman toko

    register_nav_menus(array(
        'primary_menu' => __('Menu Utama Header', 'tokoku'),
        'footer_menu'  => __('Menu Footer', 'tokoku'),
    ));
}
add_action('after_setup_theme', 'tokoku_theme_setup');
