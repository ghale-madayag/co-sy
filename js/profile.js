$(document).ready(function() {
	//register new user
	$("form#form-register").on('submit', function(e){
		var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/profile-handler.php",
			data: formData,
			cache: false,
			async: false,
            contentType: false,
            processData: false,
            success: function(data){
            	if (data==1) {
            		toastErr("Error:","Duplicate entry of Email or Contact");
            	}else{
            		$("#fname").val('');
            		$("#mname").val('');
            		$("#lname").val('');
            		$("#email").val('');
            		$("#mobile").val('');


            		$("#register").modal('hide');
            		toastSuccess("Success", "New user was registered.");
                    loadAlluser()
            	}
            }
		})

		e.preventDefault();
	});


	$("form#form-update").on('submit', function(e){
		var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/profile-handler.php",
			data: formData,
			cache: false,
			async: false,
			processData: false,
			contentType: false,
			success: function(data){
				;
				if (data==1) {
                      toastErr("Error:", "Email or Contact is already exist!");
                }else{
                      $("#modal-info").modal('hide');
                      toastSuccess("Success", "Profile was successfully updated.");
                      loadProfile(user_id)
                      loadAlluser();
                }
			}
		})
		e.preventDefault();
	});

	//upate password
	$("form#form-update-pword").on('submit', function(e){
		var formData = new FormData($(this)[0]);
            var curpass = $("#curpass").val();
            var newpass = $("#newpass").val();
            var conpass = $("#conpass").val();

           if(newpass != conpass){
           		toastErr("Error:", "Mismatch New and Current password!");
           }else{
           			$.ajax({
						type: "POST",
						url: "data/profile-handler.php",
						data: formData,
						cache: false,
						async: false,
						processData: false,
						contentType: false,
						success: function(data){
							
							if (data==1) {
								  toastErr("Error:", "Invalid Current Password!");
							}else{
								 toastSuccess("Success", "Password was successfully updated");
								$("#curpass").val("");
								$("#newpass").val("");
								$("#conpass").val("");
								$("#modal-pass").modal('hide');
							}
						}
					})
           }

	

		e.preventDefault();
	});
});

function editProfile(e) {
	$.ajax({
		type: "POST",
		url: "data/profile-handler.php",
		data: "edit=edit&userId="+e,
		cache: false,
		success: function(data){
			
			var json = $.parseJSON(data);

			$(json).each(function(i, val){
				$("#userId-edit").val(val.user_id);
				$("#fname-edit").val(val.user_fname);
				$("#mname-edit").val(val.user_mname);
				$("#lname-edit").val(val.user_lname);
				$("#email-edit").val(val.user_email);
				$("#mobile-edit").val(val.user_contact);
				$("#editPro").val('edit')
				$("#modal-info").modal('show');
			})
		}
	})
}

function resetPass(e) {
	var ask = confirm("Are you sure you want to reset the password of this user?");

	if(ask==true){
		$.ajax({
			type: "POST",
			url: "data/profile-handler.php",
			data: "reset="+e,
			cache: false,
			success: function(data) {
				if (data==1) {
					toastSuccess("Success", "The password was reset to 123456");
				}
			}
		})
	}
	
}

function delUser(e) {
	var con = confirm("Are you sure you want to delete this user?");

	if (con==true) {
		$.ajax({
			type: "POST",
			url: "data/profile-handler.php",
			data: "delete="+e,
			cache: false,
			success: function(data) {
				
				if (data==1) {
					toastSuccess("Success", "The user was deleted");
					loadAlluser();
				}
			}
		})
	}
}

