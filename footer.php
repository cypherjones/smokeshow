		<footer>
		  <div class="top">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <?php wp_nav_menu( array( 'theme_location' => 'bottom-nav')); ?>
            </div>
            <div class="col-md-3">
              <div class="stay_connected">
                Stay Connected
              </div>
              <div class="social">
                <ul>
                  <li>
                    <?php 

                    $facebook  = get_field('facebook_url', 'option');
                    $twitter   = get_field('twitter_url', 'option');
                    $pinterest = get_field('pinterest_url', 'option');
                    $instagram = get_field('instagram_url', 'option');
                    $mobile    = get_field('mobile', 'option');
                    $email     = get_field('email', 'option');

                    ?>
                      
                    <?php if (! empty($facebook)) : ?>

                      <div class="circle">
                        <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
                      </div>
  
                    <?php endif; ?>
                  </li>
                  <li>
                      
                    <?php if (! empty($twitter)) : ?>

                      <div class="circle">
                        <a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
                      </div>
  
                    <?php endif; ?>
                  </li>
                  <li>
                      
                    <?php if (! empty($pinterest)) : ?>

                      <div class="circle">
                        <a href="<?php echo $pinterest ?>"><i class="fa fa-pinterest"></i></a>
                      </div>
  
                    <?php endif; ?>
                  </li>
                  <li>
                      
                    <?php if (! empty($instagram)) : ?>

                      <div class="circle">
                        <a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a>
                      </div>
  
                    <?php endif; ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="middle">
        <div class="container">
          <div class="row">
            <div class="">
              <div class="logo_meta">
                <div class="logo">
                  <?php   
                    
                    $logoLight = get_field('company_logo_light', 'option');

                    if (! empty($logoLight)) : ?>

                    <a href="<?php bloginfo('url' ); ?>"><img src="<?php echo $logoLight; ?>" alt="smokeshow logo"></a>

                  <?php endif; ?>
                </div>
                <div class="meta">
                  <ul>
                  <?php   
                    
                    if (! empty($mobile)) : ?>

                      <li class="mobile">
                        <a href="tel:+1<?php echo $mobile; ?>" >Mob: <?php echo $mobile; ?></a>
                      </li>
                    
                    <?php endif; ?>
                  <?php   
                    
                    if (! empty($email)) : ?>

                      <li class="email">
                        <a href="mailto:<?php echo $email; ?>">Email: <?php echo $email; ?></a>
                      </li>
                    
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lvlydb">
                <span class="copyright" >Copyright  2014 Smokeshow Fitness.</span> All Rights Reserved Powered By <a href="http://beefymarketing.com">Beefy Marketing</a>
              </div>
            </div>
          </div>
        </div>
      </div>
		</footer>
    <script>
    (function() {
 
          // store the slider in a local variable
          var $window = $(window),
              flexslider;
         
          // tiny helper function to add breakpoints
          function getGridSize() {
            return (window.innerWidth < 600) ? 1 :
                   (window.innerWidth < 900) ? 3 : 4;
          }
         
          $(function() {
            SyntaxHighlighter.all();
          });
         
          $window.load(function() {
            $('#test_slider').flexslider({
              animation: "slide", 
              slideshow: false,
              maxItems: 4,
              animationLoop: false,
              itemWidth: 210,
              minItems: getGridSize(), // use function to pull in initial value
              maxItems: getGridSize() // use function to pull in initial value
            });
          });
         
          // check grid size on resize event
          $window.resize(function() {
            var gridSize = getGridSize();
         
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
          });
        }());
    (function() {
 
          // store the slider in a local variable
          var $window = $(window),
              flexslider;
         
          // tiny helper function to add breakpoints
          function getGridSize() {
            return (window.innerWidth < 600) ? 1 :
                   (window.innerWidth < 992) ? 3 :
                   (window.innerWidth < 1200)? 1 : 1;
          }
         
          $(function() {
            SyntaxHighlighter.all();
          });
         
          $window.load(function() {
            $('#transformation_gallery').flexslider({
              animation: "slide",
              slideshow: false,
              maxItems: 4,
              animationLoop: false,
              itemWidth: 210,
              minItems: getGridSize(), // use function to pull in initial value
              maxItems: getGridSize() // use function to pull in initial value
            });
          });
         
          // check grid size on resize event
          $window.resize(function() {
            var gridSize = getGridSize();
         
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
          });
        }());
        (function() {
 
          // store the slider in a local variable
          var $window = $(window),
              flexslider;
         
          // tiny helper function to add breakpoints
          function getGridSize() {
            return (window.innerWidth < 600) ? 1 :
                   (window.innerWidth < 900) ? 3 : 4;
          }
         
          $(function() {
            SyntaxHighlighter.all();
          });
         
          $window.load(function() {
            $('#post_slider').flexslider({
              animation: "slide",
              slideshow: false,
              maxItems: 4,
              animationLoop: false,
              itemWidth: 210,
              minItems: getGridSize(), // use function to pull in initial value
              maxItems: getGridSize() // use function to pull in initial value
            });
          });
         
          // check grid size on resize event
          $window.resize(function() {
            var gridSize = getGridSize();
         
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
          });
        }());

        $('#fit_test_slider').flexslider({
          animation: "slide",
          slideshow: false,
        })
        (function() {
 
          // store the slider in a local variable
          var $window = $(window),
              flexslider;
         
          // tiny helper function to add breakpoints
          function getGridSize() {
            return (window.innerWidth < 600) ? 1 :
                   (window.innerWidth < 900) ? 3 : 4;
          }
         
          $(function() {
            SyntaxHighlighter.all();
          });
         
          $window.load(function() {
            $('#fit_transformation_gallery').flexslider({
              animation: "slide",
              slideshow: false,
              animationLoop: false,
              itemWidth: 210,
              minItems: getGridSize(), // use function to pull in initial value
              maxItems: getGridSize() // use function to pull in initial value
            });
          });
         
          // check grid size on resize event
          $window.resize(function() {
            var gridSize = getGridSize();
         
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
          });
        }());
    </script>

	</body>
</html>