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
          <small class="pull-right">Date: <span id="date"></span></small>
        </h2>
        <center>
            <h4>ULTRASOUND REPORT</h4>
        </center>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    <div class="row invoice-info">
    
      <div class="col-sm-4 invoice-col">
        <address>
          <strong><span id="patname" style="font-size:18px;"></span></strong><br>
          Age: <span id="age"></span><br>
          Address: <span id="address"></span><br>
          Phone: <span id="contact"></span><br>
          Email: <span id="email"></span><br>
          Requested By: Dra. Eileen Co-Sy
        </address>
      </div>
    <div class="col-sm-4 invoice-col">
    </div>
    <div class="col-sm-4 invoice-col">
        <strong class="pull-right" style="font-size:18px;">Patient #: <span id="patid"></span></strong><br>
    </div>
      <!-- /.col -->
    </div>
    <div class="table-responsive">
        <table class="table">
        <tr>
            <th style="width:30%">Pelvic Ultrasound:</th>
            <td id="pus"></td>
        </tr>
        <tr>
            <th>Uterus:</th>
            <td id="uterus"></td>
        </tr>
        <tr>
            <th>Size:</th>
            <td id="size"></td>
        </tr>
        <tr>
            <th>Contour:</th>
            <td id="contour"></td>
        </tr>
        <tr>
            <th>Echopattern:</th>
            <td id="echopattern"></td>
        </tr>
        <tr>
            <th>Echopattern Remarks:</th>
            <td id="echorem"></td>
        </tr>
        <tr>
            <th>Endometrium:</th>
            <td id="endometrium"></td>
        </tr>
        <tr>
            <th>Cervix:</th>
            <td id="cervix"></td>
        </tr>
        <tr>
            <th>Unremarkable:</th>
            <td id="urm"></td>
        </tr>
        <tr>
            <th>Right Ovary:</th>
            <td id="ro"></td>
        </tr>
        <tr>
            <th>Left Ovary:</th>
            <td id="lo"></td>
        </tr>
        <tr>
            <th>CUL-DE-SAC-FLUID:</th>
            <td id="cdsf"></td>
        </tr>
        <tr>
            <th>Other Pelvic Mass:</th>
            <td id="opm"></td>
        </tr>
        <tr>
            <th>Impression:</th>
            <td id="impre"></td>
        </tr>
        </table>
    </div>
    <!-- /.row -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <div class="footer">
        <div class="col-xs-4 pull-right">
            <h4 style="line-height: 0;">EILEEN CO-SY, MD, FPOGS</h4>
            <span>OB-GYN SONOLOGIST</span>
        </div>
    </div>
</div>
<!-- ./wrapper -->
</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="js/aes.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript" src="js/usr-print-func.js"></script>
</html>
