<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Recipe extends Controller_Common {
	    public $template = 'main';
    public function action_showrecipes()
    {
 		$content = View::factory('recipes')->bind('recipes', $recipes)->bind('kitchen', $kitchen)->bind('pages', $pages);		
 		$recipes = Model::factory('Showmodel')->get_recipes($_GET['kitchens'],$_GET['page']);
        $count=Model::factory('Showmodel')->get_count_kitchens($_GET['kitchens']);
        $kitchen=Model::factory('Showmodel')->get_kitchen($_GET['kitchens']);
        if ($count<5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($_GET['page'],$count);
        }
 		$this->template->content = $content;
    }
    public function action_showrecipe(){
    	$content = View::factory('showrecipe')->bind('recipes',$recipes)->bind('comps',$comps);
    	$recipes = Model::factory('Showmodel')->get_recipe($_GET['id']);
    	$comps = Model::factory('Showmodel')->get_comps($_GET['id']);
    	$this->template->content = $content;
    }
    
    protected function pages($page,$count){
        $res=NULL;
        if ($page!=0){
            $res='<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page=0"> << </a><a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        //while ($i<3){
       //    if ($i+$page<$count/5){
       //        if ($i+$page!=$page && $i+$page>=0){
       //            $res.= '<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.($page+$i).'">'.(($page+$i)+1).'</a>';
       //        }
       //        elseif($i+$page=$page && $i+$page>=0){$res.=($page+1).' ';}
       //    }
       //    $i++;  
       //} сохранено для истории, не трогать
        if ($page+1<$count/5){
            $res.= '<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.($page+1).'"> > </a><a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.intval($count/5).'"> >> </a>';
        }
        return $res;
    }
} 