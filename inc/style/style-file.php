<?php 
/**
 * @theme css and js register file
 */

function register_theme_style(){
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/plugins/bootstrap.min.css');
    wp_register_style('font-awesome', get_template_directory_uri( ).'/assets/css/plugins/font-awesome.min.css');
    wp_register_style('swiper-style', get_template_directory_uri().'/assets/css/plugins/swiper.min.css');
    wp_register_style('main-style', get_template_directory_uri().'/assets/css/style.css');
    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_register_script('anime', get_template_directory_uri().'/assets/js/plugins/anime.min.js');
    wp_register_script('swiper', get_template_directory_uri().'/assets/js/plugins/swiper.min.js');
    wp_register_script('progressbar', get_template_directory_uri().'/assets/js/plugins/progressbar.min.js');
    wp_register_script('smooth', get_template_directory_uri().'/assets/js/plugins/smooth-scrollbar.min.js');
    wp_register_script('overscroll', get_template_directory_uri().'/assets/js/plugins/overscroll.min.js');
    wp_register_script('typing', get_template_directory_uri().'/assets/js/plugins/typing.min.js');
    wp_register_script('isotope', get_template_directory_uri().'/assets/js/plugins/isotope.min.js');
    wp_register_script('fancybox', get_template_directory_uri().'/assets/js/plugins/fancybox.min.js');
    wp_register_script('swup', get_template_directory_uri().'/assets/js/plugins/swup.min.js');
    wp_register_script('main-script', get_template_directory_uri().'/assets/js/main.js');



    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('swiper-style');
    wp_enqueue_style('main-style');

    wp_enqueue_script('jquery');
    wp_enqueue_script('anime');
    wp_enqueue_script('swiper');
    wp_enqueue_script('progressbar');
    wp_enqueue_script('smooth');
    wp_enqueue_script('overscroll');
    wp_enqueue_script('typing');
    wp_enqueue_script('isotope');
    wp_enqueue_script('fancybox');
    wp_enqueue_script('swup');
    wp_enqueue_script('main-script');


}

add_action('wp_enqueue_scripts', 'register_theme_style');