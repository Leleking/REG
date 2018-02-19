<?php
require_once('../../resource/templates/path.php');
require_once(CONFIG.'/functions/error_handling.php');


 
 

require_once(DB);
if(isset($_POST['delete'])){
	$userid = $_POST['userid'];
	$stmt   = $db->update("update registry_r set user= 1 where user = $userid");
	$stmt   = $db->update("update registry_d set user= 1 where user = $userid");
	if($stmt){
	$stmt 	= $db->del("Delete from users where userid = $userid");
  	}

}
if(isset($_POST['delete_r_reg'])){
	$regnum = $_POST['regnum'];
	$stmt = $db->del("Delete from registry_r where  id= $regnum");
   
   

}
if(isset($_POST['delete_d_reg'])){
	$regnum = $_POST['regnum'];
	$stmt = $db->del("Delete from registry_d where  id= $regnum");
   
   

}


?>