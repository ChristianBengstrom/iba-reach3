<?php
/**
 * The main template file THIS IS A TEST
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iba-reach2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<section class="home-about">
					<div class="home-about-textbox parallax--box">
						<h1>About IBA</h1>
						<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
					</div>
				</section>
			</div>
		<?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
		// 	while ( have_posts() ) : the_post();
		//
		// 		/*
		// 		 * Include the Post-Format-specific template for the content.
		// 		 * If you want to override this in a child theme, then include a file
		// 		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		// 		 */
		// 		get_template_part( 'template-parts/content', get_post_format() );
		//
		// 	endwhile;
		//
		//
		//
		// else :
		//
		// 	get_template_part( 'template-parts/content', 'none' );


		endif; ?>

		<?php $recent = new WP_Query("page_id=42"); while($recent->have_posts()) : $recent->the_post();?>
			<div id="post-37" class="interested">
			<h3><?php the_title(); ?></h3>
			<?php the_content();?>

			</div>

		<?php endwhile; ?>

		<script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous">
		</script>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php $recent = new WP_Query("page_id=40"); while($recent->have_posts()) : $recent->the_post();?>
		<div class="interested">
		<h3><?php the_title(); ?></h3>
		<a href="https://www.iba.dk/fuldtidsuddannelser">
		<div class="button-fill grey">
			<div class="button-text"><?php the_content(); ?></div>
			<div class="button-inside">
				<div class="inside-text">Click</div>
			</div>
		</div>
		</a>

		</div>

	<?php endwhile; ?>
<?php
get_footer();
