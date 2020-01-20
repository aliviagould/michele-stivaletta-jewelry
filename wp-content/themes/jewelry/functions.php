<?php

function jewelry_enqueue() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    if($_SERVER['SERVER_NAME'] != 'localhost'){
      wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
    } else{
      wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '', true );
    wp_enqueue_style('Abril Fatface', "https://fonts.googleapis.com/css?family=Abril+Fatface|Lato:300,400,700|Vidaloka&display=swap");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_script( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
}
add_action('wp_enqueue_scripts', 'jewelry_enqueue');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-header', array(
    'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
    'default-text-color' => '000',
    'width'              => 1000,
    'height'             => 250,
    'flex-width'         => true,
    'flex-height'        => true,));


register_nav_menus( array(
    'header' => 'Custom Primary Menu',
  ) );
function jewelry_widgets_init() {
  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'jewelry_widgets_init' );



require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// apply categories to attachments
function add_media_cats() {
    register_taxonomy_for_object_type( 
      'category', 
      'attachment' 
    );
  }
  add_action( 'init' , 'add_media_cats' );



