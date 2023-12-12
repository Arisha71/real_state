<?php include("auth.php");
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Admin Details</title>
    <?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
    <?php include("./include/top-nav.php"); ?>
    <div id="wrapper" class="preload">
        <?php include("./include/side-bar.php"); ?>
        <div id="main-container">
            <div id="breadcrumb">
                <ul class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="profile.php"> Home</a></li>
                    <li class="active"><a href="admin.php">Add admin</a></li>
                    <li class="active"><a href="view-admin.php">View admin</a></li>

                </ul>
            </div><!--breadcrumb-->

            <div class="padding-md">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <form class="form-horizontal form-border">
                                <div class="panel-heading">
                                <div class="row">
								<div class="col-md-6">
									<strong><i  class="fa fa-user fa-lg"></i> Admin Details</strong>
								</div>
								<div class="col-md-6">
									<?php
									if(session_status() ==PHP_SESSION_NONE){
                                      session_start();
									}
									if (isset($_SESSION['status'])) {
										$msg = $_SESSION['status'];
										echo "<div class='alert alert-success alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
									}
									unset($_SESSION['status']);
									?>

<?php
									if(session_status() ==PHP_SESSION_NONE){
                                      session_start();
									}
									if (isset($_SESSION['statuss'])) {
										$msg = $_SESSION['statuss'];
										echo "<div class='alert alert-danger alert-dismissible'>
										<button type='button' class='close'fade-out data-dismiss='alert'>&times;</button>
										<strong>Message!</strong> $msg
									  </div>";
									}
									unset($_SESSION['statuss']);
									?>
								</div>
							</div>
                                </div>
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <th>Profile Picture</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $view_admin_qry = "SELECT * FROM admin";
                                        $result = $cn->query($view_admin_qry);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                // make variables and display in rows
                                                $id = $row['id'];
                                                $username = $row['username'];
                                                $admin_email = $row['email'];
                                                $admin_pic = $row['photo'];
                                        ?>
                                                <!-- show data in the rows -->
                                                <tr>
                                                    <td><img src="<?php echo $admin_pic; ?>" alt="admin picture" height="100px"></td>
                                                    <td> <?php echo $username ?> </td>
                                                    <td><?php echo $admin_email; ?></td>

                                                    <td>
													<a href="delete-admin.php?id=<?php echo $id;  ?>"><i class="fa fa-trash-o fa-lg"></i><strong>Delete</strong> </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        }  ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /main-container -->

        <?php include("./include/footer.html"); ?>

    </div><!-- /wrapper -->
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
</body>
</html>

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