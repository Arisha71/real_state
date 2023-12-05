<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
	<?php include("./include/top-nav.html"); ?>
	<div id="wrapper" class="preload">
		<?php include("./include/side-bar.html"); ?>
		<div id="main-container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-12 padding-md table-responsive">
					<div class="panel-heading">
						Customer Data Table
						<span class="label label-info pull-right">790 Items</span>
					</div>
					<div class="padding-md clearfix">
						<table class="table table-striped" id="dataTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Father name</th>
									<th>CNIC</th>
									<th>Mobile</th>
									<th>Address</th>
									<th>Plot No</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Installment</th>
									<th>Price</th>
									<th>Advance</th>
									<th>Remaning</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include("config.php");
								$view_students_qry = "SELECT * FROM property_selling WHERE status='1'";
								$result = $cn->query($view_students_qry);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {

										// make variables and display in rows
										$id = $row['id'];
										$name = $row['name'];
										$father_name = $row['father_name'];
										$cnic = $row['cnic'];
										$mobile = $row['mobile'];
										$address = $row['address'];
										$plot_no = $row['plot_no'];
										$start_date = $row['start_date'];
										$end_date = $row['end_date'];
										$installment = $row['installment'];
										$price = $row['price'];
										$advance = $row['advance'];
										$remaning = $row['remaning'];
										$status = $row['status'];
								?>
										<!-- show data in the rows -->
										<tr>
											<td><?php echo $id; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $father_name; ?></td>
											<td><?php echo $cnic; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php echo $plot_no; ?></td>
											<td><?php echo $start_date; ?></td>
											<td><?php echo $end_date; ?></td>
											<td><?php echo $installment; ?></td>
											<td><?php echo $price; ?></td>
											<td><?php echo $advance; ?></td>
											<td><?php echo $remaning; ?></td>
											<td><?php echo $status; ?></td>



											<td>
												<a href='edit-customer.php?id=<?php echo $id; ?>'><i class="fa fa-edit"></i></a>
												|
												<a href='delete.php?deleteid=<?php echo $id; ?>'><i class=" fa fa-trash-o"></i></a>
											</td>
										</tr>
								<?php }
								}  ?>

							</tbody>
						</table>
					</div><!-- /.padding-md -->
				</div><!-- /panel -->
			</div>
		</div>


	</div><!-- /main-container -->
	<?php include("./include/footer.html"); ?>

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>