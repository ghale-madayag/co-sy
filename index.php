<?php
    require_once('data/session.php');
    confirm_logged_in();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Co-Sy Fertility Clinic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php require_once('inc/header.php');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <?php require_once("inc/logo.php");?>

    <!-- Header Navbar -->
   <?php require_once('inc/nav.php');?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <?php require_once('inc/sidepanel.php');?>

      <!-- search form (Optional) -->
      <?php require_once('inc/formsearch.php');?>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <?php require_once('inc/sidebarmenu.php');?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li class="active">Here</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Information box -->
      <?php require_once('inc/info-box.php');?>

      <div class="row">
        <div class="col-md-8">
          <?php require_once('inc/graph.php');?>
        </div>
        <div class="col-md-4">
          <?php require_once('inc/rec-pat.php');?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">

    <!-- Default to the left -->
   <?php require_once('inc/footer.php');?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bower_components/chart.js/Chart.js"></script>
<script src="js/aes.js"></script>
<script src="js/function.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    infoboxPat()
    loadProfile(<?php echo $_SESSION['user_id'];?>);
    countUser();
    recentPat();
    loadGraph();
    getTitle();
    countUltrasound();
    countEmb();
  })
</script>
</body>
</html>