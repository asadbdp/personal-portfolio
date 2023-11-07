<?php 
/**
 * @theme css and js register file
 */

function register_theme_style(){
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/plugins/bootstrap.min.css');
    wp_register_style('font-awesome', get_template_directory_uri( ).'/assets/css/plugins/font-awesome.min.css');
    wp_register_style('swiper', get_template_directory_uri().'/assets/css/plugins/swiper.min.css');
    wp_register_style('main-style', get_template_directory_uri().'/assets/css/style.css');
    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_register_style('anime', get_template_directory_uri().'/assets/js/plugins/anime.min.js');


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('swiper');
    wp_enqueue_style('main-style');

    wp_enqueue_script('jquery');
    wp_enqueue_script('anime');


}

add_action('wp_enqueue_scripts', 'register_theme_style');