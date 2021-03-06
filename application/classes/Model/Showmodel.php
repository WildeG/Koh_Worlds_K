<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Showmodel extends Model_Database{
		public function get_recipes($data,$page){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'id', 'likes', 'portions', 'time','prepare')->from('recipe')->where('kitchens','=',$data)->and_where('check','=',1)->join('users')->on('id_autors','=','id')->order_by('id_recipe', 'desc')->offset($page*10)->limit(10);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_recipes_check($page){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'id','portions', 'time','prepare')->from('recipe')->where('check','=',0)->join('users')->on('id_autors','=','id')->order_by('id_recipe', 'desc')->offset($page*10)->limit(10);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_count_reccheck(){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('recipe')->where('check', '=', 0);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_recipes_user($data,$page){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'id', 'likes', 'portions', 'time','prepare')->from('recipe')->where('id_autors','=',$data)->join('users')->on('id_autors','=','id')->order_by('id_recipe', 'desc')->offset($page*10)->limit(10);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_count_kitchens($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('recipe')->where('kitchens', '=', $data)->and_where('check','=',1);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_news(){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('news');
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_subs($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('subscribers')->where('id_user', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_recipes($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('recipe')->where('id_autors', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_alrd_prep($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('alrd_prep')->where('id_user', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_prep($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('favor')->where('id_user', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_advs(){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('advice')->where('check','=',1);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_count_advcheck(){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('advice')->where('check','=',0);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_recipe_check($data){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'kitchens', 'title_k', 'portions', 'time', 'users.id')->from('recipe')->where('id_recipe','=',$data)->and_where('check','=',0)->join('users')->on('id_autors','=','id')->join('kitchens')->on('kitchens.id', '=', 'recipe.kitchens');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_recipe($data){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'kitchens', 'title_k', 'likes', 'want_prepare', 'portions', 'time', 'users.id')->from('recipe')->where('id_recipe','=',$data)->and_where('check','=',1)->join('users')->on('id_autors','=','id')->join('kitchens')->on('kitchens.id', '=', 'recipe.kitchens');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_comps($data){
			$sql = DB::select()->from('component')->where('id_recipe','=',$data)->join('name_component')->on('id_component','=','id');
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_kitchens(){
			$sql = DB::select()->from('kitchens');			
			$res = $sql->execute();
			return $res;
		}
		public function get_kitchen($data){
			$sql = DB::select()->from('kitchens')->where('id','=',$data);			
			$res = $sql->execute();
			$res=$res->as_array();
			return $res;
		}
		public function get_component(){
			$sql = DB::select()->from('name_component');			
			$res = $sql->execute();
			return $res;
		}
		public function get_all($page){
			$sql = DB::select('name', 'family', 'title', 'texts', 'id_news', 'image', 'date_added', 'id')->from('news')->join('users')->on('id_autors','=','id')->order_by('id_news', 'desc')->offset($page*5)->limit(5);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_advs($page){
			$sql = DB::select('name', 'family', 'advice', 'date_pub', 'id_advice', 'id_autors', 'likes', 'dislikes')->from('advice')->where('date_pub', '<=', date('Y-m-d H:i:s'))->and_where('check', '=', 1)->join('users')->on('id_autors','=','id')->order_by('id_advice', 'desc')->offset($page*25)->limit(25);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_advs_check($page){
			$sql = DB::select('name', 'family', 'advice', 'date_added', 'id_advice', 'id_autors')->from('advice')->where('date_pub', '<=', date('Y-m-d H:i:s'))->and_where('check', '=', 0)->join('users')->on('id_autors','=','id')->order_by('id_advice', 'desc')->offset($page*25)->limit(25);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_five(){
			$sql = DB::select('title',  'id_news', 'date_added')->from('news')->order_by('id_news', 'desc')->limit(5);
			$res=$sql->execute();
			return $res;
		}
		public function get_fiver(){
			$sql = DB::select('title',  'id_recipe', 'date_added')->from('recipe')->order_by('id_recipe', 'desc')->limit(5);
			$res=$sql->execute();
			return $res;
		}
		public function get_news($data){
			$sql = DB::select('name', 'family', 'title', 'texts', 'id_news', 'image', 'date_added','rating')->from('news')->where('id_news','=',$data)->join('users')->on('id_autors','=','id');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_user($data){
			$sql = DB::select()->from('users')->where('id', '=',$data);
			$res=$sql->execute();
			$res=$res->as_array();
			return $res;
		}
		public function fav_rec(){
			$sql=DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added')->from('favor')->where('id_user', '=', $_SESSION['id'])->join('recipe')->on('id_recipe','=','recipe_id')->join('users')->on('id_autors','=','id');
			$res=$sql->execute();
			return $res;		}
		public function get_author($data){
			$sql=DB::select('family', 'name')->from('users')->where('id','=',$data);
			$res=$sql->execute()->as_array();
			return $res;
		}
		public function get_mday($cat){
			$sql=DB::select()->from('menu_day')->join('recipe')->on('recipe.id_recipe', '=','menu_day.id_recipe')->where('class', '=', $cat)->join('kitchens')->on('id', '=', 'kitchens');
			$res=$sql->execute()->as_array();
			return $res;
		}
		public function get_count_comps($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('component')->where('id_recipe', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
	}