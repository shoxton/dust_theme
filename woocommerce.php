<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dust
 */

get_header();
?>

	<div id="primary" class="content-area wrapper">

		<main id="main" class="site-main">

			<?php woocommerce_breadcrumb(); ?>
			<?php woocommerce_content(); ?>

		</main><!-- #main -->
		<?php if(is_shop()) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
	</div><!-- #primary -->

<?php
get_footer();
