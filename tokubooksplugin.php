<?php
/**
 * Plugin Name: Toku Books Plugin
 * Plugin URI: http://www.nonexistent.com/tokubooksplugin
 * Description: Book coding challenge plugin
 * Version: 1.0
 * Author: Thomas Kuhn
 * Author URI: http://www.nonexistent.com
 */

defined('ABSPATH') or die('No script kiddies please!');


function tokuplugin( $content )
{
	return $content .= '<p>Hier spricht der Plugin: Danke für die Aufmerksamkeit :)</p>';
}

add_action('the_content', 'tokuplugin');
