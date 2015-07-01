<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Recipe extends Controller_Common {
	    public $template = 'main';
    public function action_showrecipes()
    {
 		$content = View::factory('recipes')->bind('recipes', $recipes);		
 		$recipes = Model::factory('Recipe')->get_recipes($_GET['kitchens']);
 		$this->template->content = $content;
    }
    public function action_showrecipe(){
    	$content = View::factory('showrecipe')->bind('recipes',$recipes)->bind('comps',$comps);
    	$recipes = Model::factory('Recipe')->get_recipe($_GET['id']);
    	$comps = Model::factory('Recipe')->get_comps($_GET['id']);
    	$this->template->content = $content;
    }

} 