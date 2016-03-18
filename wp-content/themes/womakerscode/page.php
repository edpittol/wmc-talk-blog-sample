<?php  get_header(); ?>

<main role="main">
	<section>

		<?php while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class-"entry-title>
					<?php the_title(); ?>
				</h1>
				
				<div class="entry-content"><?php the_content(); ?></div>
		
				<?php edit_post_link(); ?>
			</article>
		
		<?php endwhile; ?>

	</section>
</main>

<?php get_footer() ?>