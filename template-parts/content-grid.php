<?php
/**
 * Template part for displaying posts in the grid format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package erin
 */

$class_array = array( 'col', 'col--third', 'grid-item' );
if ( ! has_post_thumbnail() ) {
	$class_array[] = 'grid-item--lacks-thumbnail';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $class_array ); ?>>
	<?php // Wrap the image with a post link
		echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="grid-thumbnail-link">';
		if( has_post_thumbnail() ) {
			the_post_thumbnail('grid-image'); 
		}
		else {
			echo '<div class="grid-background"></div>';
		}
		the_title( '<h2 class="grid-title">', '</h2></a>' ); 
		echo '</a>';
	?>
</article><!-- #post-## -->