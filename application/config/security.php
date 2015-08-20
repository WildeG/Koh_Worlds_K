<?php defined('SYSPATH') or die('No direct script access.');


return array(
    'Controller_Main' => array(
        'all_actions' => array('public','admin','login', 'moder'),
    ), 
    'Controller_Add'   => array(
        'recipe'       => array('admin', 'login', 'moder'),
        'news'         => array('admin', 'moder'),
        'addnews'      => array('admin', 'moder'),
        'addrecipe'    => array('admin', 'login', 'moder'),
        'addcomponent' => array('admin','login', 'moder'),
        'add_favor'    => array('admin', 'login', 'moder'),
        'add_like'     => array('admin', 'login', 'moder'),
        'nrating'      => array('admin','login', 'moder'),
    ),

    'Controller_Auth' => array(
        'registration' => array('public'),
        'login'        => array('public'),
        'logout'       => array('login', 'admin', 'moder'),
    ),
    'Controller_Favorite' => array(
        'prepared' => array('login', 'admin', 'moder'),
        'wantcook' => array('login', 'admin', 'moder'),
        'myrecipes'=> array('login', 'admin', 'moder'),
    ),
    'Controller_Show' => array(
        'all_actions' => array('public','admin','login', 'moder'),
    ),
    'Controller_User' => array(
        'all_actions'=> array('login', 'admin', 'moder'),
    ),
    'Controller_Help' => array(
        'all_actions' => array('login', 'admin', 'public', 'moder'),
    ),
    'Controller_Admin' => array(
        'all_actions'  => array('admin', 'moder'),
    ),
);