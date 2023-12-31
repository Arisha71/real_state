<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<title>Customer Details</title>
<?php include("./include/linked-files.html"); ?>

<div id="wrapper" class="preload">
	<?php include("./include/top-nav.php"); ?>
	<?php include("./include/side-bar.php"); ?>
	<div id="main-container">
		<div class="padding-md">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<form action="fir-add-queries.php" method="post" enctype="multipart/form-data">
							<div class="panel-heading ">

								<div class="row">
									<div class="col-md-6">
										<strong><i class="fa fa-plus-circle fa-lg"></i> Customer Details</strong>
									</div>
									<div class="col-md-6">
										<?php
										if (session_status() == PHP_SESSION_NONE) {
											session_start();
										}
										if (isset($_SESSION['status'])) {
											$msg = $_SESSION['status'];
											echo "<div class='alert alert-success alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
										}
										unset($_SESSION['status']);
										?>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Name <span style="color: red;"> * </span></label>
											<input type="text" name="name" id="name" onkeyup="this.value = this.value.toUpperCase();" placeholder="Enter here" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Father name <span style="color: red;"> * </span></label>
											<input type="text" placeholder="Enter here" id="fname" onkeyup="this.value = this.value.toUpperCase();" name="fname" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">CNIC <span style="color: red;"> * </span></label>
											<input type="text" name="cnic" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" maxlength="15" placeholder="xxxxx-xxxxxxx-x" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label"> Mobile <span style="color: red;"> * </span></label>
											<input type="text" data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" type="number" maxlength="12" name="mobile" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label"> Address (optional)</label>
											<input type="text" placeholder="Enter here" onkeyup="this.value = this.value.toUpperCase();" name="address" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plot # <span style="color: red;"> * </span></label>
											<input type="number" placeholder="Enter here" name="plotno" class="form-control input-sm" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">From <span style="color: red;"> * </span> </label>
											<input type="date" oninput="DateTime()" name="start" id="date-signed" class="form-control input-sm" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">To <span style="color: red;"> * </span></label>
											<input type="date" id="end-date" oninput="DateTime()" name="end" class="form-control input-sm" required>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plot Installment <span style="color: red;"> * </span></label>
											<select name="installment" class="form-control input-sm" required>
												<option value="-1">--Choose Installment Plan--
												<option value="3 month">3 Month</option>
												<option value="6 month">6 Month</option>
												<option value="9 month">9 Month</option>
												<option value="12 month">12 Month</option>
												<option value="24 month">24 Month</option>
												</option>
											</select>
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Total Price <span style="color: red;"> * </span></label>
											<input type="number" placeholder="Enter here" id="totalAmount" name="price" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Amount paid<span style="color: red;"> * </span></label>
											<input type="number" placeholder="Enter here" id="amountPaid" oninput="remainig()" name="advance" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Remaning Price <span style="color: red;"> * </span></label>
											<input type="number" name="remaning" placeholder="Enter here" id="remainingAmount" class="form-control input-sm" required>
											<!-- <p class="text-bold"><span class="form-control" name="remaning" id="remainingAmount" ></span></p> -->
										</div>
									</div><!-- /.col -->

									<div class="col-md-4 ">
										<div class="form-group">
											<label for="exampleInputEmail1">Upload Documunts (PDF)<span style="color: red;"> * </span></label>
											<input type="file" name="photo" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter here" required>
										</div>
									</div>
								</div>
								<div class="panel-footer text-right">
									<button class='btn btn-success' type='submit' name='add-customer'><i class="fa fa-plus fa-lg"></i> Submit</button>

									<!-- <button class="btn btn-success fa fa-retweet" type="reset"> Clear</button> -->
								</div>
						</form>
					</div><!-- /panel -->
				</div> <!--/.col-->
			</div><!-- row-->
		</div><!-- padding md-->
	</div><!-- /main-container -->
</div><!-- /wrapper -->
<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
<?php include("./include/footer.html"); ?>

</body>

</html>

<!-- <script src="./maskingCNIC/jquery.min.js"></script> -->
<script src="./maskingCNIC/jquery.inputmask.bundle.js"></script>
<script>
	$(":input").inputmask();
</script>

<script>
	// Function to calculate the remaining amount
	function remainig() {
		let totalAmount = document.getElementById('totalAmount').value;
		let advance = document.getElementById('amountPaid').value;
		document.getElementById('remainingAmount').value = (totalAmount - advance);
	}
	// Attach event listeners to the input fields
	document.getElementById('totalAmount').addEventListener('input', remainig);
	document.getElementById('amountPaid').addEventListener('input', remainig);

	// function to write text in uppercase
	function text() {
		var name = document.getElementById('name').value;
		var fname = document.getElementById('fname').value;

		var upperName = name.toUpperCase();
		var upperFname = fname.toUpperCase();

		document.getElementById('name').value = upperName;
		document.getElementById('fname').value = upperFname;
	}

	// Calculate total months between "From" and "To" dates
	var fromDate = new Date(document.getElementById('date-signed').value);
	var toDate = new Date(document.getElementById('end-date').value);

	var totalMonths = (toDate.getFullYear() - fromDate.getFullYear()) * 12 + (toDate.getMonth() - fromDate.getMonth());

	// If the "To" date is earlier than the "From" date, set total months to 0
	if (totalMonths < 0) {
		totalMonths = 0;
	}

	// Calculate dues per month and display the result directly
	var duesPerMonth = totalMonths > 0 ? Math.floor(remaining / totalMonths) : 0;
	document.getElementById('dues-per-month').value = duesPerMonth.toFixed(2);
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
	// Function to fade out the session alert after 3 seconds
	function fadeOutSessionAlert() {
		$('.alert').fadeOut(400);
	}

	// Trigger the fade-out function after 3 seconds
	$(document).ready(function() {
		setTimeout(fadeOutSessionAlert, 2000);
	});
</script>