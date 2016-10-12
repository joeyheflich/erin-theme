<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package erin
 */

// Update the header menu
function erin_main_menu() {
    if ( has_nav_menu( 'main' ) ) {
	wp_nav_menu(
		array(
			'theme_location'  => 'main',
			'container'       => '',
			'menu_id'         => 'main-menu-items',
			'menu_class'      => 'main-menu-items',
			'depth'           => 1,
			'fallback_cb'     => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s drawer-menu--right">%3$s</ul>',
		)
	);
    }
}

// Update the footer menu as well
function erin_footer_menu() {
    if ( has_nav_menu( 'footer' ) ) {
	wp_nav_menu(
		array(
			'theme_location'  => 'footer',
			'container'       => 'div',
			'container_id'    => 'footer-main-menu',
			'container_class' => 'footer-main-menu',
			'menu_id'         => 'footer-main-items',
			'menu_class'      => 'footer-main-items',
			'depth'           => 1,
			'fallback_cb'     => '',
		)
	);
    }
}

function erin_alt_footer_menu() {
    if ( has_nav_menu( 'alt' ) ) {
	wp_nav_menu(
		array(
			'theme_location'  => 'alt',
			'container'       => 'div',
			'container_id'    => 'footer-alt-menu',
			'container_class' => 'footer-alt-menu',
			'menu_id'         => 'footer-alt-items',
			'menu_class'      => 'footer-alt-items',
			'depth'           => 1,
			'fallback_cb'     => '',
		)
	);
    }
}

if ( ! function_exists( 'erin_social_menu' ) ) :
/**
 * Displays the social menu
 * Social media icon menu as per http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
*/
function erin_social_menu() {
  if ( has_nav_menu( 'social' ) ) {
		wp_nav_menu(
			array(
				'theme_location'  => 'social',
				'container'       => 'div',
				'container_id'    => 'menu-social',
				'container_class' => 'social-menu',
				'menu_id'         => 'menu-social-items',
				'menu_class'      => 'social-menu-items',
				'depth'           => 1,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
				'fallback_cb'     => '',
			)
		);
  }
}
endif;

// Page nav
if ( ! function_exists( 'erin_page_nav' ) ) :
/**
 * Prints a simple page nav
 */
function erin_page_nav(){
 	$post_nav_begin = '<nav class="navigation post-navigation" role="navigation"><h3 class="screen-reader-text">Page navigation</h3><div class="nav-links clear">';
 	$post_nav_end = '</div></nav>';

 	$navigation = $previous = $next = '';
 	$newer_page_url = get_previous_posts_page_link();
 	$older_page_url = get_next_posts_page_link();

	$older_post_info = '<i class="nav-icon fa fa-chevron-right"></i>';
	$newer_post_info = '<i class="nav-icon fa fa-chevron-left"></i>';
	$newer_post_info = '<span class="nav-arrow nav-arrow--left">' . $newer_post_info . '</span><h4 class="nav-title">' .  __( 'Previous', 'erin' ) . '</h4>';
	$older_post_info = '<h4 class="nav-title">' . __( 'Next', 'erin' ) . '</h4><span class="nav-arrow nav-arrow--right">' . $older_post_info . '</span>';
	

	// Assemble it all 
    if ( get_previous_posts_link() ) {
	   	$previous = '<div class="nav-previous nav-left"><a href="' . $newer_page_url . '" class="nav-button button">' . $newer_post_info . '</a></div>';
	}
	if ( get_next_posts_link() ) {
	    $next = '<div class="nav-next nav-right"><a href="' . $older_page_url . '" class="nav-button button">' . $older_post_info . '</a></div>';
	}

    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation =  $post_nav_begin . $previous . $next . $post_nav_end;
    }

    echo $navigation;
}
endif;

// Post nav
if ( ! function_exists( 'erin_post_nav' ) ) :
/**
 * Prints a simple post nav
 */
function erin_post_nav(){
 	$post_nav_begin = '<nav class="navigation post-navigation" role="navigation"><h3 class="screen-reader-text">Post navigation</h3><div class="nav-links clear">';
 	$post_nav_end = '</div></nav>';

 	$navigation = $previous = $next = '';
 	$prev_post = get_previous_post();
 	$next_post = get_next_post();
 	$newer_page_url = ( $prev_post ) ? esc_url( get_permalink( $prev_post->ID ) ) : '';
 	$older_page_url = ( $next_post ) ? esc_url( get_permalink( $next_post->ID ) ) : '';

	$older_post_info = '<i class="nav-icon fa fa-chevron-right"></i>';
	$newer_post_info = '<i class="nav-icon fa fa-chevron-left"></i>';
	$newer_post_info = '<span class="nav-arrow nav-arrow--left">' . $newer_post_info . '</span><h4 class="nav-title">' .  __( 'Previous', 'erin' ) . '</h4>';
	$older_post_info = '<h4 class="nav-title">' . __( 'Next', 'erin' ) . '</h4><span class="nav-arrow nav-arrow--right">' . $older_post_info . '</span>';
	

	// Assemble it all 
    if ( get_previous_post_link() ) {
	   	$previous = '<div class="nav-previous nav-left"><a href="' . $newer_page_url . '" class="nav-button button">' . $newer_post_info . '</a></div>';
	}
	if ( get_next_post_link() ) {
	    $next = '<div class="nav-next nav-right"><a href="' . $older_page_url . '" class="nav-button button">' . $older_post_info . '</a></div>';
	}

    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation =  $post_nav_begin . $previous . $next . $post_nav_end;
    }

    echo $navigation;
}
endif;

if ( ! function_exists( 'erin_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function erin_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'erin' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'erin_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function erin_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'erin' ) );
		if ( $categories_list && erin_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'erin' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'erin' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'erin' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'erin' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'erin' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function erin_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'erin_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'erin_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so erin_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so erin_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in erin_categorized_blog.
 */
function erin_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'erin_categories' );
}
add_action( 'edit_category', 'erin_category_transient_flusher' );
add_action( 'save_post',     'erin_category_transient_flusher' );
