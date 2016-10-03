<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erin
 */

?>
<a id="back-to-top" href="#0" class="back-to-top"><i id="icon-to-top" class="fa fa-angle-up back-to-top-icon" aria-hidden="true"></i><span class="screen-reader-text">Scroll to Top</span></a>
<footer id="footer" class="site-footer max-content-width center" role="contentinfo">
	<nav class="footer-menus">
		<?php erin_footer_menu(); ?>
		<?php erin_alt_footer_menu(); ?>
	</nav>
	<div class="site-info">
		<p>Site designed by Erin Demoss Creative</p>
		<p>Developed by Joey Heflich</p>
		<p>&copy; Erin Demoss Creative, <?php echo date("Y") ?></p>
	</div><!-- .site-info -->
</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>