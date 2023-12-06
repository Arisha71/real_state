<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
	<?php include("./include/top-nav.html"); ?>
	<div id="wrapper" class="preload">
		<?php include("./include/side-bar.php"); ?>
		<?php
		include("config.php");
		// create select query.....
		$get_customer_id = $_GET['id']; //get data by id
		$qry = "SELECT *  FROM property_selling WHERE id='$get_customer_id'";
		$result = mysqli_query($cn, $qry);
		$num_rows = mysqli_num_rows($result); //number of rows
		$rows = mysqli_fetch_array($result);
		//if data found then....
		if ($num_rows > 0) {

			$id = $rows['id'];
			$name = $rows['name'];
			$father_name = $rows['father_name'];
			$cnic = $rows['cnic'];
			$mobile = $rows['mobile'];
			$address = $rows['address'];
			$plot_no = $rows['plot_no'];
			$start_date = $rows['start_date'];
			$end_date = $rows['end_date'];
			$installment = $rows['installment'];
			$price = $rows['price'];
			$advane = $rows['advacne'];
			$remaning = $rows['remaning'];
			$status = $rows['status'];
		} else {
			echo mysqli_error($cn);
			// header("Location:view-customer.php");
		}
		?>
		<div id="main-container">
		<div class="padding-md">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<form action="fir-update-queries.php" method="post">
							<div class="panel-heading">
								Edit customer Detail <input type="hidden" name="customer-edit-page-id" value='<?php echo $id; ?>'>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label"> Customer Name:</label>
											<input type="text" name='name' value='<?php echo $name; ?>' class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Father name</label>
											<input type="text" value='<?php echo $father_name; ?>' name="fname" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">CNIC</label>
											<input type="text" name="cnic" value='<?php echo $cnic; ?>' data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" maxlength="15" placeholder="xxxxx-xxxxxxx-x" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label"> Mobile</label>
											<input type="text" value='<?php echo $mobile; ?>' data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" type="number" maxlength="12" name="mobile" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="col-md-12">
										<div class="form-group">
											<label class="control-label"> Address (optional)</label>
											<input type="text" value="<?php echo $address;  ?>" onkeyup="text()" name="address" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								<h4 class="mb-4">Plot Details:</h4>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Plot #</label>
											<input type="number" value='<?php echo $plot_no; ?>' name="plotno" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
											<div class="form-group">
												<label class="control-label">Start Date</label>
												<input type="date"  value='<?php  echo $start_date; ?>' name="start" class="form-control input-sm" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label">End Date</label>
												<input type="date"  value='<?php  echo $end_date; ?>' name="end" class="form-control input-sm" required>
											</div>
										</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Plot Installment</label>
											<input type="text" name="installment" value="<?php  echo $installment; ?>" class="form-control">
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Total Price</label>
											<input type="number" value='<?php echo $price; ?>' id="totalAmount" name="price" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Amount Paied</label>
											<input type="number" value='<?php echo $advane; ?>' id="amountPaid" name="advance" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Remaning</label>
											<input type="number" value='<?php echo $remaning; ?>' name="remaning" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
								</div>
								<div class="panel-footer input text-right">
									<button class="btn btn-success" type="submit" name="update-customer">update Customer</button>
									<button class="btn btn-success" type="reset">Clear</button>
								</div>
						</form>
					</div><!-- /panel -->
				</div><!-- /.col-->
			</div><!-- /.row -->
		</div>
		</div><!-- /main-container -->

	</div><!-- /wrapper -->
	<?php include("./include/footer.html"); ?>
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
</body>

</html>