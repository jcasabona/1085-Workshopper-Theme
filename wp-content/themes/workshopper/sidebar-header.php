<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Workshopper
 */
?>
	<div id="header-aside" class="header-widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'header-widgets' ) ) : ?>
			<!--Hmmm. Nothing here yet-->
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
