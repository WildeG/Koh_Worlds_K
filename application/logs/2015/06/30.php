<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-30 22:19:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\recipe.php [ 35 ] in file:line
2015-06-30 22:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 23:04:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: recipe ~ APPPATH\views\news.php [ 5 ] in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:5
2015-06-30 23:04:28 --- DEBUG: #0 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\main.php(35): Kohana_View->__toString()
#5 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\websites\Testing\www\Koh_Worlds_K\application\views\news.php:5