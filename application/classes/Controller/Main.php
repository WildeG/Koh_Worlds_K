<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Main extends Controller_Common {
    public function action_main()
    {
 		$content = View::factory('home')->bind('newss', $newss)->bind('recipes', $recipes);		
 		$newss = Model::factory('Showmodel')->get_five();
        $recipes = Model::factory('Showmodel')->get_fiver();
 		$this->template->content = $content;
    }
    public function action_newslist(){
    	$content=View::factory('newslist')->bind('newss',$newss)->bind('pages', $pages);
    	$newss=Model::factory('Showmodel')->get_all($_GET['page']);
        $count=Model::factory('Showmodel')->get_count_news();
        if ($count<5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($_GET['page'],$count);
    	}
        $this->template->content=$content;
    }
    public function action_shownews(){
        $content = View::factory('shownews')->bind('newss',$newss);
        $newss = Model::factory('Showmodel')->get_news($_GET['id']);
        $this->template->content = $content;
    }
    public function action_403(){
        $content = View::factory('e403');
        $this->template->content = $content;
    }
    protected function pages($page,$count){
        $res=NULL;
        if ($page!=0){
            $res='<a href="newslist?page=0"> << </a><a href="newslist?page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="newslist?page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="newslist?page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        if ($page+1<$count/5){
            $res.= '<a href="newslist?page='.($page+1).'"> > </a><a href="newslist?page='.intval($count/5).'"> >> </a>';
        }
        return $res;
    }
}