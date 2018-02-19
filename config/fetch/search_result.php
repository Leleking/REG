<?php 
require_once('../db.php');
require_once('../functions/error_handling.php');
require_once('../functions/success_handling.php');
session_start();
$user = $_SESSION['username'];
$company 	= 	$_POST['company'];
$volume		=	$_POST['volume_no'];
$From		=	$_POST['From'];
$To			= 	$_POST['To'];
$page		= 	$_POST['page'];
if ($page == 'received'){
$only_company  	= "SELECT  id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_r as r inner join users as u where  r.received_from like '%$company%' and  r.user =u.userid and r.Volume = $volume ";
$only_date = "SELECT id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_r as r inner join users as u where date_r between '$From' and '$To' and r.user =u.userid";
$all = "SELECT id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_r as r inner join users as u where date_r between '$From' and '$To'and r.received_from like '%$company%'   and r.user =u.userid ";
}
else {
	$only_company  	= "SELECT id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_d as d inner join users as u where  d.received_from like '%$company%' and  d.user =u.userid and d.Volume = $volume ";
$only_date = "SELECT id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_d as d inner join users as u where date_r between '$From' and '$To' and d.user =u.userid";
$all = "SELECT id,received_from,registry_no,date_r,username as user,date_letter,subject,remark,Volume from registry_d as d inner join users as u where date_r between '$From' and '$To'and d.received_from like '%$company%'   and d.user =u.userid ";


}
if(empty($From)){

}else
{
$From=date("Y-m-d H:i:s",strtotime($From));	

}

if(empty($To)){

}else
{
$To = date("Y-m-d H:i:s",strtotime($To));	

}



//check if volume is empty


$data = $db->connect();

if(empty($volume) ){
	echo 'Volume cannot be empty';
}



else 
	{
		if(!empty($company) && empty($From) && empty($To)){
	
		
	//query only company on success
		 $result = $data->query($only_company);
		
		 if($result->num_rows > 0){
		 	start();

    	while ($row = $result->fetch_assoc())
    	{

    	
    	$value = array($row['received_from'],$row['registry_no'],$row['date_r'],$row['user'],$row['date_letter'],$row['subject'],$row['remark'],$row['Volume'],$user,$row['id']);
    	fetch_result($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]);
		
		}
		seal();
	}
	else
		
	echo 'No data found ';
	
 }










 //using all
 else if(!empty($company) && !empty($From) && !empty($To)){
 	start();
 	$result = $data->query($all);
		 if($result->num_rows > 0){
    	while ($row = $result->fetch_assoc())
    	{
    	
    	$value = array($row['received_from'],$row['registry_no'],$row['date_r'],$row['user'],$row['date_letter'],$row['subject'],$row['remark'],$row['Volume'],$user,$row['id']);
    	fetch_result($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]);
		
		}
		seal();
	}
	else
	echo 'there is nothing here';

 }		









 else{
		if((empty($From) && empty($To)) || ((empty($From) ||empty($To))))
		{
			echo "if using dates to search, fill both FROM and TO";

		}
		else
		{
			//success
			start();
			$result = $data->query($only_date);
		 if($result->num_rows > 0){
    	while ($row = $result->fetch_assoc())
    	{

    	$value = array($row['received_from'],$row['registry_no'],$row['date_r'],$row['user'],$row['date_letter'],$row['subject'],$row['remark'],$row['Volume'],$user,$row['id']);
    	fetch_result($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7],$value[8],$value[9]);
		}
	}
	else
	echo 'there is nothing here';

		//init on matching results	
		
			
		}
    } 
  

}	







?>