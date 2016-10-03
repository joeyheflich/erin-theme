<?php
/**
 * The front page template file.
 *
 * This is the template for the home page.
 *
 * @package erin
 */
get_header(); 
require_once('inc/acf.php'); ?>
<div id="content" class="site-content">
 <header class="hero-section hero-header max-content-width center section-padding-bottom">
 	<h1 id="hero-text" class="hero-title"><?php echo $hero_title; ?></h1>
 </header>
 <section id="process" class="home-section home-section--process has-blue-background-ltr scrollifed">
 	<section id="what-i-do" class="what-i-do max-content-width center">
 		<header class="home-section-header what-i-do-header">
 			<h2 class="what-i-do-title home-section-title heading-margin-large"><?php echo $what_i_do_title; ?></h2>
 		</header>
 		<div class="what-i-do-row row row--halves clear">
	 		<div class="what-i-do-col col col--half">
	 			<?php echo $what_i_do_column_one; ?>
	 		</div>
	 		<div class="what-i-do-col col col--half">
	 			<?php echo $what_i_do_column_two; ?>
	 		</div>
 		</div>
 	</section>
 	<section id="how-it-works" class="how-it-works max-content-width center">
 		<header class="home-section-header how-it-works-header">
 			<h2 class="how-it-works-title home-section-title heading-margin-large"><?php echo $how_it_works_title; ?></h2>
 		</header>
 		<div class="how-it-works-row row row--thirds clear">
	 		<div class="how-it-works-col col col--third">
	 			<img src="<?php echo $how_column_one_image; ?>" class="col-image center">
	 			<div class="col-copy col-copy--has-border">
		 			<?php echo $how_column_one_text; ?>
	 			</div>
	 		</div>
	 		<div class="how-it-works-col col col--third">
	 			<img src="<?php echo $how_column_two_image; ?>" class="col-image center">
	 			<div class="col-copy col-copy--has-border">
	 				<?php echo $how_column_two_text; ?>
	 			</div>
	 		</div>
	 		<div class="how-it-works-col col col--third">
	 			<img src="<?php echo $how_column_three_image; ?>" class="col-image center">
	 			<div class="col-copy col-copy--has-border">
	 				<?php echo $how_column_three_text; ?>
	 			</div>
	 		</div>
 		</div>
 	</section>
 </section>
 <section id="help" class="home-section home-section--help-with scrollifed">
 	<section class="what-i-can-help-with max-content-width center">
	 	<header class="home-section-header help-with-header">
	 		<h2 class="help-with-title home-section-title heading-margin-large"><?php echo $what_title; ?></h2>
	 	</header>
 		<div class="help-with-row row row--fourths clear">
	 		<div class="help-with-col col col--fourth">
	 			<img src="<?php echo $what_column_one_image; ?>" class="col-image center">
	 			<div class="col-copy">
	 				<h3 class="col-copy-header"><?php echo $what_column_one_title; ?></h3>
	 				<?php echo $what_column_one_list; ?>
	 			</div>
	 		</div>
	 		<div class="help-with-col col col--fourth">
	 			<img src="<?php echo $what_column_two_image; ?>" class="col-image center">
	 			<div class="col-copy">
	 				<h3 class="col-copy-header"><?php echo $what_column_two_title; ?></h3>
	 				<?php echo $what_column_two_list; ?>
	 			</div>
	 		</div>
	 		<div class="help-with-col col col--fourth">
	 			<img src="<?php echo $what_column_three_image; ?>" class="col-image center">
	 			<div class="col-copy">
	 				<h3 class="col-copy-header"><?php echo $what_column_three_title; ?></h3>
	 				<?php echo $what_column_three_list; ?>
	 			</div>
	 		</div>
	 		<div class="help-with-col col col--fourth">
	 			<img src="<?php echo $what_column_four_image; ?>" class="col-image center">
	 			<div class="col-copy">
	 				<h3 class="col-copy-header"><?php echo $what_column_four_title; ?></h3>
	 				<?php echo $what_column_four_list; ?>
	 			</div>
	 		</div>
 		</div>
 	</section>
 </section>
 <section id="hire" class="home-section home-section--hire has-blue-background-rtl scrollifed">
 	<section id="hire-me" class="hire-me max-content-width center">
 		<header class="home-section-header hire-me-header">
 			<h2 class="hire-title home-section-title heading-margin-small"><?php echo $hire_me_title; ?></h2>
 		</header>
 		<div class="hire-row row row--mixed clear">
	 		<div class="hire-col text-featured col col--sixty">
	 			<?php echo $hire_me_text; ?>
	 		</div>
	 		<div class="hire-col col col--forty">
	 			<a href="#" class="button button--large button--huge-padding"><?php echo $hire_me_button; ?></a>
	 		</div>
 		</div>
 	</section>
 	<section id="view-work" class="view-my-work max-content-width center">
 		<header class="home-section-header view-my-work-header">
 			<h2 class="view-my-work-title home-section-title heading-margin-small"><?php echo $view_my_work_title; ?></h2>
 		</header>
 		<div class="view-my-work-row row row--mixed clear">
	 		<div class="view-my-work-col col col--inline view-my-work-button">
	 			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="button button--large button--large-padding"><?php echo $portfolio_button; ?></a>
	 		</div>
	 		<div class="view-my-work-col col col--inline view-my-work-icons">
				<i class="fa fa-linkedin"></i>
				<i class="fa fa-twitter"></i>
	 			<i class="fa fa-instagram"></i>
	 		</div>
 		</div>
 	</section>
 </section>
</div><!-- #content -->
<?php
get_footer();