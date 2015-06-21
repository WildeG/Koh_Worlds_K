<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
 
    public function before()
    {
        parent::before(); 	
 		$this->template->styles = array('style', 'owl.carousel', 'homepages');
        $this->template->scripts = array('jquery-1.9.1.min','jquery.waterwheelCarousel.min');
        if (Auth::instance()->logged_in()) {
        $this->template->login = View::factory('/logged');;}
        else{
        $this->template->login = View::factory('/login');;	
        }
    }
 
} // End Common