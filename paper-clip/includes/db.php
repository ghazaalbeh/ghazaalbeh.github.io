<?php 
$server = 'localhost';
$user = 'ghazaal.beh';
$password = 'Straw52berry';
$db = 'test';

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn){
	die("conection Failed!:".mysqli_connect_error());
	}

?>