<?php

  require_once('assets/inc/bs4navwalker.php');

  @ini_set( 'upload_max_size' , '64M' );
  @ini_set( 'post_max_size', '64M');
  @ini_set( 'max_execution_time', '300' );

  register_nav_menu('main', 'Main Nav');
  register_nav_menu('footer', 'Footer Nav');

  add_theme_support('post-thumbnails');

  if( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page();
  }

  add_action('wp_enqueue_scripts', 'owv_enque_files');
  function owv_enque_files() {

    // CSS
    wp_enqueue_style( 'site-style', get_template_directory_uri()  . '/assets/css/site.css' );
    
    // JS
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', false );

    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.1.3', true );

    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/asets/js/site.js', array('jquery', 'bootstrap-js'), '1.0.0', true );

    if ( is_page_template( 'templates/home.php' ) ) {
      wp_deregister_style("gforms_formsmain_css");  
      wp_deregister_style("gforms_reset_css");
      wp_deregister_style("gforms_ready_class_css");
      wp_deregister_style("gforms_browsers_css");
    }
  }