$(document).ready(function(){
	
$('#insert').click(function(event){
	event.preventDefault();
	$.ajax({
		url		: "config/validate/validate_insertion.php",
		method	: "POST",
		data    : $("#rform").serialize(),
		success : function(data){
			$('#error_msg').html(data);
		}
	});
});

	
	
});
