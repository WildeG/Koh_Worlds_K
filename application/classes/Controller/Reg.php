<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Reg extends Controller_Common {
	    public $template = 'main';
    public function action_reg()
    {
 		$this->template->content =View::factory('/reg');
    }
} // End Welcome