$(document).ready(function() {
    
  
    //update patient

    $("form#form-patient-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: "data/patient-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                console.log(data)
                if(data==1){
                    toastErr("Error","Email or Phone # are already exist.");
                }else{
                    toastSuccess("Successfully Updated", "Patient information successfully updated")
                }
            }
        })

        e.preventDefault();
    })
	

	//save the form for the patient
	$("form#form-patient-add").on('submit', function(e) {
		var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/patient-handler.php",
			cache: false,
			data: formData,
			async: false,
			processData: false,
			contentType:false,
			success: function(data) {
                console.log(data)
				//clear all fields
                if (data==1) {
                    $("input[type=text],input[type=email], textarea").val("");
                    $("#socstat").val('-1');
                    $("#complaint").val('-1');
                    
                    toastSuccess("Successfully Registered", "You added new patient <a href='all-patient.php'> View All</a>");
                    patNum();
                }else if(data==2){
                    toastErr("Error", "Invalid Birthda.");

                }else{
                    toastErr("Error", "Duplicate entry of Email or Contact Number.");
                }
				
				
			}
		})
		e.preventDefault();
    });

	//var table = $("#patient-all").DataTable();

    //retrieve all the patient
	

    //redirect to the patient info
    $("#edit").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select patient');
        }else if(len>1){
            alert('Please select only one patient');
        }else{
            $.each($("input[name='pat-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-patient.php?patient='+encryptedAES);
            });
        }
    })

    //delete selected patient
    $("#del").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select patient');
        }else{
           var del = confirm("Are you sure you want to delete the patient?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                
                    $.ajax({
                        type: "POST",
                        url: "data/patient-handler.php",
                        data: "del=true&pat-num-del="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "All Patient data has been deleted");
                            refresh("patient-all");
                        }
                    })
                });
           }
        }
    })

    $('#export').click(function(){ $('.buttons-excel').click(); });
})

//function for patient number automation
function patNum(){
	$.ajax({
		type: "POST",
		url: "data/patient-handler.php",
		data: "get_all_patient=true",
		cache:false,
		success: function(data) {
			$("#pat-num").val(data);
			$("#pat-num-h").html("<strong>"+data+"</strong>");
		}
	})
}

// function to compute the body mask index
function bmiComputation(wei, hei) {
	var converted = parseInt(wei)/parseInt(hei)/parseInt(hei)*10000;

	if(!isNaN(converted)){
		$("#bmiVal").val(converted.toFixed(2));
		$("#bmi").val(converted.toFixed(2));
        var bmi = converted.toFixed(2);
        
        //check the bmi
        if (bmi<18.5) {
            console.log("Underweight");
            callBmi("Underweight", "warning","warning");
        }else if(bmi>=18.5 && bmi<=24.9){
            callBmi("Normal weight", "check","success");
        }else if (bmi>=25 && bmi<=29.9) {
            callBmi("Overweight", "warning","warning");
        }else if (bmi>=30) {
            callBmi("Obesity", "ban","danger");
        }
	}
	
}

//function to retrieve all the patient
function getAllPatient() {
	//iCheck for checkbox and radio inputs
	  /*------ datatables all products---------*/
    var table = $('#patient-all').DataTable( {
        "dom": '<"toolbar">Bfrtip',
        "lengthChange": false,
        "ordering": false,
        "buttons": [
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Co-Sy Fertility Clinic.'
            },
        ],
        "language": {
            "emptyTable":     "No patient available"
        },
        "ajax": {
            "url": "data/patient-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
            { "data": "weight" },
            { "data": "height" },
            { "data": "bmi" },
            { "data": "bday" },
            { "data": "email" },
            { "data": "contact" },
            { "data": "add1" },
            { "data": "indate" }
        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<div class="md-checkbox"><input type="checkbox" name="pat-chk" class="flat-red" name="mt-chk" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
        }
        },
        {
        "targets": [ 1 ],
        "visible": false,
        "searchable": false
        },
    ],
      'order': [1, 'asc']
    } );

    /*------------- custom toolbar ------------*/
     $("div.toolbar").html('<div class="mailbox-controls">'+
         '<button type="button" class="btn btn-default btn-sm checkbox-toggle" title="Select All"><i class="fa fa-square-o"></i> Select All</button> '+
         '<div class="btn-group">'+
            '<button type="button" class="btn btn-default btn-sm" id="del" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="edit" title="Edit"><i class="fa fa-edit"></i> Edit</button>'+
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-patient.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.pat_num, "My Secret Passphrase");
        window.location.replace('patient-profile.php?patient='+encryptedAES);
   })
}

