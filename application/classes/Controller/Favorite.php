<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Favorite extends Controller_Common {
		public $template = 'main';
	public function action_prepared()
	{
		$content = View::factory('prepared');		
		$this->template->content = $content;
	}
	public function action_wantcook()
	{
		$content = View::factory('wantcook');		
		$this->template->content = $content;
	}
	public function action_myrecipes()
	{
		$content = View::factory('myrecipes');		
		$this->template->content = $content;
	}
}