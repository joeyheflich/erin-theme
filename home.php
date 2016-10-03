<?php
/**
 * The home template file.
 *
 * This is the template for the posts/blog page. To alter with different looks, set values below.
 *
 * @package erin
 */

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area max-content-width center">
		<main id="main" class="site-main" role="main">
		<header class="page-header center max-content-width">
			<h1 class="page-title"><?php _e('Portfolio', 'erin'); ?></h1>
			<ul id="project-types-menu" class="types-menu">
				<?php
					$types = get_terms('types');
					$site_url = get_site_url() . '/types/';

					foreach ( $types as $type ) {
						echo '<li class="types-menu-item"><a href="' . esc_url( $site_url . $type->slug ) . '" class="menu-item-link clean-link">' . $type->name . '</a></li>';

					}
				?>
			</ul>
		</header><!-- .page-header -->
		<?php
		// Set up row and col counts
		$row_count = 3;
		$col_count = 0;
		if ( have_posts() ) :

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