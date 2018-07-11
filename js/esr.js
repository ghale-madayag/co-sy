$(document).ready(function(){
    $("form#form-esr-edit").on('submit', function(e){
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: "data/esr-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                if (data==1) {
                    recentEsr();
                    toastSuccess("Successfully Updated", "You updated data <a href='all-esr.php'> View All</a>");
                }
            }
        })

        e.preventDefault();
    })
    $("form#form-esr-add").on('submit', function(e){
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: "data/esr-handler.php",
            data: formData,
            cache: false,
            async: false,
            processData: false,
            contentType: false,
            success: function(data){
                if (data==1) {
                    $("input[type=text],input[type=number]").val("");
                    $("#patname").val('').change();
                    recentEsr();
                    toastSuccess("Successfully Registered", "You added new data <a href='all-esr.php'> View All</a>");
                }
            }
        })
        e.preventDefault();
    })

    $("#edit").on('click', function(){
        var len = $("input[name='esr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='esr-chk']:checked"), function(){ 
                var formData = $(this).val();
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.location.replace('edit-esr.php?patient='+encryptedAES);
            });
        }
    })

    $("#print").on('click', function(){
        var len = $("input[name='esr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else if(len>1){
            alert('Please select only one record');
        }else{
            $.each($("input[name='esr-chk']:checked"), function(){ 
                var formData = $(this).val(); 
                var encryptedAES = CryptoJS.AES.encrypt(formData, "My Secret Passphrase");
                window.open('esr-print.php?patient='+encryptedAES, '_blank');
            });
        }
    })

    $("#del").on('click', function(){
        var len = $("input[name='esr-chk']:checked").length;

        if(len==0){
            alert('Please select record');
        }else{
           var del = confirm("Are you sure you want to delete the patient record?");

           if(del==true){
                $.each($("input[name='esr-chk']:checked"), function(){
                    var formData = $(this).val();
                
                    $.ajax({
                        type: "POST",
                        url: "data/esr-handler.php",
                        data: "del=true&esr="+formData,
                        cache: false,
                        success: function(data){
                            toastSuccess("Successfully Deleted", "Record was successfully deleted");
                            refresh("esr-all");
                        }
                    })
                });
           }
        }
    })

    $('#export').click(function(){ $('.buttons-excel').click(); });
})

function getAllEsr() {
    
	//iCheck for checkbox and radio inputs
	  /*------ datatables all products---------*/
    var table = $('#esr-all').DataTable( {
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
            "url": "data/esr-handler.php",
            "dataSrc": ""
        },
         "columns": [
            { "data": "esrid" },
            { "data": "date" },
            { "data": "fullname" },
            { "data": "cycle" },
            { "data": "opudate" },
            { "data": "tnec" },
            { "data": "tnef" },
            { "data": "tnez" },
            { "data": "imeg" },
            { "data": "tnme" },
            { "data": "tnae" },
            { "data": "tnpe" },
            { "data": "tneafi" },
            { "data": "tnefer" },
            { "data": "tnecle" },
            { "data": "tnetran" },
            { "data": "getran" },
            { "data": "tned" },
            { "data": "tnefro" },
            { "data": "husband" },
            { "data": "embryologist" }
        ],
         'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<div class="md-checkbox"><input type="checkbox" name="esr-chk" class="flat-red" name="mt-chk" value="'+$('<div/>').text(data).html()+'" id="'+$('<div/>').text(data).html()+'"><label for="'+$('<div/>').text(data).html()+'"></label></div>';
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
            '<button type="button" class="btn btn-default btn-sm" title="Add" onclick="window.location.href=\'add-esr.php\'"><i class="fa fa-plus"></i> Add New</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="print" title="Print"><i class="fa fa-print"></i> Print</button>'+
            '<button type="button" class="btn btn-default btn-sm" id="export" title="Export"><i class="fa fa-cloud-download"></i> Export to Excel</button>'+
          '</div>'+
        '</div>');

     $("div.toolbar").css('float','left');

     $("#esr-all tbody").on('click', 'tr td:not(:first-child)', function() {
        var data = table.row(this).data();
        var encryptedAES = CryptoJS.AES.encrypt(data.esrid, "My Secret Passphrase");
        window.location.replace('esr-view.php?patient='+encryptedAES);
   })
}

function getesrInfo(){
    var plaintext = decrypt('patient');    
    $.ajax({
        type: "POST",
        url: "data/esr-handler.php",
        data: "get_esr="+plaintext,
        cache: false,
        success: function(data){
            
            var json = $.parseJSON(data);
            $(json).each(function(i,val){
                $("#esrid").val(val.esrid)
                $("#pat_fullname").val(val.fullname);
                $("#esdate").val(val.esdate);
                $("#cycle").val(val.cycle);
                $("#opudate").val(val.opudate);
                $("#tnec").val(val.tnec);
                $("#rt").val(val.rt);
                $("#lt").val(val.lt);
                $("#tnef1").val(val.tnef1);
                $("#tnef2").val(val.tnef2);
                $("#tnez1").val(val.tnez1);
                $("#tnez2").val(val.tnez2);
                $("#pi").val(val.emb_pi);
                $("#mi").val(val.mi);
                $("#tnme").val(val.tnme);
                $("#tnae1").val(val.tnae1);
                $("#tnae2").val(val.tnae2);
                $("#tnpe").val(val.tnpe);
                $("#tneafi1").val(val.tneafi1);
                $("#tneafi2").val(val.tneafi2);
                $("#tneafi3").val(val.tneafi3);
                $("#tnefer1").val(val.tnefer1);
                $("#tnefer2").val(val.tnefer2);
                $("#tnefer3").val(val.tnefer3);
                $("#tnecle").val(val.tnecle);
                $("#tnetran").val(val.tnetran);
                $("#getran").val(val.getran);
                $("#tned").val(val.tned);
                $("#tnefro").val(val.tnefro);
                $("#density").val(val.density);
                $("#motility").val(val.motility);
                $("#morphology").val(val.morphology);
                $("#embryologist").val(val.embryologist);
            })
        }
    })

}