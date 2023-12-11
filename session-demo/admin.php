<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<title>Admin Details</title>
<?php include("./include/linked-files.html"); ?>
<div id="wrapper" class="preload">
    <?php include("./include/top-nav.php"); ?>
    <?php include("./include/side-bar.php"); ?>

    <div id="main-container">
    <div id="breadcrumb">
				<ul class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="home.php"> Home</a></li>
					<li class="active"><a href="admin.php">Add admin</a></li>
					<li class="active"><a href="view-admin.php">View admin</a></li>

				</ul>
			</div><!--breadcrumb-->
        <div class="padding-md">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <form class="form-horizontal form-border" action="fir-admin-query.php" method="post" enctype="multipart/form-data">
                            <div class="panel-heading">
							
                            <div class="row">
								<div class="col-md-6"><i class="fa fa-user fa-lg"></i> <strong>Admin</strong> </div>
								<div class="col-md-6">
									<?php
									if(session_status() ==PHP_SESSION_NONE){
                                      session_start();
									}
									if (isset($_SESSION['email_alert'])) {
										$msg = $_SESSION['email_alert'];
										echo "<div class='alert alert-danger alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
									}
									unset($_SESSION['email_alert']);
									?>
                                    <?php
									if(session_status() ==PHP_SESSION_NONE){
                                      session_start();
									}
									if (isset($_SESSION['email_insert'])) {
										$msg = $_SESSION['email_insert'];
										echo "<div class='alert alert-success alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
									}
									unset($_SESSION['email_insert']);
									?>
								</div>
                            </div>
                            </div> 
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Username</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control input-sm" placeholder="Username" name="username" required>
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class="control-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control input-sm" placeholder="Email" name="email" required>
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class="control-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control input-sm" placeholder="Password" name="Password" required>
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class="control-label col-md-2">Mobile</label>
                                    <div class="col-md-10">
                                        <input type="text" data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" maxlength="12" class="form-control input-sm" name="mobile">
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class="control-label col-md-2">User type</label>
                                    <div class="col-md-10">
                                        <select name="usertype" id="" class="form-control">
                                            <option value="-1">--Select User--</option>
                                            <option value="admin" name="admin">Admin</option>
                                            <option value="user" name="user">User</option>
                                        </select>
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class=" control-label col-md-2">Photo</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="photo">
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->

                            </div>
                            <div class="panel-footer">
                                <div class="text-right">
                               <button class="btn btn-success" type="submit" name="add-admin"><i class=" fa fa-plus "></i> Add & Submit
                                </button>
                                    <!-- <button class="btn btn-sm btn-success" type="reset">Reset</button> -->
                                </div>
                            </div>
                        </form>
                    </div><!-- /panel -->
                </div>
                <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
    </div><!--main container-->
    </body>

</html>

<?php include("./include/footer.html"); ?>
<!-- <script src="./maskingCNIC/jquery.min.js"></script> -->
<script src="./maskingCNIC/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Function to fade out the session alert after 3 seconds
    function fadeOutSessionAlert() {
        $('.alert').fadeOut(400);
    }

    // Trigger the fade-out function after 3 seconds
    $(document).ready(function () {
        setTimeout(fadeOutSessionAlert, 2000);
    });
</script>