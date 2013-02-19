<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--***************************
	UT & Library Branding 
****************************-->
	<div id="utlib-branding-bar">
				<div class="branding-bar bar-ut"><img src="<?php echo get_stylesheet_directory_uri()?>/images/utlib-footer-tower.jpg"></div>
				<div class="branding-bar bar-library">
					<div id="bar-liblogo"><img src="<?php echo get_stylesheet_directory_uri()?>/images/utlib-footer-flyingbook.gif"></div>
						<div class="bar-metabox">
							<div class="bar-metabox blogin"><a href="wp-admin/">Log In/Admin</a></div>
							<div class="bar-metabox libblog"><a href="#">LIBblog</a></div>
						</div>
				</div>
	</div>
</body>
</html>