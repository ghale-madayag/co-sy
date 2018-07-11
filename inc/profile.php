<div class="row">
  <div class="col-md-4">
    <div class="box box-solid">

      <!-- /.box-header -->
      <div class="box-body">
        <div class="circle-text-profile profile-user-img"></div>
        <!-- <img class="profile-user-img img-responsive img-circle" src="img/user/avatar.png" alt="User profile picture"> -->
        <h3 class="profile-username text-center profile-name">Aileen B. Manicdos</h3>
        <p class="text-muted text-center">Adminsitrator</p>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
             <i class="fa fa-envelope"></i><span class="prof-mar"></span> <span class="email">admin@gmail.com</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-phone"></i><span class="prof-mar"></span> <span class="contact">(+63) 917-5795111</span>
          </li>
        </ul>
        <center>
          <a href="#" class="btn btn-default btn-block" onclick="editProfile(user_id);">Edit</a>
        </center>
      </div>
      <!-- /.box-body -->
    </div>
    <div class="box box-solid">
      <!-- /.box-header -->
      <div class="box-body">
         <ul class="list-group list-group-unbordered">
             <h4>User Account</h4>
            <li class="list-group-item">
               <i class="fa fa-user"></i><span class="prof-mar"></span> <span class="email">admin@gmail.com</span>
            </li>
            <li class="list-group-item">
              <i class="fa fa-lock"></i><span class="prof-mar"></span> ••••••••••
            </li>
          </ul>

          <center>
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-pass">Update Password</a>
          </center>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

<!--list of user-->
<div class="col-md-8">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">List of Users</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <ul class="products-list product-list-in-box">
      
      <!-- /.item -->
      </ul>
    <!-- /.users-list -->
    </div>
  <!-- /.box-body -->
  <div class="box-footer text-center">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#register">
              Register New User
    </button>
  </div>
    <!-- /.box-footer -->
  </div>
</div>


    <!-- /.box -->
</div>

<!-- Modal Info-->
<div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Information</h4>
      </div>
      <div class="modal-body">
       <form id="form-update" class="form-horizontal" enctype="multipart/form-data" method="post">
          <input type="hidden" name="editPro" id="editPro"/>
          <input type="hidden" name="userId-edit" id="userId-edit"/>
          <div class="box-body">
            <div class="form-group">
              <label for="fname-edit" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="fname-edit" name="fname-edit">
              </div>
            </div>
            <div class="form-group">
              <label for="mname-edit" class="col-sm-3 control-label">Middle Initial:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="mname-edit" name="mname-edit" maxlength="1">
              </div>
            </div>
            <div class="form-group">
              <label for="lname-edit" class="col-sm-3 control-label">Last Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="lname-edit" name="lname-edit">
              </div>
            </div>
            <div class="form-group">
              <label for="email-edit" class="col-sm-3 control-label">Email:</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email-edit" name="email-edit">
              </div>
            </div>
            <div class="form-group">
              <label for="email-edit" class="col-sm-3 control-label">Contact No:</label>
              <div class="col-sm-9">
                  <input type="text" class="form-control" id="mobile-edit" name="mobile-edit">
                </div>
            </div>
          </div>
          <!-- /.box-body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Password-->
<div class="modal fade" id="modal-pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Information</h4>
      </div>
      <div class="modal-body">
       <form id="form-update-pword" class="form-horizontal" enctype="multipart/form-data" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="curpass" class="col-sm-4 control-label">Current Password:</label>
              <input type="hidden" name="updatePword" value="updatePword">
              <div class="col-sm-8">
                <input type="password" class="form-control" id="curpass" name="curpass" required pattern=".{6,}" title="Minimum of 6 characters">
              </div>
            </div>
            <div class="form-group">
              <label for="newpass" class="col-sm-4 control-label">New Password:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="newpass" name="newpass" pattern=".{6,}" title="Minimum of 6 characters" required>
              </div>
            </div>
            <div class="form-group">
              <label for="conpass" class="col-sm-4 control-label">Confirm Password:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="conpass" name="conpass" pattern=".{6,}" title="Minimum of 6 characters" required>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Register new user-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register New User</h4>
      </div>
      <div class="modal-body">
       <form id="form-register" class="form-horizontal" enctype="multipart/form-data" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="fname" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="fname" name="fname" required>
              </div>
            </div>
            <div class="form-group">
              <label for="mname" class="col-sm-3 control-label">Middle Initial:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="mname" name="mname" maxlength="1">
              </div>
            </div>
            <div class="form-group">
              <label for="lname" class="col-sm-3 control-label">Last Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="lname" name="lname" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email:</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Contact No:</label>
              <div class="col-sm-9">
                  <input type="text" class="form-control" id="mobile" name="mobile" required>
                   <input type="hidden" class="form-control" id="pword" name="pword" value="123456">
                </div>
            </div>
          </div>
          <!-- /.box-body -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>