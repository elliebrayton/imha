
      <!-- START FOOTER -->
      <footer class="footer">
          <div class="container">
            <!-- TODO: This is where the footer content will go -->
            <div class="logo-box">
              <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo-white.svg" width="200" alt="IMHA logo" title="logo">
              <p>Help us build a healthier world, and let’s innovate together.</p>
              <div class="social-media">
                <a href="https://www.facebook.com/teamimha" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/teamimha/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/teamimha" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCmhjz-8g1xPOOsk_1K34_Ew/featured" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/international-mental-health-association/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="footer-nav">
              <?php $defaults=array(
                          'theme_location'    => 'footer-nav',
                          'container'         => '',
                          'container_id'      => '',
                          'container_class'   => 'footer-nav',
                          'menu_id'           => false,
                          'menu_class' => '',
                          'depth'             => 0
                      );
                      wp_nav_menu($defaults);?>
            </nav>
            </div>
          </div>
      </footer>
      <!-- END FOOTER -->
      <?php wp_footer(); ?>
  </body>
</html>