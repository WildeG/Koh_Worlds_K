<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
    public function action_user()
    {
        $this->template->title = 'Страница пользователя';
 		$content = View::factory('user/user')->bind('recipes', $recipes)->bind('user', $user)->bind('want_prep', $want_prep)->bind('my', $my)->bind('subs', $subs)->bind('roles', $roles)->bind('alrdprep', $alrd_prep);
 		$recipes=Model::factory('Showmodel')->get_count_recipes($_GET['id']);	
 		$user=Model::factory('Showmodel')->get_user($_GET['id']);	
 		$roles=Model::factory('User')->get_roles_array();
 		$want_prep=Model::factory('Showmodel')->get_count_prep($_GET['id']);
        $alrd_prep=Model::factory('Showmodel')->get_count_alrd_prep($_GET['id']);
 		$subs=Model::factory('Showmodel')->get_count_subs($_GET['id']);
 		$this->template->content = $content;
 		if ($_SESSION['id']==$_GET['id']) {
				$my="<a href='".URL::base()."user/recipes?id=".$_SESSION['id']."&page=0'>Мои рецепты</a></li> | <a href='".URL::base()."favorite/advice'>Мои советы</a></li> | <a href='".URL::base()."favorite/prepared'>Приготовленные</a></li>";
			} else {
				$my="<a href='".URL::base()."user/recipes?id=".$_GET['id']."&page=0'>Рецепты ".$user[0]['name'].' '.$user[0]['family']."</a> | Советы ".$user[0]['name'].' '.$user[0]['family']." | ".$user[0]['name'].' '.$user[0]['family']."приготовил";
				} 
    }
    /********************* Избранное *************************/
    public function action_prepared()
    {
        $content = View::factory('user/prepared');      
        $this->template->content = $content;
    }
    public function action_wantcook()
    {
        $this->template->title = 'Хочу приготовить';
        $content = View::factory('user/wantcook')->bind('recipes',$recipes)->bind('pages', $pages);
        if (!isset($_GET['page'])){
            $page=0;
        }
        else {$page=$_GET['page'];}
        $count=Model::factory('Showmodel')->get_count_prep($_SESSION['id']);    
        $recipes=Model::factory('Showmodel')->fav_rec();  
        if ($count<=5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($page,$count,'user/wantcook?');
        }    
        $this->template->content = $content;
    }
    public function action_favadvice(){

    }
    public function action_mysubs(){
        
    }
    /***********/
    public function action_recipes(){ //рецепты пользователя
        $this->template->title = 'Рецепты пользователя';
        $content = View::factory('user/recipes')->bind('recipes', $recipes)->bind('title', $title)->bind('pages', $pages);
        $recipes=Model::factory('Showmodel')->get_recipes_user($_GET['id'],$_GET['page']);
        if ($_GET['id']==$_SESSION['id']){
            $title='Мои рецепты';
        }
        else {$title='Рецепты пользователя '.$recipes[0]['family'].' '.$recipes[0]['name'];}
        $count=Model::factory('Showmodel')->get_count_recipes($_GET['id']);
        if ($count<5){
            $pages=NULL;
        }
        else{
            $pages=$this->pages($_GET['page'],$count,'user/recipes?id='.$_GET['id'].'&');
        }   
        //echo Debug::vars($count);
        $this->template->content = $content;
    }
    protected function pages($page,$count,$type){ //страницы для всего
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
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="'.URL::base().$type.'page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        if (intval($count/5)>=$count/5){
            $a=intval($count/5)-1;
        }
        else {$a=intval($count/5);}
        if ($page+1<$count/5){
            $res.= '<a href="'.URL::base().$type.'page='.($page+1).'"> > </a><a href="'.URL::base().$type.'page='.$a.'"> >> </a>';
        }
        return $res;
    }
} 