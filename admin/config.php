<?php
error_reporting(0);
$dsn="mysql:dbname=law_firms; host=localhost;";
$user="root";
$password="";

try{
	$pdo=new PDO($dsn,$user,$password);
	
	
	
}catch(PDOException $e){
	
	echo "connection failed.............".$e->getMessage();
	
}








?>