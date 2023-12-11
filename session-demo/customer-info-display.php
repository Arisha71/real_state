<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>
</head>
<body class="overflow-hidden">
	<?php  //include("./include/top-nav.php"); ?>
	<div id="wrapper" class="preload">
		<?php include("./include/side-bar.php"); ?>
		<div id="main-container">
			<?php
			include("config.php");
			// create select query.....
		$get_customer_id = $_GET['customer_id']; //get data by id
		$qry = "SELECT * FROM property_selling WHERE id='$get_customer_id'";
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
				$advance = $rows['advance'];
                $remaning = $rows['remaning'];
                $image = $rows['image'];
			}
			?>
			<div class="padding-md">
				<div class="clearfix">
					<div class="pull-left">
						<span class="img-demo">
							Logo
						</span>
					</div>
					<div class="pull-right">
						<h5><strong><?php echo $id; ?> </strong></h5>
						<strong>13th Oct 2013</strong>
					</div>
				</div>
				<hr>
				<div class="clearfix">
					<div class="pull-left">
						<h4>Student Information</h4>
						<p>
							<strong>ID :</strong><?php echo $id; ?><br>
							<strong>Name :</strong><?php echo $name; ?><br>
							<strong>Father name :</strong><?php echo $father_name; ?><br>
							<strong>CNIC :</strong><?php echo $cnic; ?><br>
							<strong>Mobile :</strong><?php echo $mobile; ?><br>
							<strong>Address :</strong><?php echo $address; ?><br>
							<strong>Plot No :</strong><?php echo $plot_no; ?><br>
							<strong>Start Date :</strong><?php echo $start_date; ?><br>
							<strong>End Date :</strong><?php echo $end_date; ?><br>
							<strong>Installment :</strong><?php echo $installment; ?><br>
							<strong>Advance :</strong><?php echo $advance; ?><br>
                            <strong>Remaning :</strong><?php echo $remaning; ?><br>
							<strong>Customer Documunts :</strong> <br>
							<iframe type="pdf" style="margin-left: 130px; margin-top:25px" src="<?php echo $image ?>" height="650px" width="850px" alt=""></iframe><br>
						</p>
					</div>
				</div>
				<div class="pull-right">
					<table class="table m-top-md">
						<tbody>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Subtotal</strong></td>
								<td><strong>$490.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Shipping</strong></td>
								<td><strong>$5.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Vat</strong></td>
								<td><strong>$50.00</strong></td>
							</tr>
							<tr class="no-border">
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="no-border"></td>
								<td class="text-right no-border"><strong>Total</strong></td>
								<td><strong class="text-danger">$545.00</strong></td>
							</tr>
						</tbody>
					</table>

					<a class="btn btn-success hidden-print" id="invoicePrint"><i class="fa fa-print"></i> Print</a>
					<a class="btn btn-success hidden-print"><i class="fa fa-usd"></i> Proceed to Payment</a>
				</div>
			</div><!-- /.padding20 -->

		</div><!-- /wrapper -->

		<a href="invoice.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

		<!-- Logout confirmation -->
		<div class="custom-popup width-100" id="logoutConfirm">
			<div class="padding-md">
				<h4 class="m-top-none"> Do you want to logout?</h4>
			</div>

			<div class="text-center">
				<a class="btn btn-success m-right-sm" href="login.html">Logout</a>
				<a class="btn btn-danger logoutConfirm_close">Cancel</a>
			</div>
		</div>


		<script>
			$(function() {
				$('#invoicePrint').click(function() {
					window.print();
				});
			});
		</script>

	</div><!-- /main-container -->
	<?php include("./include/footer.html"); ?>

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>