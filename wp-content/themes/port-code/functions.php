<?php


function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
    wp_enqueue_style("university_main_styles", get_stylesheet_uri());

    add_theme_support('post-thumbnails');
}

add_action("wp_enqueue_scripts", "university_files");

function university_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, false);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('singlePage', 850, 850, false); 
    
}

add_action('after_setup_theme', 'university_features');

