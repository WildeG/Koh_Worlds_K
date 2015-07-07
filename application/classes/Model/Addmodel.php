<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Addmodel extends Model_Database{

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

		public function add_comps($data){
			$sql = DB::insert('name_component', array('components', 'calories', 'price'))->values(array($data['name_comp'], $data['calories'], $data['price']));
			$res=$sql->execute();
			return $res;
		}
		public function add_news($data){
			if (!isset($data['image'])){
				$data['image']='default_image';
			}
			$data['date_added']=date('Y-m-d');
			$sql = DB::insert('news', array('title',  'texts',  'date_added', 'image','id_autors' ))->values(array($data['title'],  $data['text'], $data['date_added'],  $data['image'], $_SESSION['id']));
			$res = $sql->execute();
			return $res;
		}
}
		


