<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Mday extends Controller_Common {
	    public $template = 'main';
    public function action_menu_day()
    {
 		$content = View::factory('mday')->bind('mday', $mday)->bind('comps', $comps)->bind('category', $cat);
 		 if (empty($_GET['category'])||(!isset($_GET['category']))) {
			$category = 2;
		} 
		else if (($_GET['category']>3)||(substr_count($_GET['category'],"-"))||(!is_numeric($_GET['category']))) {
			$category =  2;
		}
		else {
			$category = $_GET['category'];
		}
 		$mday=Model::factory('Showmodel')->get_mday($category);	
 		for ($i=0; ;$i++){
 		if ($i>=3){break;}
 		$comps[$i]=Model::factory('Showmodel')->get_count_comps($mday[$i]['id_recipe']);
 		}	

		
 		$this->template->content = $content;
    }
} 