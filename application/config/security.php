<?php defined('SYSPATH') or die('No direct script access.');


return array(
    'Controller_Main' => array(
        'all_actions' => array('public','admin','login'),
    ), 
    'Controller_Add'   => array(
        'recipe'       => array('admin', 'login'),
        'news'         => array('admin'),
        'addnews'      => array('admin'),
        'addrecipe'    => array('admin', 'login'),
        'addcomponent' => array('admin','login'),
        'add_favor'    => array('admin', 'login'),
    ),

    'Controller_Auth' => array(
        'registration' => array('public'),
        'login'        => array('public'),
        'logout'       => array('login', 'admin'),
    ),
    'Controller_Favorite' => array(
        'prepared' => array('login', 'admin'),
        'wantcook' => array('login', 'admin'),
        'myrecipes'=> array('login', 'admin'),
    ),
    'Controller_Show' => array(
        'all_actions' => array('public','admin','login'),
    ),
    'Controller_User' => array(
        'all_actions'=> array('login', 'admin'),
    ),
    'Controller_Help' => array(
        'all_actions' => array('login', 'admin', 'public'),
    ),
);