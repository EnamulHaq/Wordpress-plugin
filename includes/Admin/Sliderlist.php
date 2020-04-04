<?php

/**
 * 
 */

namespace Wedevs\Slider\Admin;

class Sliderlist
{
	
	public function plugin_page(){

		$action = isset($_GET['action']) ? $_GET['action']: 'list';

		switch ($action) {

			case 'new':
				$template = __DIR__.'/view/slider-new.php';
				break;

			case 'edit':
				$template = __DIR__.'/view/slider-edit.php';
				break;

			case 'view':
				$template = __DIR__.'/view/slider-view.php';
				break;
			default:
				$template = __DIR__.'/view/slider-list.php';
				break;
		}

		if (file_exists($template)) {
			include $template;
		}
	}
	

	public function from_handeler(){

		if (! isset($_POST['send_message'])) {
			return;
		}

		if (! wp_verify_nonce( $_POST['_wpnonce'], 'new_slider' )) {
			wp_die( 'Are you cheating ?');
		}

		if (! current_user_can( 'manage_options' )) {
			wp_die( 'Are you cheating ?');
			
		}

		var_dump(wd_ac_insert_data());


		// $name = isset($_POST['name']) ? sanitize_text_field( $_POST['name'] ): '';
		// $subject = isset($_POST['subject']) ? sanitize_text_field( $_POST['subject'] ): '';
		// $message = isset($_POST['message']) ? sanitize_textarea_field( $_POST['message'] ): '';
		

		// if ( ! empty( $name ) && ! empty( $subject )  && ! empty( $message ) ) {
		// 	global $wpdb;
		// 	$table = $wpdb->prefix.'e_slider';
		// 	$data = array(
		// 		'name'	=> $name,
		// 		'subject'	=> $subject,
		// 		'message'	=> $message
		// 	);
		// 	$format = array( '%s','%s', '%s' );
		// 	$wpdb->insert($table,$data,$format);
		// 	return $wpdb->insert_id;

		// } elseif ( empty($name) ) {
		// 	return $my_error = new \WP_Error( 'toy', 'my favorite toy is dolly', 'my best' );

			

		// } elseif ( empty( $subject ) ) {
		// 	echo "please insert subject";
		// } elseif ( empty( $message ) ) {
		// 	echo "Please insert message";
		// } else {
		// 	echo "Please insert data";
		// }
		var_dump($_POST);

		exit;
	}

    
}

		