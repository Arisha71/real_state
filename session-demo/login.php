<?php
 if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password']; 
    if($username=="TICER" && $password=="12345"){
        session_start();
        $_SESSION['user']=$username;
        header("Location:index.php");
    }

 }
?>

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
					<form  method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4" name="password">
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
							Forgot your password?<br/>
							Click <a href="login.html#">here</a> to reset your password
						</div>

						<hr/>
							
						<button type="submit" class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" name="login"><i class="fa fa-sign-in"></i> Sign in</button>
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

   
  </body>
</html>




