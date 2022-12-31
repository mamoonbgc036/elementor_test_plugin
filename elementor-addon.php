<?php
/**
 * Plugin Name: My First Elementor Plugin
 * Description: An Awesome Plugin
 * Version:     1.0
 * Author: Mamoon
 * Author URI: https://mamoon.org
 * Text Domain: elementor_test_plugin-
 */

 function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Elementor_oEmbed_Widget() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );