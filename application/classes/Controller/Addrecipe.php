<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Addrecipe extends Controller_Common {
	    public $template = 'main';
    public function action_recipe()
    {
 		$content = View::factory('addrecipe')->bind('kitchens', $kitchens)->bind('components', $components);
 		$kitchens=Model::factory('Recipe')->get_kitchens();
 		$components=Model::factory('Recipe')->get_component();
 		$this->template->styles=array('addrecipe','style', 'owl.carousel', 'homepages');
 		$this->template->content = $content;
    }
    public function action_addrecipe(){
    	$add=Model::factory('Recipe')->add_recipe($_POST);
        for($count=0; ;$count++ ){
            if (isset($_POST['parts'.$count])){
        	$addcomp=Model::factory('Recipe')->add_component($_POST['parts'.$count], $add['0'], $_POST['quantity'.$count]);
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
} // End Welcome