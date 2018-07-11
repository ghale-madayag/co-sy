
<section class="invoice">
    <div class="row no-print">
        <div class="col-xs-12">
            <button type="button" class="btn btn-success pull-right" style="margin-right: 5px;" id="printBtn">
                <i class="fa fa-print"></i> Print Record
            </button>
        </div>
    </div>
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
        <div class="footer">
            <div class="col-xs-4 pull-right">
                <h4 style="line-height: 0;">EILEEN CO-SY, MD, FPOGS</h4>
                <span>OB-GYN SONOLOGIST</span>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->
      <!-- /.content -->
  </section>
