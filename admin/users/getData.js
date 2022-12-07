$(document).ready(function(){  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id; 
		alert(dataString);   
		$.ajax({
			url: 'getEmployee.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
				   alert("sucess");
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');							
					$("#empId").text(empData.student_id);
					$("#empName").text(empData.student_name);
					$("#empAge").text(empData.student_semster);
					$("#empSalary").text("$"+empData.student_address);					
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});
