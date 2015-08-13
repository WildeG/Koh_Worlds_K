<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Show extends Controller_Common {   

    public function action_recipes() //рецепты кухни
    {
        $this->template->styles[] = 'show';
        $this->template->title = 'Рецепты';
        $content = View::factory('show/recipes')->bind('recipes', $recipes)->bind('kitchen', $kitchen)->bind('pages', $pages)->bind('date', $date); 
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];}     
        $recipes = Model::factory('Showmodel')->get_recipes($_GET['kitchens'],$page);
        $count=Model::factory('Showmodel')->get_count_kitchens($_GET['kitchens']);
        $kitchen=Model::factory('Showmodel')->get_kitchen($_GET['kitchens']);
        if ($count<=10){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'show/recipes?kitchens='.$_GET['kitchens'].'&',10);
        }
        for($u=0; ;$u++){ if (isset($recipes[$u])){ 
            $date[$u]=$this->date($recipes[$u]['date_added']);
        }
        else {break;} }
        $this->template->content = $content;
    }
    public function action_recipe(){ //отдельный рецепт
        $this->template->styles[] = 'showrecipe';
        $this->template->styles[] = 'shownews';
        $this->template->styles[] = 'advice';
        $content = View::factory('show/recipe')->bind('recipes',$recipes)->bind('comps',$comps)->bind('fav', $fav)->bind('text', $text)->bind('date',$date);
        $recipes = Model::factory('Showmodel')->get_recipe($_GET['id']);
        $comps = Model::factory('Showmodel')->get_comps($_GET['id']);
        //echo Debug::vars($valid);
        //if (Auth::instance()->logged_in()) { 
        //    $valid = Model::factory('Addmodel')->valid_favor($_GET['id'],'likes_recipe');
        //    if ($valid==NULL){
        //        $fav = '<a id="like">Мне нравится</a> ';
        //        $text['like'] = '"+"';
        //    }
        //    elseif ($valid!=NULL){
        //        $fav .= '<a id="like">Больше не нравится</a>';
        //        $text['like'] = '"-"';
        //    }
        //    $valid = Model::factory('Addmodel')->valid_favor($_GET['id'],'favor');
        //    if ($valid==NULL) {
        //        $fav .= '<a id="want_prepare">Добавить в избранное</a>';
        //        $text['fav'] = '"Добавлено"';
        //    } 
        //    elseif ($valid!=NULL){
        //        $fav .= '<a id="want_prepare">Удалить из избранного</a>';
        //        $text['fav'] = '"Удалено"';
        //    }
        //    $fav .= ' Приготовил<p>';
        //}
        $this->template->title = $recipes[0]['title'];
        if (isset($recipes[0])){ 
            $date[0]=$this->date($recipes[0]['date_added']);
        }
        //echo Debug::vars($this->template->styles);
        $this->template->content = $content;
    }
    public function action_menu_day() //меню дня
    {
        $this->template->styles[] = 'mday';
        $this->template->title = 'Меню дня';
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
        $this->template->styles[] = 'news';
        $this->template->title = 'Новости';
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];}
        $content=View::factory('show/feed')->bind('newss',$newss)->bind('pages', $pages)->bind('date', $date);
        $newss=Model::factory('Showmodel')->get_all($page);
        $count=Model::factory('Showmodel')->get_count_news();
        if ($count<=5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'show/feed?',5);
        }
        for($u=0; ;$u++){ if (isset($newss[$u])){ 
            $date[$u]=$this->date($newss[$u]['date_added']);
        }
        else {break;} }
        $this->template->content=$content;
    }
    public function action_news(){ //показ отдельной новости
        $this->template->styles[] = 'shownews';
        $content = View::factory('show/news')->bind('newss',$newss)->bind('date',$date)->bind('rtng', $fav);
        $newss = Model::factory('Showmodel')->get_news($_GET['id']);
        $this->template->title = $newss[0]['title'];
        $date[0]=$this->date($newss[0]['date_added']);
        if (Auth::instance()->logged_in()){
        $fav =  '<div class="nw_estimate">
                <img id="like" class="nw_button_image" title="Интересно" src="'.URL::base().'public/image/system/plus.png"><a>'.$newss[0]['rating'].'</a><img id="dislike" class="nw_button_image" title="Не интересно" src="'.URL::base().'public/image/system/minus.png">
                </div>';
        }
        //echo Debug::vars($this->template->styles);
        $this->template->content = $content;
    }
    public function action_advices(){ //показ списка советов
        $this->template->title = 'Советы';
        $this->template->styles[] = 'advice';
        $content = View::factory('show/advices')->bind('adv', $adv)->bind('pages', $pages)->bind('date', $date);
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];}
        $count = Model::factory('Showmodel')->get_count_advs();
        $adv = Model::factory('Showmodel')->get_advs($page);
        if ($count<=25){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'show/advices?',25);
        }
        for($u=0; ;$u++){ if (isset($adv[$u])){ 
            $date[$u]=$this->date($adv[$u]['date_pub']);
        }
        else {break;} }
        //echo Debug::vars($this->template->styles);
        $this->template->content = $content;
    }
    public function action_advice(){ //показ отдельного совета
        $content = View::factory('show/advice');
        $this->template->title = 'Совет';
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