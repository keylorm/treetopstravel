<?php
/**
 * @file
 * HTML template functions.
 */

/**
 * Implements hook_preprocess_html().
 * Meta tags https://drupal.org/node/1468582#comment-5698732
 */
function treetopstravel_preprocess_html(&$variables) {
  $meta_charset = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'charset' => 'utf-8',
    ),
  );
  drupal_add_html_head($meta_charset, 'meta_charset');

  $meta_x_ua_compatible = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'x-ua-compatible',
      'content' => 'ie=edge, chrome=1',
    ),
  );
  drupal_add_html_head($meta_x_ua_compatible, 'meta_x_ua_compatible');

  $meta_mobile_optimized = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'MobileOptimized',
      'content' => 'width',
    ),
  );
  drupal_add_html_head($meta_mobile_optimized, 'meta_mobile_optimized');

  $meta_handheld_friendly = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'HandheldFriendly',
      'content' => 'true',
    ),
  );
  drupal_add_html_head($meta_handheld_friendly, 'meta_handheld_friendly');

  $meta_viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1',
    ),
  );
  drupal_add_html_head($meta_viewport, 'meta_viewport');

  $meta_cleartype = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'cleartype',
      'content' => 'on',
    ),
  );
  drupal_add_html_head($meta_cleartype, 'meta_cleartype');

   // Use html5shiv.
  if (theme_get_setting('html5shim')) {
    $element = array(
      'element' => array(
        '#tag' => 'script',
        '#value' => '',
        '#attributes' => array(
          'type' => 'text/javascript',
          'src' => file_create_url(drupal_get_path('theme', 'treetopstravel') . '/js/html5shiv-printshiv.js'),
        ),
      ),
    );
    $html5shim = array(
      '#type' => 'markup',
      '#markup' => "<!--[if lt IE 9]>\n" . theme('html_tag', $element) . "<![endif]-->\n",
    );
    drupal_add_html_head($html5shim, 'treetopstravel_html5shim');
  }

  // Use Respond.js.
  if (theme_get_setting('respond_js')) {
    drupal_add_js(drupal_get_path('theme', 'treetopstravel') . '/js/respond.min.js', array('group' => JS_LIBRARY, 'weight' => -100));
  }

  // Use normalize.css
  if (theme_get_setting('normalize_css')) {
    drupal_add_css(drupal_get_path('theme', 'treetopstravel') . '/css/normalize.css', array('group' => CSS_SYSTEM, 'weight' => -100));
  }

   if (arg(0) == 'taxonomy' && arg(1) == 'term') {
    $term = taxonomy_term_load(arg(2));
    $variables['classes_array'][] = 'vocabulary-' . strtolower($term->vocabulary_machine_name);
  }
  
  flexslider_add(); 
}

/**
 * Implements hook_html_head_alter().
 */
function treetopstravel_html_head_alter(&$head_elements) {

  // Remove system content type meta tag.
  unset($head_elements['system_meta_content_type']);
}

function treetopstravel_form_element($variables) {
  //$path = current_path();
  //$node = menu_get_object("node",1,$path);
  /*$path_alias = drupal_lookup_path('alias',$path);
  $node = menu_get_object("node", 1, $path_alias);*/
  //dpm($node);

  if(isset($variables['element']['#title']) && (($variables['element']['#type'] == 'checkbox') || $variables['element']['#type'] == 'radio')) {
    $variables['element']['#title'] = "<span></span>".$variables['element']['#title'];
    
  }
  /*if($variables['element']['#field_name'] == 'the_field_name') {
  }*/
  return theme_form_element($variables);
}


function treetopstravel_breadcrumb($variables) {
 /* $breadcrumb = $variables['breadcrumb'];
  $path_alias = drupal_get_path_alias(current_path());
  $breadcrumb_array = explode("/",$path_alias);
  //dpm($breadcrumb_array);
  if (!empty($breadcrumb)) {
      $crumbs = '<ul class="breadcrumbs">';

      foreach($breadcrumb as $value) {
           $crumbs .= '<li>'.$value.'</li>';
      }
      $crumbs .= '</ul>';
    }
      return $crumbs;
*/
}

