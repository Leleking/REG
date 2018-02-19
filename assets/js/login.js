$(document).ready(function(){

$("#signup_button").click(function(event){
	event.preventDefault();
	$.ajax({
		url		: "config/verify.php",
		method	: "POST",
		data	:  $("form").serialize(),
		success	:  function(data){
			$("#signup_msg").html(data);
		}
	})
	
})

});