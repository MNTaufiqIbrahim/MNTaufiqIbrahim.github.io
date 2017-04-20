function SubmitFormData() {
    var brand = $("#brand").val();
    $.ajax({  
		url:"submit.php",  
		method:"POST",  
		data:{brand:brand},  
		dataType:"text",  
		success:function(data)  
		{  
			alert("Rekod berjaya disimpan!");
			refresh();
		}  
   }); 
}