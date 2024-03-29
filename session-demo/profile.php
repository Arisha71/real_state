<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin Profile</title>
	<?php include("./include/linked-files.html"); ?>
	
	<!--================--CSS--==================-->
	<style>
		.view-content {
			display: flex;
			justify-content: space-between;
		}
	</style>

</head>

<body class="overflow-hidden">

	<?php
	include('config.php');

	$userauthentication = $_SESSION['email'];
	$select_user_qry = "SELECT * FROM admin WHERE email='$userauthentication'";
	$result = mysqli_query($cn, $select_user_qry);
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) > 0) {
		$id = $row['id'];
		$username = $row['username'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$usertype = $row['usertype'];
		$photo = $row['photo'];
	}
	?>

	<?php include("./include/top-nav.php"); ?>
	<div id="wrapper" class="preload">

		<?php include("./include/side-bar.php"); ?>


		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="home.php"> Home</a></li>
					<li class="active"><a href="admin.php">Add admin</a></li>
					<li class="active"><a href="view-admin.php">View admin</a></li>

				</ul>
			</div><!--breadcrumb-->
			<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="profile.php#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i>
						</span>
						Overview
					</a>
				</li>
				<li>
					<a href="profile.php#edit" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i>
						</span>
						Edit Profile
					</a>
				</li>
			</ul>
			<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="profile.php">
									<img src=" <?php echo $photo;  ?>" alt="User Avatar" class="img-thumbnail">
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14"><?php echo $username; ?></strong>
								<small class="block text-muted">
									<?php echo $email;  ?>
								</small>
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">Follow</a>
								<div class="seperator"></div>
								<a href="profile.html#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="profile.html#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="profile.html#" class="social-connect tooltip-test google-plus-hover pull-left" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->


						<h5 class="headline">
							Profile Statistics
							<span class="line"></span>
						</h5>
						<dl>
							<dt>Status<span class="pull-right">100%</span></dt>
							<dd>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success animated-bar" style="width:100%"></div>
								</div>
							</dd>

						</dl>
					</div><!-- /.col -->
					<div class="col-md-9 col-sm-9">
						<di class="tab-content">
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-10">
										<div class="panel panel-default fadeInDown animation-delay2">
											<div class="panel-heading">

												<div class="row">
													<div class="col-md-6"><i class="fa fa-user fa-lg"></i> <strong>About Me</strong> </div>
													<div class="col-md-6">
														<?php
														if (session_status() == PHP_SESSION_NONE) {
															session_start();
														}
														if (isset($_SESSION['data_insert'])) {
															$msg = $_SESSION['data_insert'];
															echo "<div class='alert alert-success alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
														}
														unset($_SESSION['data_insert']);
														?>
													</div>
												</div>
											</div>

											<div class="panel-body">
												<div class="view-content">
													<div>
														<h4>Username</h4>
														<strong><?php echo $username; ?> </strong>
													</div>
													<div>
														<h4>Mobile</h4>
														<strong><?php echo $mobile; ?> </strong>
													</div>
													<div>
														<h4>Status</h4>
														<strong>Online <i class="fa fa-rss "></i> </strong>
													</div>
													<div>
														<h4>Role</h4>
														<i class="fa fa-user"></i> <strong><?php if ($_SESSION['usertype'] == 1) {	echo "Admin";} else {echo "User";} ?> </strong>
																				
													</div>
												</div>
											</div>
										</div><!-- /panel -->
									</div><!-- /.col -->

								</div><!-- /.row -->
							</div><!-- /tab1 -->

							<div class="tab-pane fade" id="edit">
								<div class="panel panel-default">
									<form class="form-horizontal form-border" action="fir-admin-update.php" method="post">
										<div class="panel-heading">
											<i class="fa fa-edit fa-lg"></i> <strong> Edit your profile </strong><input type="hidden" name="admin-edit-page-id" value='<?php echo $id; ?>'>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Username</label>
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" value='<?php echo $username; ?>' name="username">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Email</label>
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" value='<?php echo $email; ?>' name="email" readonly>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Password</label>
												<div class="col-md-10">
													<input type="password" class="form-control input-sm" value='<?php echo $_SESSION['password']; ?>' name="Password">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">Mobile</label>
												<div class="col-md-10">
													<input type="text" data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" maxlength="12" class="form-control input-sm" value='<?php echo $mobile; ?>' name="mobile">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-md-2">User type</label>
												<div class="col-md-10">
													<select type="text" class="form-control input-sm" value='<?php if ($_SESSION['usertype'] == 0) {
																													echo "disabled";
																												} ?>' name="utype">
														<option value="admin" <?php if ($_SESSION['usertype'] == 1) {
																					echo "selected";
																				} ?>>Admin</option>
														<option value="user" <?php if ($_SESSION['usertype'] == 0) {
																					echo "selected";
																				} ?>>User</option>
													</select>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class=" control-label col-md-2">Photo(100Kb)</label>
												<div class="col-lg-10">
													<input type="file" name="photo" class="form-control input-sm" value='<?php echo $photo; ?>'>
												</div><!-- /.col -->
											</div><!-- /form-group -->

										</div>
										<div class="panel-footer">
											<div class="text-right">
												<button class="btn btn-sm btn-success" type="submit" name="edit-admin"><i class="fa fa-plus fa-lg"></i> Edit admin</button>
												<button class="btn btn-sm btn-success" type="reset"><i class="fa fa-retweet fa-lg"></i>Reset</button>
											</div>
										</div>
									</form>
								</div><!-- /panel -->
							</div><!-- /tab2 -->

					</div><!-- /tab3 -->
					</di><!-- /tab-content -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.padding-md -->
	</div><!-- /main-container -->
	</div><!-- /wrapper -->

	<a href="profile.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

	<!-- Logout confirmation -->
	<!-- <div class="custom-popup width-100" id="logoutConfirm">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="index.php">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div> -->
</body>

</html>

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