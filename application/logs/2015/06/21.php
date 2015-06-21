<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-21 00:00:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\news.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:00:40 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 7, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:01:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:01:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:02:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:02:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:02:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:02:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:02:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:02:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:02:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:05:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:05:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''..'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:05:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:06:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\news.php [ 11 ] in file:line
2015-06-21 00:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:19:53 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::where(), called in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php on line 6 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php [ 30 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2015-06-21 00:19:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(6): Kohana_Database_Query_Builder_Where->where()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2015-06-21 00:20:05 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php on line 6 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php [ 30 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2015-06-21 00:20:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(6): Kohana_Database_Query_Builder_Where->where('1')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2015-06-21 00:26:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_name' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-06-21 00:26:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:27:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::get_name() ~ APPPATH\classes\Controller\Main.php [ 9 ] in file:line
2015-06-21 00:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:32:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$news' (T_VARIABLE) ~ APPPATH\views\news.php [ 3 ] in file:line
2015-06-21 00:32:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:33:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\news.php [ 9 ] in file:line
2015-06-21 00:33:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:33:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\news.php [ 9 ] in file:line
2015-06-21 00:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:33:34 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(2): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:34:28 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(2): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:37:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\news.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:37:22 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 7, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\news.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:38:48 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 7, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:7
2015-06-21 00:39:02 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:43:13 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:48:05 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'id' in 'where clause' ( SELECT * FROM `news` WHERE `id` = 'id_autor' ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 00:48:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(7): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 00:48:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::get_names() ~ APPPATH\classes\Controller\Main.php [ 9 ] in file:line
2015-06-21 00:48:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:50:04 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:50:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('id')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('id')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(8): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-21 00:51:07 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('id')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('id')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(8): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-21 00:51:52 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('id')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('id')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(8): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-21 00:52:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\classes\Model\news.php [ 8 ] in file:line
2015-06-21 00:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 00:52:28 --- CRITICAL: Database_Exception [ 1241 ]: [1241] Operand should contain 1 column(s) ( SELECT * FROM `news` WHERE `id_autors` = ('2', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'Oleg', 'Mikhailov', '2015-02-21') ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 00:52:28 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(10): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 00:53:14 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:53:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(8): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-21 00:55:22 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('id')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('id')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:56:04 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 00:56:27 --- CRITICAL: ErrorException [ 2 ]: mysqli_result::data_seek() expects parameter 1 to be long, string given ~ MODPATH\database\classes\Kohana\Database\mysqli\result.php [ 33 ] in file:line
2015-06-21 00:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_result::...', 'C:\\xampp\\htdocs...', 33, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\mysqli\result.php(33): mysqli_result->data_seek('name')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQLi_Result->seek('name')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(7): Kohana_Database_Result->offsetGet('name')
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_View->__toString()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-06-21 01:01:04 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'id' in 'where clause' ( SELECT * FROM `news` WHERE `id` = 'id_autors' ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:01:04 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:03:22 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'id' in 'where clause' ( SELECT * FROM `news` WHERE `id` = 'id_autors' ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:03:22 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:03:36 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'id' in 'where clause' ( SELECT * FROM `news` WHERE `id` = 'id_autors' ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:03:36 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\news.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Main.php(8): Model_News->get_all()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Main->action_main()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-21 01:07:18 --- CRITICAL: ErrorException [ 1 ]: Object of class Database_MySQLi_Result could not be converted to string ~ APPPATH\classes\Model\news.php [ 14 ] in file:line
2015-06-21 01:07:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 01:07:39 --- CRITICAL: ErrorException [ 1 ]: Object of class Database_MySQLi_Result could not be converted to string ~ APPPATH\classes\Model\news.php [ 14 ] in file:line
2015-06-21 01:07:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 01:09:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::get_names() ~ APPPATH\classes\Controller\Main.php [ 9 ] in file:line
2015-06-21 01:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 01:30:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 5 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:5
2015-06-21 01:30:03 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:5
2015-06-21 01:30:28 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Common.php [ 12 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:12
2015-06-21 01:30:28 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:12
2015-06-21 01:30:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Common.php [ 13 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:13
2015-06-21 01:30:36 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:13
2015-06-21 01:31:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Common.php [ 12 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:12
2015-06-21 01:31:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php:12
2015-06-21 01:58:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 01:58:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 01:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 01:58:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:00:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:00:47 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:02:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Common.php [ 11 ] in file:line
2015-06-21 02:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 02:02:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:02:57 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:03:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:03:08 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:03:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\main.php [ 113 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:03:25 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:113
2015-06-21 02:15:44 --- CRITICAL: View_Exception [ 0 ]: The requested view /loggged could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-21 02:15:44 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/loggged')
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(30): Kohana_View->__construct('/loggged', NULL)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Common.php(11): Kohana_View::factory('/loggged')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php:145
2015-06-21 02:54:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\act.php [ 50 ] in file:line
2015-06-21 02:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 02:55:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\act.php [ 50 ] in file:line
2015-06-21 02:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-21 02:55:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Model\act.php [ 48 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:48
2015-06-21 02:55:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Act.php(8): Model_Act->reg('', '', '', '', '')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Act->action_act()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:48
2015-06-21 02:56:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Model\act.php [ 49 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:49
2015-06-21 02:56:16 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 49, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Act.php(8): Model_Act->reg('', '', '', '', '')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Act->action_act()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:49
2015-06-21 02:56:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 02:56:38 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 02:57:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 02:57:51 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 02:58:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\act.php [ 40 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:40
2015-06-21 02:58:55 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Act.php(8): Model_Act->reg('dfadfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Act->action_act()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php:40
2015-06-21 02:59:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 02:59:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:00:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:00:05 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:01:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:01:31 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:02:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:02:29 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:03:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:03:16 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:04:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 66 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:04:44 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:66
2015-06-21 03:05:17 --- CRITICAL: ErrorException [ 2 ]: mysqli_num_rows() expects parameter 1 to be mysqli_result, object given ~ APPPATH\classes\Model\act.php [ 40 ] in file:line
2015-06-21 03:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_num_rows...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\act.php(40): mysqli_num_rows(Object(Database_MySQLi_Result))
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Act.php(8): Model_Act->reg('1234567', '1234567', '1234567', 'asdfasdf', 'asdfasdf')
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Act->action_act()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Act))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in file:line