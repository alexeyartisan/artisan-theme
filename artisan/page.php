<?php get_header(); ?>

<section id="blog" class="section">
	<div class="container">
		<div class="row">
			<section id="blog-posts" class="col-sm-8">

				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

				<article class="card">
					<div class="card-content">
						<h3>
							<?php the_title(); ?>
						</h3>
						<?php the_content(); ?>
					</div>
				</article>

				<?php endwhile; ?>
				<?php else: ?>
					<p>Sorry, no posts here.</p>
				<?php endif; ?>				


				


			</section>
			<aside id="sidebar" class="col-sm-4">

                <?php get_sidebar('art_sidebar'); ?>

			</aside>
		</div>
	</div>
</section>

<?php get_footer(); ?>
