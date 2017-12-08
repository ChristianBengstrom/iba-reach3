<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iba-reach2
 */

get_header(); ?>
	<div id="primary" class="content-area, entry-content-single">
		<main id="main" class="site-main">

			
		<h2>hello world (go to (to edit)) single php test</h2>
		<?php
		// echo "<center>"; centers the entry contentTEXT
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
