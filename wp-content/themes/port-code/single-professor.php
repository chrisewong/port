<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['sizes']['pageBanner'] ?>);"></div>
      <div class="page-banner__content container container--narrow">
        
        
      </div>  
    </div>

    <div class="container container--narrow page-section">
          

      <div class="generic-content">
        <div class="row-group">

          <div class="one-third">
            <?php the_post_thumbnail('singlePage'); ?>
          </div>


        </div>
      </div>

      

    </div>
    

    
  <?php }

  get_footer();

?>