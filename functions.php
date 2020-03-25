<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// // This enables the function that lets you set new image sizes
// add_theme_support( 'post-thumbnails' );
// // These are the new image sizes we cooked up
// add_image_size( 'post-image', 660 );
// // Now we register the size so it appears as an option within the editor
// add_filter( 'image_size_names_choose', 'my-custom-image-sizes' );
// function my-custom-image-sizes( $sizes ) {
// return array_merge( $sizes, array(
// 'post-image' => __( 'Post Images' ),
// ) );
// }

/**
 * This creates the [my_cat_list] shortcode and calls the
 * my_list_categories_shortcode() function.
 */
add_shortcode('my_cat_list', 'my_list_categories_shortcode');

/**
 * this function outputs your category list where you
 * use the [my_cat_list] shortcode.
 */
function my_list_categories_shortcode()
{
	$args = array('echo' => false);
	return wp_list_categories($args);
}
