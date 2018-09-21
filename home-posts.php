<?php 

$api_prefix = 'dust.local'; ?>

<div class="news-section">

	<div class="news-section-content">

		<div class="col-1">
			<h2>Novidades</h2>

			<div class="posts-preview">

				<?php
					$news_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => '3'
					)); 
					if ( $news_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $news_query->have_posts() ) : $news_query->the_post(); 
						get_template_part( 'template-parts/content', 'home-posts');
					endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-2">
			<div class="vips-section-content">

				<h2>Vips</h2>

				<div class="vips-preview">
					<?php
						$product_query = new WP_Query(array(
							'post_type' => 'product',
							'posts_per_page' => '3'
						)); 
						if ( $product_query->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $product_query->have_posts() ) : $product_query->the_post(); 
							get_template_part( 'template-parts/content', 'home-products');
						endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>

			</div>
		</div>


	</div>



</div>

