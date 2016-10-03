<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package erin
 */

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area max-content-width center">
		<main id="main" class="site-main" role="main">

		<?php
		// Set up row and col counts
		$row_count = 3;
		$col_count = 0;
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			if( $col_count == 0 ) { // To illustrate how this works, we only start a row when we know there's no other columns on the page
				echo '<!-- grid-start --><div class="row row--query row--thirds clear">';
			}
			while ( have_posts() ) : the_post();
				if ( $row_count == $col_count ) { // When the number of rows equals a full column, we end the row, start a new row and reset the count
					echo '</div><!-- row-end -->'; // end row
					echo '<div class="row row--query row--thirds clear">'; // start new row, change -- when updating row_count
					$col_count = 0; // reset the counter
				}
				get_template_part( 'template-parts/content', 'grid' );
				$col_count++; // Add one to column count
			endwhile;
			echo '</div><!-- grid-end -->'; // End the grid, because no matter where we end, there will be an open row left

			erin_page_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();