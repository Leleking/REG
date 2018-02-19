<?php

function empty_field($a,$b,$c,$d,$e){
	if(empty($a) || empty($b) || empty($c) || empty($d) || empty($e)){
		echo '<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error</strong>
						  Sorry,one or more  of the fields are empty.
						</div>';
						exit();
						return true;

	}else {
		return false;
	}
}



function datechecker($a){

	
	if(is_string($a)){
		return true;
	}
	else{
	$test_date = $a;

$test_arr  = explode('/', $test_date);
if(is_string($a) || empty($test_arr[0]) || empty($test_arr[1]) || empty($test_arr[2]))
{
	echo '<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error</strong> Incorrect Date
						</div>';
						exit(); 
}
else
{
if (checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {

		return false;    
}else{
	echo '<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error</strong> Input the date in the right format.
						</div>';
						exit();
			}
		}
	}
}
 function success($mode){
	echo '<div class="alert alert-success alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success</strong>  '.$mode.' 
						</div>';
						exit();

}

function error($msg){
	echo '<div class="alert alert-warning alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error! </strong>'.$msg.'. 
						</div>';
						exit();


}
