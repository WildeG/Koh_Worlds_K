<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
	    public $template = 'main';
    public function action_main()
    {
 		$content = View::factory('home')->bind('newss', $newss);		
 		$newss = Model::factory('News')->get_last();
 		$this->template->content = $content;
    }
    public function action_news(){
    	$content=View::factory('newslist')->bind('newss',$newss);
    	$newss=Model::factory('News')->get_all();
    	$newss=array_reverse($newss);
    	$this->template->content=$content;
    }
} 