<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-27 14:32:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php:7
2015-06-27 14:32:41 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
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
2015-06-27 14:32:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:32:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:35:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:36:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:37:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:37:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:37:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:38:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$component' (T_VARIABLE) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:38:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:38:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$component' (T_VARIABLE) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 14:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 15:04:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 15:04:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 15:04:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 40 ] in file:line
2015-06-27 15:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 15:05:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comp ~ APPPATH\views\addrecipe.php [ 40 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\addrecipe.php:40
2015-06-27 15:05:54 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\addrecipe.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 40, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\addrecipe.php:40
2015-06-27 15:08:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\views\addrecipe.php [ 41 ] in file:line
2015-06-27 15:08:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 15:11:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\addrecipe.php [ 41 ] in file:line
2015-06-27 15:11:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 15:20:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parts ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 15:20:18 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 15:21:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parts ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 15:21:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 15:32:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Controller\Addrecipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 15:32:39 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:15
2015-06-27 16:00:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Addrecipe.php [ 32 ] in file:line
2015-06-27 16:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 16:00:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parts1 ~ APPPATH\classes\Controller\Addrecipe.php [ 16 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:16
2015-06-27 16:00:50 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:16
2015-06-27 16:04:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parts3 ~ APPPATH\classes\Controller\Addrecipe.php [ 16 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:16
2015-06-27 16:04:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:16
2015-06-27 16:05:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: component ~ APPPATH\classes\Controller\Addrecipe.php [ 23 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:23
2015-06-27 16:05:56 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 23, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php:23
2015-06-27 16:13:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\Model\recipe.php [ 15 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-27 16:13:17 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php:15
2015-06-27 16:14:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '!', expecting '(' ~ APPPATH\classes\Model\recipe.php [ 14 ] in file:line
2015-06-27 16:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 16:14:34 --- CRITICAL: Database_Exception [ 1048 ]: [1048] Column 'image' cannot be null ( INSERT INTO `recipe` (`title`, `recipe`, `date_added`, `kitchens`, `image`) VALUES ('Тест Рецепт n2', 'текст тест рецепт 2', '2015-06-27', 'Французская', NULL) ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-27 16:14:34 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\recipe.php(19): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addrecipe.php(14): Model_Recipe->add_recipe(Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addrecipe->action_recipe()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-27 16:38:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:38:12 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:38:34 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:38:48 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:39:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:39:00 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:39:09 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:39:09 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:18 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:34 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:40:45 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addrecipe))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:43:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\Auth.php [ 42 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:42
2015-06-27 16:43:13 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:42
2015-06-27 16:43:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\logged.php [ 43 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 16:43:53 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:43
2015-06-27 17:08:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::add_news() ~ APPPATH\classes\Controller\Addnews.php [ 12 ] in file:line
2015-06-27 17:08:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 17:31:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Auth.php [ 37 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:37
2015-06-27 17:31:41 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:37
2015-06-27 17:38:08 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:38:08 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 2, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:38:35 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:38:35 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 2, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:38:43 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:38:43 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 2, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:39:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Auth.php [ 37 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:37
2015-06-27 17:39:59 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Auth.php:37
2015-06-27 17:40:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\logged.php [ 44 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:44
2015-06-27 17:40:20 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\logged.php:44
2015-06-27 17:40:20 --- ERROR: ErrorException [ 8 ]: session_write_close(): Skipping numeric key 0 ~ SYSPATH\classes\Kohana\Session\Native.php [ 91 ] in file:line
2015-06-27 17:40:47 --- ERROR: ErrorException [ 8 ]: session_write_close(): Skipping numeric key 0 ~ SYSPATH\classes\Kohana\Session\Native.php [ 91 ] in file:line
2015-06-27 17:40:50 --- ERROR: ErrorException [ 8 ]: session_write_close(): Skipping numeric key 0 ~ SYSPATH\classes\Kohana\Session\Native.php [ 91 ] in file:line
2015-06-27 17:41:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\success.php [ 2 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:41:15 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 2, Array)
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
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\success.php:2
2015-06-27 17:42:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on array ~ APPPATH\classes\Controller\Auth.php [ 37 ] in file:line
2015-06-27 17:42:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 17:51:27 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'text' in 'field list' ( INSERT INTO `recipe` (`title`, `text`, `date_added`, `image`, `id_autors`) VALUES ('sdfasdfasdf', 'sdfasdfasdfasdf', '2015-06-27', 'default_image', '5') ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-27 17:51:27 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\addnews.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addnews.php(12): Model_Addnews->add_news(Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addnews->action_addnews()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addnews))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-27 17:52:00 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'texts' in 'field list' ( INSERT INTO `recipe` (`title`, `texts`, `date_added`, `image`, `id_autors`) VALUES ('sdfasdfasdf', 'sdfasdfasdfasdf', '2015-06-27', 'default_image', '5') ) ~ MODPATH\database\classes\Kohana\Database\mysqli.php [ 185 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251
2015-06-27 17:52:00 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `re...', false, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Model\addnews.php(9): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\classes\Controller\Addnews.php(12): Model_Addnews->add_news(Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(84): Controller_Addnews->action_addnews()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Addnews))
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\modules\database\classes\Kohana\Database\Query.php:251