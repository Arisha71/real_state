<?php include("config.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?php include("./include/linked-files.html"); ?>
</head>

<body>
<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-success">REAL STATE</span> <span style="color:#ccc; text-shadow:0 1px #fff">Admin</span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>

					<div class="pull-right">
						<span style="font-size:11px;">Don't have any account?</span>
						<a class="btn btn-default btn-xs login-link" href="register.html" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
					</div>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" placeholder="email" class="form-control input-sm bounceIn animation-delay2" name="email" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4" name="password" required>
						</div>
						<div class="form-group">
							<label class="label-checkbox inline">
								<input type="checkbox" class="regular-checkbox chk-delete" />
								<span class="custom-checkbox info bounceIn animation-delay4"></span>
							</label>
							Remember me
						</div>

						<div class="seperator"></div>
						<div class="form-group">
							Forgot your password?<br />
							Click <a href="login.html#">here</a> to reset your password
						</div>

						<hr />

						<button type="submit" class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" name="login"><i class="fa fa-sign-in"></i> Sign in</button>
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->


</body>

</html>


<!-- authentication code -->
<?php
if (isset($_POST['login'])) {
	$admin_email = $_POST['email'];
	$admin_password = $_POST['password'];
	$select_admin_qury = "SELECT * FROM admin WHERE  email = '$admin_email' ";
	$result = mysqli_query($cn, $select_admin_qury);
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			if ($admin_password == $row['password']) {

				$userinfo = array();
				$userinfo['id'] = $row['id'];
				$userinfo['name'] = $row['username'];
				$userinfo['email'] = $row['email'];
				$userinfo['password'] = $row['password'];
				$userinfo['mobile'] = $row['mobile'];
				$userinfo['usertype'] = $row['usertype'];
				$userinfo['profile_picture'] = $row['photo'];

				session_start();
				$_SESSION['uinfo'] = $userinfo;

				$_SESSION['user'] = $row['username'];

				// echo "<script>alert('Ok')
				// window.location.href= home.php;
				// </script>";
				header("Location:home.php");
			} else {
				echo "<script>alert('Invalid Credentials')
			window.location.href= index.php;
			</script>";
			}
		}
	} else {
		echo    "<script>alert('Error Running  Query')</script>";
	}
}
?>