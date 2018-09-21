<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dust
 */

?>

<a class="posts-preview-item" href="<?php the_permalink(); ?>">
	<?php dust_theme_post_thumbnail(); ?>
	<span class="posts-preview-item-cat">
		<?php
		$category = get_the_category(); 
		echo $category[0]->cat_name;
		?>
	</span>
	<h3><?php the_title(); ?></h3>
	<p><?php the_excerpt(); ?></p>
</a>
