<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('blog-css', get_stylesheet_directory_uri() . '/css/blog.css');
    wp_enqueue_style('metaslider-public', plugins_url() . '/ml-slider/assets/metaslider/public.css');



}



add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 20 );

function remove_default_stylesheet() {
    
    wp_dequeue_style( 'bootstrap-css' );
    wp_deregister_style( 'bootstrap-css' );
    wp_dequeue_style( 'blog-css' );
    wp_deregister_style( 'blog-css' );

}




function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height' => 175,
        'width' => 400,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),

    ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/* add widget areas to header */
function pivotal_widgets_init() {
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'Header Right',
    'id' => 'header-right',
    'before_widget' => '<div class="widgets">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
        register_sidebar(array(
    'name' => 'Header Left',
    'id' => 'header-left',
    'before_widget' => '<div class="widgets">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
    }
add_action( 'widgets_init', 'pivotal_widgets_init' );



// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function load_single_template($template) {
  $new_template = '';
 
  // single post template
  if( is_single() ) {
    global $post;
 
    // template for post with video format
    if ( has_post_format( 'video' )) {
      // use template file single-video.php for video format
      $new_template = locate_template(array('single-video.php' ));
    }
 
  }
  return ('' != $new_template) ? $new_template : $template;
}

?>