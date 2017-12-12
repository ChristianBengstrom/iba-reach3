<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iba-reach2
 */

get_header(); ?>
		<div class="container col-sm-8 col-sm-offset-3">
			<div class="row">
			<div id="primary" class="content-area">
			</div>
		</div>
		<main id="main" class="site-main">
		<?php
		// echo "<center>"; centers the entry contentTEXT
		while ( have_posts() ) : the_post();


			get_template_part( 'template-parts/content', get_post_type() );




		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="sidebar-single">
	<?php
	get_sidebar();
	?>
</div>
<?php
get_footer();
