$(document).ready(function(){
	$("body").delegate("#delsearch","click",function(event){
		event.preventDefault();
		var regnum = $(this).attr("reg");
		 
		var con = confirm("Are you sure you want to delete this");
		if (con == true){
			$.ajax({
			url		:"../../config/functions/del.php",
		method	: "POST",
		data	: {delete_d_reg : 1,regnum:regnum},
		success : function (data){

			
			}

		});
			

		}
		window.location.reload();
		
		
		
		
	});
});