<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package erin
 */

get_header(); ?>
<div id="content" class="site-content">
	<section id="primary" class="content-area max-content-width center">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'erin' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

		<?php	
			$row_count = 3;
			$col_count = 0;
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();