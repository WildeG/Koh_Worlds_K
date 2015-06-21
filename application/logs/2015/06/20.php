<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-20 13:37:13 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 13:37:13 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('welcome')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 14:03:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Welcome.php [ 2 ] in file:line
2015-06-20 14:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 14:03:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Welcome.php [ 2 ] in file:line
2015-06-20 14:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 14:04:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Welcome.php [ 2 ] in file:line
2015-06-20 14:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 14:06:20 --- CRITICAL: ErrorException [ 2 ]: include(bd.php): failed to open stream: No such file or directory ~ APPPATH\views\main.php [ 3 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:3
2015-06-20 14:06:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(3): Kohana_Core::error_handler(2, 'include(bd.php)...', 'C:\\xampp\\htdocs...', 3, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(3): include()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:3
2015-06-20 19:29:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:29:41 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:29:42 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:29:42 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:29:42 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:29:42 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:32:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:32:37 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:33:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:33:41 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:34:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:34:50 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Cookie.php:67
2015-06-20 19:44:05 --- CRITICAL: View_Exception [ 0 ]: The requested view /index could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 19:44:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/index')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('/index', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_View::factory('/index')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 19:44:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-20 19:44:25 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-20 19:45:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\main.php [ 57 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:45:15 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:45:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\main.php [ 57 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:45:41 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:45:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\main.php [ 57 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:45:47 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:57
2015-06-20 19:49:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 64 ] in file:line
2015-06-20 19:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:50:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 64 ] in file:line
2015-06-20 19:50:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:50:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 64 ] in file:line
2015-06-20 19:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:51:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 64 ] in file:line
2015-06-20 19:51:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:53:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 64 ] in file:line
2015-06-20 19:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:54:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 57 ] in file:line
2015-06-20 19:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:54:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 57 ] in file:line
2015-06-20 19:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:55:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 57 ] in file:line
2015-06-20 19:55:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:55:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 51 ] in file:line
2015-06-20 19:55:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 19:56:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 51 ] in file:line
2015-06-20 19:56:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:12:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2015-06-20 20:12:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:12:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 4 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:12:49 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:14:12 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 4 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:14:12 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:18:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 4 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:18:28 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 20:19:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:19:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:20:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 8 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:20:23 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:21:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:21:16 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:22:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:22:10 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:22:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:22:24 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:25:08 --- CRITICAL: View_Exception [ 0 ]: The requested view style could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 20:25:08 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('style')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('style', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_View::factory('style')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 20:25:43 --- CRITICAL: View_Exception [ 0 ]: The requested view style could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 20:25:43 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('style')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('style', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_View::factory('style')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 20:26:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Style' not found ~ APPPATH\classes\Controller\Main.php [ 8 ] in file:line
2015-06-20 20:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:41:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 8 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:41:02 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:41:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 8 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:41:18 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 20:41:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:41:25 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:44:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:44:00 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:46:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:46:12 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:46:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Main.php [ 8 ] in file:line
2015-06-20 20:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:46:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:46:59 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:47:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Кухня'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:47:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 20:47:58 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 20:48:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:51:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:51:23 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:53:16 --- CRITICAL: ErrorException [ 8192 ]: Non-static method Kohana_View::set() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 20:53:16 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(8192, 'Non-static meth...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 20:54:04 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:54:24 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:54:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:54:42 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:58:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:59:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 20:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:59:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:59:24 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 20:59:39 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 20:59:39 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:01:46 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:01:46 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:01:55 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:01:55 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:02:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 21:02:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 21:02:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:02:22 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:02:43 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:02:43 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:7
2015-06-20 21:03:53 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 8 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 21:03:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:8
2015-06-20 21:06:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 21:06:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 21:06:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-06-20 21:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 21:45:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 6 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:45:50 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:47:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\classes\Controller\Main.php [ 6 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:47:21 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:47:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Main.php [ 6 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:47:34 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:6
2015-06-20 21:48:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:48:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:48:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Main.php [ 9 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:9
2015-06-20 21:48:52 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php:9
2015-06-20 21:49:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:49:07 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:50:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:50:01 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:51:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:51:13 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:53:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:53:06 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:56:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 11 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:56:52 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:11
2015-06-20 21:59:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 4 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 21:59:32 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 22:00:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 4 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 22:00:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:4
2015-06-20 22:01:30 --- CRITICAL: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:01:30 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('test')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('test', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(6): Kohana_View::factory('test')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:01:49 --- CRITICAL: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:01:49 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('test')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('test', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_View::factory('test')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:01:55 --- CRITICAL: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:01:55 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('test')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('test', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(7): Kohana_View::factory('test')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-20 22:12:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\views\main.php [ 88 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:88
2015-06-20 22:12:03 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 88, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:88
2015-06-20 22:13:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'URL' (T_STRING) ~ APPPATH\views\main.php [ 38 ] in file:line
2015-06-20 22:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 22:39:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:39:07 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:39:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:39:34 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:41:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:41:47 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:46:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 22:46:57 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 23:03:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\news.php [ 27 ] in file:line
2015-06-20 23:03:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:03:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\news.php [ 27 ] in file:line
2015-06-20 23:03:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:03:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\news.php [ 26 ] in file:line
2015-06-20 23:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:09:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$articles' (T_VARIABLE) ~ APPPATH\classes\Controller\Main.php [ 8 ] in file:line
2015-06-20 23:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:09:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Article' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-06-20 23:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:09:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'funcrion' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\news.php [ 5 ] in file:line
2015-06-20 23:09:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:09:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_News::$_tableArticles ~ APPPATH\classes\Model\news.php [ 6 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php:6
2015-06-20 23:09:42 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(6): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php:6
2015-06-20 23:10:00 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:10:00 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:16:19 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:16:19 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:18:04 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:18:04 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:28:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2015-06-20 23:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 23:34:11 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:34:11 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\MySQL.php:171
2015-06-20 23:37:28 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\PDO.php:136
2015-06-20 23:37:28 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\PDO.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM n...', false, Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\PDO.php:136
2015-06-20 23:48:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: texts ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 23:48:03 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 23:48:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: texts ~ APPPATH\views\news.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 23:48:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:10
2015-06-20 23:56:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: newss ~ APPPATH\views\news.php [ 1 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1
2015-06-20 23:56:39 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1
2015-06-20 23:56:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: newss ~ APPPATH\views\news.php [ 1 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1
2015-06-20 23:56:45 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1
2015-06-20 23:57:10 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\news.php [ 1 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1
2015-06-20 23:57:10 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(1): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:1