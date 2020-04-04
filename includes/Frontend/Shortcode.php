<?php

namespace Wedevs\Slider\Frontend;

class Shortcode
{
	function __construct(){
		add_shortcode( 'wedevs-slider', [$this, 'render_shortcode'] );
	}



	public function render_shortcode($atts, $content = ''){
		echo "Hello this is shortcode";
	}
    
}
