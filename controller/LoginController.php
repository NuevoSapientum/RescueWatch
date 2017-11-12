<?php
	session_start();
	if(isset($_POST['action'])){ 
	    switch($_POST['action']){
	        case 'lu': 
	        	loginUser(); 
	        	break;
	        case 'ru': registerUser(); break;
	        default: break;
	    }
	}

	function loginUser(){
		$username = $_POST['formData'][0]["value"];
		$password = md5($_POST['formData'][1]["value"]);
		$database  = new PDO( 'mysql:host=localhost;dbname=digosrescuewatchdb', 'root', '' );

		$query = "SELECT * FROM `user` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "'";

		$statement = $database->prepare($query);
		$statement->execute();

		$count = $statement->rowCount();
		if($count > 0){
			$_SESSION["user"] = $username;
			echo "true";
		}else{
			echo "false";
		}
	}


	function registerUser(){
		//
	}
?>