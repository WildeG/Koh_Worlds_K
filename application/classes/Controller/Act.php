<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Act extends Controller_Common {
	    public $template = 'main';
    public function action_act()
    {
    	
    	$result = Model::factory('act')->reg($_POST['login'],$_POST['password'],$_POST['password_repeat'],$_POST['name'],$_POST['lastname']);	
    	$content = View::factory('/act');	
    }
 
}