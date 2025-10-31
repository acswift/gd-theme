<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscore-me
 */

?>

  <!-- https://developer.wordpress.org/reference/functions/esc_html__/ -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://generatordata.net', 'underscore-me' ) ); ?>">
				<?php printf( esc_html__( '%s', 'underscore-me' ), 'generatordata.net' ); ?>
			</a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://llpowerservices.com', 'underscore-me' ) ); ?>">
				<?php printf( esc_html__( '%s', 'underscore-me' ), 'llpowerservices.com' ); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
