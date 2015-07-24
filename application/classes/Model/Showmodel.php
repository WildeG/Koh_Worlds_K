<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Showmodel extends Model_Database{
		public function get_recipes($data,$page){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added')->from('recipe')->where('kitchens','=',$data)->join('users')->on('id_autors','=','id')->order_by('id_recipe', 'desc')->offset($page*5)->limit($page*5+5);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_count_kitchens($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('recipe')->where('kitchens', '=', $data);
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
		public function get_count_prep($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('favor')->where('id_user', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_recipe($data){
			$sql = DB::select('name', 'family', 'title', 'recipe', 'id_recipe', 'image', 'date_added', 'kitchens')->from('recipe')->where('id_recipe','=',$data)->join('users')->on('id_autors','=','id');			
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
			$sql = DB::select('name', 'family', 'title', 'texts', 'id_news', 'image', 'date_added')->from('news')->join('users')->on('id_autors','=','id')->order_by('id_news', 'desc')->offset($page*5)->limit($page*5+5);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_last(){
			$sql = DB::select('name', 'family', 'title', 'texts', 'id_news', 'image', 'date_added')->from('news')->join('users')->on('id_autors', '=', 'id')->order_by('id_news', 'desc')->limit(1);
			$res=$sql->execute();
			return $res;
		}
		public function get_news($data){
			$sql = DB::select('name', 'family', 'title', 'texts', 'id_news', 'image', 'date_added')->from('news')->where('id_news','=',$data)->join('users')->on('id_autors','=','id');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_user($data){
			$sql = DB::select()->from('users')->where('id', '=',$data)->join('roles_users')->on('id', '=', 'user_id');
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