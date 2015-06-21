<?php defined('SYSPATH') or die('No direct script access.');
	class Model_News extends Model{
		public function get_all(){
			$sql = DB::select()->from('news');
			$res = $sql->execute();
			return $res;
		}
}
