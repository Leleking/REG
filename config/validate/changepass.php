<?php
require_once('../db.php');
require_once('../functions/error_handling.php');
session_start();
 $userid =  $_SESSION['userid'];
 $old 		=  $_POST['pass_old'];
 $new 		=  $_POST['pass_new'];
 $confirm 	=  $_POST['confirm'];

 if (empty($old) || empty($new) || empty($confirm)){
	error('Sorry, fields cannot be empty');
	
}else
if(strlen($new)< 5){
	error('Password should have more than 4 characters');
}else {
	if($new != $confirm){
		error('unmatching passwords');
	}
	else{
	$row = $db->select_assoc("select * from users where userid = $userid");
	$db_pass = $row['password'];

if (password_verify($old,$db_pass)){
	$dbpassword = password_hash($new, PASSWORD_DEFAULT);
	$row =$db->update("UPDATE users SET password = '$dbpassword' where userid = $userid");
	if($row){
	success('Password succesfully changed');
}else{
	error('Server error. Cannot change password');
}
	}else{
		//incorrect
		error("Incorrect old password");
	}
}
}