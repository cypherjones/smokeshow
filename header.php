<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />
    
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="" />
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      
    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>

    <!-- flexslider -->

    <!-- Place somewhere in the <head> of your document -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory' ); ?>/js/jquery.flexslider.js"></script>
    
    <!-- smooth links -->
    <script>
    $(function() {
      $('[href^=#]').not('#ourWorkCarousel a, #ourServiceCarousel a, #mainSvcCarousel a, #mainSvcCarousel2 a').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 500);
            return false;
          }
        }
      });
    });
    </script>
</head>

<body <?php body_class(); ?>>
<?php   $logo         = get_field('company_logo_dark', 'option');?>
  <div id="main_nav">
      <div id="header_nav" class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
          <div class="navbar-brand">
            <?php if (! empty($logo)) : ?>
                <img src="<?php echo $logo; ?>" alt="">
              <?php endif; ?>
          </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
            <?php
              wp_nav_menu( array(
                  'menu'              => 'header-menu',
                  'theme_location'    => 'top-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav desktop_toggle',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
        </div> 

      </div>
    </div>
  