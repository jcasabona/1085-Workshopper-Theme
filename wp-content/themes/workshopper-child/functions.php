<?php

register_sidebar( array(
  'name' => __( 'Footer Widgets', 'workshopper-child' ),
  'id' => 'extended-footer',
  'description' => __( 'This is the first sidebar widgetized area. All defaults widgets work great here.', 'ward' ),
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
) );


function workshopper_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'workshopper_enqueue_styles' );
