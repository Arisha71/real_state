<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
	<?php include("./include/top-nav.html"); ?>

<br><br><br>
	<div id="wrapper" class="preload">
		<?php include("./include/side-bar.html"); ?>
		<div id="main-container">

	
		<!-- <div class="padding-md">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Simple Form</div>
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control input-sm" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group">
										<label class="label-checkbox">
											<input type="checkbox">
											<span class="custom-checkbox"></span>
											Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-success btn-sm">Submit</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Horizontal Form</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<input type="email" class="form-control input-sm" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control input-sm" id="inputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<label class="label-checkbox">
												<input type="checkbox">
												<span class="custom-checkbox"></span>
												Remember me
											</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Sign in</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> -->

           	<div class="main-container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 panel panel-default table-responsive">
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
										<th>Price</th>
										<th>Installment</th>
										<th>Advance</th>
										<th>Remaning</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include("config.php");
									$view_students_qry = "SELECT * FROM property_selling";
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
											$plot_no=$row['plot_no'];
											$price=$row['price'];
											$installment=$row['installment'];
											$advane=$row['advacne'];
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
												<td><?php echo $price; ?></td>
												<td><?php echo $installment; ?></td>
												<td><?php echo $advane; ?></td>
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
				<div class="col-md-1"></div>
			</div>
		</div>


	</div><!-- /main-container -->
	<?php include("./include/footer.html"); ?>

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>