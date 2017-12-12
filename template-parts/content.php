<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iba-reach2
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail()): ?>
		<div class="img-thumbnail post-img clip-svg">
			<?php $data= array('class' =>'img-responsive post_image');
			the_post_thumbnail('post_image', $data); ?>

			<!-- <svg width="0" height="0">
        <defs>
          <clipPath id="myClip" clipPathUnits="objectBoundingBox">
            	<path d="M1.1,0V.69H.61V.8a.13.13,0,0,1,0,.09.09.09,0,0,1-.1.1A.1.1,0,0,1,.44.89.11.11,0,0,1,.49.8V.69H0V0H1.1Z"/>
          </clipPath>
        </defs>
    </svg> -->
		</div>

		<div class="connector">
			<svg id="Layer_3" class="connector rotate180deg" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 145">
				<!-- filename: Connector -->
				<path class="cls-1" d="M44.32,42.9a49.5,49.5,0,1,0,55-.66V-.32h-55Z"/>
			</svg>
		</div>

	<div class="single-article">
		<?php endif; ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			// echo "<h2>string written in content-php line 20</h2>";
		endif; ?>

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'iba-reach2' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iba-reach2' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->
	<div class="connector">
		<svg id="Layer_3" class="connector" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 145">
			<!-- filename: Connector -->
			<path class="cls-1" d="M44.32,42.9a49.5,49.5,0,1,0,55-.66V-.32h-55Z"/>
		</svg>
	</div>

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
