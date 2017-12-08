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

<?php if (is_category('About IBA')) : ?>
<p>This is the text to describe About IBA</p>
<?php elseif (is_category('	Economy')) : ?>
<p>This is the text to describe Economy</p>
<?php elseif (is_category('	Culture')) : ?>
<p>This is the text to describe Culture</p>
<?php elseif (is_category('	Legislation')) : ?>
<p>This is the text to describe Legislation</p>
<?php else : ?>
<p>This is some generic text to describe all other category pages,
I could be left blank</p>
<?php endif; ?>

<div class="container-fluid space w_blog">
	<div class="container">
	<?php  if ( have_posts()){ ?>
		<div class="col-md-9 col-sm-8 right-side blog_gallery">
		<?php while ( have_posts() ): the_post(); ?>
			<div class="col-md-12 col-sm-12 w_blog_post">
				<div class="col-md-12 w_post_desc">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-content">
				<?php if(has_post_thumbnail()): ?>
				<div class="col-md-4 col-sm-4 col-xs-6 post-thumbs">
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
			</div>
			<?php endwhile; ?>
		</div>
		<?php }
		get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
