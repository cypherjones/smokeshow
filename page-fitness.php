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

                   ?>  
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
  <!-- ============ section 1 ============ -->
  <section id="<?php echo $page_slug ?>_content_1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <?php 

            $s1Heading = get_field('section_1_heading');

            if (! empty($s1Heading)) :
              echo $s1Heading;
            endif;

             ?>
          </div>
          <div class="subheading">
            <?php 

            $s1SubHeading = get_field('section_1_subheading');

            if (! empty($s1SubHeading)) :
              echo $s1SubHeading;
            endif;

             ?>
          </div>
          <?php 

            $s1btnTxt  = get_field('section_1_button_text');
            $s1btnLink = get_field('section_1_button_link');

            if (! empty($s1btnTxt)) : ?>
              
          <div class="button">
            <div class="btn section_1">
              <a href="<?php echo $s1btnLink ?>"><?php echo $s1btnTxt; ?></a>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
   <!-- ============ section 2 ============ -->
  <section id="<?php echo $page_slug ?>_content_2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image">
            <?php 

            $s2Image  = get_field('section_2_image');

            if (! empty($s2Image)) : ?>

            <img src="<?php echo $s2Image; ?>" alt="">

            <?php endif; ?>
          </div>    
        </div>
        <div class="col-md-6">
          <div class="heading">
            <?php 

            $s2Heading  = get_field('section_2_column_heading');

            if (! empty($s2Heading)) : ?>

            <?php echo $s2Heading; ?>

            <?php endif; ?>
          </div>
          <div class="bullets">
            <ul>
          <?php if (have_rows('section_2_column_bullets')) : while (have_rows('section_2_column_bullets')) : the_row(); ?>

              <li>
                <?php the_sub_field('bullet_point') ?>
              </li>
            
          <?php endwhile; endif; ?>
            </ul>
          </div>
          <div class="promo heading">
            <div class="pHeading">
              <?php 

              $s2PromoHeading  = get_field('section_2_promo_heading');

              if (! empty($s2PromoHeading)) : ?>

              <?php echo $s2PromoHeading; ?>

              <?php endif; ?>
            </div>
          </div>
          <div class="promo">
            <?php 

            $s2Promo  = get_field('section_2_promo');

            if (! empty($s2Promo)) : ?>

            <?php echo $s2Promo; ?>

            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- ============ testimonials ============ -->
  <section id="<?php echo $page_slug ?>_testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-12 line">
          <div class="title">
            <h2>Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="fit_test_slider" class="flexslider">
          <ul class="slides" >
          <?php
            
          global $wp_query;
          
          $args = array( 
                        'post_type' => 'testimonials',
                        'order'     => 'ASC',
                        'orderby'   => 'date',
                        'posts_per_page'  => 20
                        );

                  query_posts( $args );
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                               
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="testimony_box">
                  <div class="testimony">

                    <?php 

                    if (get_field('testimony')) : 
                      the_field('testimony');
                    endif;

                    ?>

                  </div>
                  <div class="client">
                    
                    <?php 

                    if (get_field('client_name')) : ?>

                      - <?php the_field('client_name'); ?>

                    <?php endif;?>

                  </div>
                </div>
              </a>
            </li>
      
          <?php endwhile; endif; wp_reset_postdata(); rewind_posts(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- ============ section 3 ============ -->
  <section id="<?php echo $page_slug ?>_content_3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <?php 
      
            global $wp_query;
            
            $args = array( 
                  'post_type' => 'page',
                  'pagename' => 'fitness-program'
                  );

            query_posts( $args );  
                       
            if(have_posts()) : ?><?php while(have_posts()) : the_post(); 

            $s3Heading  = get_field('section_3_heading');

            if (! empty($s3Heading)) : ?>

            <?php echo $s3Heading; ?>

            <?php endif; ?>
          </div> 
          <div class="content">
            <?php 

            $s3Content  = get_field('section_3_content');

            if (! empty($s3Content)) : ?>

            <?php echo $s3Content; ?>

            <?php endif; ?>
          </div> 
          <?php 

            $s3btnTxt  = get_field('section_3_button_text');
            $s3btnLink = get_field('section_3_button_link');

            if (! empty($s3btnTxt)) : ?>
              
          <div class="button">
            <div class="btn section_3">
              <a href="<?php echo $s3btnLink ?>"><?php echo $s3btnTxt; ?></a>
            </div>
          </div>
          <?php endif; ?>
          <?php endwhile; endif; ?>   
        </div>
      </div>
    </div>
  </section>
<!-- ============ gallery ============ -->
  <section id="<?php echo $page_slug ?>_gallery">
    <div class="container">
      <div class="row">
        <div class="heading">
          <h2>Transformation Gallery</h2>
        </div>
        <div class="transform_gallery">
          <div id="fit_transformation_gallery" class="flexslider">
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
                  </div>
                </a>
              </li>
        
            <?php endwhile; wp_reset_postdata(); endif; rewind_posts(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============ section 4 ============ -->
  <section id="<?php echo $page_slug ?>_content_4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <?php 
      
            global $wp_query;
            
            $args = array( 
                  'post_type' => 'page',
                  'pagename' => 'fitness-program'
                  );

            query_posts( $args );  
                       
            if(have_posts()) : ?><?php while(have_posts()) : the_post(); 

            $s4Heading  = get_field('section_4_heading');

            if (! empty($s4Heading)) : ?>

            <?php echo $s4Heading; ?>

            <?php endif; ?>
          </div> 
          <div class="content">
            <?php 

            $s4Content  = get_field('section_4_content');

            if (! empty($s4Content)) : ?>

            <?php echo $s4Content; ?>

            <?php endif; ?>
          </div> 
          <?php 

            $s4btnTxt  = get_field('section_4_button_text');
            $s4btnLink = get_field('section_4_button_link');

            if (! empty($s3btnTxt)) : ?>
              
          <div class="button">
            <div class="btn section_4">
              <a href="<?php echo $s4btnLink ?>"><?php echo $s4btnTxt; ?></a>
            </div>
          </div>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_social">
    <div class="container">
      <div class="row">
        <div class="facebook">
          <?php 

          $facebook  = get_field('facebook_url', 'option');

          if (! empty($facebook)) : ?>

            <div class="circle">
              <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
            </div>

          <?php endif; ?>
        </div>
        <div class="visit">
          <div class="copy">
            Visit the
          </div>
        </div>
        <div class="support">
          <div class="copy">
            Facebook Support Group
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <?php get_footer( ); ?>