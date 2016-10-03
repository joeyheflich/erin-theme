<?php 
/* Defining ACF variables for easy calls in template files */

/* Text */
$hero_title = get_field( 'hero_text' ); // This will always have some HTML in it
$what_i_do_title = esc_html( get_field( 'what_i_do_title' ) );
$how_it_works_title = esc_html( get_field( 'how_it_works_title' ) );
$what_title = esc_html( get_field( 'what_title' ) );
$what_column_one_title = esc_html( get_field( 'what_column_one_title' ) );
$what_column_two_title = esc_html( get_field( 'what_column_one_title' ) );
$what_column_three_title = esc_html( get_field( 'what_column_one_title' ) );
$what_column_four_title = esc_html( get_field( 'what_column_one_title' ) );
$hire_me_title = esc_html( get_field( 'hire_me_title' ) );
$hire_me_button = esc_html( get_field( 'hire_me_button' ) );
$view_my_work_title = esc_html( get_field( 'view_my_work_title' ) );
$portfolio_button = esc_html( get_field( 'portfolio_button' ) );

/* Images */
$how_column_one_image = esc_attr( get_field( 'how_column_one_image' ) );
$how_column_two_image = esc_attr( get_field( 'how_column_two_image' ) );
$how_column_three_image = esc_attr( get_field( 'how_column_three_image' ) );
$what_column_one_image = esc_attr( get_field( 'what_column_one_image' ) );
$what_column_two_image = esc_attr( get_field( 'what_column_two_image' ) );
$what_column_three_image = esc_attr( get_field( 'what_column_three_image' ) );
$what_column_four_image = esc_attr( get_field( 'what_column_four_image' ) );

/* WYSIWYG */
$what_i_do_column_one = get_field( 'what_i_do_column_one' );
$what_i_do_column_two = get_field( 'what_i_do_column_two' );
$how_column_one_text = get_field( 'how_column_one_text' );
$how_column_two_text = get_field( 'how_column_two_text' );
$how_column_three_text = get_field( 'how_column_three_text' );
$what_column_one_list = get_field( 'what_column_one_list' );
$what_column_two_list = get_field( 'what_column_two_list' );
$what_column_three_list = get_field( 'what_column_three_list' );
$what_column_four_list = get_field( 'what_column_four_list' );
$hire_me_text = get_field( 'hire_me_text' );



/**** Variable List 
	* Text 
	$hero_title
	$what_i_do_title
	$how_it_works_title
	$what_title
	$what_column_one_title
	$what_column_two_title
	$what_column_three_title
	$what_column_four_title
	$hire_me_title
	$hire_me_button
	$view_my_work_title
	$portfolio_button

	* Images
	$how_column_one_image
	$how_column_two_image
	$how_column_three_image
	$what_column_one_image
	$what_column_two_image
	$what_column_three_image
	$what_column_four_image

	* WYSIWYG
	$what_i_do_column_one
	$what_i_do_column_two
	$how_column_one_text
	$how_column_two_text
	$how_column_three_text
	$what_column_one_list
	$what_column_two_list
	$what_column_three_list
	$what_column_four_list
	$hire_me_text

*****/