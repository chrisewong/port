<?php get_header(); ?>

  <div class="page-banner">
  
    <div class="page-banner__content container headline-center">
      <div class="about-us">
      <h1 class="headline headline--large"></h1>
      <img src="http://port.local/wp-content/uploads/2019/09/Chris-Profile-Image.jpg" class="image" />
      <!-- <img class="headshot" src="http://port.local/wp-content/uploads/2019/09/Chris-Profile-Image.jpg" alt="chris-image" /> -->
      <h3 class="headline headline--small">
        My name is Christopher Wong.  I have built this website using Wordpress, jQuery, javascript, html and CSS. 
    </h3>
      <div class="about-button">
        <a href="http://port.local/wp-content/uploads/2019/09/chrisResume.pdf" download>
          <div class="btn--small">
            <!-- <button id="download-btn">Resume</button> -->
            <button class="btn"><i class="fa fa-download"></i>Resume</button>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

          <?php 
        $relatedProfessors = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'professor'
          )
        );

        if ($relatedProfessors->have_posts()) {
          echo '<hr class="section-break">';
        

        echo '<ul class="professor-cards">';
        while($relatedProfessors->have_posts()) {
          $relatedProfessors->the_post(); ?>
          <li class="professor-card__list-item">
            <a class="professor-card" href="<?php the_permalink(); ?>">
              <img class="professor-card__image" src="<?php the_post_thumbnail_url('professorLandscape') ?>">
              <span class="professor-card__name"><?php the_title(); ?></span>
            </a>
          </li>
        <?php }
        echo '</ul>';
        }
        
        wp_reset_postdata();
        ?>
      
        
      
      

  

  <?php get_footer();

?>