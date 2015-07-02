<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Auth extends Controller_Common {
	    public $template = 'main';
    public function action_registration()
    {
        if ($post = $this->request->post())
        {
            try {           
                // Сохраняем пользователя в БД
                $dateofreg=date('Y-m-d');
                $user = ORM::factory('User')->create_user($_POST, array('username','password','name','family', $dateofreg));
                // Выставляем ему роль, роль login означает что пользователь может авторизоваться
                $user->add('roles',ORM::factory('Role',array('name'=>'login')));               
                // Делаем редирект на страницу авторизации
                $this->redirect("success");
            } catch (ORM_Validtion_Exception $e) {
                $errors = $e->errors('model');
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
                
                $sess_vars=Model::factory('user')->read_sess_vars($post['username']);
                $_SESSION['id']=$sess_vars->get('id');
                $_SESSION['name']=$sess_vars->get('name');
                $_SESSION['family']=$sess_vars->get('family');
                $_SESSION['username']=$post['username'];
            }
        }
        // Проверяем авторизировался пользователь или нет
        if (Auth::instance()->logged_in())
        {       
            // Если пользователь авторизировался - то выводим например, личный кабинет
            $this->template->content = View::factory('success');
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