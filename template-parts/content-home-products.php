<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dust
 */

?>

<div class="vips-preview-item">
	<h3><?php the_title(); ?></h3>
	<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
	<span class="vips-preview-item-price"><?php echo wc_price( $price ); ?></span>
	<div class="vips-preview-item-description">
		<?php the_content(); ?>
	</div>
	<a class="buy-vip-btn" href="<?php the_permalink(); ?>">Comprar</a>
</div>
