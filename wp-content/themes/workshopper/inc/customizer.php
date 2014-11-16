<?php
/**
 * Workshopper Theme Customizer
 *
 * @package Workshopper
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function workshopper_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

// 	$wp_customize->add_control(
// 	'header_text', 
// 	array(
// 		'label'    => __( 'Header Text', 'workshopper' ),
// 		'section'  => 'workshopper_header_text',
// 		'settings' => 'workshopper_header_text',
// 		'type'     => 'text',
// 	)
// );

}
add_action( 'customize_register', 'workshopper_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function workshopper_customize_preview_js() {
	wp_enqueue_script( 'workshopper_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'workshopper_customize_preview_js' );
