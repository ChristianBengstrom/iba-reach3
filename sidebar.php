<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iba-reach2
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-3 col-sm-pull-9 sidebar-custom .hidden-xs">
	<?php get_sidebar( 'custom' ); ?>
</aside><!-- #secondary -->
