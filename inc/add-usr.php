<div class="row">
	<form method="post" id="form-usr-add" enctype="multipart/form-data">
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
							<label for="urdate">Date: </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="urdate" name="urdate" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="pus">Pelvic Ultrasound:</label>
							<select class="form-control" name="pus" id="pus">
								<option disabled selected value="-1">Select Ultrasound</option>
			                    <option value="Transvaginal">Transvaginal</option>
			                    <option value="Transabdominal">Transabdominal</option>
			                    <option value="Transrectal">Transrectal</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="uterus">Uterus:</label>
							<select class="form-control" name="uterus" id="uterus">
								<option disabled selected value="-1">Select Uterus</option>
			                    <option value="Antevered">Antevered</option>
			                    <option value="Retroverted">Retroverted</option>
			                    <option value="Midline">Midline</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label for="size1">Size: </label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="size1" id="size1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="size2" id="size2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="size3" id="size3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="contour">Contour:</label>
							<select class="form-control" name="contour" id="contour">
								<option disabled selected value="-1">Select Contour</option>
			                    <option value="Smooth">Smooth</option>
			                    <option value="Irregular">Irregular</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="echopattern">Echopattern:</label>
							<select class="form-control" name="echopattern" id="echopattern">
								<option disabled selected value="-1">Select Echopattern</option>
			                    <option value="Homogenous">Homogenous</option>
			                    <option value="Heterogenous">Heterogenous</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="echorem">Echopattern Remarks: </label>
							<textarea class="form-control" rows="3" id="echorem" name="echorem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label>Endometrium: </label>
						<div class="form-group">
							<div class="col-xs-4 no-padding">
								<input type="text" name="endometrium" id="endometrium" class="form-control"  placeholder="cms. Thick">
							</div>
							<div class="col-xs-8">
								<select class="form-control" name="endometrium_sel" id="endometrium_sel">
									<option disabled selected value="-1">Select</option>
				                    <option value="linear">Linear</option>
				                    <option value="trilaminar">Trilaminar</option>
				                    <option value="hyperechoic">Hyperechoic</option>
				                    <option value="heterogenous">Heterogenous</option>
				                    <option value="thickened">Thickened</option>
			                	</select>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<label>Cervix:</label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="cer1" id="cer1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="cer2" id="cer2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-5">
								<label>
									<input type="checkbox" name="urm" id="urm" class="flat-red">
									&nbsp; Unremarkable
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label>Endometrium Remarks:</label>
							<textarea  class="form-control" row="3" id="endorem" name="endorem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label>Right Ovary:</label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro1" id="ro1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro2" id="ro2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="ro3" id="ro3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<label>Left Ovary:</label>
						<div class="form-group">
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo1" id="lo1" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo2" id="lo2" class="form-control"  placeholder="cms">
							</div>
							<div class="col-xs-1">
								<p><div class="fa fa-close"></div></p>
							</div>
							<div class="col-xs-3 no-padding">
								<input type="text" name="lo3" id="lo3" class="form-control"  placeholder="cms">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Right Ovary Remarks:</label>
							<textarea  class="form-control" row="3" id="rigrem" name="rigrem"></textarea>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label>Left Ovary Remarks:</label>
							<textarea  class="form-control" row="3" id="lefrem" name="lefrem"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="cdsf">CUL-DE-SAC-FLUID:</label>
							<select class="form-control" name="cdsf" id="cdsf">
								<option disabled selected value="-1">Select CUL-DE-SAC-FLUID</option>
			                    <option value="None">None</option>
			                    <option value="Minimal">Minimal</option>
								<option value="Ascites">Ascites</option>
			                </select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="opm">Other Pelvic Mass:</label>
							<select class="form-control" name="opm" id="opm">
								<option disabled selected value="-1">Select Pelvic Mass</option>
			                    <option value="Absent">Absent</option>
			                    <option value="Present">Present, Specifically</option>
			                </select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="impre">Impression: </label>
							<textarea class="form-control" rows="3" id="impre" name="impre"></textarea>
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