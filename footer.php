<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *

 <a href="<?php echo esc_url( __( 'http://lowermedia.net/', 'lowermedia' ) ); ?>" title="<?php esc_attr_e( 'Premium Web Construction & Application Development', 'lowemredia' ); ?>"><?php printf( __( 'A %s Site', 'lowermedia' ), 'LowerMedia' ); ?></a>
 */
?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php //get_sidebar( 'main' ); ?>

		<div class="site-info">
			<?php //do_action( 'lowermedia_landingpage_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://kelseyhuebner.com/', 'kelseyhuebner' ) ); ?>" title="<?php esc_attr_e( 'Premium Web Construction & Application Development', 'lowemredia' ); ?>"><?php printf( __( 'Website designed and developed by %s', 'kelseyhuebner' ), 'Kelsey Huebner' ); ?></a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>