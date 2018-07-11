$(document).ready(function(){
	var usrprint = decrypt('patient');
    var path = window.location.pathname;
    var page = path.split("/").pop();

	$.ajax({
		type: "POST",
		url: "data/esr-handler.php",
		data: "esrprint="+usrprint,
		cache: false,
		success: function(data){
          
			var json = $.parseJSON(data);
           	$(json).each(function(i,val){
                $("#date").html(val.esdate);
                $("#patid").html(val.pat_num);
                $("#patname").html(val.fullname);
                $("#age").html(val.age);
                $("#address").html(val.address);
                $("#contact").html(val.contact);
                $("#email").html(val.email);

                $("#cycle").html(val.cycle);
                $("#opudate").html(val.opudate);
                $("#tnec").html(val.tnec);
                $("#tnef").html(val.tnef);
                $("#tnez").html(val.tnez);
                $("#imeg").html(val.imeg);
                $("#tnme").html(val.tnme);
                $("#tnae").html(val.tnae);
                $("#tnpe").html(val.tnpe);
                $("#tneafi").html(val.tneafi);
                $("#tnefer").html(val.tnefer);
                $("#tnecle").html(val.tnecle);
                $("#tnetran").html(val.tnetran);
                $("#getran").html(val.getran);
                $("#tned").html(val.tned);
                $("#tnefro").html(val.tnefro);
                $("#husband").html(val.husband);
                $("#embryologist").html(val.embryologist);

                if (page=="esr-print.php") {
                   window.print();
                }
                
           	})
		}

    })
    
    $("#printBtn").on('click', function() {
        var plaintxt = decrypt('patient');

        var formData = plaintxt;
        var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
        
        window.open('esr-print.php?patient='+encryptedAES, '_blank');
    })


})