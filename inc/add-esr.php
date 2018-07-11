<div class="row">
	<form method="post" id="form-esr-add" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Information</h3>
			</div>
			<div class="box-body" style="padding:20px;">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="patname">Patient Name: </label>
							<select id="patname" class="form-control select2" style="width:100%;;" name="patname" placeholder="Search..." required></select>	
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="esdate">Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="esdate" name="esdate" required>
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
						<div class="form-group">
							<label for="cycle">Cycle No: </label>
							<input type="text" name="cycle" id="cycle" class="form-control">
						</div>
                    </div>
                    <div class="col-xs-6">
						<div class="form-group">
							<label for="opudate">OPU Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="opudate" name="opudate" required>
							</div>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnec">Total No. of Egg Collected: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnec" id="tnec" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="rt" id="rt" class="form-control"  placeholder="Rt:">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="lt" id="lt" class="form-control"  placeholder="Lt:">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tnef1">Total No. of Empty Follicle: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnef1" id="tnef1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnef2" id="tnef2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnez1">Total No. of Empty Zona: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnez1" id="tnez1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnez2" id="tnez2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="pi">Total No. of Immature Egg: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="pi" id="pi" class="form-control"  placeholder="PI">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="mi" id="mi" class="form-control"  placeholder="MI">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnme">Total No. of Mature Egg: </label>
                            <input type="text" name="tnme" id="tnme" class="form-control"  placeholder="MII">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tnae1">Total No. of Atretic Egg: </label>
                        <div class="form-group">
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnae1" id="tnae1" class="form-control">
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="text" name="tnae2" id="tnae2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnpe">Total No. of Pathenogenic Egg: </label>
                            <input type="text" name="tnpe" id="tnpe" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="tneafi1">Total No. of Egg available for Injection: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi1" id="tneafi1" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi2" id="tneafi2" class="form-control" placeholder="insemination">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tneafi3" id="tneafi3" class="form-control" placeholder="insemination">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="tnefer1">Total No. of Egg Fertilized: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer1" id="tnefer1" class="form-control">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer2" id="tnefer2" class="form-control" placeholder="ICSI">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="tnefer3" id="tnefer3" class="form-control" placeholder="IVF">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnecle">Total No. of Egg Cleaved: </label>
                            <input type="text" name="tnecle" id="tnecle" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnetran">Total No. of Embryo(s) Transferred: </label>
                            <input type="text" name="tnetran" id="tnetran" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="getran">Grade of Embryo(s) Transferred: </label>
                            <input type="text" name="getran" id="getran" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tned">Total No. of Embryo(s)  Discarded: </label>
                            <input type="text" name="tned" id="tned" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tnefro">Total No. of Embryo(s)  Frozen: </label>
                            <input type="text" name="tnefro" id="tnefro" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label for="density">Husband's Semen Analysis on OPU Day: </label>
                        <div class="form-group">
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="density" id="density" class="form-control" placeholder="Density">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="motility" id="motility" class="form-control" placeholder="Motility">
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="text" name="morphology" id="morphology" class="form-control" placeholder="Morphology">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="embryologist">Embryologist: </label>
                            <input type="text" name="embryologist" id="embryologist" class="form-control">
                        </div>
                    </div>
                </div>
			</div>
			<div class="box-footer" style="padding:20px;">
				<button type="submit" name="regnew" class="btn btn-success pull-right">Register Report</button>
			</div>
		</div>
	</div>
	</form>
    <?php require_once('inc/rec-usr.php')?>
</div>