$(document).ready(function() {
    $("form#form-usr-add").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/usr-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){

                if (data==1) {
                    $("input[type=text],input[type=number], textarea").val("");
                    $("#pus").val('-1');
                    $("#uterus").val('-1');
                    $("#contour").val('-1');
                    $("#echopattern").val('-1');
                    $("#endometrium_sel").val('-1');
                    $("#cdsf").val('-1');
                    $("#opm").val('-1');
                    $('.flat-red').iCheck('uncheck');
                    $("#patname").val('').change();
                    recentUsr();
                    toastSuccess("Successfully Registered", "You added new data <a href='all-usr.php'> View All</a>");
                }
            }
        })
        
        e.preventDefault();
    })

    $("form#form-usr-edit").on('submit', function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: "data/usr-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                console.log(data)
                
                if (data==1) {
                    recentUsr();
                    toastSuccess("Successfully Updated", "You updated data <a href='all-usr.php'> View All</a>");
                }
            }
        })
        
        e.preventDefault();
    })


    $("#edit").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='usr-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-usr.php?patient='+encryptedAES);
            });
        }
    })

    $("#print").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='usr-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.open('usr-print.php?patient='+encryptedAES, '_blank');
            });
        }
    })

    //delete selected report
    $("#del").on('click', function(){
        var len = $("input[name='usr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the patient record?");

           if(del==true){
                $.each($("input[name='usr-chk']:checked"), function(){
                    var formData = $(this).val();
                
                    $.ajax({
                        type: "POST",
                        url: "data/usr-handler.php",
                        data: "del=true&usr="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Record was successfully deleted");
                            refresh("usr-all");
                        }
                    })
                });
           }
        }
    })


    $('#export').click(function(){ $('.buttons-excel').click(); });

})

function getAllUsr() {
    
	//iCheck for checkbox and radio inputs
	  /*------ datatables all products---------*/
    var table = $('#usr-all').DataTable( {
        "dom": '<"toolbar">Bfrtip',
        "lengthChange": false,
        "ordering": false,
        "scrollX": true,
        "buttons": [
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Co-Sy Fertility Clinic.'
            },
        ],
        "language": {
            "emptyTable": "No available data"
        },
        "ajax": {
            "url": "data/usr-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "usr_id" },
            { "data": "indate" },
            { "data": "fullname" },
            { "data": "usr_pus" },
            { "data": "usr_uterus" },
            { "data": "usr_size" },
            { "data": "usr_contour" },
            { "data": "usr_echopattern" },
            { "data": "usr_echorem" },
            { "data": "usr_endometrium" },
            { "data": "usr_endometrium_sel" },
            { "data": "usr_cer" },
            { "data": "usr_cer_urm" },
            { "data": "usr_ro" },
            { "data": "usr_lo" },
            { "data": "usr_cdsf" },
            { "data": "usr_opm" },
            { "data": "usr_impre" }
        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<div class="md-checkbox"><input type="checkbox" name="usr-chk" class="flat-red" name="mt-chk" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
         }
      }],
      'order': [1, 'asc']
    } );

    /*------------- custom toolbar ------------*/
     $("div.toolbar").html('<div class="mailbox-controls">'+
         '<button type="button" class="btn btn-default btn-sm checkbox-toggle" title="Select All"><i class="fa fa-square-o"></i> Select All</button> '+
         '<div class="btn-group">'+
            '<button type="button" class="btn btn-default btn-sm" id="del" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="edit" title="Edit"><i class="fa fa-edit"></i> Edit</button>'+
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-usr.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="print" title="Print"><i class="fa fa-print"></i> Print</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
          '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');


     $("#usr-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.usr_id, "My Secret Passphrase");
        window.location.replace('usr-view.php?patient='+encryptedAES);
   })
}

function getusrInfo(){
    var plaintext = decrypt('patient');
    
    $.ajax({
        type: "POST",
        url: "data/usr-handler.php",
        data: "get_usr="+plaintext,
        cache: false,
        success: function(data){

            var json = $.parseJSON(data);
            $(json).each(function(i,val){
                $('#usrid').val(val.usr_id);
                $('#pat_fullname').val(val.pat_fullname);
                $("#urdate").val(val.indate);
                $("#pus").val(val.usr_pus).change();
                $("#uterus").val(val.usr_uterus).change();
                $("#size1").val(val.usr_size_1);
                $("#size2").val(val.usr_size_2);
                $("#size3").val(val.usr_size_3);
                $("#contour").val(val.usr_contour);
                $("#echopattern").val(val.usr_echopattern);
                $("#echorem").val(val.usr_echorem);
                $("#endometrium").val(val.usr_endometrium);
                $("#endometrium_sel").val(val.usr_endometrium_sel);
                $("#endorem").val(val.usr_endometrium_rem);
                $("#cer1").val(val.usr_cer1);
                $("#cer2").val(val.usr_cer2);
                $("#ro1").val(val.usr_ro1);
                $("#ro2").val(val.usr_ro2);
                $("#ro3").val(val.usr_ro3);
                $("#rigrem").val(val.usr_ro_rem);
                $("#lo1").val(val.usr_lo1);
                $("#lo2").val(val.usr_lo2);
                $("#lo3").val(val.usr_lo3);
                $("#lefrem").val(val.usr_lo_rem);
                $("#cdsf").val(val.usr_cdsf);
                $("#opm").val(val.usr_opm);
                $("#impre").val(val.usr_impre);

                if(val.usr_cer_urm=="on"){
                    $('.flat-red').iCheck('check');
                }
            })
        }
    })

}