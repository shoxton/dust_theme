<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dust
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<a class="post-thumbnail" href="<?php the_permalink();?>"><div style="background-image: url('<?php the_post_thumbnail_url('medium_large'); ?>');" class="post-thumbnail-image"></div></a>
	<?php endif; ?>
	<div class="post-content">
		
		<?php if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				dust_theme_posted_on();
				dust_theme_entry_footer();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<a class="post-link" href="<?php the_permalink(); ?>">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title">', '</h2>' );
				endif ?>


			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_excerpt( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dust_theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dust_theme' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<span>Read More</span>
			</footer><!-- .entry-footer -->
		</a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
