<?php get_header(); ?>

<div class="section-inner">

	<header class="page-header section-inner thin">
		
		<h1 class="title"><?php _e( 'Error 404', 'hamilton' ); ?></h1>
	
	</header><!-- .page-header -->

	<div class="entry-content">

		<p><?php _e( "Página não encontrada. Pode ter sido removida, renomeada ou não existe.", "hamilton" ); ?></p>
	
		<div class="meta">
	
			<a href="<?php echo esc_url( home_url() ); ?>"><?php _e( 'Voltar para a home', 'hamilton' ); ?></a>
	
		</div>

	</div>		

</div> <!-- .post -->

<?php get_footer(); ?>