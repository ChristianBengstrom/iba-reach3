<?php
/**
 * @package iba-reach2
 *
 *
 *
 *
 *
 */

get_header();?>


<div class="container">
	<div class="row">
		<div class="intro col-sm-12 ">
			<?php if (is_category('About IBA')) : ?>
			<h4 class="text-center">About IBA</h4>
			<h5 class="text-center">Here you can read topics about the scool.</h5>
			<?php elseif (is_category('Economy')) : ?>
			<h4 class="text-center">Economy</h4>
			<h5 class="text-center">Here you can get an overview of what you need to know about your economy when moving to Denmark</h5>
		<?php elseif (is_category('Culture')) : ?>
			<h4 class="text-center">Culture</h4>
			<h5 class="text-center">In this section you can learn about differences between the romanian and danish culture</h5>
			<?php elseif (is_category('Legislation')) : ?>
			<h4 class="text-center">Legislation</h4>
			<h5 class="text-center">Here you can read about important legislations in Denmark</h5>
			<?php else : ?>
			<h4 class="text-center"></h4>
			<?php endif; ?>
		</div>
	</div>


	<?php  if ( have_posts()){ ?>
		<div class="col-sm-9 col-sm-push-3 masonry">
		<?php while ( have_posts() ): the_post(); ?>
			<div class="">
				<div class="item">
					<div class="connector-female">
						<svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 145">
						  <defs>
						  </defs>
						  <title>Connector-female</title>
						  <path class="cls-2" d="M42.14,40.62a53.32,53.32,0,1,0,59.24-.71V-5.93H42.14Z"/>
						</svg>
					</div>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 class="text-center post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-content post-text">
				<?php if(has_post_thumbnail()): ?>
				<div class="">
					<div class="img-thumbnail">
						<?php $data= array('class' =>'img-responsive post_image');
						the_post_thumbnail('post_image', $data); ?>
					</div>
				</div>
				<?php endif; ?>
						<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<div class="connector">
					<svg id="Layer_3" class="connector" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 145">
						<!-- filename: Connector -->
						<path class="cls-1" d="M44.32,42.9a49.5,49.5,0,1,0,55-.66V-.32h-55Z"/>
					</svg>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php }
		get_sidebar(); ?>

</div>
<?php get_footer(); ?>
