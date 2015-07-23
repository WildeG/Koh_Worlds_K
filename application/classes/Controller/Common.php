<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
 
    public function before()
    {
        parent::before(); 	

        $this->template->styles = array('style', 'homepages');
        $this->template->scripts = array('jquery-1.9.1.min','jquery.waterwheelCarousel.min');
        $kitchens=Model::factory('Showmodel')->get_kitchens();
        if (Auth::instance()->logged_in()) {
        $this->template->login = View::factory('logged')->bind('kitchens', $kitchens)->bind('roles', $roles);
        if ($_SESSION['role_id']!=2){$roles=NULL;}
        else {$roles="<li><a href='".URL::base()."add/news'>Новость</a></li>
            <li><a href='".URL::base()."php/add/add-kitchens'>Кухню</a></li>";}  
             
        }
        else{
        $this->template->login = View::factory('login')->bind('kitchens', $kitchens);	
        }
    }
 
} // End Common