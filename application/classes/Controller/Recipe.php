<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Recipe extends Controller_Common {
	    public $template = 'main';
    public function action_showrecipes()
    {
 		$content = View::factory('recipes')->bind('recipes', $recipes)->bind('count', $count);		
 		$recipes = Model::factory('Showmodel')->get_recipes($_GET['kitchens'],$_GET['page']);
        $count=Model::factory('Showmodel')->get_count_kitchens($_GET['kitchens']);
 		$this->template->content = $content;
    }
    public function action_showrecipe(){
    	$content = View::factory('showrecipe')->bind('recipes',$recipes)->bind('comps',$comps);
    	$recipes = Model::factory('Showmodel')->get_recipe($_GET['id']);
    	$comps = Model::factory('Showmodel')->get_comps($_GET['id']);
    	$this->template->content = $content;
    }

} 