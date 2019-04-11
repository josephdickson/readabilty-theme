<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Readability
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'readability' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'readability' ), 'WordPress' );
				?>
			</a>
		</div><!-- .site-info -->
		<div class="sidebar-widgets">
			<?php get_sidebar(); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
