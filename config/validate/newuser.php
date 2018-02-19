<?php

require_once('../db.php');
require_once('../functions/error_handling.php');
session_start();

    if(empty($_POST['admin'])){
    	$admin = 0;
    }else{
$admin    = 1;}
$username = $_POST["username"];
$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );





if (empty($username)){
	error('Please input a username into the field provided');
	
}else{

$dbpassword = password_hash($password, PASSWORD_DEFAULT);
$row = $db->return_assoc_user($username);
			

			if(empty($row['username'])){
				$stmt = $db->insert("INSERT into users(username,password,admin) values ('$username','$dbpassword',$admin) ");
			 $_SESSION['newuser'] = $username;
			 $_SESSION['pass'] = $password;

             success("<a href='../../assets/file.php'> click to download password</a>");

			}else {
				error('Username already used. Try another.');
		
					
			}



			
	}		
			
		
			






?>