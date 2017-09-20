<?php 

function has_access($user_id, $type){
	$user_id = (int)$user_id;
	$type = (int)$type;

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}
	
	$conn = $connection->prepare
	('SELECT * FROM users WHERE user_id = :user_id AND type = :type');
	$conn->bindParam(':user_id', $user_id, PDO::PARAM_STR);
	$conn->bindParam(':type', $type, PDO::PARAM_STR);
	$conn->execute();

	if($conn->rowCount() == 1)
	{
		return true;
	}
	else 
	{
		return false;
	}
}


function update_user($update_data){
	global $session_user_id;
	$update = array();

	foreach ($update_data as $field => $data) {
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}

	$update1=implode(', ', $update);

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

	$insert = $connection->prepare("UPDATE users SET $update1 WHERE user_id = $session_user_id");
	$insert->execute();
}


function change_password($user_id, $password){
	$user_id = (int)$user_id;
	$password = md5($password);

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

	$update = $connection->prepare("UPDATE users SET password = '$password' WHERE user_id = $user_id");
	$update->execute();
}


function register_user($register_data){

	$register_data['password'] = md5($register_data['password']);
	
	$fields = '' . implode(', ', array_keys($register_data)) . '';
	$data = '\'' . implode('\', \'', $register_data) . '\'';

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

	$insert = $connection->prepare("INSERT INTO users ($fields) VALUES ($data)");
	$insert->bindParam('$data', $fields, PDO::PARAM_STR);
	$insert->execute();
}


function user_count(){

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$conn = $connection->prepare("SELECT * FROM users WHERE active = 1");
	$conn->execute();

	$activeusers = $conn->rowCount();
	return $activeusers;

}


function user_data($user_id){

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$data = array();
	$user_id = (int)$user_id;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);

		$fields = '' . implode(', ', $func_get_args) . '';

		$conn = $connection->prepare("SELECT $fields FROM users WHERE user_id = :user_id");
		$conn->bindParam(':user_id', $user_id, PDO::PARAM_STR);
		$conn->execute();

		$data = $conn->fetch(PDO::FETCH_OBJ);
		
		return ($data);
	}
	
}


function logged_in() {
	if(isset($_SESSION['nume']))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function user_exists($username) {
	$username=sanitize($username);

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$conn = $connection->prepare('SELECT * FROM users WHERE username = :user');
	$conn->bindParam(':user', $username, PDO::PARAM_STR);
	$conn->execute();

	if($conn->rowCount() == 1){
		return true;
	}else {
		return false;
	}
}


function email_exists($email) {
	$username=sanitize($email);

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$conn = $connection->prepare('SELECT * FROM users WHERE email = :email');
	$conn->bindParam(':email', $username, PDO::PARAM_STR);
	$conn->execute();

	if($conn->rowCount() == 1){
		return true;
	}else {
		return false;
	}
}


function user_active($username){
	$username=sanitize($username);

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$conn = $connection->prepare('SELECT * FROM users WHERE username = :user');
	$conn->bindParam(':user', $username, PDO::PARAM_STR);
	$conn->execute();

	$row = $conn->fetch(PDO::FETCH_OBJ);

	$active=$row->active;

	if($active == 1)
		return true;
	else
		return false;
	
}


function user_id_from_username($username){
	$username=sanitize($username);

	$host = 'localhost';
	$dbname = 'licenta';
	$user = 'root';
	$pass = '';
	try {
		$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass);
	}catch(PDOException $e){
		die($e->getCode());
	}

	$conn = $connection->prepare('SELECT * FROM users WHERE username = :user');
	$conn->bindParam(':user', $username, PDO::PARAM_STR);
	$conn->execute();

	$row = $conn->fetch(PDO::FETCH_OBJ);

	return $row->user_id;

}


function login($username, $password){
	$user_id = user_id_from_username($username);

	$username = sanitize($username);
	$password = md5($password);

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

	$conn = $connection->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
	$conn->bindParam(':username', $username, PDO::PARAM_STR);
	$conn->bindParam(':password', $password, PDO::PARAM_STR);
	$conn->execute();

	$row = $conn->fetch(PDO::FETCH_OBJ);
	if($conn->rowCount() == 1) {
		return $user_id;
	}
	else{
		return false;
	}
}


?>
