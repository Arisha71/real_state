<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<title>fatehlinks</title>
<?php include("./include/linked-files.html"); ?>

<div id="wrapper" class="preload">
	<?php include("./include/top-nav.html"); ?>
	<?php include("./include/side-bar.html"); ?>
	<div id="main-container">
		<div class="padding-md">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<form action="fir-add-queries.php" method="post" enctype="multipart/form-data">
							<div class="panel-heading">
								Customer data
							</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Name</label>
											<input type="text" name="name" id="name" onkeyup="text()" placeholder="Your name" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Father name</label>
											<input type="text" placeholder="Your fname" id="fname" onkeyup="text()" name="fname" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">CNIC</label>
											<input type="text" name="cnic" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" maxlength="15" placeholder="xxxxx-xxxxxxx-x" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label"> Mobile</label>
											<input type="text" data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" type="number" maxlength="12" name="mobile" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label"> Address</label>
											<input type="text" placeholder="Enter address here..." onkeyup="text()" name="address" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div>
									<h4 class="mb-4">Plot Details:</h4>
									<hr>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plot #</label>
											<input type="number" placeholder="plot no" name="plotno" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plan Start </label>
											<input type="date" placeholder="start" name="start" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plan End</label>
											<input type="date" placeholder="end" name="end" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->

									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plot Installment</label>
											<select name="installment" class="form-control input-sm">
												<option value="-1">Choose Installment Plan
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
											<label class="control-label">Total Price</label>
											<input type="number" placeholder="price" id="totalAmount" name="price" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Plot Advance</label>
											<input type="number" placeholder="plot advance" id="amountPaid" oninput="remainig()" name="advance" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Remaning Price</label>
											<input type="number" name="remaning" id="remainingAmount" class="form-control input-sm">
											<!-- <p class="text-bold"><span class="form-control" name="remaning" id="remainingAmount" ></span></p> -->
										</div>
									</div><!-- /.col -->

									<div class="col-md-4 ">
										<div class="form-group">
											<label for="exampleInputEmail1">Upload Documunts</label>
											<input type="file" name="photo" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter email">
										</div>
									</div>
								</div>
								<div class="panel-footer text-right">
									<button class="btn btn-success" type="add-student" name="add-customer">Add Customer</button>
									<button class="btn btn-success" type="reset">Clear</button>
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
</script>