<?php


namespace Wedevs\Slider\Admin;

/**
 * Menu handeller class
 * 
**/
class Menu{
	function __construct(){
		add_action( 'admin_menu', [$this, 'main_slider'] );
	}

	function main_slider() {

		$parent_slug = 'slider';
		$capability = 'manage_options';
	    add_menu_page('Slider','E slider',$capability,$parent_slug,[$this, 'slider_list'],'',20);
	    add_submenu_page( 'slider', 'List', 'List', $capability, $parent_slug, [$this, 'slider_list'] );
	    add_submenu_page( 'slider', 'Add new', 'Add new', $capability, 'new', [$this, 'add_new_slide'] );
	}

	public function slider_list(){ 
		$Sliderlist = new Sliderlist();
		$Sliderlist->plugin_page();
	}

	public function add_new_slide(){
		$Sliderlist = new Sliderlist();
		$Sliderlist->plugin_page();
	}
}