// function to retrieve the patient information
function get_patinfo() {
    var plaintext = decrypt('patient');

    $.ajax({
        type: "POST",
        url: "data/patient-handler.php",
        data: "get_patinfo="+plaintext,
        cache: false,
        success: function(data) {
        
            $("#pat-num").val(plaintext);
            $("#pat-num-h").html("<strong>"+plaintext+"</strong>");
            
            var json = $.parseJSON(data);
            $(json).each(function (i, val) {
                
                $("#fname").val(val.fname);
                $("#lname").val(val.lname);
                $("#mname").val(val.mname);
                $("#nname").val(val.nname);
                $("#datepicker").val(val.bday);
                $("#email").val(val.email);
                $("#occu").val(val.occu);
                $("#socstat").val(val.socstat);
                $("#contact").val(val.contact);
                $("#addphi").val(val.addphil);
                $("#addabr").val(val.addabr);
                $("#wei").val(val.wei);
                $("#hei").val(val.hei);
                $("#sys").val(val.sys);
                $("#dia").val(val.dia)
                $("#bmiVal").val(val.bmi);
                $("#bmi").val(val.bmi);
                $("#complaint").val(val.chicomp);
                $("#lmp-date").val(val.lm);
                $("#pmp-date").val(val.pm);

                //partner
                $("#fullname").val(val.fullname);
                $("#parbday").val(val.parbday);
                $("#parwei").val(val.parwei);
                $("#parhei").val(val.parhei);
                $("#noc").val(val.noc);
                $("#paroccu").val(val.paroccu);
                if(val.eversmoke=="on"){
                    $('input[name=eversmoke]').iCheck('check');
                }
                if(val.cursmoke=="on"){
                    $('input[name=cursmoke]').iCheck('check');
                }
                $("#stiperday").val(val.stiperday);
                $("#agesta").val(val.agesta);
                $("#stiperdaybef").val(val.stiperdaybef);
                $("#agestop").val(val.agestop);
                if(val.everdra=="on"){
                    $('input[name=everdra]').iCheck('check');
                }
                if(val.curdri=="on"){
                    $('input[name=curdri]').iCheck('check');
                }
                if(val.morethan=="on"){
                    $('input[name=morethan]').iCheck('check');
                }
                $("#numdrink").val(val.numdrink);
                $("#agestodri").val(val.agestodri);
                $("#drugs").val(val.drugs);

                //siemen
                $("#color").val(val.color).change();
                $("#volume").val(val.volume);
                $("#ph").val(val.ph);
                $("#viscosity").val(val.viscosity);
                $("#liquetime").val(val.liquetime);
                $("#motility").val(val.motility);
                $("#grading").val(val.grading);
                $("#morphology").val(val.morphology);
                $("#spercnt").val(val.spercnt);
                $("#puscell").val(val.puscell);
                $("#redcell").val(val.redcell);
                $("#bacteria").val(val.bacteria);
                $("#daysabs").val(val.daysabs);
                $("#wss").val(val.wss);

            })
        }
    })
    
}

function callBmi(title, icon, stat) {
    var bmi = $(".callBmi").empty();

    bmi.html('<div class="alert alert-'+stat+' alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h4><i class="icon fa fa-'+icon+'"></i>'+title+'</h4>'+
              '</div>');
}

