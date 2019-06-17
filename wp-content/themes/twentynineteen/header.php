<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_bloginfo('url'); ?>/wp-includes/css/custom-styles.css" type="text/css" media="all">
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<header>			
		<a class="logo"></a>
		<span>Book your<br>stay now</span>
		<?php 	wp_nav_menu( array(
					'menu' => 'menu_top'	
					) );
					
					wp_nav_menu( array(
						'menu' => 'menu_lang'
					) );
		?>			
	</header>	

	<div id="content" class="site-content">
