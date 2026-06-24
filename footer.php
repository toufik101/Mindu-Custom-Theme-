<?php
global $mindu;
   $footer_copyrights_text= $mindu['footer-copyright-text'] ?? __('© 2026 Copyrights by aqlova Co. All Rights Reserved. Developed by ThemePure');
?>

   <footer>
      <div class="tp-footer-area " data-bg-color="#050517">
         <?php if (is_active_sidebar( 'footer1-widget-1' ) || is_active_sidebar( 'footer2-widget-2' ) || is_active_sidebar( 'footer3-widget-3' ) || is_active_sidebar( 'footer4-widget-4' )) :?>
         <div class="container pb-100 pt-135">
            <div class="row">
               <?php if(is_active_sidebar('footer1-widget-1')): ?>
               <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <?php dynamic_sidebar('footer1-widget-1'); ?>
               </div>
               <?php endif?>

               <?php if(is_active_sidebar('footer2-widget-2')):?>
               <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                  <?php dynamic_sidebar('footer2-widget-2') ;?>
               </div>
               <?php endif?>

               <?php if(is_active_sidebar('footer3-widget-3')):?>
               <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                 <?php dynamic_sidebar('footer3-widget-3') ;?>
               </div>
               <?php endif?>

                 <?php if(is_active_sidebar('footer3-widget-3')):?>
               <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                  <?php dynamic_sidebar('footer4-widget-4') ;?>
               </div>
                <?php endif?>
          </div>

         </div>
         <?php endif;?>
         <div class="tp-footer-bottom">
            <div class="container">
               <div class="tp-footer-bottom-border">
                  <div class="row">
                     <div class="col-xl-6">
                        <div class="tp-footer-menu mb-20">
                           
                           <?php if  (has_nav_menu('Footer_Menu')):?>
                           <?php footer_menu();?>

                           <?php else :?>

                           <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li><a href="#">Courses</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>

                           <?php endif;?>
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="tp-footer-copyright text-xl-end mb-20">
                           <p class="mb-0"><?php echo esc_html($footer_copyrights_text);?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>


   <!-- JS here -->
<?php wp_footer(); ?>
</body>

</html>
