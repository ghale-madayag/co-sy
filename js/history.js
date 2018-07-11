$(document).ready(function(){
	$("form#form-history").on('submit', function(e){
		var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/history-handler.php",
			data: formData,
			cache: false,
			async: false,
            processData: false,
            contentType: false,
            success: function(data){
              if (data==1) {
              		$("input[type=text],input[type=number],input[type=date]").val("");
              		$('input[type=checkbox],input[type=radio]').prop('checked',false);
                    $("#patname").val('').change();
                    toastSuccess("Successful", "History has been successully added");
                    recentHis();
                }
            }
		})

		e.preventDefault();

    });
    
    $("form#form-history-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);

		$.ajax({
			type: "POST",
			url: "data/history-handler.php",
			data: formData,
			cache: false,
			async: false,
            processData: false,
            contentType: false,
            success: function(data){
              if (data==1) {
                    toastSuccess("Successful", "History has been successully updated");
                }
            }
		})
        
        e.preventDefault();
    })

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
                window.location.replace('edit-history.php?patient='+encryptedAES);
            });
        }
    });

     //delete selected report
     $("#del").on('click', function(){
        var len = $("input[name='pat-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the history record?");

           if(del==true){
                $.each($("input[name='pat-chk']:checked"), function(){
                    var formData = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "data/history-handler.php",
                        data: "del=true&usr="+formData,
                        cache: false,
                        success: function(data){
                           
                            toastSuccess("Successfully Deleted", "History record was successfully deleted");
                            refresh("patient-all");
                            recentHis();
                        }
                    })
                });
           }
        }
    })
});

