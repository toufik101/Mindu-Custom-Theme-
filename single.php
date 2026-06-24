<?php get_header();?>


      <!-- tp-postbox-area-start -->
      <div class="tp-postbox-area pt-140 pb-100">
         <div class="container container-1324">
            <div class="row">
               <div class="col-lg-8">
                     <div class="tp-blog-details-wrap mr-50 mb-40">

                           <?php if( have_posts() ) : ?>
                        
                           <?php while(have_posts() ) : the_post() ;?>
                              <!--Content.php  -->
                                 <?php get_template_part('templates-parts/blog/content')?>

                              <?php endwhile;?>

                              <?php else :?>
                                 <p>The Post Is Not Found</p>
                        <?php endif?>
                           
                     </div>
                </div>
               <div class="col-lg-4">
                  <div class="tp-sidebar-wrapper">
                        <!-- Categories -->
                     <?php dynamic_sidebar('blogpost-widget-1');?>

                     <div class="tp-sidebar-widget tp-sidebar-border pb-30 mb-35">
                        <h3 class="tp-sidebar-service-title mb-20 tp-ff-body">Recent Posts</h3>
                        <div class="tp-recent-post-content d-flex align-items-center">
                           <div class="tp-recent-post-thumb mr-15">
                              <img src="assets/img/blog/blog.jpg" alt="">
                           </div>
                           <div>
                              <span class="tp-recent-post-span">UI Desige</span>
                              <h2 class="tp-recent-post-title"><a href="blog-details.html">Google without having to hire an SEO Expert.</a></h2>
                              <div class="tp-recent-post-tag">
                                 <span>14 April, 2024</span>
                                 <span>Minute</span>
                              </div>
                           </div>
                        </div>
                        <div class="tp-recent-post-content d-flex align-items-center">
                           <div class="tp-recent-post-thumb mr-15">
                              <img src="assets/img/blog/blog-3.jpg" alt="">
                           </div>
                           <div>
                              <span class="tp-recent-post-span grey">Career</span>
                              <h2 class="tp-recent-post-title"><a href="blog-details.html">Being good cyber citizens in a digital world.</a></h2>
                              <div class="tp-recent-post-tag">
                                 <span>14 April, 2024</span>
                                 <span>Minute</span>
                              </div>
                           </div>
                        </div>
                        <div class="tp-recent-post-content d-flex align-items-center">
                           <div class="tp-recent-post-thumb mr-15">
                              <img src="assets/img/blog/blog-2.jpg" alt="">
                           </div>
                           <div>
                              <span class="tp-recent-post-span yellow">Software</span>
                              <h2 class="tp-recent-post-title"><a href="blog-details.html">The single biggest reason why startups succeed.</a></h2>
                              <div class="tp-recent-post-tag">
                                 <span>14 April, 2024</span>
                                 <span>Minute</span>
                              </div>
                           </div>
                        </div>
                     </div>

                        <?php dynamic_sidebar('blogpost-tag-widget' ) ;?>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-postbox-area-end -->















<?php get_footer();?>