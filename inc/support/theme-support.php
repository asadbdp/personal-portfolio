<?php
/**
 * register theme supports
 */

function theme_support(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'theme_support');
