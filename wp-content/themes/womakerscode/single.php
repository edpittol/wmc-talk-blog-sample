<?php get_header() ?>

<main role="main">
	<section>

		<?php while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				
				<?php 
					if( has_post_thumbnail() ) :
						the_post_thumbnail( 'full' );
					endif;
				?>
		
				<?php the_content(); ?>
		
				<?php edit_post_link(); ?>
			</article>
		
		<?php endwhile; ?>

	</section>
</main>

<?php get_sidebar() ?>

<?php get_footer() ?>