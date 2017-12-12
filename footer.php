<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iba-reach2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<nav class="footer-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</nav> <!-- footer menu -->
		
		<div class="site-info">

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
