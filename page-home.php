<?php get_header(); ?>

      <!-- START MAIN -->
      <main class="site-content">
        <!-- START POPUP ALERT -->
        <div id="message" class="message">
          Stay connected! <a class="popup-btn" onclick="popup()">Sign up for our newsletter!</a>
          <i class="fas fa-times-circle close" onclick="this.parentElement.style.display='none';"></i>
        </div>
        <!-- END POPUP ALERT -->
        <!-- START POPUP FORM -->
        <div id="popup-form">
          <i class="fas fa-times-circle close" onclick="closePopup()"></i>
          <div class="row">
            <div class="col-5 mx-0 px-0 d-none d-sm-block">
              <img class="popup-img" src="<?php bloginfo('template_url'); ?>/images/placeholder-img-2.png" alt="" srcset="">
            </div>
            <div class="col-12 col-sm-7 pl-5 py-4">
              <form action="#" class="form">
                <h2 class="popup-heading">Stay Connected! Sign up for our Newsletter</h2>
                <div class="popup-form">
                      <div class="popup-group"> 
                        <input type="text" class="form-input" placeholder="First Name" id=firstName>                     
                      </div>
                      <div class="popup-group"> 
                        <input type="text" class="form-input" placeholder="Last Name" id=lastName>                     
                    </div>
                      <div class="popup-group flex-grow-1">
                        <input type="email" class="form-input" placeholder="Your e-mail" id=email> 
                    </div>
                    <button class="popup-form-btn mx-auto">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END POPUP FORM -->
          <section class="jumbotron pb-0">
              <div class="d-flex justify-content-center align-items-center jumbotron-content container">
                  <div class="display-message">
                    <h1 id="display-text">Welcome</span></h1>
                    <p class="jumbotron-text">Nice to meet you, we're the International Mental Health Association. <br></p>
                    <p class="jumbotron-text"><b>IMHA - Let's innovate together</b></p>
                  </div>
              </div>
              <div class="btn-wrapper d-flex flex-column align-items-center flex-md-row justify-content-center pb-5">
                <a href="https://elliebrayton.com/contact/" class="primary-btn my-3 mx-md-4">Donate</a>
                <a href="https://elliebrayton.com/about/" class="primary-btn my-3 mx-md-4">Learn More</a>
            </div>
          </section>
          <section class="bg-white">
              <div class="container">
              <!-- NOTE: When we actually use wordpress we will use the loop, but for now I'm just putting 3 examples to show how it will look.  -->
              <!-- TODO: Need to make Learn More Link -->
              <h2 class="text-center">People Are Our Passion</h2>
              <p class="pt-2 px-md-7 pb-7 text-center"> We are inspired by the strength of every community we visit. Our goal is to create sustainable mental health programs for these communities that will be functioning long after we’re gone.</p>
              <div class="row justify-content-center spotlight-projects ">              
              <!-- CUSTOM QUERY -->        
              <?php 
                //Custom Query
                $programs = array(
                    'post_type' => 'custom-post-programs',
                    'posts_per_page' => '3',
                    'order' => 'DESC',
                    'orderby' => 'date',
                ); ?>
            <!-- START WORDPRESS LOOP -->
                <?php
                $query = new WP_Query($programs);
                if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post(); 
                ?>           
                <!-- START IMAGE CONTAINER -->
                <div class="col-md-6 col-lg-4 mb-md-4 mb-xl-6">
                    <div class="projects-img ">
                        <a href="#"><?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                } else {
                                    echo '<img src="'.get_bloginfo("template_url").'/images/placeholder-img-2.png" />';
                                }?></a>
                        <div class="overlay">
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php echo get_the_excerpt();?></p>
                            <p><a href="#" class="project-link">Learn More</a></p>
                        </div>
                        <div class="project-description">
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php echo get_the_excerpt();?></p>
                            <p><a href="#" class="project-link">Learn More</a></p>
                        </div>
                      </div>
                    </div>
                <!-- END IMAGE CONTAINER -->
                <?php 
                    } //END WHILE
                } //END IF
                ?> 
                <!-- END WORDPRESS LOOP -->
              </div>
              <a href="https://elliebrayton.com/programs/" class="primary-btn mx-auto">View Programs</a>
          </section>
          <section class="pb-8 textured-blue">
              <div class="container">
                <h2 class="text-center pb-7 text-light">Testimonials</h2>
                <div class="testimonial-slider">
                  <!-- START SLIDE --> 
                    <div class="testimonial-content teal">
                      <div class="testimony">                      
                        <p>“The community outreach efforts are proving to be helpful, because the leaders and helpers can support, the community listens and they have such a wide impact.”</p>
                      </div>
                      <div class="source">
                        <p>Wilbroad K. | Mental Health Worker | Uganda</p>
                      </div>
                    </div>
                    <!-- END SLIDE -->                  
                    <!-- START SLIDE --> 
                    <div class="testimonial-content teal">
                      <div class="testimony">                      
                        <p>“The community outreach efforts are proving to be helpful, because the leaders and helpers can support, the community listens and they have such a wide impact.”</p>
                      </div>
                      <div class="source">
                        <p>Wilbroad K. | Mental Health Worker | Uganda</p>
                      </div>
                    </div>
                    <!-- END SLIDE -->                   
                    <!-- START SLIDE --> 
                    <div class="testimonial-content teal">
                      <div class="testimony">                      
                        <p>“The community outreach efforts are proving to be helpful, because the leaders and helpers can support, the community listens and they have such a wide impact.”</p>
                      </div>
                      <div class="source">
                        <p>Wilbroad K. | Mental Health Worker | Uganda</p>
                      </div>
                    </div>
                    <!-- END SLIDE -->                    
                    <!-- START SLIDE --> 
                    <div class="testimonial-content teal">
                      <div class="testimony">                      
                        <p>“The community outreach efforts are proving to be helpful, because the leaders and helpers can support, the community listens and they have such a wide impact.”</p>
                      </div>
                      <div class="source">
                        <p>Wilbroad K. | Mental Health Worker | Uganda</p>
                      </div>
                    </div>
                    <!-- END SLIDE --> 
                </div>
              </div>
          </section>
          <section>
          <?php dynamic_sidebar('ig-plugin'); ?>
          </section>
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>