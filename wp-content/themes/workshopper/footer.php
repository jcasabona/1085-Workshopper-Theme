<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Workshopper
 */
?>

		</div> <!-- .contain -->

	</div><!-- #content -->

	<footer class="site-footer contain" role="contentinfo">
		

		<?php get_sidebar('footer'); ?>


		<div class="site-info">
			<p>&copy; 1085 &amp; Joe Casabona, <?php echo date('Y'); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


