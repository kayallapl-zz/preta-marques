<?php 

get_header();

if ( have_posts() )  : 

	while ( have_posts() ) : the_post(); ?>

		<div <?php post_class( 'section-inner' ); ?>>
		
			<header class="page-header section-inner thin<?php if ( has_post_thumbnail() ) echo ' fade-block'; ?>">
			
			<?php if ( is_single() ) : ?>
					
				<h2 class="title"><?php _e( 'Portfolio', 'hamilton' ); ?></h2>
				<div class="category-list-single">
					<?php 
					$category_detail=get_the_category($post->ID);//$post->ID
					foreach($category_detail as $cat){
						$cat_name = $cat->cat_name;
						$link = get_category_link( get_cat_ID( $cat->cat_name ) );?>
						<a class="title-category" href="<?php echo $link; ?>" title="<?php echo $cat_name;?>">
							<?php echo $cat_name; ?>
						</a>
					<?php }?>
				</div>

			<?php else: the_title( '<h1 class="title">', '</h1>' );

			endif; ?>
			
			</header><!-- .page-header -->
			<?php if ( is_single() ) :
				the_title( '<h1 class="job-post-title">', '</h1>' );
			
			endif ?>


			<div class="entry-content section-inner thin">

				<?php the_content(); ?>

			</div> <!-- .content -->

			<?php 
			
			wp_link_pages( array(
				'before' => '<p class="section-inner thin linked-pages">' . __( 'Pages:', 'hamilton' ),
			) ); 
			
			if ( get_post_type() == 'post' ) : ?>

				<div class="meta bottom section-inner thin group">
				
					<?php if ( get_the_tags() ) : ?>
				
						<p class="tags"><?php the_tags( ' #', ' #', ' ' ); ?></p>
					
					<?php endif; ?>

				</div> <!-- .meta -->

			<?php endif; ?>

		</div> <!-- .post -->

		<?php 
		
		// if ( get_post_type() == 'post' ) get_template_part( 'related-posts' );

	endwhile;

endif; 

get_footer(); ?>