function getHisInfo(){
    var plaintext = decrypt('patient');
    
    $.ajax({
        type: "POST",
        url: "data/history-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){
            var json = $.parseJSON(data);
            $(json).each(function(i,val){
                $('#usrid').val(val.pat_num);
                $('#pat_fullname').val(val.fullname);
                //b
                $("#b1").val(val.b1);
                $("#b2").val(val.b2);
                $("#b3").val(val.b3);
                $("#b4").val(val.b4);
                $('input[name=b5][value='+val.b5+']').prop('checked', 'checked');
                $('input[name=b6][value='+val.b6+']').prop('checked', 'checked');
                $("#b7").val(val.b7);
                $('input[name=b8][value='+val.b8+']').prop('checked', 'checked');
                $('input[name=b9][value='+val.b9+']').prop('checked', 'checked');
                //c
                $("#c1").val(val.c1);
                $("#c2").val(val.c2);
                $("#c3").val(val.c3);
                $("#c4").val(val.c4);
                $("#c5").val(val.c5);
                $("#c6").val(val.c6);
                $('input[name=c7][value='+val.c7+']').prop('checked', 'checked');
                $("#c8").val(val.c8);
                $("#c9").val(val.c9);
                //d
                $("#d1").val(val.d1);
                //e
                $('input[name=e1][value='+val.e1+']').prop('checked', 'checked');
                $('input[name=e2][value='+val.e2+']').prop('checked', 'checked');
                $('input[name=e1-2][value='+val.e1_2+']').prop('checked', 'checked');
                //f
                if(val.f1=="on"){
                    $('input[name=f1]').iCheck('check');
                }
                if(val.f2=="on"){
                    $('input[name=f2]').iCheck('check');
                }
                if(val.f3=="on"){
                    $('input[name=f3]').iCheck('check');
                }
                if(val.f4=="on"){
                    $('input[name=f4]').iCheck('check');
                }
                if(val.f5=="on"){
                    $('input[name=f5]').iCheck('check');
                }
                if(val.f6=="on"){
                    $('input[name=f6]').iCheck('check');
                }
                if(val.f7=="on"){
                    $('input[name=f7]').iCheck('check');
                }
                if(val.f8=="on"){
                    $('input[name=f8]').iCheck('check');
                }

                $("#f9").val(val.f9);
                $("#f10").val(val.f10);
                $("#f11").val(val.f11);
                $("#f12").val(val.f12);
                $("#f13").val(val.f13);
                $("#f14").val(val.f14);
                $("#f15").val(val.f15);
                $("#f16").val(val.f16);
                $("#f17").val(val.f17);
                $("#f18").val(val.f18);
                $("#f19").val(val.f19);
                $("#f20").val(val.f20);
                $("#f21").val(val.f21);
                $("#f22").val(val.f22);
                $("#f23").val(val.f23);
                $("#f24").val(val.f24);
                //g
                if(val.g1=="on"){
                   $('input[name=g1]').iCheck('check');
                }
	             $("#g2").val(val.g2);
	             $("#g3").val(val.g3);
	             $("#g4").val(val.g4);
	             $("#g5").val(val.g5);
	             $("#g6").val(val.g6);
	             $("#g7").val(val.g7);
	             //h
	             $("#h1").val(val.h1);
	             $('input[name=h2][value='+val.h2+']').prop('checked', 'checked');
	             $('input[name=h3][value='+val.h3+']').prop('checked', 'checked');
	             $("#h4").val(val.h4);
	             $("#h5").val(val.h5);
	             $("#h6").val(val.h6);
	             $("#h7").val(val.h7);
	             $("#h8").val(val.h8);
	             $("#h9").val(val.h9);
	             $('input[name=h10][value='+val.h10+']').prop('checked', 'checked');
	             //i
	            if(val.i1=="on"){
                	$('input[name=i1]').iCheck('check');
                }
                if(val.i2=="on"){
                	$('input[name=i2]').iCheck('check');
                }
                if(val.i3=="on"){
                	$('input[name=i3]').iCheck('check');
                }
                if(val.i4=="on"){
                	$('input[name=i4]').iCheck('check');
                }
                if(val.i5=="on"){
                	$('input[name=i5]').iCheck('check');
                }
                if(val.i6=="on"){
                	$('input[name=i6]').iCheck('check');
                }
                if(val.i7=="on"){
                	$('input[name=i7]').iCheck('check');
                }
                if(val.i8=="on"){
                	$('input[name=i8]').iCheck('check');
                }
                if(val.i9=="on"){
                	$('input[name=i9]').iCheck('check');
                }
                $("#i10").val(val.i10);
                //j
                if(val.j1=="on"){
                	$('input[name=j1]').iCheck('check');
                }
                if(val.j2=="on"){
                	$('input[name=j2]').iCheck('check');
                }
                if(val.j3=="on"){
                	$('input[name=j3]').iCheck('check');
                }
                if(val.j4=="on"){
                	$('input[name=j4]').iCheck('check');
                }
                if(val.j5=="on"){
                	$('input[name=j5]').iCheck('check');
                }
                if(val.j6=="on"){
                	$('input[name=j6]').iCheck('check');
                }
                if(val.j7=="on"){
                	$('input[name=j7]').iCheck('check');
                }

                //K
                $("#k1").val(val.k1);
                $("#k2").val(val.k2);
                $("#k3").val(val.k3);
                $("#k1-2").val(val.k1_2);
                $("#k2-2").val(val.k2_2);
                $("#k3-2").val(val.k3_2);
                $("#k1-3").val(val.k1_3);
                $("#k2-3").val(val.k2_3);
                $("#k3-3").val(val.k3_3);

                //l
                $('input[name=l1][value='+val.l1+']').prop('checked', 'checked');
                $("#l2").val(val.l2);
                $('input[name=l3][value='+val.l3+']').prop('checked', 'checked');
                $("#l4").val(val.l4);
                $("#l5").val(val.l5);
                $("#l6").val(val.l6);
                $('input[name=l7][value='+val.l7+']').prop('checked', 'checked');
                $("#l8").val(val.l8);
                $("#l9").val(val.l9);
                $("#l10").val(val.l10);
                $("#l11").val(val.l11);

                //m
                $('input[name=m1][value='+val.m1+']').prop('checked', 'checked');
                $("#m2").val(val.m2);
                $("#m3").val(val.m3);
                $("#m4").val(val.m4);

                //n
                if(val.n1=="on"){
                	$('input[name=n1]').iCheck('check');
                }
                if(val.n2=="on"){
                	$('input[name=n2]').iCheck('check');
                }
                if(val.n3=="on"){
                	$('input[name=n3]').iCheck('check');
                }
                if(val.n4=="on"){
                	$('input[name=n4]').iCheck('check');
                }
                $("#n5").val(val.n5);
                if(val.n6=="on"){
                	$('input[name=n6]').iCheck('check');
                }
               	$("#n7").val(val.n7);
               	$("#n8").val(val.n8);
               	$("#n9").val(val.n9);

               	if(val.o1=="on"){
                	$('input[name=o1]').iCheck('check');
                }
                if(val.o2=="on"){
                	$('input[name=o2]').iCheck('check');
                }
                if(val.o3=="on"){
                	$('input[name=o3]').iCheck('check');
                }
                if(val.o4=="on"){
                	$('input[name=o4]').iCheck('check');
                }
                if(val.o5=="on"){
                	$('input[name=o5]').iCheck('check');
                }
                if(val.o6=="on"){
                	$('input[name=o6]').iCheck('check');
                }
                if(val.o7=="on"){
                	$('input[name=o7]').iCheck('check');
                }
                if(val.o8=="on"){
                	$('input[name=o8]').iCheck('check');
                }
                if(val.o9=="on"){
                	$('input[name=o9]').iCheck('check');
                }
                if(val.o10=="on"){
                	$('input[name=o10]').iCheck('check');
                }
                $("#o11").val(val.o11);
            })
        }
    })

}

//function to retrieve all the patient
function getAllHistory() {
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
            "emptyTable":     "No available history"
        },
        "ajax": {
            "url": "data/history-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "pat_num" },
            { "data": "fullname" },
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-history.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#patient-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.pat_num, "My Secret Passphrase");
        window.location.replace('patient-profile.php?patient='+encryptedAES);
   })
}
