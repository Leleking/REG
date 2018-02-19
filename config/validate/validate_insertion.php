<?php
session_start();
$userid = $_SESSION['userid'];
require_once('../db.php');
require_once('../functions/error_handling.php');

$reg_no 	 =        $_POST['reg_no']; 
$rec_from	 =  	  $_POST['rec_from'];
$date_letter =		  $_POST['date_letter'];
$remark		 =		  $_POST['remark'];
$subject     =		  $_POST['subject'];
$volume_no 	 =		  $_POST['volume_no'];
$page_name   =		  $_POST['page_name'];

;
if($page_name == 'received'){
if(empty_field($reg_no,$rec_from,$date_letter,$subject,$volume_no) == false || datechecker($date_letter) == false){


	//insert into database
	$stmt = $db->select("Select * from registry_r where registry_no = $reg_no and Volume = $volume_no");
	
	if($stmt == 0){	
	$db->insert("Insert into registry_r(registry_no,received_from,date_letter,subject,remark,Volume,user) values($reg_no,'$rec_from','$date_letter','$subject','$remark',$volume_no,$userid)");

	success('new received letter added. ');

}
else
{
	
	error('Registry_no has already been used for volume number: '.$volume_no);
		}

	}
}
else
{
	if(empty_field($reg_no,$rec_from,$date_letter,$subject,$volume_no) == false || datechecker($date_letter) == false){


	//insert into database
	$stmt = $db->select("Select * from registry_d where registry_no = $reg_no and Volume = $volume_no");
	
	if($stmt == 0){	
	$db->insert("Insert into registry_d(registry_no,received_from,date_letter,subject,remark,Volume,user) values($reg_no,'$rec_from','$date_letter','$subject','$remark',$volume_no,$userid)");

	success('new despatched letter added.');

}
else
{
	
	error('Registry_no has already been used for volume number: '.$volume_no);
		}

	}
	
}
	



?>