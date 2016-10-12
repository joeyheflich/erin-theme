<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'erin' ); ?></a>

	<header id="masthead" class="site-header relative clear" role="banner">
		<div class="header-container relative max-content-width center"><!-- to my great shame, this is a container, and i will fix this when I have time -->
			<div class="site-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.png" class="site-logo-image"></a></div>
	 		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-image.png" class="hero-image">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button type="button" class="drawer-toggle drawer-hamburger">
			      <span class="sr-only">Toggle Navigation</span>
			      <span class="drawer-hamburger-icon"></span>
			    </button>
			    <nav class="main-menu drawer-nav" role="navigation">
			    	<?php erin_main_menu(); ?>
			    </nav>
		    </nav>
		  <?php if( is_front_page() ) : ?>
			<section class="hero-section hero-header center section-padding-bottom">
			 		<h1 id="hero-text" class="hero-title">Thoughtful <span class="text-highlight">Design</span> Work For Agencies and Design <span class="text-highlight">Studios</span></h1>
			</section>
			<?php endif; ?>
		</div>
  </header>