<?php  get_header(); ?>

<main role="main">
	<section>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class-"entry-title>
				Nada encontrado aqui
			</h1>
			
			<div class="entry-content">
				<a href="<?php echo home_url( '/' )?>">Volte para a página inicial</a> 
				e tente encontrar alguma coisa por lá.
			</div>
	
			<?php edit_post_link(); ?>
		</article>

	</section>
</main>

<?php get_footer() ?>