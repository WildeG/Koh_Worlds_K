<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-26 00:56:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\main.php [ 43 ] in file:line
2015-06-26 00:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 00:57:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\main.php [ 88 ] in file:line
2015-06-26 00:57:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 00:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 00:57:20 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:12 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:29 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:31 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:32 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:48 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:49 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:07:49 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:08:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 42 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:08:15 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\views\main.php:42
2015-06-26 01:14:43 --- CRITICAL: View_Exception [ 0 ]: The requested view /login could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-26 01:14:43 --- DEBUG: #0 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/login')
#1 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('/login', NULL)
#2 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(15): Kohana_View::factory('/login')
#3 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\Websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145