<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Registration extends Controller_Common {
	    public $template = 'main';
    public function action_registration()
    {
    	$content = View::factory('/registration');	
 		$content->title ='Регистрация';
 		$this->template->content = $content; 	
    }
 
}