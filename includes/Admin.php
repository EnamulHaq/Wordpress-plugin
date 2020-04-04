<?php

namespace Wedevs\Slider;


class Admin
{
    public function __construct(  ){

    	$this->dispath_action();
    	new Admin\Menu();
    }


    public function dispath_action(){
    	$sliderlist = new Admin\Sliderlist();
    	add_action( 'admin_init', [$sliderlist, 'from_handeler'] );
    }
}
