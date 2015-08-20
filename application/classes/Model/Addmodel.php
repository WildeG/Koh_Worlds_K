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
		public function rating_news($data){
			$valid = $this->valid_favor($data['id_news']);
			if ($valid!=NULL){		
				$sql=DB::delete('rating_news')->where('id_user', '=', $_SESSION['id'])->and_where('id_news', '=', $data['id_news']);
			}
			else {
				$sql=DB::insert('rating_news', array('id_news', 'id_user', 'rating'))->values(array($data['id_news'], $_SESSION['id'], $data['type']));
			}
			$res=$sql->execute();
			return $res;
		}
		public function valid_favor($data){
			$valid=DB::select()->from('rating_news')->where('id_user', '=', $_SESSION['id'])->and_where('id_news', '=', $data);
			$valid=$valid->execute()->get('id_user', NULL);
			//echo Debug::vars($valid);
			return $valid;
		}
		public function rec_check($id, $check,$type){ //осторожно, если $check не является 1, то строка будет безвозвратно удалена!
			if ($check==1){
				$sql=DB::update($type)->set(array('check'=>$check))->where('id_'.$type,'=',$id);
			}
			else {
				$sql=DB::delete($type)->where('id_'.$type,'=',$id);
			}
			$res=$sql->execute();
			return $res;
		}
}
		


