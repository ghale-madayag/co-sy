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
            <h4>EMBRYOLOGY SUMMARY REPORT</h4>
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
          Email: <span id="email"></span>
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
        <table class="table esr-print" style="font-size:12px;">
        <tr>
            <td style="width:40%">Cycle No:</td>
            <td id="cycle"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="width:40%">OPU Date:</td>
            <td id="opudate"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="width:40%">1. Total No. of Egg Collected:</td>
            <td id="tnec"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="width:40%">2. Total No. of Empty Follicle:</td>
            <td id="tnef"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">3. Total No. of Empty Zona:</td>
            <td id="tnez"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">4. Total No. of Immature Egg:</td>
            <td id="imeg"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">5. Total No. of Mature Egg:</td>
            <td id="tnme"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">6. Total No. of Atretic Egg:</td>
            <td id="tnae"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">7. Total No. of Pathenogenic Egg:</td>
            <td id="tnpe"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">8. Total No. of Egg Available for injection:</td>
            <td id="tneafi"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">9. Total No. of Egg Fertilized:</td>
            <td id="tnefer"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">10. Total No. of Egg Cleaved:</td>
            <td id="tnecle"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">11. Total No. of Embryo(s) Transferred:</td>
            <td id="tnetran"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">12. Grade of Embryo(s) Transferred:</td>
            <td id="getran"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">13. Total No. of Embryo(s) Discarded:</td>
            <td id="tned"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">14. Total No. of Embryo(s) Frozen:</td>
            <td id="tnefro"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">15. Husband's Semen Analysis of OPU Day:</td>
            <td id="husband"></td>
            <td id=""></td>
            <td id=""></td>
        </tr>
        <tr>
            <td style="width:40%">Embryologist:</td>
            <td id="embryologist"></td>
            <td id=""></td>
            <td id=""></td>
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
<script type="text/javascript" src="js/esr-print-func.js"></script>
</html>
