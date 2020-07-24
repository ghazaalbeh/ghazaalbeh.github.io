<?php

session_start();
include '../includes/db.php';
if(!isset($_POST['submit_login'])){}else{
		if(!empty($_POST['user_name']) && !empty($_POST['password'])){
			$get_user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
			$get_password = mysqli_real_escape_string($conn,$_POST['password']);
			$sql = "SELECT * FROM users WHERE user_email = '$get_user_name' AND user_password = '$get_password'";
			if($result = mysqli_query($conn,$sql)){
				 if(mysqli_num_rows($result) > 0){
					 $_SESSION['user'] == $get_user_name;
					 $_SESSION['password'] == $get_password;
					 
					 	header('location: ../index.php');
					 
					 }else{
						header('location: ../login.php?login_error=wrong'); 
						 }
				
				}else{
				  header('location: ../login.php?login_error=query_error');
				}

			
				
			}else{
				header('location: ../login.php?login_error=empty');
				
				}
	}
 ?>