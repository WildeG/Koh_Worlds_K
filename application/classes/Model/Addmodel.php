<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Addmodel extends Model_Database{

		public function add_recipe($data, $image){
			if (empty($image)){$image='default_image.jpg';}
			$data['title'] = strip_tags($data['title']);
			$data['title'] = htmlspecialchars($data['title']);
			$data['recipe'] = strip_tags($data['recipe']);
			$data['recipe'] = htmlspecialchars($data['recipe']);
			$data['time'] = strip_tags($data['time']);
			$data['time'] = htmlspecialchars($data['time']);									
			$sql = DB::insert('recipe', array('title',  'recipe',  'kitchens','image','id_autors', 'portions','time' ))->values(array($data['title'],  $data['recipe'],  $data['kitchens'], $image, $_SESSION['id'],$data['portions'],$data['time'].' '.$data['time_type']));
			$res = $sql->execute();
			return $res;
		}
		public function add_component($components,$id_recipe,$quantity){
			$sql=DB::insert('component', array('id_recipe', 'id_component', 'quantity'))->values(array($id_recipe, $components,$quantity));
			$res = $sql->execute();
			return $res;
		}

		public function add_comps($data){
			$data['name_comp'] = strip_tags($data['name_comp']);
			$data['name_comp'] = htmlspecialchars($data['name_comp']);
			$data['calories'] = strip_tags($data['calories']);
			$data['calories'] = htmlspecialchars($data['calories']);
			$data['price'] = strip_tags($data['price']);
			$data['price'] = htmlspecialchars($data['price']);
			$sql = DB::insert('name_component', array('component', 'calories', 'price'))->values(array($data['name_comp'], $data['calories'].' '.$data['type_cal'], $data['price'].' '.$data['type_price']));
			$res=$sql->execute();
			return $res;
		}
		public function add_news($data, $image){
			if (empty($image)){$image='default_image.jpg';}
			$data['title'] = strip_tags($data['title']);
			$data['title'] = htmlspecialchars($data['title']);
			$data['text'] = strip_tags($data['text']);
			$data['text'] = htmlspecialchars($data['text']);
			$sql = DB::insert('news', array('title',  'texts',  'image','id_autors' ))->values(array($data['title'],  $data['text'],   $image, $_SESSION['id']));
			$res = $sql->execute();
			return $res;
		}
		public function add_favor($type){
			$valid = $this->valid_favor($_GET['id'],$type);
			if ($valid!=NULL){
				$sql=DB::delete($type)->where('id_user', '=', $_SESSION['id'])->and_where('recipe_id', '=', $_GET['id']);	}
			else{				
				$sql=DB::insert($type, array('id_user', 'recipe_id'))->values(array($_SESSION['id'], $_GET['id']));
			}
			$res=$sql->execute();
			return $res;
		}
		public function valid_favor($id,$type){
			$valid=DB::select()->from($type)->where('id_user', '=', $_SESSION['id'])->and_where('recipe_id', '=', $id);
			$valid=$valid->execute()->get('id_user', NULL);
			return $valid;
		}
}
		


