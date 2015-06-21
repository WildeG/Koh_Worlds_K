<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Auth extends Controller_Common {
	    public $template = 'main';
    public function action_registration()
    {
        if ($post = $this->request->post())
        {
            try {           
                // Сохраняем пользователя в БД
                $user = ORM::factory('user')->create_user($_POST, array('username','password','name','family'));
                // Выставляем ему роль, роль login означает что пользователь может авторизоваться
                $user->add('roles',ORM::factory('role',array('name'=>'login')));               
                // Делаем редирект на страницу авторизации
                $this->redirect("/reg");
            } catch (ORM_Validtion_Exception $e) {
                $errors = $e->errors('models');
                // echo Debug::vars($errors);
            }
        }
     
        // Выводим шаблон регистрации
        $this->template->content = View::factory('registration');
    }
 

        public function action_login()
    {
        if ($post = $this->request->post())
        {
            // Если значения логина и пароля не пустые то авторизируемся на сайте
            if(!empty($post['username']) && !empty($post['password']))
            {
                Auth::instance()->login($post['username'],$post['password']);
            }
        }
        // Проверяем авторизировался пользователь или нет
        if (Auth::instance()->logged_in())
        {       
            // Если пользователь авторизировался - то выводим например, личный кабинет
            $this->template->content = View::factory('main');
        }else
        {
            // Если пользователь не авторизировался то выводим форму входа
            $this->template->content = View::factory('error');
        }
    }
    public function action_logout()
    {
        // Разлогиниваем пользователя
        Auth::instance()->logout();
        // Редиректим его на страницу авторизации
        $this->redirect('/main');
    }
}