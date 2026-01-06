<?php

// ———————————————————————————————————————— custom css

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
 
    $parent_style = 'underscore-me-css';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

//  handled automatically by parent theme
//  wp_enqueue_style( 'child-style',
//      get_stylesheet_directory_uri() . '/style.css?line14',
//      array( $parent_style ),
//      wp_get_theme()->get('Version')
//  );
}

// ———————————————————————————————————————— custom text
// Load translation files from your child theme instead of the parent theme
function my_child_theme_locale() {
    load_child_theme_textdomain( 'underscore-me', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_locale' );

// ———————————————————————————————————————— custom color palette 

function mytheme_setup_theme_supported_features() {

  $red             = 'rgb(100%,   0%,   0%)';
  $dark_gray       = 'rgb( 20%,  20%,  20%)';
  $light_gray      = 'rgb( 70%,  70%,  70%)';
  
  $bright_tech     = 'rgb( 75%, 100%,   0%)';
  $bright_blog     = 'rgb(100%,   0%,  75%)';
  $dim_tech        = 'rgb( 38%,  50%,   0%)';
  $dim_blog        = 'rgb( 50%,   0%,  38%)';
  
  $h_tag           = 'rgb( 41%,  49%,  73%)';
  
  $link            = 'rgb( 41%,  49%,  73%)';
  $link_active     = 'rgb( 74%,  25%,  40%)';
  $link_alt        = 'rgb( 74%,  25%,  40%)';
  $link_alt_active = 'rgb(  8%,  30%,  96%)';

    add_theme_support( 'editor-color-palette', array(
      [ 'name'  => esc_html__( 'Red', 'underscore-me' ),
        'slug'  => 'red',
        'color' => $red, ],

      [ 'name'  => esc_html__( 'Dark Gray', 'underscore-me' ),
        'slug'  => 'dark-gray',
        'color' => $dark_gray, ],

      [ 'name'  => esc_html__( 'Light Gray', 'underscore-me' ),
        'slug'  => 'light-gray',
        'color' => $light_gray, ],

      [ 'name'  => esc_html__( 'Bright Tech', 'underscore-me' ),
        'slug'  => 'bright-tech',
        'color' => $bright_tech, ],

      [ 'name'  => esc_html__( 'Bright Blog', 'underscore-me' ),
        'slug'  => 'bright-blog',
        'color' => $bright_blog, ],

      [ 'name'  => esc_html__( 'Dim Tech', 'underscore-me' ),
        'slug'  => 'dim-tech',
        'color' => $dim_tech, ],

      [ 'name'  => esc_html__( 'Dim Blog', 'underscore-me' ),
        'slug'  => 'dim-blog',
        'color' => $dim_blog, ],

      [ 'name'  => esc_html__( 'H Tag', 'underscore-me' ),
        'slug'  => 'h-tag',
        'color' => $h_tag, ],

      [ 'name'  => esc_html__( 'Link', 'underscore-me' ),
        'slug'  => 'link',
        'color' => $link, ],

      [ 'name'  => esc_html__( 'Link Active', 'underscore-me' ),
        'slug'  => 'link-active',
        'color' => $link_active, ],

      [ 'name'  => esc_html__( 'Link Alt', 'underscore-me' ),
        'slug'  => 'link-alt',
        'color' => $link_alt, ],

      [ 'name'  => esc_html__( 'Link Alt Active', 'underscore-me' ),
        'slug'  => 'link-alt-active',
        'color' => $link_alt_active, ],

    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

// ———————————————————————————————————————— excerpts for pages

add_post_type_support( 'page', 'excerpt' );

// ———————————————————————————————————————— change "Leave a Reply"

add_filter('comment_form_defaults', 'ocean_custom_comment_title', 20);
function ocean_custom_comment_title( $defaults ){
  $defaults['title_reply'] = __('Ask a Question...', 'customizr-child');
  return $defaults;
}

// ———————————————————————————————————————— excerpts for pages

add_post_type_support( 'page', 'excerpt' );


// ———————————————————————————————————————— fin
