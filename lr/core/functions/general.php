<?php

	function admin_protect(){
		global $user_data;
		if(has_access($user_data->user_id, 1) === false){
			header('Location: index.php');
			exit();
		}
	}

	function moderator_protect(){
		global $user_data;
		if(has_access($user_data->user_id, 2) === false){
			header('Location: index.php');
			exit();
		}
	}

	function logged_in_redirect(){
		if (logged_in() === true) {
			header('Location: index.php');
			exit();
		}
	}

	function protect_page(){
		if(logged_in() === false){
			header('Location: protected.php');
			exit();
		}
	}

	function sanitize($data) {
		$data1 = htmlentities($data);
		$data1 = htmlspecialchars($data1);
		return $data1;
	}

	function output_errors($errors) {
		$output = array();
		foreach($errors as $error){
			$output[] = '<li>' . $error . '</li>';
		}
		return '<ul>' . implode('', $output) . '</ul>';
	}


	function cv_exists($session_user_id){

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$verificare = $connection->prepare
	('SELECT id_user FROM cv WHERE id_user = :session_user_id');
	$verificare->bindParam(':session_user_id', $session_user_id, PDO::PARAM_INT);
	$verificare->execute();

	if($verificare->rowCount() == 1)
	    {    
	        return true;
	    }
	else
	    {
	        return false;
	    }
	}

?>