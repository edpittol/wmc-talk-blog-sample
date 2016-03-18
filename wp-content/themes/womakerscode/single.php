<?php get_header() ?>

<main role="main">
	<section>

		<?php while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class-"entry-title>
					<?php the_title(); ?>
				</h1>
				
				<?php the_category() ?>
				
				<?php the_content(); ?>
		
				<?php edit_post_link(); ?>
			</article>
		
		<?php endwhile; ?>

	</section>
</main>

<?php get_sidebar() ?>

<?php get_footer() ?>