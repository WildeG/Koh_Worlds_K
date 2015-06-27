<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Addnews extends Model_Database{
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