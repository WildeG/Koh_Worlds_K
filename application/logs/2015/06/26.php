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
2015-06-26 02:13:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Common.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:10
2015-06-26 02:13:55 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:10
2015-06-26 02:14:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\main.php [ 94 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:94
2015-06-26 02:14:38 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 94, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:94
2015-06-26 02:14:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: family ~ APPPATH\views\main.php [ 123 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:123
2015-06-26 02:14:54 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(123): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 123, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:123
2015-06-26 02:15:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 184 ] in file:line
2015-06-26 02:15:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:15:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 175 ] in file:line
2015-06-26 02:15:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:17:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 175 ] in file:line
2015-06-26 02:17:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:18:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 175 ] in file:line
2015-06-26 02:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:18:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 175 ] in file:line
2015-06-26 02:18:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:19:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\main.php [ 175 ] in file:line
2015-06-26 02:19:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:28:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\main.php [ 32 ] in file:line
2015-06-26 02:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:28:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 35 ] in file:line
2015-06-26 02:28:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:32:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_user() ~ APPPATH\classes\Controller\Common.php [ 14 ] in file:line
2015-06-26 02:32:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 02:32:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Common.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:15
2015-06-26 02:32:22 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:15
2015-06-26 15:10:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kitchens ~ APPPATH\views\logged.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:10:21 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:15:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kitchens ~ APPPATH\views\logged.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:15:51 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:19:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kitchens ~ APPPATH\views\logged.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:19:24 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:27:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kitchens ~ APPPATH\views\logged.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:27:54 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:28:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kitchens ~ APPPATH\views\logged.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:28:06 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:15
2015-06-26 15:28:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:28:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:29:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:29:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:29:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:29:52 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:30:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:30:08 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:30:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:30:54 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-26 15:52:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Addrecipe.php [ 10 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:10
2015-06-26 15:52:19 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_addrecipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:10
2015-06-26 16:02:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:02:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:02:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:02:29 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:05:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_authors ~ APPPATH\classes\Model\recipe.php [ 14 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:05:22 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:08:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_user() ~ APPPATH\classes\Model\recipe.php [ 14 ] in file:line
2015-06-26 16:08:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 16:09:30 --- CRITICAL: ErrorException [ 8192 ]: Non-static method Kohana_Auth_ORM::get_user() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Model\recipe.php [ 14 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:09:30 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(14): Kohana_Core::error_handler(8192, 'Non-static meth...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:11:43 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Y - assumed 'Y' ~ APPPATH\classes\Model\recipe.php [ 14 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:11:43 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:14
2015-06-26 16:11:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\Model\recipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-26 16:11:58 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-26 16:12:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\Model\recipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-26 16:12:19 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-26 16:13:39 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php on line 15 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 83 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:83
2015-06-26 16:13:39 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(83): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\xampp\\htdocs...', 83, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(15): Kohana_Database_Query_Builder_Insert->values('', '', '2015-06-26', '\xD0\xA0\xD1\x83\xD1\x81\xD1\x81\xD0\xBA\xD0\xB0\xD1\x8F')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:83
2015-06-26 16:15:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 35 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:35
2015-06-26 16:15:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:35
2015-06-26 16:17:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:17:56 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-26 16:18:11 --- CRITICAL: View_Exception [ 0 ]: The requested view success could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-26 16:18:11 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('success')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('success', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(16): Kohana_View::factory('success')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-26 17:02:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:02:21 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:02:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:02:39 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:02:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_recipe ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:02:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:15:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: insert_id ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:15:37 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:20:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: insert_id ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 17:20:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-26 19:13:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Addrecipe.php [ 19 ] in file:line
2015-06-26 19:13:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 19:30:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-26 19:30:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 19:31:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-26 19:31:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-26 19:31:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-26 19:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line