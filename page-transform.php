<?php 

  global $post;

  $page_slug    = $post->post_name;

 ?>
<?php get_header( ); ?>
<div id="page">
  
  <?php 

    $headerImg = get_field('header_image');

    if (! empty($headerImg)) : ?>

  <section id="<?php echo $page_slug ?>_header_image" class="bg" style="background-image: url(<?php echo $headerImg; ?>)">
  </section>
  <?php endif; ?>

  <section id="<?php echo $page_slug ?>_header" class="bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header_divider">
            <div class="headers">
              <ul>
                <li class="heading">
                  <?php 

                  $heading = get_field('heading');

                  if (! empty($heading)) : 
                    echo $heading;
                  endif;

                   ?> <span>|</span> 
                </li>
                <li class="subheading">
                  <?php 

                  $subHeading = get_field('subheading');

                  if (! empty($subHeading)) :
                    echo $subHeading;
                  endif;

                   ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============ gallery ============ -->
  <section id="<?php echo $page_slug ?>_content">
    <div class="container">
      <div class="row">
        <div class="transformation_gallery">
          <?php
            
          global $wp_query;
          
          $args = array( 
                        'post_type' => 'media gallery',
                        'order'     => 'ASC',
                        'orderby'   => 'date',
                        'posts_per_page'  => 24
                        );

                  query_posts( $args );
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  

            <div class="col-xs-12 col-sm-6 col-md-3">
              <a href="<?php the_permalink(); ?>">
                <div class="gallery_box">
                  <div class="image">

                    <?php 

                    if (get_field('gallery_image')) : ?>

                      <img src="<?php the_field('gallery_image'); ?>" alt="gallery image">

                    <?php endif;?>

                  </div>
                  <div class="caption">
                    <div class="title">
                      <?php the_title( ); ?>
                    </div>
                    <div class="cap">
                      <?php 

                      if (get_field('caption')) : ?>
                      
                        <?php the_field('caption'); ?>

                      <?php endif;?>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <?php endwhile; wp_reset_postdata(); endif; rewind_posts(); ?>
        </div>
      </div>    
    </div>
  </section>

</div>
  <?php get_footer( ); ?>