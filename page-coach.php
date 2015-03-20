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
  <section id="<?php echo $page_slug ?>_featured">
    <div class="container">
      <div class="row">      
        <div class="media">
          <?php 

            $featuredMedia = get_field('media');

            if (! empty($featuredMedia)) :
              echo $featuredMedia;
            endif;
           ?>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_test">
    <div class="container">
      <div class="row">
        <div class="symbol">
          <i class="fa fa-quote-right"></i>
        </div>
        <div class="title">
          <h2>Testimonials</h2>
        </div>
        <div class="test">
          <?php
            
          global $wp_query;
          
          $args = array( 
                        'post_type' => 'testimonials',
                        'order'     => 'ASC',
                        'orderby'   => 'date',
                        'posts_per_page'  => 1
                        );

                  query_posts( $args );
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                               
            
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
            
      
          <?php endwhile; endif; wp_reset_postdata(); rewind_posts(); ?>
        </div>
        <div class="content">
          <?php 
      
            global $wp_query;
            
            $args = array( 
                  'post_type' => 'page',
                  'pagename' => 'coaching'
                  );

            query_posts( $args );

          if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content( ); ?>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_cta">
    <div class="container">
      <div class="row">
        <div class="cta_box">
          <div class="cta">
            <a href="">
            <?php 

              $cta = get_field('call_to_action_title');

              if (! empty($cta)) :
                echo $cta;
              endif;
             ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_prerequisites">
    <div class="container">
      <div class="row">
        <div class="title_box">
          <div class="title">
            Prerequisites
          </div>
        </div>
        <div class="col-md-6">
          <div class="pre_description">
            <?php 

            $preDescrpt = get_field('prerequisites_description');

            if (! empty($preDescrpt)) :
              echo $preDescrpt;
            endif;
           ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="pre_bullets">
            <ul>
            <?php if (have_rows('prerequisites_bullets')) : while (have_rows('prerequisites_bullets')) : the_row(); ?>

              <li> <i class="fa fa-check"></i> <?php the_sub_field('prerequisites') ?></li>

            <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_sign_up">
    <div class="container">
      <div class="row">
        <div class="header">
          <h2>
            <?php 

            $signUpHeading = get_field('sign_up_heading');

            if (! empty($signUpHeading)) :
              echo $signUpHeading;
            endif;
           ?>
          </h2>
        </div>
        <div class="content">
          <?php 

            $signUpDescription = get_field('sign_up_description');

            if (! empty($signUpDescription)) :
              echo $signUpDescription;
            endif;
           ?>
        </div>
        <div class="button">
          <?php 

            $signUpButton = get_field('sign_up_button_text');

            if (! empty($signUpButton)) :

           ?>
          <div class="btn sign_up"><a href="<?php the_field('sign_up_button_link') ?>"><?php echo $signUpButton ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section id="<?php echo $page_slug ?>_questions">
    <div class="container">
      <div class="row">
        <div class="title_and_text">
          <?php 

            $questionsTitle   = get_field('questions_title'); 
            $questionsCtaText = get_field('questions_call_to_action_text');
            $questionsCtaLink = get_field('questions_call_to_action_link');

           ?>
           <ul>
             <li><?php echo $questionsTitle; ?></li>
             <li><a href=""><?php echo $questionsCtaText ?> <i class="fa fa-envelope"></i></a></li>
           </ul>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>
</div>
<?php get_footer( ); ?>