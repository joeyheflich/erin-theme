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

	<header id="masthead" class="site-header relative max-content-width center clear scrollifed" role="banner">
		<div class="site-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.png" class="site-logo-image"></a></div>
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
    </header>