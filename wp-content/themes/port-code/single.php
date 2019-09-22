<?php
  
  get_header(); 


  while(have_posts()) {
    the_post(); 
  ?>

            <div class="event-summary">
              <div class="event-summary__content">

                <h5 class="event-summary__title headline headline--tiny"><?php the_title(); ?></a></h5>
                <?php the_content(); ?>
                
              </div>
              
            </div>

  <?php }

            
  get_footer();

?>