<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
	    public $template = 'main';
    public function action_user()
    {
 		$content = View::factory('User')->bind('recipes', $recipes)->bind('user', $user)->bind('want_prep', $want_prep)->bind('my', $my)->bind('subs', $subs);
 		$recipes=Model::factory('Showmodel')->get_count_recipes($_GET['id']);	
 		$user=Model::factory('Showmodel')->get_user($_GET['id']);	
 		$want_prep=Model::factory('Showmodel')->get_count_prep($_GET['id']);
 		$subs=Model::factory('Showmodel')->get_count_subs($_GET['id']);
 		$this->template->content = $content;
 		if ($_SESSION['id']==$_GET['id']) {
				$my="<a href='".URL::base()."favorite/myrecipes'>Мои рецепты</a></li> | <a href='".URL::base()."favorite/advice'>Мои советы</a></li> | <a href='".URL::base()."favorite/prepared'>Приготовленные</a></li>";
			} else {
				$my="Рецепты ".$user[0]['name'].' '.$user[0]['family']." | Советы ".$user[0]['name'].' '.$user[0]['family']." | ".$user[0]['name'].' '.$user[0]['family']."приготовил";
				} 
    }
} 