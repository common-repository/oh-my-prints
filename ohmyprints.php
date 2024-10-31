<?php
/**
 * @package oh-my-prints
 * @version 1.4
 */
/*
Plugin Name: Oh my prints
Plugin URI: http://plugins.funsite.eu/oh-my-prints-werk-aan-de-muur/
Description: Link to a page on the "Oh my prints" site for selling the photo or painting on canvas..
Author: Gerhard Hoogterp
Version: 1.4
Author URI: http://plugins.funsite.eu/oh-my-prints-werk-aan-de-muur/
Text Domain: ohmyprints
Domain Path: /languages
*/
if ( ! defined( 'ABSPATH' ) ) exit;

if (!class_exists('basic_plugin_class')):
	require(plugin_dir_path(__FILE__).'basics/basic_plugin.class');
endif;

include_once('ohmyprints-plugin.php');
$ohmyprints = new ohmyprints_class();
$ohmyprints->currentPlugin = __FILE__; // bit of a hack to find the plugin info in getPlugins

?>