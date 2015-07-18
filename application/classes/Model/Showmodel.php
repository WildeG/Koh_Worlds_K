<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Showmodel extends Model_Database{
		public function get_recipes($data,$page){
			$sql = DB::select()->from('recipe')->where('kitchens','=',$data)->join('users')->on('id_autors','=','id')->offset($page*5)->limit($page*5+5);			
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
		public function get_count_recipes($data){
			$sql = DB::select(array(DB::expr('COUNT(*)'), 'test'))->from('recipe')->where('id_autors', '=', $data);
			$res = $sql->execute()->get('test',0);
			return $res;
		}
		public function get_recipe($data){
			$sql = DB::select()->from('recipe')->where('id_recipe','=',$data)->join('users')->on('id_autors','=','id');			
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
			$sql = DB::select()->from('news')->join('users')->on('id_autors','=','id')->order_by('id_news', 'desc')->offset($page*5)->limit($page*5+5);			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_last(){
			$sql = DB::select()->from('news')->join('users')->on('id_autors', '=', 'id')->order_by('id_news', 'desc')->limit(1);
			$res=$sql->execute();
			return $res;
		}
		public function get_news($data){
			$sql = DB::select()->from('news')->where('id_news','=',$data)->join('users')->on('id_autors','=','id');			
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
	}