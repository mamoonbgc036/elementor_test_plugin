<?php
/**
 * Plugin Name: My First Elementor Plugin
 * Description: An Awesome Plugin
 * Version:     1.0
 * Author: Mamoon
 * Author URI: https://mamoon.org
 * Text Domain: elementor_test_plugin-
 */

 function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'TEXT',
		[
			'title' => esc_html__( 'TEXT', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);
	$elements_manager->add_category(
		'second-category',
		[
			'title' => esc_html__( 'Second Category', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

 function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Elementor_oEmbed_Widget() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );