<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
    public function action_main()
    {
 		$content = View::factory('main/home')->bind('newss', $newss)->bind('recipes', $recipes);		
 		$newss = Model::factory('Showmodel')->get_five();
        $recipes = Model::factory('Showmodel')->get_fiver();
 		$this->template->content = $content;
    }
    public function action_403(){
        $content = View::factory('e403');
        $this->template->content = $content;
    }
}