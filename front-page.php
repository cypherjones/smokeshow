<?php 

  global $post;

  $page_slug    = $post->post_name;

 ?>

<?php get_header(); 

  if (is_mobile()) : 

?>
<!-- ============ mobile front page header ============ -->
<section id="<?php echo $page_slug ?>_heading">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="confidence">
          <div class="title">
            <h1>confidence</h1>
          </div>
        </div>
        <div class="ignited">
          <div class="title">
            <h1>ignited</h1>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="image">
          <?php 

          $headerImage = get_field('header_image');

            if (! empty($headerImage)) : ?>

              <img src="<?php echo $headerImage; ?>" alt="header image">

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php else : 

  $headerImage = get_field('header_image');

?>
<!-- ============ desktop front page header ============ -->
  <section id="<?php echo $page_slug ?>_header_image" class="bg" style="background-image: url(<?php echo $headerImage; ?>)">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="confidence">
            <div class="title">
              <h1>confidence</h1>
            </div>
          </div>
          <div class="ignited">
            <div class="title">
              <h1>ignited</h1>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>

<section id="<?php echo $page_slug ?>_cta">
  <div class="container">
    <div class="row">
      <div class="cta">
        <div class="col-xs-12 col-sm-5">
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

            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="<?php echo $page_slug ?>_featuredLinks">
  <div class="container">
    <div class="row">
      <?php if(have_rows('featured_links')) : $i = 1;  while (have_rows('featured_links')) : the_row(); ?>
      
        <div class="featuredLink background" style="background-image: url(<?php the_sub_field('link_image') ?>)">
          <div class="link_box tint t<?php echo $i;  ?>">
            
          </div>
          <div class="heading">
              <?php the_sub_field('link_heading') ?>
            </div>
            <div class="subheading">
              <?php the_sub_field('link__description') ?>
            </div>
        </div>

        <?php  $i++;?>

      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section id="<?php echo $page_slug ?>_posts">
  <div class="container">
    <div class="row">
      <div class="col-md-12 line">
        <div class="title">
          <h2>Latest Blog Posts</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="post_slider" class="flexslider">
        <ul class="slides" > 
        <?php
          $args = array( 
            'posts_per_page' => 24 
            );
        
          $the_query = new WP_Query( $args );

          if ( $the_query->have_posts() ) : 

          while ( $the_query->have_posts() ) : $the_query->the_post();
                        
          $date = get_the_date('d M Y');
          $title   = get_the_title();
          $category = get_the_category( $the_query->ID);
          $firstCat = $category[0]->cat_name;
        ?>
                                       
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="post">
                <div class="image">
                  <img src="<?php the_field('featured_image') ?>" alt="featured image">
                </div>
                <div class="meta">
                  <p class="post_title"><?php echo $title; ?></p>
                  <div class="date_and_category">
                    <?php echo $date; ?> / <?php echo $firstCat; ?>
                  </div>
                </div>
              </div>
            </a>
          </li>
    
        <?php endwhile; wp_reset_postdata(); endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
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
      <div id="test_slider" class="flexslider">
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
    
        <?php endwhile; wp_reset_postdata(); endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
       
<?php get_footer(); ?>