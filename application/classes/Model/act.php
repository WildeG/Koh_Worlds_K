<?php defined('SYSPATH') or die('No direct script access.');
	class Model_Act extends Model{
		public function reg($login,$password,$password_repeat,$name,$family){
			if (isset($_POST['submit'])){
			    if(empty($login))  {
			      return 1;
			    }
			    elseif (!preg_match("/^\w{3,16}$/", $login)) {
			      return 1;
			    }
			    elseif(empty($_POST['password'])) {
			      return 1;
			    }
			    elseif (!preg_match("/\A(\w){6,16}\Z/", $password)) {
			      return 1;
			    }
			    elseif(empty($password_repeat)) {
			      return 1;
			    }
			    elseif($password != $password_repeat) {
			      return 1;
			    }
			    elseif(empty($_POST['name'])) {
			      return 1;
			    }
			    elseif (!preg_match("/^\w/", $name)) {
			      return 1;
			    }
			    elseif(empty($family)) {
			      return 1;
			    }
			    elseif (!preg_match("/^\w/", $family)) {
			      return 1;
			    } 
			    else{
			        $date_reg = date("Y-m-d");
			  		$query_login = DB::select('id')->from('users')->where('login','=',':login');
			  		$result=$query_login->execute();
			  			
			        if (mysqli_num_rows($result) > 0) {
			        	echo '<font color="red"><img border="0" src="error.gif" align="middle"> Пользователь с таким логином зарегистрирован!</font>';
			        	}
			        	else{
							$query = DB::insert('users', array('login', 'password', 'name', 'family', 'date_reg'))->values(array('$login', '$mdPassword', '$name', '$family', '$date_reg'));
			            	$result = $query->execute();							
			            }
			        }
			    }   return 1;
					}
		
}
