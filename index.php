<?php get_header(); ?>

<div id="single_page">

	<div id="single_page_container" class="container">

			<div id="single_page_column" class="col-md-8">

				<div id="single_page_row" class="row">
		
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
							<div class="page" id="page-<?php the_ID(); ?>">
														
								<div class="post">
									<div id="single_page_post_heading">
										<h1><?php the_title(); ?></h1>
									</div>
									<div id="post_thumbnail"><?php the_post_thumbnail( ); ?></div>
	
									<div class="metahead">
										Posted on <?php the_time('F j, Y'); ?> |  by: <?php the_author(); ?> | <?php comments_popup_link('Be the first to comment', '1 Comment', '% Comments'); ?>
									</div>
											
									<div class="post_category">
										Posted in: <?php $category = get_the_category(); echo '<a href="'.get_category_link( $category[0]->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category[0]->name ) ) . '">' . $category[0]->cat_name . '</a>' ?>
									</div>
									
									<div class="post_tags">
										<?php the_tags('Tags: ', ', ', '<br />'); ?> 
									</div>
									
									<div id="post_content">
										<?php the_content(); ?>
									</div>
												
								</div> <!-- end of entry -->
							
							</div> <!-- end of post -->
					
					<?php endwhile ; ?>
					
					<div class="liner-tan-large"></div>

					<?php 

						$css_class = 'zero_comments';
						$number    = (int) get_comments_number( get_the_ID() );

						if ( 1 === $number )
						    $css_class = 'one_comment';
						elseif ( 1 < $number )
						    $css_class = 'multiple_comments';

						comments_popup_link( 
						    __( 'Be the first to comment', 'kylieburnside' ), 
						    __( '1 Comment', 'kylieburnside' ), 
						    __( '% Comments', 'kylieburnside' ),
						    $css_class,
						    __( 'Comments are Closed', 'kylieburnside' )
						);

					 ?>
								
					<?php else : ?>
					
					<div class="post">
					<h2><?php _e('Not Found'); ?></h2>
					</div>
					
					<?php endif; ?>

			</div>   <!-- end of main column -->

		</div> <!-- end of container -->

		<div id="sidebar_column" class="col-sm-12 col-md-4">
			
			<div id="sidebar_row">
				
				<?php get_sidebar('top' ); ?>

				<?php get_sidebar('bottom' ); ?>
				

			</div>

		</div>
			
	</div> <!-- end of wrapper-->

</div><!-- #container-wrap -->

<?php get_footer(); ?>