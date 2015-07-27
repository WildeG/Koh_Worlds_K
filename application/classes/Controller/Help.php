<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Help extends Controller_Common {
	public $template='help/template';
	public function action_help(){
		$content=View::factory('help/help');
		$this->template->content=$content;
	}
}