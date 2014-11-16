<?php
/**
 * The template for displaying the home page
 * 
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Workshopper
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="home-widgets" class="site-main" role="main">

			<?php get_sidebar('home'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
