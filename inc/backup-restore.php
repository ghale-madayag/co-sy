<div class="row">
    <div class="col-md-3">
        <center>
          <div class="box box-solid">
            <div class="box-body">
                <a class="btn btn-app bg-olive" id="backup_btn">
                    <i class="fa fa-save"></i> Backup
                </a>
                <a class="btn btn-app" data-toggle="modal" data-target="#modal-restore">
                    <i class="fa fa-history"></i> Restore
                </a>
            </div>
        </div>
        </center>
    </div>
</div>
<!-- Modal Restore-->
<div class="modal fade" id="modal-restore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Upload Database</h4>
        </div>
        <div class="modal-body">
          <form id="form-restore" class="form-horizontal" enctype="multipart/form-data" method="post" role="form">
            <div class="form-group" style="margin-left: 10px;">
              <label for="file-restore">File input</label>
              <input type="file" id="file-restore" accept=".sql" name="sql">
              <p class="help-block">Choose your backup file on your computer.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Restore</button>
        </div>
      </form>
    </div>
  </div>
</div>