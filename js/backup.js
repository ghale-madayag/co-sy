$(document).ready(function(){
    $("#backup_btn").on('click', function(){
        $.ajax({
          type: 'POST',
          data: 'backup=true',
          url: 'data/backup-handler.php',
          cache: false,
          success: function(data){
              toastSuccess("Your database has been successfully backup on your computer!");
              //window.open(data, '_blank');
              downloadFile(data);
              //$("<a>").attr("href", data).attr("target", "_self")[0].click();
          }
        });
    });

    $("form#form-restore").on('submit', function(e){
      var formData = new FormData($(this)[0]);
      $.ajax({
          type: "POST",
          url: 'data/restore-handler.php',
          data: formData,
          cache: false,
          async: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            //ajaxLoader();
          },
          success: function(data){
            
            if (data==1) {
                toastSuccess("Your database has been retored successfully");
                $("#modal-restore").modal('hide');
            }else{
                toastErr("Error:","Failed to restore your database");
            }

          }
        });
      e.preventDefault();
    });
});

function downloadFile(filePath) {
    var link = document.createElement('a');
    link.href = filePath;
    link.download = filePath.substr(filePath.lastIndexOf('/') + 1);
    link.click();
  }
