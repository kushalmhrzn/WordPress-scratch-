<?php

function awesome_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/* below function creates the menu
*/
function awesome_theme_setup() {

/* below hook has be created to register the new menus */
    add_theme_support('automatic-feed-links');
    
/*registering the new menu*/

	register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'awesome_theme_setup');

/* hood add team support be using for the custom background */
add_theme_support('custom-background');

/*custom header*/
add_theme_support('custom-header');

/**adding thumbnials */
add_theme_support('post-thumbnails');