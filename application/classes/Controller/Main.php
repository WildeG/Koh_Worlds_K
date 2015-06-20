<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
    public function action_main()
    {
 		$content = View::factory('/main');
 		$this->template->content = $content;
 		$this->template->styles = array('style', 'owl.carousel', 'homepages');
        $this->template->scripts = array('owl.carousel','jquery-1.9.1.min','jquery.waterwheelCarousel.min');
    }
 
} // End Welcome