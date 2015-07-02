<?php defined('SYSPATH') or die('No direct script access.');
return array(
    'username' => array(
        'not_empty' => 'Вы должны ввести логин.',
        'min_length' => 'Минимальная длина логина - 4 символа.',
        'max_length' => 'Максимальная длина логина - 32 символа.',
        'unique' => 'Этот логин уже занят.',
    ),
    'password' => array(
        'not_empty' => 'Вы должны задать пароль.',
        'min_length' => 'Пароль должен быть не короче 6 символов.',
        'max_length' => 'Пароль должен быть не длиннее 32 символов.',
    ),
    'name' => array(
    	'not_empty' => 'Вы должны ввести имя.',
        'max_length' => 'Максимальная длина имени - 32 символа.',),
    'family' => array(
    	'not_empty' => 'Вы должны ввести фамилию.',
    	'max_length' => 'Максимальная длина фамилии - 32 символа.',),
); ?>