<?php get_header(); ?>
<!-- START MAIN -->
<main class=site-content>
    <section>
        <div class="container">
            <h2 class="text-left pb-6">Blog</h2>
            <div class="row">
                <div class="col-xl-8 col-xxl-9">
                <!-- START BLOG SECTION -->
                    <div class="row justify-content-center projects mr-1 ">
                <!-- START WORDPRESS LOOP -->
                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>            
                        <!-- START IMAGE CONTAINER -->
                            <div class="col-md-6 col-lg-6 col-xxl-4 mb-md-4 mb-xl-4 blog-post">
                                <div class="projects-img blog ">
                                    <a href="#"><?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                } else {
                                    echo '<img src="'.get_bloginfo("template_url").'/images/placeholder-img-2.png" />';
                                }?></a>
                                    <div class="project-description blog">
                                        <h3><a href="#" class="blog-link"><?php echo get_the_title(); ?></a></h3>
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
                            <!-- <div class="pagination d-flex justify-content-between ">
                                <a href="#" class="pagination-link my-3 mx-auto">Previous</a>
                                <a href="#" class="pagination-link my-3 mx-auto">Next</a>
                            </div>       -->
                          </div>
                  </div>
                  <!-- END BLOG SECTION -->
                  <!-- START SIDEBAR -->
                  <div class="blog-sidebar col-xl-4 col-xxl-3">
                    <section>
                        <h3>Write a Blog Post</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae, ut libero iste optio quidem. Facilis, numquam? Animi non illum sunt voluptate at consequuntur nobis beatae, facilis eligendi praesentium omnis?</p>
                        <a href="#" class="sidebar-btn  my-3 mx-auto">I know a writer!</a>
                      </section>
                      <section>
                        <h3>Recent Posts</h3>
                        <ul>
                            <li class="blog-sidebar-item"><a href="#">dipisicing elit. Deleniti culpa adipisci nesciunt eveniet porro voluptatibus </a></li>
                            <li class="blog-sidebar-item"><a href="#">Explicabo quibusdam, doloremque at reiciendi</a></li>
                            <li class="blog-sidebar-item"><a href="#">Pariatur doloribus deleniti eligendi commodi accusantium aspernatu </a></li>
                        </ul>
                      </section>
                      <section>
                        <h3>Categories</h3>
                        <ul>
                            <li class="blog-sidebar-item"><a href="#">dipisicing</a></li>
                            <li class="blog-sidebar-item"><a href="#">Explicabo quibusdam</a></li>
                            <li class="blog-sidebar-item"><a href="#">Pariatur</a></li>
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
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptate consequuntur repellat mollitia quis doloribus quae, rerum praesentium nostrum temporibus sunt, ullam sequi, distinctio debitis quidem corporis molestias dicta iure.</p>
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