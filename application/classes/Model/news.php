<?php defined('SYSPATH') or die('No direct script access.');
	class Model_News extends Model{
		public function get_all(){
			$sql = DB::select()->from('news')->join('users')->on('id_autors','=','id');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
		public function get_last(){
			$sql = DB::select()->from('news')->join('users')->on('id_autors', '=', 'id')->order_by('id_news', 'desc')->limit(1);
			$res=$sql->execute();
			return $res;
		}
}
