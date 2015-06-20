<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'main';
 
    public function before()
    {
        parent::before();
        View::set_global('title','World Kitchens');
        $this->template->content = '';

    }
 
} // End Common