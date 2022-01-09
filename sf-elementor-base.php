<?php
/**
 * Plugin Name: Site Flight Elementor Base
 * Description: Site Flight's core Elementor Extension plugin
 * Version:     1.0.0
 * Author:      SiteFlight, Nate Gervenak
 * Author URI:  https://www.siteflight.co
 */

if ( ! defined('ABBSPATH') ) {
  exit;
}

define( 'SF_ELEMENTOR_BASE_VERSION', '1.0.0' );
define( 'SF_ELEMENTOR_BASE', 'sf-site-flight' );
define( 'SF_ELEMENTOR_BASE_PATH', plugin_dir_path( __FILE__ ) );


function sf_elem_register_widgets ( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/base-widget-one.php' );
	require_once( __DIR__ . '/widgets/base-widget-two.php' );

	$widgets_manager->register( new \Elementor_Base_Widget_One() );
	$widgets_manager->register( new \Elementor_Base_Widget_Two() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );