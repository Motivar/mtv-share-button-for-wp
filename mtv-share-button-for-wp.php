<?php
/*
Plugin Name: Share Button Shortcode
Plugin URI: https://motivar.io
Description: extend WP in various ways with simple UI
Version: 1.0
Author: Giannopoulos Nikolaos
Text Domain:       extend-wp
*/

if (!defined('WPINC')) {
 die;
}


define('mtv_share_path', plugin_dir_path(__FILE__));
define('mtv_share_url', plugin_dir_url(__FILE__));

require_once(plugin_dir_path(__FILE__) . '/lib/autoload.php');

new \MTV_Share\Setup();
