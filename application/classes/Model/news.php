<?php defined('SYSPATH') or die('No direct script access.');
	class Model_News extends Model{
		public function get_all(){
			$sql = DB::select()->from('news')->join('users')->on('id_autors','=','id');			
			$res = $sql->execute();
			$res2 = $res->as_array();
			return $res2;
		}
}
