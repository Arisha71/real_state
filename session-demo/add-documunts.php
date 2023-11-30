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
			<div class="padding-md">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">Upload Customer Documents</div>
							<div class="panel-body">
								<form action="add-documunts-query.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="exampleInputEmail1">Upload Documunts</label>
										<input type="file" name="photo" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter email">
									</div><!-- /form-group -->
									<button type="submit" name="image" class="btn btn-success btn-sm">Submit</button>
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
					<div class="col-md-6">
					<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 panel panel-default table-responsive">
						<div class="panel-heading">
							Customer Documunts Data Table
						</div>
						<div class="padding-md clearfix">
							<table class="table table-striped" id="dataTable">
								<thead>
									<tr>
										<th>ID</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include("config.php");
									$view_students_qry = "SELECT * FROM image_upload";
									$result = $cn->query($view_students_qry);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {

											// make variables and display in rows
											$id = $row['id'];
											$image = $row['image'];
									?>
											<!-- show data in the rows -->
											<tr>
												<td><?php echo $id; ?></td>
												<td><img src="<?php echo $image; ?>" height="50px" alt=""></td>
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
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>

		</div><!-- /wrapper -->
		<?php include("./include/footer.html"); ?>

		<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>