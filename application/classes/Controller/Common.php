<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
 
    public function before()
    {
        parent::before();
        $login = View::factory('/login');
        $logged = 	View::factory('/logged');
 		$this->template->styles = array('style', 'owl.carousel', 'homepages');
        $this->template->scripts = array('jquery-1.9.1.min','jquery.waterwheelCarousel.min');
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
        $this->template->login = $login; }
        else{
        $this->template->login = $logged;	
        }
    }
 
} // End Common