/**
 * Implements hook_html_form_alter().
 */
function treetopstravel_form_alter(&$form, &$form_state, $form_id) {
 
  if($form_id == "webform_client_form_7" || $form_id == "webform_client_form_18" ){
    $form['#attributes']['class'][] = 'form-viaje-a-su-medida';
    //agregamos la libreria de datepicker para el formulario
    $form['#after_build'] = array('custom_form_uidatepicker');
  }

  if($form_id == "webform_client_form_7" || $form_id == "webform_client_form_18" || $form_id == "webform_client_form_98" || $form_id == "webform_client_form_101" || $form_id == "webform_client_form_104" || $form_id == "webform_client_form_102" || $form_id == "webform_client_form_105" || $form_id == "webform_client_form_106"|| $form_id == "webform_client_form_201"|| $form_id == "webform_client_form_202"){
    $form['#attributes']['class'][] = 'formulario-estilo-general';
    //agregamos la libreria de datepicker para el formulario
    $form['#after_build'] = array('custom_form_uidatepicker');
  }

  /*if($form_id == "webform_client_form_3" || $form_id == "webform_client_form_18"){
    $form['#attributes']['class'][] = 'grid-1000';

  }*/

 


}





function custom_form_uidatepicker($form, $form_state) {
  drupal_add_library('system', 'ui.datepicker');
  drupal_add_js("(function ($) { $('.datepicker').datepicker({
      dateFormat: 'dd/mm/yy'
    });
    $('.datepicker').datepicker( 'option', 'minDate', 'd' );
    })(jQuery);", array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));

    return $form;
}

/**
 * Implements hook_page_alter().
 * https://gist.github.com/jacine/1378246
 */
function treetopstravel_page_alter(&$page) {

  // Remove all the region wrappers.
  foreach (element_children($page) as $key => $region) {
    if (!empty($page[$region]['#theme_wrappers'])) {
      $page[$region]['#theme_wrappers'] = array_diff($page[$region]['#theme_wrappers'], array('region'));
    }
  }
  // Remove the wrapper from the main content block.
  if (!empty($page['content']['system_main'])) {
    $page['content']['system_main']['#theme_wrappers'] = array_diff($page['content']['system_main']['#theme_wrappers'], array('block'));
  }
}

function treetopstravel_preprocess_node(&$vars) {

  // Add a striping class.
  $vars['classes_array'][] = 'node-' . $vars['zebra'];

}

/*function treetopstravel_preprocess_field(&$variables, $hook) {
  $element = $variables ['element'];
    $temp_title = "";
    if($element['#view_mode'] == 'articulos_relacionados' && $element['#title'] == 'Title'){
      $temp_title = $element['#object']->title;
      $temp_title = truncate($temp_title, 20);
      $nid = $element['#object']->vid;
      $path_alias = drupal_get_path_alias("node/".$nid);
      $element['#items'][0]['value'] = "<h3><a href=\"/".$path_alias."\">".$temp_title."</a></h3>";
      $element[0]['#markup'] = "<h3><a href=\"/".$path_alias."\">".$temp_title."</a></h3>";
      $variables['element'] = $element;
      dpm($variables['element']);
    }
}
*/
function treetopstravel_preprocess_block(&$vars, $hook) {
  // Add a striping class.
  $vars['classes_array'][] = 'block-' . $vars['zebra'];
}

function treetopstravel_menu_link(array $variables) {
//add class for li
   $variables['element']['#attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);
  return theme_menu_link($variables);
}
function treetopstravel_preprocess_page(&$vars) {

    // - page--example.tpl.php
  
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestion'] = 'page__'.$vars['node']->type; //
  }
}


function truncate($str, $width) {
    return strtok(wordwrap($str, $width, "...\n"), "\n");
}