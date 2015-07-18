<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
	    public $template = 'main';
    public function action_user()
    {
 		$content = View::factory('User')->bind('recipes', $recipes)->bind('user', $user);
 		$recipes=Model::factory('Showmodel')->get_count_recipes($_GET['id']);	
 		$user=Model::factory('Showmodel')->get_user($_GET['id']);	
 		$this->template->content = $content;
    }
} 