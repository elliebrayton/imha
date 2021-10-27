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
    <link rel="shortcut icon" type="image/png" href="images/imha-logo-favicon.png"/>
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
      <header class="header">
        <div class="container">

        <!-- TODO: This is where logo and navigation will go  -->
        <div class="logo-box"><img src="images/logo.svg" width="200" alt="IMHA logo" title="logo" class="logo"></div>
          <button class="hamburger" id="hamburger">
            <span class="line top"></span>
            <span class="line middle"></span>
            <span class="line bottom"></span>
          </button>
          <!-- NOTE: Created hamburger button instead of icon -->
        <!-- <button id="bars" class="top-right" type="button"><i class="fas fa-bars"></i></button>
			  <button id="cross" class="top-right hide-button" type="button"><i class="fas fa-times"></i></button> -->
        <nav id="navigation">
          <ul>
            <li><a class="nav-link" href="index.html">Home</a></li>
            <li><a class="nav-link" href="about.html">About Us</a></li>
            <li><a class="nav-link" href="programs.html">Our Programs</a></li>
            <li><a class="nav-link" href="blog.html">Blog</a></li>
            <li><a class="nav-link" href="contact.html">Contact</a></li>
            <li><a class="nav-cta secondary-btn my-3 mx-md-4" href="donate.html">Donate</a></li>
          </ul>
        </nav>
        <!-- from seperate branch test -->
            </div>
      </header>
      <!-- END HEADER -->