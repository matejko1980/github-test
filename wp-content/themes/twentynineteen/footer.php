<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
	
		<div class="footer-content">
			<div class="footer-content--socials">
				<a href="<?php echo get_post_meta( 2, 'social_fb_url', true ); ?>"><img src="<?php echo includes_url(); ?>/img/facebook.svg" /></a>
				<a href="<?php echo get_post_meta( 2, 'social_tw_url', true ); ?>"><img src="<?php echo includes_url(); ?>/img/twitter.svg" /></a>
				<a href="<?php echo get_post_meta( 2, 'social_in_url', true ); ?>"><img src="<?php echo includes_url(); ?>/img/instagram.svg" /></a>
			</div>
	
			<div class="footer-content--menu">
				<?php 	wp_nav_menu( array(
					'menu' => 'menu_top'	
					) );
				?>
			</div>
			
			<div class="footer-content--copy">
				<p><?php echo get_post_meta( 2, 'podpis_footer', true ); ?></p>
			</div>
			
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
