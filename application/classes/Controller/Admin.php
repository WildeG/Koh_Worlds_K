<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Admin extends Controller_Common {

    public function action_checkrecipes(){ //список непроверенных рецептов
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];} 
        $count = Model::factory('Showmodel')->get_count_reccheck(); 
        if ($count<=10){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'admin/checkrecipes?',10);
        }
        $recipes = Model::factory('Showmodel')->get_recipes_check($page);
        //echo Debug::vars($recipes);
        $content = View::factory('admin/checkrecipes')->bind('recipes', $recipes)->bind('pages',$pages);
        $this->template->title = 'Рецепты';  
        $this->template->content = $content;
    }
       public function action_checkadvices(){ //список непроверенных советов
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];} 
        $count = Model::factory('Showmodel')->get_count_advcheck(); 
        if ($count<=25){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'admin/checkadvices?',25);
        }
        $adv = Model::factory('Showmodel')->get_advs_check($page);
        //echo Debug::vars($recipes);
        for($u=0; ;$u++){ if (isset($adv[$u])){ 
            $date[$u]=$this->date($adv[$u]['date_added']);
        }
        else {break;} }
        $content = View::factory('admin/checkadvices')->bind('adv', $adv)->bind('pages',$pages)->bind('date',$date);
        $this->template->title = 'Советы';  
        $this->template->content = $content;
    }
    public function action_checkrecipe(){ //отдельный рецепт
        $this->template->styles[] = 'showrecipe';
        $this->template->styles[] = 'shownews';
        $this->template->styles[] = 'advice';
        $content = View::factory('admin/checkrecipe')->bind('recipes',$recipes)->bind('comps',$comps)->bind('date',$date);
        $recipes = Model::factory('Showmodel')->get_recipe_check($_GET['id']);
        $comps = Model::factory('Showmodel')->get_comps($_GET['id']);
        $this->template->title = $recipes[0]['title'];
        if (isset($recipes[0])){ 
            $date[0]=$this->date($recipes[0]['date_added']);
        }
        if ($post = $this->request->post()){
        	 Model::factory('Addmodel')->rec_check($_GET['id'],$_POST['check'],'recipe');
        }
        $this->template->content = $content;
    }
    protected function pages($page,$count,$type,$units){ //страницы для всего
        $res=NULL;
        if ($page!=0){
            $res='<a href="'.URL::base().$type.'page=0"> << </a><a href="'.URL::base().$type.'page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="'.URL::base().$type.'page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/$units)){
            $res.='<a href="'.URL::base().$type.'page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        if (intval($count/$units)>=$count/$units){
            $a=intval($count/$units)-1;
        }
        else {$a=intval($count/$units);}
        if ($page+1<$count/$units){
            $res.= '<a href="'.URL::base().$type.'page='.($page+1).'"> > </a><a href="'.URL::base().$type.'page='.$a.'"> >> </a>';
        }
        return $res;
    	}	
    protected function date($data){
        if (substr($data,0,10)!==date("Y-m-d")) {
            if (date('Y-m-d', strtotime('yesterday'))==substr($data,0,10)) {
                $res = "Вчера в ".substr(substr($data,11,8),0,5);
            } else {
                $date = explode(".", date("d.m.Y",strtotime($data)));
                switch ($date[1]){
                    case 1: $m='января'; break;
                    case 2: $m='февраля'; break;
                    case 3: $m='марта'; break;
                    case 4: $m='апреля'; break;
                    case 5: $m='мая'; break;
                    case 6: $m='июня'; break;
                    case 7: $m='июля'; break;
                    case 8: $m='августа'; break;
                    case 9: $m='сентября'; break;
                    case 10: $m='октября'; break;
                    case 11: $m='ноября'; break;
                    case 12: $m='декабря'; break;
                }
                $res = $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2].date(' в G:i', strtotime($data));
            }
        } else {
            $res = "Сегодня в ".substr(substr($data,11,8),0,5);
        }
    return $res;
    }
}
