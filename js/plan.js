$(document).ready(function() {
    $("form#form-plan").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/plan-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data==1) {
                    $("#plan_desc").val('');
                    $("#patname").val('').change();
                    toastSuccess("Successful", "Plan has been successully added");
                    recentPlan();
                }
            }
        })
        e.preventDefault();
    });
    
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
                window.location.replace('edit-plan.php?patient='+encryptedAES);
            });
        }
    });

    $("form#form-plan-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/plan-handler.php",
			data: formData,
			cache: false,
			async: false,
            processData: false,
            contentType: false,
            success: function(data){

              if (data==1) {
                    toastSuccess("Successful", "Plan has been successully updated");
                }
            }
		})
        
        e.preventDefault();
    });

    $("#del").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the plan record?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "data/plan-handler.php",
                        data: "del=true&usr="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Plan record was successfully deleted");
                            refresh("patient-all");
                            recentPlan();
                        }
                    })
                });
           }
        }
    })
});

function getPlanInfo(){
    var plaintext = decrypt('patient');
    
    $.ajax({
        type: "POST",
        url: "data/plan-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){
           var json = $.parseJSON(data);
           $(json).each(function(i, val) {
                $("#planid").val(val.plan_num);
                $("#pat_fullname").val(val.fullname);
                $("#plan_desc").val(val.desc);
           })
        }
    })
}

function recentPlan() {
	var users = $(".products-list").empty();
	$.ajax({
	  type: 'POST',
	  url: 'data/plan-handler.php',
	  data: "recplan=true",
	  cache: false,
	  success: function(data){

	    var json = $.parseJSON(data);
		$(json).each(function(i,val){
				
			var formData = val.pat_num;
			var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
			users.append('<li class="item">'+
			'<div class="product-img circle-text">'+val.img+'</div>'+
				'<div class="product-info">'+
				'<a href="edit-assessment.php?patient='+encryptedAES+'" class="product-title">'+val.fullname+'</a>'+
				'<span class="product-description">Date: <strong>'+val.indate+
					'</strong></span>'+
			'</div>'+
			'</li>');
		});
	  }
	})
}

function getAllPlan() {
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
            "emptyTable":     "No plan available"
        },
        "ajax": {
            "url": "data/plan-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "plan_num" },
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
            { "data": "desc" },
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-plan.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.pat_num, "My Secret Passphrase");
        window.location.replace('patient-profile.php?patient='+encryptedAES);
   })
}