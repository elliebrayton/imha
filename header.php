<!DOCTYPE html>
<html lang="en">
  <!-- START HEAD -->
  <head>
  <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FAVICON -->
    <!-- BUG: Favicon not showing up on Firefox -->
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/imha-logo-favicon.png"/>
    <!-- FONT -->
    <link rel="stylesheet" href="https://use.typekit.net/yhq3tmd.css" />
    <!-- ICON LIBRARY -->
    <script src="https://kit.fontawesome.com/8e9a5a64b5.js" crossorigin="anonymous"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css" />
    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <title>IMHA</title>
  </head>
  <!-- END HEAD -->
  <!-- START BODY -->
  <body <?php body_class(); ?> class="site">
      <!-- START HEADER -->
      <div class="translator"><?php dynamic_sidebar('translator-plugin'); ?></div>
      <header class="header">
        <div class="container">
        <div class="logo-box"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" width="200" alt="IMHA logo" title="logo" class="logo"></div>
          <button class="hamburger" id="hamburger">
            <span class="line top"></span>
            <span class="line middle"></span>
            <span class="line bottom"></span>
          </button>
        <nav id="navigation">
          <?php $defaults=array(
                          'theme_location'    => 'header-nav',
                          'container'         => '',
                          'container_id'      => 'navigation',
                          'container_class'   => '',
                          'menu_id'           => false,
                          'menu_class' => '',
                          'depth'             => 0
                      );
                      wp_nav_menu($defaults);?>
                              <a class="nav-cta secondary-btn my-3 mx-md-4" href="https://elliebrayton.com/contact/">Donate</a>
        </nav>
        <!-- from seperate branch test -->
            </div>
      </header>
      <!-- END HEADER -->