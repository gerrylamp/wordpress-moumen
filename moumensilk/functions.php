<?php
function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');


function files(){
    wp_enqueue_style('bootstrap-5-style', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('hamburger-style', get_theme_file_uri('/build/hamburger.css'));
    wp_enqueue_style('header-style', get_theme_file_uri('/css/header-style.css'));
    wp_enqueue_style('footer-style', get_theme_file_uri('/css/footer-style.css'));
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('media-query-style', get_theme_file_uri('/css/media-query.css'));

    wp_enqueue_script('main-script', get_theme_file_uri('/js/script.js'));
    wp_enqueue_script('bootstrap-5-script', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'files');

function features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'features');

