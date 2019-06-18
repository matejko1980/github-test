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
	
	<link href="<?php echo get_bloginfo('url'); ?>/wp-includes/css/custom-styles.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">	
		$( document ).ready(function() {
			
			$('.header-mobilemenu--open').click(function() {
			  $('.menu-menu_top-container').addClass('menu-menu_top-container--active');
			});
			
			$('.header-mobilemenu--close').click(function() {
			  $('.menu-menu_top-container').removeClass('menu-menu_top-container--active');
			});
	
		});
	</script>
	
</head>

<body <?php body_class(); ?>>

<div class="side side-adress">
	<p><a href="#">booking@balticparkmolo.pl</a> t. +48 40 40 400</p>
</div>
	
<div class="side side-social">
	<a href="#"><img src="<?php echo includes_url(); ?>/img/facebook.svg" /></a>
	<a href="#"><img src="<?php echo includes_url(); ?>/img/twitter.svg" /></a>
	<a href="#"><img src="<?php echo includes_url(); ?>/img/instagram.svg" /></a>
</div>		


<div id="page" class="site">
	

	<header>			
		<a class="header-logo"></a>
		<span class="header-sentence">Book your<br>stay now</span>
		<div class="header-mobilemenu--open">
			<div class="bars">
				<span class="poz1"></span>
				<span class="poz2"></span>
				<span class="poz3"></span>
			</div>	
			<p>Menu</p>
		</div>

		<div class="menu-menu_top-container">
			<div class="header-mobilemenu--close">
				<span class="poz1"></span>
				<span class="poz2"></span>
			</div>	
			<?php 	wp_nav_menu( array(
						'menu' => 'menu_top',
						'container' => ''
					) );
			?>
		</div>
			
		<?php
					wp_nav_menu( array(
						'menu' => 'menu_lang'
					) );
		?>			
	</header>	

	<div id="content" class="site-content">
