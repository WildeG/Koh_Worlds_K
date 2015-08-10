<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
    public function action_main()
    {
    	$this->template->title = 'Worlds Kitchens';
 		$content = View::factory('main/home')->bind('newss', $newss)->bind('recipes', $recipes);		
 		$newss = Model::factory('Showmodel')->get_five();
        $recipes = Model::factory('Showmodel')->get_fiver();
 		$this->template->content = $content;
    }
    public function action_403(){
    	$this->template->title = 'Доступ запрещен';
        $content = View::factory('e403');
        $this->template->content = $content;
    }
}