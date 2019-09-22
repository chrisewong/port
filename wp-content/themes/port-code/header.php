<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <header class="site-header">
    <div class="container">
      <h1 class="float-left"><a href="<?php echo site_url() ?>">Chris Wong</a></h1>
      

      <ul class="nav">
          
          <li><?php if (get_post_type() == 'post') ?><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          <li><?php if (get_post_type() == 'post') ?><a href="<?php echo site_url('/'); ?>">Home</a></li>
        </ul>
    </div>
  </header>
