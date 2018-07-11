<div class="row">
  <div class="col-md-8">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          History
        </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form id="form-history" enctype="multipart/form-data" method="post">
        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              <label for="patname">Patient Name: </label>
              <select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>  
            </div>
          </div>
        </div>
        <div class="box-group" id="accordion">
          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                  MENSTRUAL HISTORY
                </a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="b1" class="col-md-8 control-label">Age at first period: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="b1" name="b1" placeholder="Years">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b2" class="col-md-8 control-label">If your menstrual periods are regular; periods start every: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="b2" name="b2" placeholder="Days">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b3" class="col-md-8 control-label">lf your menstrual periods are irregular; periods start every: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="b3" name="b3" placeholder="e.g.,12 to 60">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b4" class="col-md-8 control-label">Duration of bleeding: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="b4" name="b4" placeholder="Days">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b5" class="col-md-8 control-label">Does bleeding or spotting occur between periods? </label>
                    <div class="col-xs-1">
                      <input type="radio" name="b5" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="b5" value="no"> No
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b6" class="col-md-8 control-label">Does bleeding or spotting occur after intercourse?</label>
                    <div class="col-xs-1">
                      <input type="radio" name="b6" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="b6" value="no"> No
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b7" class="col-md-8 control-label">First day of last menstrual period  : </label>

                    <div class="col-xs-3">
                      <input type="date" class="form-control" id="b7" name="b7" placeholder="Days">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b8" class="col-md-8 control-label">Is pain associated with periods?</label>
                    <div class="col-xs-1">
                      <input type="radio" name="b8" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="b8" value="no"> No
                    </div>
                    <div class="col-xs-2">
                       <input type="radio" name="b8" value="occa"> Occasionally
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="b9" class="col-md-8 control-label">If yes, is it: before menses? ?</label>
                    <div class="col-xs-2">
                      <input type="radio" name="b9" value="during"> during menses
                    </div>
                    <div class="col-xs-2">
                       <input type="radio" name="b9" value="both"> both
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                  PREGNANCY HISTORY (All pregnancies)             
                </a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="c1" class="col-md-8 control-label">Year: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c1" name="c1" placeholder="Year">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c2" class="col-md-8 control-label">Place of delivery or abortion: </label>

                    <div class="col-xs-4">
                      <input type="text" class="form-control" id="c2" name="c2" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c3" class="col-md-8 control-label">Duration Preg.: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c3" name="c3" placeholder="">
                    </div>
                  </div>
               </div> 
               <div class="row">
                  <div class="form-group">
                    <label for="c4" class="col-md-8 control-label">Hrs. of Labor: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c4" name="c4" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c5" class="col-md-8 control-label">Type of Delivery: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c5" name="c5" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c6" class="col-md-8 control-label">Complications Mother and/or Infant: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c6" name="c6" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="c7" class="col-md-8 control-label">Sex:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="c7" value="m"> M
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="c7" value="f"> F
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c8" class="col-md-8 control-label">Birth Weight:</label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="c8" name="c8" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="c9" class="col-md-8 control-label">Present Health:</label>

                    <div class="col-xs-4">
                      <input type="text" class="form-control" id="c9" name="c9" placeholder="">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                  BIRTH CONTROL HISTORY 
                </a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="d1" class="col-md-8 control-label">What birth control method(s) do you currently use?:</label>

                    <div class="col-xs-4">
                      <input type="text" class="form-control" id="d1" name="d1" placeholder="">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                  SEXUAL HISTORY         
                </a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="e1" class="col-md-8 control-label">Do you have a sexual partner?:</label>

                    <div class="col-xs-1">
                      <input type="radio" name="e1" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="e1" value="no"> No
                    </div>
                    <div class="col-xs-1">
                      <input type="radio" name="e1-2" value="m"> M
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="e1-2" value="f"> F
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="e2" class="col-md-8 control-label">Are there concerns about your sexual activity which you may want to discuss with your doctor?:</label>

                    <div class="col-xs-1">
                      <input type="radio" name="e2" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="e2" value="no"> No
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                  PAST OBSTETRICAL/GYNECOLOGICAL SURGERIES 
                </a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="f1" class="col-md-3 control-label">Check any that apply or:</label>

                    <div class="col-xs-1">
                      <input type="checkbox" name="f1" id="f1">
                      <label for="f1">
                        None
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f2" id="f2">
                      <label for="f2">
                        D&C
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f3" id="f3">
                      <label for="f3">
                        hysteroscopy
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-3">
                      <input type="checkbox" name="f4" id="f4">
                      <label for="f4">
                        infertility surgery  
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f5" id="f5">
                      <label for="f5">
                        tuboplasty   
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f6" id="f6">
                      <label for="f6">
                        laparoscopy   
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f7" id="f7">
                      <label for="f7">
                        hysterectomy    
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="f8" id="f8">
                      <label for="f8">
                        hysterectomy    
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">

                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f9" name="f9" placeholder="other (specify)">
                    </div>
                  </div>
               </div>
             <!--   <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="d10" name="d10" placeholder="Year">
                    </div>
                  </div>
               </div> -->
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f10" name="f10" placeholder="ovarian surgery ">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f11" name="f11" placeholder="L cyst(s) removed">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f12" name="f12" placeholder="R cyst(s)">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f13" name="f13" placeholder="L ovary removed  ">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f14" name="f14" placeholder="vaginal or bladder">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f15" name="f15" placeholder="(vaginal) for">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f16" name="f16" placeholder="(abdominal) ">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f17" name="f17" placeholder="ovarian">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f18" name="f18" placeholder="removed ovarian">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f19" name="f19" placeholder="tubal ligation">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f20" name="f20" placeholder="R ovary removed ">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f21" name="f21" placeholder="repair">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f22" name="f22" placeholder="prolapsed or incontinence ">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f23" name="f23" placeholder="cesarean section">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                     <input type="text" class="form-control" id="f24" name="f24" placeholder="myomectomy">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                  PAST SURGICAL HISTORY (Not OB/GYN)      
                </a>
              </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="g1" class="col-md-4 control-label">List all surgeries and their year   or:</label>

                    <div class="col-xs-1">
                      <input type="checkbox" name="g1" id="g1">
                      <label for="g1">
                        None
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="g2" class="col-md-3 control-label">Surgery:</label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g2" name="g2" placeholder="">
                    </div>
                    <label for="g3" class="col-md-3 control-label">Year: </label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g3" name="g3" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="g4" class="col-md-3 control-label">Surgery:</label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g4" name="g4" placeholder="">
                    </div>
                    <label for="g5" class="col-md-3 control-label">Year: </label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g5" name="g5" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="g6" class="col-md-3 control-label">Surgery:</label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g6" name="g6" placeholder="">
                    </div>
                    <label for="g7" class="col-md-3 control-label">Year: </label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="g7" name="g7" placeholder="">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                  PAP SMEAR/MAMMOGRAM HISTORY 
                </a>
              </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="h1" class="col-md-3 control-label">Date of last pap smear:</label>

                    <div class="col-xs-3">
                      <input type="text" class="form-control" id="h1" name="h1" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="h2" class="col-md-5 control-label">Have you had abnormal pap smears?:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="h2" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="h2" value="no"> No
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="h3" class="col-md-5 control-label">Have you had treatment for abnormal smears?:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="h3" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="h3" value="no"> No
                    </div>
                  </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label class="col-md-6 control-label">If yes, what type(s) of treatment have you had?</label>
                </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label for="h4" class="col-md-3 control-label">cryotherapy:</label>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h4" name="h4" placeholder="Year">
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label for="h5" class="col-md-3 control-label">laser :</label>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h5" name="h5" placeholder="Year">
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label for="h6" class="col-md-3 control-label">cone biopsy:</label>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h6" name="h6" placeholder="Year">
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label for="h7" class="col-md-3 control-label">loop excision (LEEP):</label>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h7" name="h7" placeholder="Year">
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="form-group">
                  <label for="h8" class="col-md-3 control-label">Date of last mammogram:</label>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h8" name="h8" placeholder="Month">
                  </div>
                  <div class="col-xs-3">
                     <input type="text" class="form-control" id="h9" name="h9" placeholder="Year">
                  </div>
                </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="h10" class="col-md-5 control-label">Have you had an abnormal mammogram?:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="h10" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="h10" value="no"> No
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                 OTHER PAST GYNECOLOGICAL HISTORY    
                </a>
              </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                 <div class="form-group">
                   <label for="i1" class="col-md-5 control-label">Check any that apply</label>
                 </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="i1" id="i1">
                      <label for="i1">
                        None
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-3">
                      <input type="checkbox" name="i2" id="i2">
                      <label for="i2">
                        Venereal warts
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-3">
                      <input type="checkbox" name="i3" id="i3">
                      <label for="i3">
                        Herpes – genital
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="i4" id="i4">
                      <label for="i4">
                        Syphilis
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-5">
                      <input type="checkbox" name="i5" id="i5">
                      <label for="i5">
                        Pelvic inflammatory disease    
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="i6" id="i6">
                      <label for="i6">
                        Endometriosis     
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="i7" id="i7">
                      <label for="i7">
                        Chlamydia   
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-1">
                      <input type="checkbox" name="i8" id="i8">
                      <label for="i8">
                        Gonorrhea 
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-3">
                      <input type="checkbox" name="i9" id="i9">
                      <label for="i9">
                        Vaginal infections  
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                      <input type="text" class="form-control" name="i10" id="i10" placeholder="Other">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                  PAST MEDICAL HISTORY 
                </a>
              </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
                <div class="row">
                  <div class="form-group">
                    <label for="j1" class="col-md-3 control-label">Check any that apply or:</label>

                    <div class="col-xs-1">
                      <input type="checkbox" name="j1" id="j1">
                      <label for="j1">
                        None
                      </label>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                      <input type="checkbox" name="j2" id="j2">
                      <label for="j2">
                        Arthritis  
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="j3" id="j3">
                      <label for="j3">
                        Emphysema    
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="j4" id="j4">
                      <label for="j4">
                        Bronchitis
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="j5" id="j5">
                        <label for="j5">
                          Epilepsy  
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="j6" id="j6">
                      <label for="j6">
                        HIV+      
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="j7" id="j7">
                      <label for="j7">
                        HIV+   
                      </label>
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
           <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                 CURRENT MEDICATIONS 
                </a>
              </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <label for="k1" class="col-md-4 control-label">(Include dose (amount) per day:</label>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="k1" class="col-md-2 control-label">Medication :</label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k1" name="k1" placeholder="">
                    </div>
                    <label for="k2" class="col-md-2 control-label">Dose: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k2" name="k2" placeholder="">
                    </div>
                    <label for="k3" class="col-md-2 control-label">Frequency : </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k3" name="k3" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="k1-2" class="col-md-2 control-label">Medication :</label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k1-2" name="k1-2" placeholder="">
                    </div>
                    <label for="k2-2" class="col-md-2 control-label">Dose: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k2-2" name="k2-2" placeholder="">
                    </div>
                    <label for="k3-2" class="col-md-2 control-label">Frequency : </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k3-2" name="k3-2" placeholder="">
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <label for="k1-3" class="col-md-2 control-label">Medication :</label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k1-3" name="k1-3" placeholder="">
                    </div>
                    <label for="k2-3" class="col-md-2 control-label">Dose: </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k2-3" name="k2-3" placeholder="">
                    </div>
                    <label for="k3-3" class="col-md-2 control-label">Frequency : </label>

                    <div class="col-xs-2">
                      <input type="text" class="form-control" id="k3-3" name="k3-3" placeholder="">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                  DO YOU CURRENTLY?
                </a>
              </h4>
            </div>
            <div id="collapse11" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                 <div class="form-group">
                    <label for="l1" class="col-md-1 control-label">Smoke:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="l1" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="l1" value="no"> No
                    </div>
                    <label for="l2" class="col-md-2 control-label">packs/day:</label>
                    <div class="col-xs-1">
                      <input type="text" name="l2" id="l2" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="l3" class="col-md-1 control-label">Use alcohol:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="l3" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="l3" value="no"> No
                    </div>
                    <label for="l4" class="col-md-2 control-label">wine (glasses/day):</label>
                    <div class="col-xs-1">
                      <input type="text" name="l4" id="l4" class="form-control">
                    </div>
                    <label for="l5" class="col-md-2 control-label">beer (bottles/day):</label>
                    <div class="col-xs-1">
                      <input type="text" name="l5" id="l5" class="form-control">
                    </div>
                    <label for="l6" class="col-md-2 control-label">hard liquid (oz./day):</label>
                    <div class="col-xs-1">
                      <input type="text" name="l6" id="l6" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="l7" class="col-md-4 control-label">Use illicit drugs:</label>
                    <div class="col-xs-1">
                      <input type="radio" name="l7" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="l7" value="no"> No
                    </div>
                    <label for="l8" class="col-md-2 control-label">type:</label>
                    <div class="col-xs-1">
                      <input type="text" name="l8" id="l8" class="form-control">
                    </div>
                    <label for="l9" class="col-md-2 control-label">amount:</label>
                    <div class="col-xs-1">
                      <input type="text" name="l9" id="l9" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label for="l10" class="col-md-2 control-label">Exercise:</label>
                    <label for="l10" class="col-md-2 control-label">Type:</label>
                    <div class="col-xs-3">
                      <input type="text" name="l10" id="l10" class="form-control">
                    </div>
                    <label for="l11" class="col-md-2 control-label">How often:</label>
                    <div class="col-xs-3">
                      <input type="text" name="l11" id="l11" class="form-control">
                    </div>
                  </div>
               </div>
              </div>
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                DRUG ALLERGIES 
                </a>
              </h4>
            </div>
            <div id="collapse12" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-1">
                      <input type="radio" name="m1" value="yes"> Yes
                    </div>
                    <div class="col-xs-1">
                       <input type="radio" name="m1" value="no"> No
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <label class="col-md-2 control-label">List:</label>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="m2" id="m2" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="m3" id="m3" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="m4" id="m4" class="form-control">
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="panel box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                 FAMILY HISTORY 
                </a>
              </h4>
            </div>
            <div id="collapse13" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                      <input type="checkbox" name="n1" id="n1">
                      <label for="n1">
                        Diabetes   
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="n2" id="n2">
                      <label for="n2">
                        Hypertension      
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="n3" id="n3">
                      <label for="n3">
                        Heart Disease 
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="n4" id="n4">
                        <label for="n4">
                          Cancer   
                        </label>
                    </div>
                     <div class="form-group">
                      <label for="n5" class="col-md-1 control-label">Other:</label>
                      <div class="col-xs-4">
                        <input type="text" name="n5" id="n5" class="form-control">
                      </div>
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="col-xs-4">
                  <input type="checkbox" name="n6" id="n6">
                  <label for="n6">
                    None of the above:      
                  </label>
                </div>
              </div>
               <div class="row">
                 <div class="form-group">
                    <label class="col-md-6 control-label">If “yes” to any, please list affected relatives:</label>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="n7" id="n7" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="n8" id="n8" class="form-control">
                    </div>
                  </div>
               </div>
               <div class="row">
                 <div class="form-group">
                    <div class="col-xs-3">
                      <input type="text" name="n9" id="n9" class="form-control">
                    </div>
                  </div>
               </div>
              
              </div>
            </div>
          </div>
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
               OTHER SYMPTOMS
                </a>
              </h4>
            </div>
            <div id="collapse14" class="panel-collapse collapse">
              <div class="box-body">
               <!--content here-->
               <div class="row">
                 <div class="form-group">
                    <label class="col-md-6 control-label">Have you had recent?:</label>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group">
                    <div class="col-xs-4">
                      <input type="checkbox" name="o1" id="o1">
                      <label for="o1">
                        weight loss    
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o2" id="o2">
                      <label for="o2">
                        weight gain       
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o3" id="o3">
                      <label for="o3">
                        change in energy 
                      </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o4" id="o4">
                        <label for="o4">
                          change in exercise tolerance    
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o5" id="o5">
                        <label for="o5">
                          hair growth    
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o6" id="o6">
                        <label for="o6">
                          hair loss 
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o7" id="o7">
                        <label for="o7">
                         change in urinary function    
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o8" id="o8">
                        <label for="o8">
                          hot flushes/flashing   
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o9" id="o9">
                        <label for="o9">
                           breast discharge   
                        </label>
                    </div>
                    <div class="col-xs-4">
                      <input type="checkbox" name="o10" id="o10">
                        <label for="o10">
                          none of the above   
                        </label>
                    </div>
                     <div class="form-group">
                      <label for="o11" class="col-md-1 control-label">Other:</label>
                      <div class="col-xs-4">
                        <input type="text" name="o11" id="o11" class="form-control">
                      </div>
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">

        <button type="submit" name="regnew" class="btn btn-success pull-right">Submit History</button>

      </div>
      </form>
    </div>
    <!-- /.box -->
    <div class="col-md-4">

      <div class="box box-default">

        <div class="box-header with-border">

            <h3 class="box-title">Recenlty Added</h3>

            <div class="box-tools pull-right">

                <button type="button" class="btn btn-box-tool" data-widget="collapse">

                    <i class="fa fa-minus"></i>

                </button>

            </div>

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

            <a href="history.php" class="uppercase">View All Record</a>

        </div>

    </div>
    </div>

</div>