<?php

namespace MTV_Share;

/**
 * create the class to add all libraries so we can use them in the plugin
 *
 * @see         link
 *
 * @author      Motivar
 *
 * @version     1.0.0
 */
if (!defined('ABSPATH')) {
 exit;
}

class Setup
{
 public function __construct()
 {
  /**
   * add the shortcode
   */
  add_shortcode('mtv_share_button', [$this, 'mtv_share_function']);
  /**
   * register the scripts
   */
  add_action('init', array($this, 'registerScripts'), 0);
  /**
   * add the scripts
   */
  add_action('wp_enqueue_scripts', array($this, 'addScripts'), 10);
 }
 /**
  * 
  * register styles and script for 
  */
 public function registerScripts()
 {
  $version = 0.01;
  wp_register_style('mtv-share', mtv_share_url . 'assets/css/style.min.css', false, $version);
  wp_register_script('mtv-share', mtv_share_url . 'assets/js/script.js', array(), $version, true);
 }
 /**
  * add scripts
  */
 public function addScripts()
 {
  wp_enqueue_style('mtv-share');
  wp_enqueue_script('mtv-share');
 }

 /**
  * 
  * add the shortcode
  */
 public function mtv_share_function($atts)
 {
  extract(shortcode_atts(array(
   'id' => '',
  ), $atts));
  ob_start();
  include mtv_share_path . 'templates/button.php';
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
 }
}
