<?php
/*
	Template Name: Full Width Page
*/
?>


<?php get_header(); ?>

<section id="blog" class="section">
	<div class="container">
		<div class="row">
			<section id="blog-posts" class="col-sm-12">

				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

				<article class="card">
					<div class="card-content">
						<h3>
							<span class="date"><?php the_time( 'd M' ); ?></span>
							<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
						</h3>
						<?php the_content(); ?>
						<?php the_tags(); ?>

						<?php comments_template(); ?>
					</div>
				</article>

				<?php endwhile; ?>
				<?php else: ?>
					<p>Sorry, no posts here.</p>
				<?php endif; ?>	
			</section>
		</div>
	</div>
</section>

<?php get_footer(); ?>