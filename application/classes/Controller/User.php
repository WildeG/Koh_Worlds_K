<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
	    public $template = 'main';
    public function action_user()
    {
 		$content = View::factory('User')->bind('recipes', $recipes);
 		$recipes=Model::factory('Showmodel')->get_count_recipes();		
 		$this->template->content = $content;
    }
} 