<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
	    public $template = 'main';
    public function action_user()
    {
 		$content = View::factory('user');		
 		$this->template->content = $content;
    }
} 