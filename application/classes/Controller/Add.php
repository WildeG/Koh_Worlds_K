<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Add extends Controller_Common {
	    public $template = 'main';

// Что это?
// ************************************
    public function action_news()
    {
 		$content = View::factory('addnews');
 		$this->template->styles=array('addnews','style', 'owl.carousel', 'homepages');
 		$this->template->content = $content;
    }
    public function action_recipe()
    {
        $content = View::factory('addrecipe')->bind('kitchens', $kitchens)->bind('components', $components);
        $kitchens=Model::factory('Showmodel')->get_kitchens();
        $components=Model::factory('Showmodel')->get_component();
        $this->template->styles=array('addrecipe','style', 'owl.carousel', 'homepages');
        $this->template->content = $content;
    }
// ************************************

    public function action_addnews(){
    	$add=Model::factory('Addmodel')->add_news($_POST);
    	if ($add!=false){
    		$content=View::factory('success');
    	}
    	else{
    		$content=View::factory('error');
    	}
 		$this->template->content = $content;    	
    }
    public function action_addrecipe(){
        $add=Model::factory('Addmodel')->add_recipe($_POST);
        for($count=0; ;$count++){
            if (isset($_POST['parts'.$count])){
            $addcomp=Model::factory('Addmodel')->add_component($_POST['parts'.$count], $add['0'], $_POST['quantity'.$count]);
            }   
            else {break;}
        }
        if ($add!=false){
            $content=View::factory('success')->bind('add', $add);
        }
        else{
            $content=View::factory('error');
        }
        $this->template->content = $content;        
    }
    public function action_addcomponent(){
        
    }
} // End Add