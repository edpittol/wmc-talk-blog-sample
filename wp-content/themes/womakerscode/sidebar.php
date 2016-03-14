<?php if ( is_active_sidebar( 'main-sidebar' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</aside>
<?php endif; ?>