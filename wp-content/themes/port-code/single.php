<?php
  
  get_header(); ?>

<div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Single.php</h2>
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
              </div>
            </div>
            
          <?php } wp_reset_postdata();
        ?> 
  
  
  
  <?php
  get_footer();

?>