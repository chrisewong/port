<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container align">
      
      <h1 class="logo float-left"><a href="<?php echo site_url() ?>">Chris Wong</a>
    </h1>
    <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <div class="main-div">
        <nav class="main-navigation">
          
             <h1><?php if (get_post_type() == 'post') echo 'class="float-right"' ?><a href="<?php echo site_url('/blog'); ?>">Blog</a></h1>
            
        </nav>
        
      </div>
    </div>
  </header>
