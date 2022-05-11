<?php define('THEME_VERSION', '1.0.0.2');


/**
 * @package WordPress
 * @subpackage themename
 */

// LOAD CLASSES JIT
spl_autoload_register(function ($className) {
  $classDir  = get_template_directory() . '/assets/classes/';
  $classFile = 'class-' . str_replace('_', '-', strtolower($className)) . '.php';

  if (file_exists($classDir . $classFile)) {
    require_once $classDir . $classFile;
  }
});

////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// START UTILITY FUNCTIONS ///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * Load any needed body classes
 */
function addBodyClass($classes)
{
  $classes[] = '';
  return $classes;
}
add_filter('body_class', 'addBodyClass');



/**
 * Register and define a page_for_settings option to allow for a normal page with ACF to replace options page.
 */
function extendReadingSettings(){

  // register our setting
  register_setting( 
    'reading', // option group "reading", default WP group
    'page_for_settings', // option name
    array(
      'type' => 'string', 
      'sanitize_callback' => 'sanitize_text_field',
      'default' => NULL
    )
  );

  // add our new setting
  add_settings_field(
      'page_for_settings', // ID
      __('Theme Settings Page', 'textdomain'), // Title
      'page_for_settings_callback_function', // Callback
      'reading', // page
      'default', // section
      array( 'label_for' => 'page_for_settings' )
  );

}
add_action('admin_init', 'extendReadingSettings');

function page_for_settings_callback_function(){
  // get saved project page ID
  $project_page_id = get_option('page_for_settings');

  // get all pages
  $args = array(
      'posts_per_page'   => -1,
      'orderby'          => 'name',
      'order'            => 'ASC',
      'post_type'        => 'page',
  );
  
  $items = get_posts( $args );

  echo '<select id="settingsPageSelect" name="page_for_settings">';
  // empty option as default
  echo '<option value="0">'.__('— Select —', 'wordpress').'</option>';

  // foreach page we create an option element, with the post-ID as value
  foreach($items as $item) {

      // add selected to the option if value is the same as $project_page_id
      $selected = ($project_page_id == $item->ID) ? 'selected="selected"' : '';

      echo '<option value="'.$item->ID.'" '.$selected.'>'.$item->post_title.'</option>';
  }

  echo '</select>';
}

function prfx_add_custom_post_states($states) {
    global $post;

    // get saved project page ID
    $project_page_id = get_option('page_for_settings');

    // add our custom state after the post title only,
    // if post-type is "page",
    // "$post->ID" matches the "$project_page_id",
    // and "$project_page_id" is not "0"
    if( 'page' == get_post_type($post->ID) && $post->ID == $project_page_id && $project_page_id != '0') {
        $states[] = __('Global Settings Page', 'textdomain');
    }

    // get saved project page ID
    $id = get_option('page_for_quiz');

    // add our custom state after the post title only,
    // if post-type is "page",
    // "$post->ID" matches the "$project_page_id",
    // and "$project_page_id" is not "0"
    if( 'page' == get_post_type($post->ID) && $post->ID == $id && $id != '0') {
        $states[] = __('Quiz Page', 'textdomain');
    }

    return $states;
}
add_filter('display_post_states', 'prfx_add_custom_post_states');


function wpse_99333_hide_admin_bar_from_front_end(){
  if ( is_blog_admin() ) {
    return true;
  }
  remove_action( 'wp_head', '_admin_bar_bump_cb' );
  return false;
}
add_filter( 'show_admin_bar', 'wpse_99333_hide_admin_bar_from_front_end' );


function custom_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="searchForm" action="' . home_url( '/' ) . '" >
              <div class="inlineFormElements">
                <label class="acc" for="s">' . __( 'Search:' ) . '</label>
                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search Posts..." />
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>';

  return $form;
}
add_filter( 'get_search_form', 'custom_search_form', 40 );



function create_posttype() {
  // Add post type registrations here
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// END UTILITY FUNCTIONS /////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

require_once('utility-functions.php');
