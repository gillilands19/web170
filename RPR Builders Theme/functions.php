<?php

/*
Theme Name: RPR Builders
Author: Sean Gilliland
Author URI: http://www.seagill.com
Description: A Custom theme for RPR Builders LLC. A general contracter/cabinet maker based out of North Seattle
Version: 1.0.0
*/

register_nav_menus(array(
    'main-menu' => __('Main'), 
));

register_sidebar(array(
	'before-sidebar' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

add_theme_support('post-thumbnails');

add_image_size('single_post_featured', 1000, 750, true);

//TODO register and enqueue header scripts!

function my_theme_scripts() {
wp_register_script('migrate', "https://code.jquery.com/jquery-migrate-1.2.1.min.js", array(), '1.2.1', true);
wp_enqueue_script('migrate');
wp_register_script( 'slick', "http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js", array(),'1.5.9', true);
wp_enqueue_script('slick');
wp_register_script('slider', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true);
wp_enqueue_script('slider');
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');