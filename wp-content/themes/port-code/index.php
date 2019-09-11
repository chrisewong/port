<?php get_header(); ?>

  <div class="page-banner">
    <div class="page-banner__content container blog-post">
      <h1 class="headline blog-center"></h1>
      
    </div>
  </div>
      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline blogpost">Blog Post</h2>
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 10
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
              </div>
            </div>
            <hr>
          <?php } wp_reset_postdata();
        ?> 

        
        
        
        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  

  <?php get_footer();

?>