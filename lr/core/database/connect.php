<?php

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

?>