<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Workshopper
 */

get_header(); ?>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '<i class="fa fa-exclamation-triangle"></i> 404 Error? What?! ', 'workshopper' ); ?></h1>
				</header><!-- .page-header -->

					
					<?php get_sidebar('404'); ?>

					<?php workshopper_jumbotron(); ?>

			</section><!-- .error-404 -->


<?php get_footer(); ?>
