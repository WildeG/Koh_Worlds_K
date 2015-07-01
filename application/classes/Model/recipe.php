<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Recipe extends Model_Database{
		public function get_kitchens(){
			$sql = DB::select()->from('kitchens');			
			$res = $sql->execute();
			return $res;
		}
		public function get_component(){
			$sql = DB::select()->from('name_component');			
			$res = $sql->execute();
			return $res;
		}
		public function add_recipe($data){
			if (!isset($data['image'])){
				$data['image']='default_image';
			}
			$data['date_added']=date('Y-m-d');
			$sql = DB::insert('recipe', array('title',  'recipe',  'date_added', 'kitchens','image','id_autors' ))->values(array($data['title'],  $data['recipe'], $data['date_added'], $data['kitchens'], $data['image'], $_SESSION['id']));
			$res = $sql->execute();
			return $res;
		}
		public function add_component($components,$id_recipe,$quantity){
			$sql=DB::insert('component', array('id_recipe', 'id_component', 'quantity'))->values(array($id_recipe, $components,$quantity));
			$res = $sql->execute();
			return $res;
		}
		public function get_recipes($data){
			$sql = DB::select()->from('recipe')->where('kitchens','=',$data)->join('users')->on('id_autors','=','id');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
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
}		


