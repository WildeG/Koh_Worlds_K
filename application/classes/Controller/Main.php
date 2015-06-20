<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
	    public $template = 'main';
    public function action_main()
    {
 		$content = View::factory('news');
 		$content->title ='Kitchen';
 		$this->template->content = $content;
 		$this->template->styles = array('style', 'owl.carousel', 'homepages');
        $this->template->scripts = array('jquery-1.9.1.min','jquery.waterwheelCarousel.min');
    }
 
} // End Welcome