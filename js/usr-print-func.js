$(document).ready(function(){
    var usrprint = decrypt('patient');
    var path = window.location.pathname;
    var page = path.split("/").pop();

	$.ajax({
		type: "POST",
		url: "data/usr-handler.php",
		data: "usrprint="+usrprint,
		cache: false,
		success: function(data){
          
			var json = $.parseJSON(data);
           	$(json).each(function(i,val){
                $("#date").html(val.indate);
                $("#patid").html(val.pat_num);
                $("#patname").html(val.fullname);
                $("#age").html(val.age);
                $("#address").html(val.address);
                $("#contact").html(val.contact);
                $("#email").html(val.email);
                $("#indate").html(val.indate);
                $("#pus").html(val.usr_pus);
                $("#uterus").html(val.usr_uterus);
                $("#size").html(val.usr_size);
                $("#contour").html(val.usr_contour);
                $("#echopattern").html(val.usr_echopattern);
                $("#echorem").html(val.usr_echorem);
                $("#endometrium").html(val.usr_endometrium);
                $("#endometrium_sel").html(val.usr_endometrium_sel);
                $("#cervix").html(val.usr_cer);
                $("#urm").html(val.usr_cer_urm);
                $("#ro").html(val.usr_ro);
                $("#lo").html(val.usr_lo);
                $("#cdsf").html(val.usr_cdsf);
                $("#opm").html(val.usr_opm);
                $("#impre").html(val.usr_impre);

                if (page=="usr-print.php") {
                    window.print();
                 }
           	})
		}

    })
    
    $("#printBtn").on('click', function() {
        var plaintxt = decrypt('patient');

        var formData = plaintxt;
        var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
        
        window.open('usr-print.php?patient='+encryptedAES, '_blank');
    })


})