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
  <section id="<?php echo $page_slug ?>_content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="media">
            <?php 

            $video = get_field('video');
            $media = get_field('media_image');

             ?>
             <?php 

              if (! empty($video)) : 
                echo $video;
              endif;

             ?>

          </div>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="content">

            <?php the_content( ); ?>

          </div>

          <?php endwhile; endif; ?>
        </div>
        <div class="col-md-4">

        <!-- ============ gallery ============ -->

          <div class="transform_gallery">
            <div id="transformation_gallery" class="flexslider">
              <ul class="slides" >
              <?php
                
              global $wp_query;
              
              $args = array( 
                            'post_type' => 'media gallery',
                            'order'     => 'ASC',
                            'orderby'   => 'date',
                            'posts_per_page'  => 20
                            );

                      query_posts( $args );
              ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                               
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="gallery_box">
                      <div class="image">

                        <?php 

                        if (get_field('gallery_image')) : ?>

                          <img src="<?php the_field('gallery_image'); ?>" alt="gallery image">

                        <?php endif;?>

                      </div>
                      <div class="caption">
                        
                        <?php 

                        if (get_field('caption')) : ?>
                        
                          - <?php the_field('caption'); ?>

                        <?php endif;?>

                      </div>
                    </div>
                  </a>
                </li>
          
              <?php endwhile; wp_reset_postdata(); endif; rewind_posts(); ?>
              </ul>
            </div>
          </div>

          <!-- ============ from the blog ============ -->

          <div class="from_the_blog">

          <?php

            $args = array( 
              'posts_per_page' => 4
              );
          
            $the_query = new WP_Query( $args ); $i = 0;

            if ( $the_query->have_posts() ) : 

            while ( $the_query->have_posts() ) : $the_query->the_post(); 

            $i++;

            if ($i < 2) :

            ?>

            <div class="blog post title">
              From the Blog
            </div>
            <div class="blog post excerpt">
              <span><?php the_title( ); ?></span>
              - <?php 
                  $content = get_the_content( );
                 echo wp_trim_words( $content, 12 ); ?>
            </div>  

            <?php else : ?>

                 <li class="blog post more_titles" >+ <span><?php the_title( ); ?></span></li>
             

            <?php endif; ?>
             </ul>
            <?php endwhile; wp_reset_postdata(); endif; ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_cta">
    <div class="container">
      <div class="row">
        <div class="never">
          Never miss an <span>Update</span>
        </div>
      </div>
      <div class="row">
        <div class="cta">
          <div class="col-xs-12 col-sm-5">
          <?php 
      
            global $wp_query;
            
            $args = array( 
                          'post_type' => 'page',
                          'pagename' => 'about'
                          );

                    query_posts( $args );  
                       
          ?>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="heading">
              <?php

              $ctaHeader = get_field('cta_heading');

              if (! empty($ctaHeader)) : ?>

                <?php echo $ctaHeader; ?>

              <?php endif; ?>
            </div>
            <div class="subheading">
              <?php 

              $ctaSubHeader = get_field('cta_subheading');

              if (! empty($ctaSubHeader)) : ?>

                <?php echo $ctaSubHeader; ?>

              <?php endif; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-7">
            <div class="form">
              <?php 

              $ctaform = get_field('cta_form');

              if (! empty($ctaform)) : ?>

                <?php echo do_shortcode($ctaform ); ?>

              <?php endif; 

              ?>
            </div>

             <?php wp_reset_postdata();?>

            <?php endwhile; else : endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

</div>
  <?php get_footer( ); ?>