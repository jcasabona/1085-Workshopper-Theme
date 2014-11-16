<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Workshopper
 */
?>
	<div id="home-aide" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'home-widgets' ) ) : ?>
			<!--Hmmm. Nothing here yet-->
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
