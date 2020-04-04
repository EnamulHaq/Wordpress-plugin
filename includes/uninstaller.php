<?php

/**
 * Uninstaller class
 */
namespace Wedevs\Slider;

class Uninstaller
{
	
	function __construct()
	{
		$this->run();
	}


	public function run() {
		global $wpdb;
		$sql = "DROP TABLE IF EXISTS `{$wpdb->prefix}e_slider`";
		$wpdb->query($sql);
		delete_option("wd_slider_installed");
	}
}