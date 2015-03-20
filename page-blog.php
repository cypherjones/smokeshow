<?php 

  global $post;

  global $paged,$wp_query;

  $page_slug    = $post->post_name;

 ?>

<?php get_header( ); ?>
<div id="page">

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
  <?php
          $paged = (get_query_var('paged' )) ? get_query_var('paged' ) : 1;
          $args = array(
                     'paged' => $paged,
                     'posts_per_page' => 2,
         );
          query_posts($args); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <?php 

          if ( have_posts() ) : while ( have_posts() ) : the_post();
                         
            $dateDay = get_the_date('d');
            $dateMon = get_the_date('M' );
            $title   = get_the_title();
            $author  = get_the_author();
            $content = get_the_content();
            $category = get_the_category( $the_post->ID);
          $firstCat = $category[0]->cat_name;

         ?>
          <div class="post">
            <div class="thumb" style="background-image: url(<?php the_field('featured_image') ?>)">
              <div class="dates">
                <div class="date day">
                  <?php echo $dateDay; ?>
                </div>
                <div class="date month">
                  <?php echo $dateMon; ?>
                </div>
              </div>
            </div>
            <div class="content">
              <div class="title">
                <?php echo $title ?>
              </div>
              <div class="meta">
                <ul>
                  <li class="category">
                    <i class="fa fa-list"></i> <?php echo $firstCat; ?>
                  </li>
                  <li class="author">
                    <i class="fa fa-user"></i> <?php echo $author ?>
                  </li>
                  <li class="comments">
                    <i class="fa fa-comment"></i> <?php comments_number( 'Be the first to comment', '1 Comment', '% Comments' ); ?>
                  </li>
                </ul>
              </div>
              <div class="copy">
                <?php echo wp_trim_words($content, 20 ); ?>
              </div>
              <div class="readon">
                <a href="<?php echo the_permalink(); ?>">Continue Reading <i class="fa fa-long-arrow-right"></i> </a>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
          <div id="pagination" class="row">
            <?php
              wpex_pagination();

            ?>
  
          </div> 
         
        </div>
        <div class="col-md-4">
          
          <div class="cat">
            Blog Category
          </div>
          <div class="line"></div>
          <div class="categories">
            <?php echo get_the_category_list( ); ?>
          </div>
          <div class="recent_post_heading">
            Recent Posts
          </div>
          <div class="line"></div>
          <?php
          $args = array( 
            'posts_per_page' => 4  
                     );
        
          $the_query = new WP_Query( $args );



          if ( $the_query->have_posts() ) : 

            while ( $the_query->have_posts() ) : $the_query->the_post();
                         
            $date = get_the_date('M d Y');
            $title   = get_the_title();

         ?>
          <div class="posts recent">
            <div class="col-xs-4">
              <img src="<?php the_field('featured_image') ?>" alt="">
            </div>
            <div class="col-xs-8">
              <div class="rcnt_post_title">
                <?php echo $title; ?>
              </div>
              <div class="date">
                <?php echo $date; ?>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>        
    </div>
  </section>
  
</div>
<?php get_footer( ); ?>