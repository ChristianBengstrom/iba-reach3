<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iba-reach2
 */

get_header(); ?>
		<div class="container col-md-8 col-md-offset-4 jumbotron">
			<div class="row">
			<div id="primary" class="content-area">
			</div>
		</div>
		<main id="main" class="site-main content-sp">
		<?php
		// echo "<center>"; centers the entry contentTEXT
		while ( have_posts() ) : the_post();


			get_template_part( 'template-parts/content', get_post_type() );




		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
