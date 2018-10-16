<?php 
function torontoOnline_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'torontoOnline_scripts');

// Navigation
register_nav_menus(array(
	'main_menu' => __('Main Menu', 'torontoOnline')
) );

// Widgets

function theme_widgets() {
	register_sidebar(array(
		'name' => __('Sidebar Testimonials'),
		'id' => 'testimonials',
		'description' => 'Testimonials Widgets',
		'before_widget' => '<aside id="%1$s class="widget %1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
}

add_action('widgets_init', 'theme_widgets');

// Add Featured Image

add_theme_support( 'post-thumbnails' ); 

add_image_size('featured', 1100, 418, true);

add_filter('show_admin_bar', '__return_false');

// function to show admin bar - but I think I need to enable the admin bar
// function my_function_admin_bar($content) {
// 	return ( current_user_can( 'administrator' ) ) ? $content : false;
// }
// add_filter( 'show_admin_bar' , 'my_function_admin_bar');





?>