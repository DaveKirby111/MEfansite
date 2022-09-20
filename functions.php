
<?php


/** load stylesheets */
   function ME_styles() {

    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '1.6');

   }

   add_action('wp_enqueue_scripts', 'ME_styles');


  


   /** menus */
  
   function register_menus() {
      register_nav_menus(

         array (
            'header-menu' => 'Header Nav',
            'side-menu' => 'Side Nav',
            'footer-menu' => 'Footer Nav',
         )
         );
   }

   add_action( 'init' , 'register_menus');

   $defaults = array(
      'default-color'          => '',
      'default-image'          => '',
      'default-repeat'         => '',
      'default-position-x'     => '',
      'default-attachment'     => '',
      'wp-head-callback'       => '_custom_background_cb',
      'admin-head-callback'    => '',
      'admin-preview-callback' => ''
  );

  add_theme_support( 'custom-background', $defaults );


/** add featured image option */
  add_theme_support('post-thumbnails');

  add_image_size('small-thumbnail', 320, 240, false);


/** enable theme options */


   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'))

?>