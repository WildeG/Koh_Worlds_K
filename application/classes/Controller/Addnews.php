<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Addnews extends Controller_Common {
	    public $template = 'main';
    public function action_news()
    {
 		$content = View::factory('addnews');
 		$this->template->styles=array('addnews','style', 'owl.carousel', 'homepages');
 		$this->template->content = $content;
    }
    public function action_addnews(){
    	$add=Model::factory('Addnews')->add_news($_POST);
    	if ($add!=false){
    		$content=View::factory('success');
    	}
    	else{
    		$content=View::factory('error');
    	}
 		$this->template->content = $content;    	
    }
} // End Welcome