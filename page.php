<?php 

  global $post;

  $page_slug    = $post->post_name;
  $header_img   = get_field('header_image', 'option');
  $header_title = get_field('header_title', 'option');
  $header_msg   = get_field('header_msg', 'option');

 ?>

<?php get_header(); ?>

  <?php 

  if (is_page('about' )) : 

    get_template_part( 'page', 'about' );

  elseif (is_page('transformations' )) :

    get_template_part('page', 'transform' );

  elseif (is_page('coaching' )) :

    get_template_part('page', 'coach' );

  elseif (is_page('blog' )) : 

    get_template_part('page', 'blog' );

  elseif (is_page('shop' )) :

    get_template_part('page', 'shop' );

  elseif (is_page( 'fitness-program' )) :

    get_template_part('page', 'fitness' );

  else :
   
  if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <section id="page">
    <div class="container">
      <div class="row">
        <div class="title">
          <h1><?php the_title( ); ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
         <div class="content">
            <?php the_content( ); ?> foo bar
         </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>

<?php endif; ?>
			
<?php get_footer(); ?>