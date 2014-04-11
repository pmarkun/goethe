<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<a href="http://www.goethe.de/saopaulo/" class="footer-logo" style="float:left">goethe</a>
				<a href="mailto:cultura@saopaulo.goethe.org" style="float:right;">&nbsp; contato</a>
				<a href="https://github.com/pmarkun/goethe" style="float:right;">github </a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
