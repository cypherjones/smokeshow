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
        <div class="featured">
          <div class="image">
            
          </div>
          <div class="copy">
            
          </div>
        </div>
      </div>    
    </div>
  </section>

</div>
  <?php get_footer( ); ?>