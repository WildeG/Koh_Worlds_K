<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main/main';
 
    public function before()
    {
        parent::before(); 	
        $this->template->styles = array('style', 'homepages');
        $this->template->scripts = array('jquery-1.9.1.min','jquery.waterwheelCarousel.min');
        $kitchens=Model::factory('Showmodel')->get_kitchens();
        if (Auth::instance()->logged_in()) {
            $this->template->login = View::factory('user/logged')->bind('kitchens', $kitchens)->bind('roles', $roles);
            $roles_check=Model::factory('User')->get_roles_array();        
            if (!$this->_in_array_r('admin',$roles_check)){
                $roles=NULL;
            }
            else {
                $roles="<li><a href='".URL::base()."add/news'>Новость</a></li>
                <li><a href='".URL::base()."add/kitchens'>Кухню</a></li>";
            }   
        }   
        else{
            $this->template->login = View::factory('user/login')->bind('kitchens', $kitchens);
        }
        $check=$this->_roles();
        //echo Debug::vars($check);
        if ($check!=TRUE){
            $this->redirect('403');
        }
    }

    protected function _in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->_in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
    }

    protected function _roles(){
        $roles=Model::factory('User')->get_roles_array(); 
        $config_security = Kohana::$config->load('security')->as_array();
        $action = Request::current()->action();
        $controller = get_class($this); 
        $check_permission=FALSE;
        if(isset($config_security[$controller][$action]))
        {
            foreach($config_security[$controller][$action] as $users_role)
                if($this->_in_array_r($users_role, $roles) || in_array($users_role, array('public')))
                    $check_permission = TRUE;
                    //echo Debug::vars($users_role, $roles);
        }
                
        if(isset($config_security[$controller]['all_actions']))
        {
            foreach($config_security[$controller]['all_actions'] as $users_role)
                if($this->_in_array_r($users_role, $roles))
                    $check_permission = TRUE;   
                    //echo Debug::vars($users_role, $roles);
        }
        //echo Debug::vars($controller, $action, $check_permission, $roles, $config_security);
        //echo Debug::vars($check_permission);
        return $check_permission;
    }
} 
