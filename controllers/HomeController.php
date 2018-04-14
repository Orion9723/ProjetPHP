<?php 
class HomeController{

	public function __construct(){

	}

	public function run(){
		if(!empty($_POST)){
			if($_POST['registration']){
				require_once(PATH_VIEWS. 'registration.php');
			}
			elseif($_POST['login']){
				require_once(PATH_VIEWS.'login.php');
			}
		}
		else{
			require_once(PATH_VIEWS . 'home.php');
		}
	}
}
?>