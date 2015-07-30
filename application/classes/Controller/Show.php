<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Show extends Controller_Common {   

    public function action_recipes() //рецепты кухни
    {
        $content = View::factory('show/recipes')->bind('recipes', $recipes)->bind('kitchen', $kitchen)->bind('pages', $pages);       
        $recipes = Model::factory('Showmodel')->get_recipes($_GET['kitchens'],$_GET['page']);
        $count=Model::factory('Showmodel')->get_count_kitchens($_GET['kitchens']);
        $kitchen=Model::factory('Showmodel')->get_kitchen($_GET['kitchens']);
        if ($count<5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages_showrec($_GET['page'],$count);
        }
        $this->template->content = $content;
    }
    public function action_recipe(){ //отдельный рецепт
        $content = View::factory('show/recipe')->bind('recipes',$recipes)->bind('comps',$comps)->bind('fav', $fav)->bind('text', $text);
        $recipes = Model::factory('Showmodel')->get_recipe($_GET['id']);
        $comps = Model::factory('Showmodel')->get_comps($_GET['id']);
        //echo Debug::vars($valid);
        if (Auth::instance()->logged_in()) { 
            $valid = Model::factory('Addmodel')->valid_favor($_GET['id'],'likes_recipe');
            if ($valid==NULL){
                $fav = '<a id="like">Мне нравится</a> ';
                $text['like'] = '"+"';
            }
            elseif ($valid!=NULL){
                $fav .= '<a id="like">Больше не нравится</a>';
                $text['like'] = '"-"';
            }
            $valid = Model::factory('Addmodel')->valid_favor($_GET['id'],'favor');
            if ($valid==NULL) {
                $fav .= '<a id="want_prepare">Добавить в избранное</a>';
                $text['fav'] = '"Добавлено"';
            } 
            elseif ($valid!=NULL){
                $fav .= '<a id="want_prepare">Удалить из избранного</a>';
                $text['fav'] = '"Удалено"';
            }
            $fav .= ' Приготовил<p>';
        }

        $this->template->content = $content;
    }
    
    protected function pages_showrec($page,$count){ //страницы для рецептов кухни
        $res=NULL;
        if ($page!=0){
            $res='<a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page=0"> << </a><a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
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
        if (intval($count/5)>=$count/5){
            $a=intval($count/5)-1;
        }
        else {$a=intval($count/5);}
        if ($page+1<$count/5){
            $res.= '<a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page='.($page+1).'"> > </a><a href="'.URL::base().'show/recipes?kitchens='.$_GET['kitchens'].'&page='.$a.'"> >> </a>';
        }
        return $res;
    }
    public function action_menu_day() //меню дня
    {
        $content = View::factory('show/mday')->bind('mday', $mday)->bind('comps', $comps)->bind('category', $cat);
         if (empty($_GET['category'])||(!isset($_GET['category']))) {
            $category = 2;
        } 
        else if (($_GET['category']>3)||(substr_count($_GET['category'],"-"))||(!is_numeric($_GET['category']))) {
            $category =  2;
        }
        else {
            $category = $_GET['category'];
        }
        $mday=Model::factory('Showmodel')->get_mday($category); 
        for ($i=0; ;$i++){
        if ($i>=3){break;}
        $comps[$i]=Model::factory('Showmodel')->get_count_comps($mday[$i]['id_recipe']);
        }   

        
        $this->template->content = $content;
    }
    public function action_feed(){ //список новостей
        $content=View::factory('show/feed')->bind('newss',$newss)->bind('pages', $pages);
        $newss=Model::factory('Showmodel')->get_all($_GET['page']);
        $count=Model::factory('Showmodel')->get_count_news();
        if ($count<5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages_news($_GET['page'],$count);
        }
        $this->template->content=$content;
    }
    public function action_news(){ //показ отдельной новости
        $content = View::factory('show/news')->bind('newss',$newss);
        $newss = Model::factory('Showmodel')->get_news($_GET['id']);
        $this->template->content = $content;
    }
    protected function pages_news($page,$count){ //страницы для новостей
        $res=NULL;
        if ($page!=0){
            $res='<a href="'.URL::base().'feed?page=0"> << </a><a href="'.URL::base().'feed?page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="'.URL::base().'feed?page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="'.URL::base().'feed?page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        if (intval($count/5)>=$count/5){
            $a=intval($count/5)-1;
        }
        else {$a=intval($count/5);}
        if ($page+1<$count/5){
            $res.= '<a href="'.URL::base().'feed?page='.($page+1).'"> > </a><a href="'.URL::base().'feed?page='.$a.'"> >> </a>';
        }
        return $res;
    }
}