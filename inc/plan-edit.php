<div class="row">
    <div class="col-md-8">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Plan
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form id="form-plan-edit" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label for="patname">Patient Name: </label>
                            <input type="hidden" id="planid" name="planid">
                            <input type="text" class="form-control" id="pat_fullname" name="pat_fullname" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="form-group">
                            <label for="plan_desc">Type the plan: </label>
                            <textarea class="form-control" rows="8" id="plan_desc" name="plan_desc"></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" name="regnew" class="btn btn-success pull-right">Update</button>
                    </div>
                </form>
            </div>
        </div>
    <!-- /.box -->
    </div>
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
                    <a href="plan.php" class="uppercase">View All Record</a>
                </div>

            </div>
            </div>
    </div>
    
</div>