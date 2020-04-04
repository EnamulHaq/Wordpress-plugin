<?php

/**
 * Installer class
 */
namespace Wedevs\Slider;
class Installer
{
	
	/*
	* Create version and table
	*
	* @return void
	*/
	public function run()
	{
		$this->add_version();
		$this->create_table();
	}

	public function add_version(){
		$installed = get_option( 'wd_slider_installed' );
    	if (! $installed ) {
    		update_option( 'wd_slider_installed', time() );
    	}
    	update_option( 'wd_slider_version', WD_SLIDER_VERSION );
	}


	public function create_table(){
		global $wpdb;
		$charset = $wpdb->get_charset_collate();

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}e_slider` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `name` text NOT NULL,
		  `subject` text NOT NULL,
		  `message` varchar(256) NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset";

		if (! function_exists('dbDelta')) {
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		}
		dbdelta( $schema );
	}

}

