<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
	    public $template = 'main';
    public function action_main()
    {
 		$content = View::factory('news')->bind('newss', $newss);		
 		$newss = Model::factory('News')->get_all();
 		$content->title ='Kitchen';
 		$this->template->content = $content;
    }
} 