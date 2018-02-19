$(document).ready(function(){
	$("body").delegate("#del","click",function(event){
		event.preventDefault();
		var userid = $(this).attr("userid");
		 
		var con = confirm("Are you sure you this to delete this user");
		if (con == true){
			$.ajax({
			url		:"../../config/functions/del.php",
		method	: "POST",
		data	: {delete : 1,userid:userid},
		success : function (data){
			
			
			}

		});
			

		}
		window.location.reload();
		
		
		
		
	});
	
	

})