<?php
/**
 * Plugin Name: Four-choice-quiz
 * Version: 0.2.1
 * Description: four choice quiz
 * Author: mgn, Toro_Unit
 * Text Domain: four-choice-quiz
 * Domain Path: /languages
 * @package Four-choice-quiz
 */


require dirname( __FILE__ ) .'/vendor/autoload.php';
require dirname( __FILE__ ) .'/vendor/webdevstudios/cmb2/init.php';

define( 'FCQ_FILE', __FILE__ );


add_action( 'plugins_loaded', 'fcq_init' );

function fcq_init() {
	new Torounit\FCQ\PostType();
	new Torounit\FCQ\AdminFields();
	new Torounit\FCQ\RestAPI();
	new Torounit\FCQ\Shortcode();
	new Torounit\FCQ\Result();
}

