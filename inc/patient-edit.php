<div class="row">

	<div class="col-md-8">

		<form method="post" id="form-patient-edit" enctype="multipart/form-data">

		<div class="box box-default">

			<div class="box-header with-border">

				<h3 class="box-title">Personal Information</h3>

			</div>

			

			<div class="box-body">

				<div class="col-xs-6">

					<div class="form-group">

						<label for="pat-num">Patient Number: </label>

						<h4 id="pat-num-h" class="text-green" style="font-size: 22px;"></h4>

						<input type="hidden" name="pat-num-edit" id="pat-num" class="form-control">

					</div>

				</div>

				

				<div class="col-xs-6">

					<div class="form-group">

						<label for="lname">Surname: </label>

						<input type="text" name="lname" id="lname" class="form-control" required>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="fname">First Name: </label>

						<input type="text" name="fname" id="fname" class="form-control" required>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="mname">Middle Name: </label>

						<input type="text" name="mname" id="mname" class="form-control">

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="nname">Nickname: </label>

						<input type="text" name="nname" id="nname" class="form-control">

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="bday">Birthday: </label>

						<div class="input-group date">

							<div class="input-group-addon">

								<i class="fa fa-calendar"></i>

							</div>

							<input type="text" class="form-control pull-right" id="datepicker" name="bday" required>

						</div>

					</div>

				</div>

				

				<div class="col-xs-6">

					<div class="form-group">

						<label for="email">Email Address: </label>

						<input type="email" name="email" id="email" class="form-control" required>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="occu">Occupation: </label>

						<input type="text" name="occu" id="occu" class="form-control">

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="socstat">Social Status: </label>

						<select class="form-control" name="socstat" id="socstat">

							<option disabled selected value="-1">Select Status</option>

							<option value="Significant other">Significant other</option>

							<option value="Married">Married</option>

							<option value="Single">Single</option>

							<option value="Widowed">Widowed</option>

						</select>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="contact">Contact No: </label>

						<!-- <input type="text"  class="form-control" required> -->

						<div class="input-group">

		                  	<div class="input-group-addon">

		                    	<i class="fa fa-phone"></i>

		                  	</div>

		                  	<input type="text" class="form-control" data-inputmask='"mask": "(63) 999-999-9999"' data-mask name="contact" id="contact">

		                </div>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="addphi">Address in the Philippines: </label>

						<textarea class="form-control" rows="3" id="addphi" name="addphi"></textarea>

					</div>

				</div>

				<div class="col-xs-6">

					<div class="form-group">

						<label for="addabr">Address abroad: </label>

						<textarea class="form-control" rows="3" id="addabr" name="addabr"></textarea>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="col-md-4">

		<div class="box box-default">

			<div class="box-header with-border">

				<h3 class="box-title">Record</h3>

			</div>

			<div class="box-body">

				<div class="col-xs-6">

					<div class="form-group">

						<label for="wei">Weight: </label>

						<input type="text" name="wei" id="wei" class="form-control" placeholder="kg" required onkeyup="bmiComputation($(this).val(),$('#hei').val());" maxlength="10">

					</div>

					</div>

					<div class="col-xs-6">

						<div class="form-group">

							<label for="hei">Height: </label>

							<input type="text" maxlength="10" name="hei" id="hei" class="form-control" placeholder="cm" required onkeyup="bmiComputation($('#wei').val(),$(this).val());">

						</div>

					</div>

					<div class="col-xs-6">

						<div class="form-group">

							<label for="bmi">Body Mask Index: </label>

							<input type="text" id="bmiVal" class="form-control" disabled>

							<input type="hidden" name="bmi" id="bmi" class="form-control">

						</div>

					</div>

					<div class="col-xs-6">

						<label for="sys">Blood Pressure: </label>

						<div class="form-group">

							<div class="col-xs-6 no-padding">

								<input type="number" name="sys" id="sys" class="form-control" required placeholder="Sys">

							</div>

							<div class="col-xs-6 no-padding">

								<input type="number" name="dia" id="dia" class="form-control" required placeholder="Dia">

							</div>

						</div>

					</div>

					<div class="col-xs-12">

						<div class="form-group">

							<label for="CC">Chief Complaint: </label>

							<!-- <select class="form-control" name="complaint" id="complaint">

								<option disabled selected value="-1">Select Complaint</option>

			                    <option value="1">Status 1</option>

			                    <option value="2">Status 2</option>

			                </select> -->

							<input type="text" name="complaint" id="complaint" class="form-control">

						</div>

					</div>

					<div class="col-xs-6">

						<div class="form-group">

							<label for="lmp">Last Menstrual Period: </label>

							<div class="input-group date">

								<div class="input-group-addon">

									<i class="fa fa-calendar"></i>

								</div>

								<input type="text" class="form-control pull-right" id="lmp-date" name="lmp" required>

							</div>

						</div>

					</div>

					<div class="col-xs-6">

						<div class="form-group">

							<label for="pmp">Past Menstrual Period: </label>

							<div class="input-group date">

								<div class="input-group-addon">

									<i class="fa fa-calendar"></i>

								</div>

								<input type="text" class="form-control pull-right" id="pmp-date" name="pmp" required>

							</div>

						</div>

					</div>

			</div>

		</div>

	</div>
	<div class="col-md-8">
		<div class="box box-default">

			<div class="box-header with-border">

				<h3 class="box-title">Partner Information</h3>

			</div>

			<div class="box-body">
				<div class="row">
					<div class="col-xs-6">

						<div class="form-group">

							<label for="fname">Name: </label>

							<input type="text" name="fullname" id="fullname" class="form-control" required>

						</div>

					</div>
					<div class="col-xs-6">
						<label for="parbday">Birthday: </label>

						<div class="input-group date">

							<div class="input-group-addon">

								<i class="fa fa-calendar"></i>

							</div>

							<input type="text" class="form-control pull-right" id="parbday" name="parbday" >

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<div class="form-group">
							<label>Weight: </label>
							<input type="text" name="parwei" id="parwei" class="form-control" >
						</div>
					</div>
					<div class="col-xs-2">
						<div class="form-group">
							<label>Height: </label>
							<input type="text" name="parhei" id="parhei" class="form-control" >
						</div>
					</div>
					<div class="col-xs-2">
						<div class="form-group">
							<label>No. of Children: </label>
							<input type="text" name="noc" id="noc" class="form-control" >
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label>Occupation: </label>
							<input type="text" name="paroccu" id="paroccu" class="form-control" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<input type="checkbox" name="eversmoke" id="eversmoke">
						<label for="eversmoke">
							Ever Smoke
						</label>
					</div>
					<div class="col-xs-3">
						<input type="checkbox" name="cursmoke" id="cursmoke">
						<label for="cursmoke">
							Current Smoker
						</label>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Stick Per Day: </label>
							<input type="text" name="stiperday" id="stiperday" class="form-control" >
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Age Start Smoking: </label>
							<input type="text" name="agesta" id="agesta" class="form-control" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<div class="form-group">
							<label>Stick Per Day Before: </label>
							<input type="text" name="stiperdaybef" id="stiperdaybef" class="form-control" >
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Age Stop Smoking: </label>
							<input type="text" name="agestop" id="agestop" class="form-control" >
						</div>
					</div>
					<div class="col-xs-3">
						<input type="checkbox" name="everdra" id="everdra">
						<label for="everdra">
							Ever Drank Alcohol
						</label>
					</div>
					<div class="col-xs-3">
						<input type="checkbox" name="curdri" id="curdri">
						<label for="curdri">
							Current Drinker
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<input type="checkbox" name="morethan" id="morethan">
						<label for="morethan">
							More than three drinks per week
						</label>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Number of drinks per week: </label>
							<input type="text" name="numdrink" id="numdrink" class="form-control" >
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Age stop drinking: </label>
							<input type="text" name="agestodri" id="agestodri" class="form-control" >
						</div>
					</div>
					<div class="col-xs-3">
						<div class="form-group">
							<label>Ever used drugs: </label>
							<input type="text" name="drugs" id="drugs" class="form-control" >
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="col-md-8">
		<div class="box box-default">

			<div class="box-header with-border">

				<h3 class="box-title">Siemen Analysis</h3>

			</div>

			<div class="box-body">
				<div class="row">
					<div class="col-xs-3">
						<div class="form-group">

							<label for="color">Color: </label>

							<select class="form-control" name="color" id="color" required>

								<option disabled selected value="-1">Select Color</option>

			                    <option value="creamy white">Creamy White</option>

								<option value="yellowish white">Yellowish White</option>

								<option value="pearly white">Pearly White</option>

			                </select>
						</div>

					</div>
					<div class="col-xs-3">
						<label for="volume">Volume: </label>
						<input type="text" name="volume" id="volume" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="ph">pH: </label>
						<input type="text" name="ph" id="ph" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="viscosity">Viscosity: </label>
						<input type="text" name="viscosity" id="viscosity" class="form-control" >
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label for="liquetime">Liquefaction time: </label>
						<input type="text" name="liquetime" id="liquetime" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="motility">Motility: </label>
						<input type="text" name="motility" id="motility" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="grading">Grading: </label>
						<input type="text" name="grading" id="grading" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="morphology">Morphology: </label>
						<input type="text" name="morphology" id="morphology" class="form-control" >
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label for="spercnt">Sperm Count: </label>
						<input type="text" name="spercnt" id="spercnt" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="puscell">Pus Cell: </label>
						<input type="text" name="puscell" id="puscell" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="redcell">Red Cell: </label>
						<input type="text" name="redcell" id="redcell" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="bacteria">Bacteria: </label>
						<input type="text" name="bacteria" id="bacteria" class="form-control" >
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label for="daysabs">Days Abstained: </label>
						<input type="text" name="daysabs" id="daysabs" class="form-control" >
					</div>
					<div class="col-xs-3">
						<label for="wss">WSS: </label>
						<input type="text" name="wss" id="wss" class="form-control" >
					</div>
				</div>
			</div>

			<div class="box-footer">

				<button type="submit" name="regnew" class="btn btn-success pull-right">Update Patient</button>

			</div>

		</form>
		</div>
	</div>

</div>