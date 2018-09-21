	
<?php 

/* Template Name: HomeTemplate*/ 

get_header()
?>
<div class="hero" style="background-image: url(<?php header_image(); ?>);">
	<div class="site-branding wrapper">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<?php 	
		$dust_theme_description = get_bloginfo( 'description', 'display' );
		if ( $dust_theme_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $dust_theme_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->
</div>
<div class="features">
	<div class="feature-item">
		<div class="feature-content">
			<h2>24</h2>
			<span>horas</span>
			<p>por dia</p>
		</div>
	</div>
	<div class="feature-item">
		<div class="feature-content">
			<h2>vips</h2>
			<span>a partir de</span>
			<p>R$30,00</p>
		</div>
	</div>
	<div class="feature-item">
		<div class="feature-content">
			<h2>sync</h2>
			<span>servidor em</span>
			<p>tempo real</p>
		</div>
	</div>
</div>
<div class="highlights">
	<div class="highlight-item">
		<div style="background: url('<?php the_field('image'); ?>');" class="highlight-image">
			<svg viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="none">
			  <polygon fill="white" points="0,80 100,100 0,100" />
			</svg>
			<div class="highlight-content">
				<div class="highlight-text">
					<h2><?php the_field('title'); ?></h2>
					<p><?php the_field('description'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="highlight-item">
		<div style="background: url('<?php the_field('image_2'); ?>');" class="highlight-image">
			<svg viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="none">
			  <polygon fill="white" points="0,0 100,0 100,20" />
			</svg>
			<svg viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="none">
			  <polygon fill="white" points="0,80 100,100 0,100" />
			</svg>
			<div class="highlight-content">
				<div class="highlight-text">
					<h2><?php the_field('title_2'); ?></h2>
					<p><?php the_field('description_2'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="highlight-item">
		<div style="background: url('<?php the_field('image_3'); ?>');" class="highlight-image">
			<svg viewBox="0 0 100 100" width="100%" height="100%" preserveAspectRatio="none">
			  <polygon fill="white" points="0,0 100,0 100,20" />
			</svg>
			<div class="highlight-content">
				<div class="highlight-text">
					<h2><?php the_field('title_3'); ?></h2>
					<p><?php the_field('description_3'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('home-posts'); ?>

<?php get_footer(); ?>
