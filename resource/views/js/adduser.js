$(document).ready(function(){
$('#submit').click(function(event){
	event.preventDefault();
	
	$.ajax({
		url		: "../../config/validate/newuser.php",
		method	: "POST",
		data    : $("#aform").serialize(),
		success : function(data){
			$('#error_msg').html(data);
		}
	});
	
});

	
	
});