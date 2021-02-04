<?php
/** 
* Plugin Name: Scoding Demo Bootstrap CSS
*/

function demo_include_bootstrap(){

	wp_enqueue_style( 'demo-bootstrap', plugin_dir_url(__FILE__).'bootstrap.css');
}
add_action('wp_enqueue_scripts', 'demo_include_bootstrap');

?>