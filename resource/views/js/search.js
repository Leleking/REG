$(document).ready(function(){
	$('#insert').click(function(event){
	event.preventDefault();
	
	$.ajax({
		url		: "../../config/fetch/search_result.php",
		method	: "POST",
		data    : $("#sform").serialize(),
		success : function(data){
			$('#search_msg').html(data);
		}
	});
	
   });
});