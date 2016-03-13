<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>

		<?php the_content(); ?>

		<?php edit_post_link(); ?>
	</article>

<?php endwhile; ?>

<?php get_footer() ?>