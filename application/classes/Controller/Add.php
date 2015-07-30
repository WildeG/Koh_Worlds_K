<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Add extends Controller_Common {


    public function action_news()
    {
 		$content = View::factory('add/news');
 		$this->template->styles=array('addnews','style', 'owl.carousel', 'homepages');
 		$this->template->content = $content;
    }
    public function action_recipe()
    {
        $content = View::factory('add/recipe')->bind('kitchens', $kitchens)->bind('components', $components);
        $kitchens=Model::factory('Showmodel')->get_kitchens();
        $components=Model::factory('Showmodel')->get_component();
        $this->template->styles=array('addrecipe','style', 'owl.carousel', 'homepages');
        $this->template->content = $content;
    }

    public function action_addnews(){
        if (isset($_FILES['image'])){
            $image=$this->_save_image($_FILES['image'], 'news');
        }
        if (!$image){
            $content=View::factory('error');
        }
        if (!(empty($_POST['title']) || empty($_POST['text']))){
    	   $add=Model::factory('Addmodel')->add_news($_POST, $image);
    	   if ($add!=false){
    	   	$content=View::factory('success');
    	   }
    	   else{
    	   	$content=View::factory('error');
    	   }
        }
        else {$content=View::factory('error');}
 		$this->template->content = $content;    	
    }
    public function action_addrecipe(){
        if (isset($_FILES['image'])){
            $image=$this->_save_image($_FILES['image'], 'recipe');
        }
        if (!$image){
            $content=View::factory('error');
        }
        if (!(empty($_POST['title']) || empty($_POST['recipe']) || empty($_POST['parts0']))){
            $add=Model::factory('Addmodel')->add_recipe($_POST, $image);
            for($count=0; ;$count++){
                if (isset($_POST['parts'.$count])){
                $addcomp=Model::factory('Addmodel')->add_component($_POST['parts'.$count], $add['0'], $_POST['quantity'.$count]);
                }   
                else {break;}
            }
            if ($add!=false){
                $content=View::factory('success')->bind('add', $add);
            }
            else{
                $content=View::factory('error');
            }
        }
        else{
                $content=View::factory('error');
            }
        $this->template->content = $content;        
    }
    public function action_addcomponent(){
        for($count=0; ;$count++){
            if (isset($_POST['name_comp'.$count])){
            $data['name_comp']=$_POST['name_comp'.$count];
            $data['calories']=$_POST['calories'.$count];
            $data['price']=$_POST['price'.$count];
            $data['type_cal']=$_POST['type_cal'.$count];
            $data['type_price']=$_POST['type_price'.$count];
            $addcomp=Model::factory('Addmodel')->add_comps($data);
             } 
            else {break;}
        }
        if ($addcomp!=false){
            $content=View::factory('success');
            $this->response->body($content);
        }
        else{
            $content=View::factory('error');
            $this->template->content = $content; 
        }
    }
    protected function _save_image($image,$rn)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'public/image/uploads/'.$rn;
        $filename = strtolower(Text::random('alnum', 20)).'.jpg';
        
        if ($file = Upload::save($image, $filename, $directory))
        {
            // Delete the temporary file
            return $filename;
            unlink($file);
        }
 
        return FALSE;
    }
    public function action_add_favor(){
        $favor=Model::factory('Addmodel')->add_favor('favor');
        if ($favor!=FALSE){
        $content=View::factory('success');}
        else $content = View::factory('error');
        $this->template->content = $content;
    }
    public function action_add_like(){
        $favor=Model::factory('Addmodel')->add_favor('likes_recipe');
        if ($favor!=FALSE){
        $content=View::factory('success');}
        else $content = View::factory('error');
        $this->template->content = $content;
    }
} // End Add