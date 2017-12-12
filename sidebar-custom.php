<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iba-reach2
 */
?>
<div id="sidebar" role="complementary">
	<ul>
<?php
//for each category, show all posts
$cat_args=array(
 'orderby' => 'name',
 'order' => 'ASC'
	);

$categories=get_categories($cat_args);
 foreach($categories as $category) {
	 $args=array(
		 'showposts' => -1,
		 'category__in' => array($category->term_id),
		 'caller_get_posts'=>1
	 );

	 $posts=get_posts($args);
		 if ($posts) {
			 echo '<li><h4><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h4></li>';
			 echo "<ul class='dot'>";
			 foreach($posts as $post) {
				 setup_postdata($post); ?>

				 <li>
				 <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
			 	 </li>
				 <?php
			 } // foreach($posts
		 } // if ($posts
		 echo "</ul>";
	 } // foreach($categories
?>

		<li class="search-form">
			<?php get_search_form(); ?>
		</li>

	</ul>
</div>
