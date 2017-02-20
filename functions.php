<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/nav-walker.php' // Bootstrap Nav Walker
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);



/* === ENQUEUES STYLES ===*/
function nwf_styles(){

  wp_enqueue_style('fontawesome', get_template_directory_uri() .'/bower_components/font-awesome/css/font-awesome.css');
  wp_enqueue_style('novecento', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
  wp_enqueue_style('roboto-condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic');
  wp_enqueue_script('custom_nwf', get_template_directory_uri() . '/assets/scripts/nwf.js', array(), '1.0.0', true);
}; 





add_action('wp_enqueue_scripts', 'nwf_styles');



/* === THUMBNAIL SIZING ===*/
add_image_size( 'wee_image', 60, 100 );
add_image_size( 'mobile_image', 320, 100 );
add_image_size( 'tablet_image', 720, 400 );
add_image_size( 'laptop_image', 1024, 600 );
add_image_size( 'large_image', 1200, 750 );



/* ===Breadcrumbs===*/


function nwf_product_breadcrumb() {
  if (!is_home()) {
    echo '<a href="/ticket-options/">';
    echo get_post_type();
    echo "s</a> &gt; ";
    if (is_category() || is_single()) {
      the_category('title_li=');
      if (is_single()) {
        the_title();
      }
    } elseif (is_page()) {
      echo the_title();
    }
  }
}





/* SIDEBARS */
function wpb_widgets_init() {

  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'wpb' ),
    'id' => 'sidebar-1',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
    'name' =>__( 'Front page sidebar', 'wpb'),
    'id' => 'sidebar-2',
    'description' => __( 'Appears on the static front page template', 'wpb' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  }

add_action( 'widgets_init', 'wpb_widgets_init' );




/* Screening Details CPT */

add_action( 'init', 'nwf_create_screeningdetails' );

function nwf_create_screeningdetails() {
  register_post_type( 'screening_details',
    array(
      'labels' => array(
        'name' => __( 'Screening Details' ),
        'singular_name' => __( 'Screening Details' )
      ),
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => 'dashicons-editor-video',
      'rewrite' => array('slug' => 'screenings'),
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}


function nwf_screening_type_taxonomy() {
   register_taxonomy(
    'screening_type', 'screening_details',
      array(
          'hierarchical' => true,
          'label' => 'Screening Types',
          'query_var' => true,
          'rewrite' => array('slug' => 'screening-type')
      )
  );
}

add_action( 'init', 'nwf_screening_type_taxonomy' );


function nwf_screening_date_taxonomy() {
   register_taxonomy(
    'screening_dates', 'screening_details',
      array(
          'hierarchical' => true,
          'label' => 'Screening Dates',
          'query_var' => true,
          'rewrite' => array('slug' => 'screening-dates')
      )
  );
}

add_action( 'init', 'nwf_screening_date_taxonomy' );

/*sponsor details*/ 

 


function nwf_workshops_taxonomy() {
   register_taxonomy(
    'workshops', 'workshops',
      array(
          'hierarchical' => true,
          'label' => 'Workshops or Panels',
          'query_var' => true,
          'rewrite' => array('slug' => 'workshops')
      )
  );
}

add_action( 'init', 'nwf_workshops_taxonomy' );


/*sponsor details*/ 

add_action('init', 'nwf_workshops_register');
 
function nwf_workshops_register() {
 
  $labels = array(
    'name' => _x('Workshops and Panels', 'Workshops and Panels'),
    'singular_name' => _x('Workshops and Panels', 'Workshops and Panels'),
    'add_new' => _x('Add New', 'Workshops or Panels'),
    'add_new_item' => __('Add New Workshops or Panels'),
    'edit_item' => __('Edit Workshops or Panels'),
    'new_item' => __('New Workshops or Panels'),
    'view_item' => __('View Workshops and Panels'),
    'search_items' => __('Search Workshops and Panels'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
 
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-clipboard',
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions')
    ); 
 
  register_post_type( 'workshops' , $args );
}

function nwf_media_release_taxonomy() {
   register_taxonomy(
    'mediarelease', 'mediarelease',
      array(
          'hierarchical' => true,
          'label' => 'Types of Media Release',
          'query_var' => true,
          'rewrite' => array('slug' => 'media-release')
      )
  );
}

add_action( 'init', 'nwf_media_release_taxonomy' );


/*sponsor details*/ 

add_action('init', 'nwf_media_release_register');
 
function nwf_media_release_register() {
 
  $labels = array(
    'name' => _x('Media Releases', 'Media Releases'),
    'singular_name' => _x('Media Release', 'Media Release'),
    'add_new' => _x('Add New', 'Media Release'),
    'add_new_item' => __('Add New Media Release'),
    'edit_item' => __('Edit Media Release'),
    'new_item' => __('New Media Release'),
    'view_item' => __('View Media Release'),
    'search_items' => __('Search Media Releases'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
 
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-rss',
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions')
    ); 
 
  register_post_type( 'mediarelease' , $args );
}


function nwf_product_taxonomy() {
   register_taxonomy(
    'product', 'product',
      array(
          'hierarchical' => true,
          'label' => 'Product types',
          'query_var' => true,
          'rewrite' => array('slug' => 'products')
      )
  );
}

add_action( 'init', 'nwf_product_taxonomy' );


/*sponsor details*/ 

add_action('init', 'nwf_product_register');
 
function nwf_product_register() {
 
  $labels = array(
    'name' => _x('Products', 'Products'),
    'singular_name' => _x('Product', 'Products'),
    'add_new' => _x('Add New', 'Product'),
    'add_new_item' => __('Add New Product'),
    'edit_item' => __('Edit Product'),
    'new_item' => __('New Product'),
    'view_item' => __('View Product'),
    'search_items' => __('Search Products'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
 
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-cart',
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions')
    ); 
 
  register_post_type( 'product' , $args );
}



function nwf_get_posts( $query ) {
  // do not modify queries in the admin
  if( is_admin() ) {  
    return $query;
    
  }
  

  // only modify queries for 'event' post type
  if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'screeningdetails' ) {
    
    $query->set('orderby', 'meta_value'); 
    $query->set('meta_key', 'screening_time');   
    $query->set('order', 'ASC'); 
    
  }
  

  // return
  return $query;

}

add_action('pre_get_posts', 'nwf_get_posts');



