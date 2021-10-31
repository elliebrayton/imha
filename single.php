<?php get_header(); ?>
<!-- START MAIN -->
<main class=site-content>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-xxl-9">
                <!-- START BLOG SECTION -->
                <h2 class="text-left pb-6"><?php echo get_the_title(); ?></h2>
                    <div class="row justify-content-center projects mr-1 ">
                <p> <?php echo get_the_content();?></p>
                          </div>
                  </div>
                  <!-- END BLOG SECTION -->
                  <!-- START SIDEBAR -->
                  <div class="blog-sidebar col-xl-4 col-xxl-3">
                    <section>
                        <h3>Write a Blog Post</h3>
                        <p>If you have a story to share, or know someone who does, reach out! We'd love to assist in getting your story out there. Use the form below to start the process.</p>
                        <a href="#" class="sidebar-btn  my-3 mx-auto">I know a writer!</a>
                      </section>
                      <section>
                        <h3>Recent Posts</h3>
                        <ul>
                            <li class="blog-sidebar-item"><a href="#">Handling Conflict More Confidently</a></li>
                            <li class="blog-sidebar-item"><a href="#">Self-Esteem and Finding Your Strengths</a></li>
                            <li class="blog-sidebar-item"><a href="#">Building Better Relationships</a></li>
                        </ul>
                      </section>
                      <section>
                        <h3>Categories</h3>
                        <ul>
                            <li class="blog-sidebar-item"><a href="#">Mental Health</a></li>
                            <li class="blog-sidebar-item"><a href="#">Relationships</a></li>
                            <li class="blog-sidebar-item"><a href="#">Global Issues</a></li>
                        </ul>
                      </section>
                  </div>
              </div>
          </section>
          <section class="bg-accent">
              <div class="container">
                <h2 class="text-white">Newsletter</h2>
                  <div class="row d-flex">
                      <div class="col-md-6">
                        <p class="text-white">Stay connected! Sign up for our newsletter!</p>
                      </div>
                      <div class="col-md-6">
                        <form action="#" class="form">
                            <div class="newsletter-form row">
                              <div class="form-group col-lg-6">
                                  <input type="text" class="form-input" placeholder="First Name" id=firstName>
                                  <label for="firstName" class="form-label">First Name</label>                        
                              </div>
                                <div class="form-group col-lg-6">
                                  <input type="text" class="form-input" placeholder="Last Name" id=lastName>
                                  <label for="lasttName" class="form-label">Last Name</label>                        
                              </div>
                                <div class="form-group col">
                                  <input type="email" class="form-input" placeholder="Your e-mail" id=email>
                                  <label for="email" class="form-label">E-mail</label>
                              </div>
                            </div>
                            <button class="form-btn primary-btn mx-auto">Get Involved</button>
                        </form>
                      </div>
                  </div>
              </div>
          </section>
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>