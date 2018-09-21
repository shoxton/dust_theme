<div class="single-header">
	<div style="background: url('<?php the_post_thumbnail_url(); ?>');" class="single-header-image"></div>
	<div class="single-header-content wrapper">
		<h1><?php the_title(); ?></h1>
		<?php dust_theme_posted_on(); ?>
		<?php dust_theme_entry_footer(); ?>
	</div>
</div>
<div class="single-content wrapper">
	<?php the_content(); ?>
</div>
