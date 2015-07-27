<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_User extends Controller_Common {
	    public $template = 'main';
    public function action_user()
    {
 		$content = View::factory('User')->bind('recipes', $recipes)->bind('user', $user)->bind('want_prep', $want_prep)->bind('my', $my)->bind('subs', $subs)->bind('roles', $roles);
 		$recipes=Model::factory('Showmodel')->get_count_recipes($_GET['id']);	
 		$user=Model::factory('Showmodel')->get_user($_GET['id']);	
 		$roles=Model::factory('User')->get_roles_array();
 		$want_prep=Model::factory('Showmodel')->get_count_prep($_GET['id']);
 		$subs=Model::factory('Showmodel')->get_count_subs($_GET['id']);
 		$this->template->content = $content;
 		if ($_SESSION['id']==$_GET['id']) {
				$my="<a href='".URL::base()."userrecipes?id=".$_SESSION['id']."&page=0'>Мои рецепты</a></li> | <a href='".URL::base()."favorite/advice'>Мои советы</a></li> | <a href='".URL::base()."favorite/prepared'>Приготовленные</a></li>";
			} else {
				$my="<a href='".URL::base()."userrecipes?id=".$_GET['id']."&page=0'>Рецепты ".$user[0]['name'].' '.$user[0]['family']."</a> | Советы ".$user[0]['name'].' '.$user[0]['family']." | ".$user[0]['name'].' '.$user[0]['family']."приготовил";
				} 
    }
    public function action_userrecipes(){
    	$content = View::factory('userrecipes')->bind('recipes', $recipes)->bind('title', $title)->bind('pages', $pages);
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
            $pages=$this->pages($_GET['page'],$count,$_GET['id']);
        }	
        $this->template->content = $content;
    }
    protected function pages($page,$count,$id){
        $res=NULL;
        if ($page!=0){
            $res='<a href="userrecipes?id='.$id.'&page=0"> << </a><a href="userrecipes?id='.$id.'&page='.($page-1).'"> < </a>';
        }
        $i=-2;
        while ($i<$page){
            if (($page+$i>=0) && ($i+$page<$page)){
                $res.='<a href="userrecipes?id='.$id.'&page='.($page+$i).'">'.(($page+$i)+1).'</a>';
            }
            $i++;
        }
        $res.=($page+1).' ';
        $i=0;
        while (($i<2) && ($i+$page+1<$count/5)){
            $res.='<a href="userrecipes?id='.$id.'&page='.($page+$i+1).'">'.(($page+$i)+2).'</a>';
            $i++;
        }
        if ($page+1<$count/5){
            $res.= '<a href="userrecipes?id='.$id.'&page='.($page+1).'"> > </a><a href="userrecipes?id='.$id.'&page='.intval($count/5).'"> >> </a>';
        }
        return $res;
    }
} 