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
						<div class="panel panel-default">
							<div class="panel-heading">View Customer Documents</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label"></label>
										<div class="col-lg-10">
											<input type="email" class="form-control input-sm" id="inputEmail1" placeholder="Email">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<!-- <div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Sign in</button>
										</div>
									</div> -->
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>

		</div><!-- /wrapper -->
		<?php include("./include/footer.html"); ?>

		<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>