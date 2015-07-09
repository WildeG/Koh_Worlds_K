<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Mday extends Controller_Common {
	    public $template = 'main';
    public function action_menu_day()
    {
 		$content = View::factory('mday');		
 		$this->template->content = $content;
    }
} 