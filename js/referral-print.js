$(document).ready(function(){
	var refprint = decrypt('patient');
    var path = window.location.pathname;
    var page = path.split("/").pop();

	$.ajax({
		type: "POST",
		url: "data/ref-handler.php",
		data: "refprint="+refprint,
		cache: false,
		success: function(data){
			var json = $.parseJSON(data);
           	$(json).each(function(i,val){
                $("#date").html(val.date);
                $("#patname").html(val.fullname);
                $("#desc").html(val.desc);
                if (page=="referral-print.php") {
                   window.print();
                }
                
           	})
		}

    })


})