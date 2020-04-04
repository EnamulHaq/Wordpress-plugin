<?php

/**
 * @package Wedevs-slider
 */
/*
Plugin Name: wedevs-slider
Plugin URI: https://enamul.com/
Description: A simple plugin
Version: 1.0.0
Author: Enamul
Author URI: https://enamulhaq.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: wedevs_slider
*/
if( !defined('ABSPATH')) exit;


 /**
  * Initaialize a singleton instance
  * 
  * rerun \Wedevs_slider
  * */
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

final class Wedevs_slider
{
	
	
	const version = '1.0.0';

	/**
	* Class construct
	**/
    private function __construct(  ){
    	$this->define_constant();

    	register_activation_hook( __FILE__, [$this, 'activate'] );
        register_deactivation_hook( __FILE__, [$this, 'deactivate'] );
    	add_action( 'plugins_loaded', [$this, 'init_plugin']);
    }

    

    /**
	 * Initializes a singletion instance
	 * 
	 * @return \Wedevs_slider
	 * 
	 */

    public static function init(){
    	static $instance = false;

    	if (! $instance ) {
    		$instance = new self();
    	}
    	return $instance;
    }

    /**
	 * Initialize the plugin
	 */

    public function init_plugin(){
    	if (is_admin()) {
    		new Wedevs\Slider\Admin();
    	}else{
    		new Wedevs\Slider\Frontend();
    	}
    }

    /**
    * Define 
    * @return void 
	**/
    public function define_constant(){
    	define('WD_SLIDER_VERSION', self::version);
    	define('WD_SLIDER_FILE', __FILE__);
    	define('WD_SLIDER_PATH', __DIR__);
    	define('WD_SLIDER_URL', plugins_url( '', WD_SLIDER_FILE ));
    	define('WD_SLIDER_ASSETS', WD_SLIDER_URL.'/assets');
    }


    public function activate(){

    	$installer = new Wedevs\Slider\Installer();
        $installer->run();
    }
    public function deactivate() {
        $uninstaller = new Wedevs\Slider\Uninstaller();
        $uninstaller->run();
    }
}

// Kick-off the plugin
function wedevs_slider(){
	return Wedevs_slider::init();
}

wedevs_slider();
