$(document).ready(function() {
	// body...

	$("form#form-login").on('submit', function(e){
		var formData = new FormData($(this)[0]);
	
		// console.log(formData);
		$.ajax({
			type: "POST",
			url: "data/login-handler.php",
			data: formData,
			processData: false,
			contentType: false,
			cache: false,
			success: function(data){
				if(data==1){
                	toastErr("Error:","Invalid email or password");
              	}else{
              		window.location.assign('index.php');
              	}
			}
		})
		e.preventDefault();
	})

	//e.prenventDefault();
})