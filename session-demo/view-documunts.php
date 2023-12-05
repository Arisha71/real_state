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
									$view_qry = "SELECT * FROM property_selling WHERE status='1' ";
									$result = $cn->query($view_qry);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {

											// make variables and display in rows
											$id = $row['id'];
											$image = $row['image'];
									?>
											<!-- show data in the rows -->
											<tr>
												<td><?php echo $id; ?></td>
												<td class="text-center"><iframe type="pdf" src="./upload-file/<?php $image ?>" height="450px" width="850px" alt=""></iframe></td>
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
			</div>
		</div><!-- /wrapper -->
	<?php include("./include/footer.html"); ?>

	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>