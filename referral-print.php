<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Ultrasound | Co-Sy Fertility Clinic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
        <img src="img/logo.png" width="60"/>
          
        </h2>
        <center style="margin-bottom:100px;">
          <span class="pull-left">
            Date: <span id="date"></span>
            </span>
        </center>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    <div class="row invoice-info">
        
        <center style="text-align:justify;padding:20px;">
            <p>To Whom It May Concern:</p>
            <br/>
            <p>Respectfully referring <span id="patname"></span> with diagnosis of <span id="desc"></span></p>
            <br/>
            <br/>
            <br/>
            <h5 style="line-height: 0;font-weight:bold;">EILEEN CO-SY, MD, FPOGS</h5>
            <p>OB-GYN SONOLOGIST</p>
        </center>    
      <!-- /.col -->
    </div>
    
    <!-- /.row -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <div class="footer">
        <div class="col-xs-4 pull-left">
            
        </div>
    </div>
</div>
<!-- ./wrapper -->
</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="js/aes.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/referral-print.js"></script>
</html>
