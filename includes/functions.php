<?php

namespace Wedevs\Slider;

function wd_ac_insert_data( $args = [] ) {
	global $wpdb;

	if ( empty($data['name']) ) {
		return new \WP_Error( 'no-name', __('Please insert name.', 'wedevs_slider') );
	}

	$default = [
		'name'		=> '',
		'subject'	=> '',
		'message'	=> ''
	];

	$inserted = $wpdb->insert(
		"{$wpdb->prefix}e_slider",
		$data,
		[
			'%s',
			'%s',
			'%s'
		]
	);

	if ( ! $inserted ) {
		return new \WP_Error( 'failed-to-insert', __( 'Failed to insert data', 'wedevs_slider' ) );
	}

	return $wpdb->insert_id;
}
