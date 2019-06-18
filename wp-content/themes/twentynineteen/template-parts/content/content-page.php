<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		
		<?php if (is_page( 2 )){ ?>		
			<div class="home-page">			
				<?php the_content(); ?>
			</div>

		<?php }else{ ?>
		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<?php };	?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
