<?php

/**
 * CRUD class
 */

namespace Wedevs\Slider;
class Crud {
	/**
	 * Insert data
	 *  
	 **/
	public function wslider_insert( $data = array(), $format = array() ) {

		global $wpdb;
		$table = $wpdb->prefix.'e_slider';
		$wpdb->insert($table,$data,$format);
		return $wpdb->insert_id;
	}
}