<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package foodnowyes
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar('footer'); ?> <!-- insert sidebar-footer -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'foodnowyes' ) ); ?>"><?php printf( __( 'Powered by %s', 'foodnowyes' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme is a customized version of %1$s.', 'foodnowyes' ), '<a href="https://wordpress.org/themes/simone" rel="designer">Simone</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
