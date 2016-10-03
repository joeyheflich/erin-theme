<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package erin
 */

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area max-content-width center">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Can&rsquo;t find that page', 'erin' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content content-container">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'erin' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();