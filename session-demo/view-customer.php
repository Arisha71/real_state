<!-- Including include/auth.php file for user authentication -->
<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Customer</title>
 <!-- Datatable -->
 <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">


    <!-- Including links from include folders -->
    <?php include("./include/linked-files.html"); ?>
</head>

<body class="overflow-hidden">
    <div id="wrapper" class="preload">

        <!-- Including top-nav from include folders -->
        <?php include("include/top-nav.php"); ?>

        <!-- Including side-bar from include folders -->
        <?php include("include/side-bar.php"); ?>

        <div id="main-container">
            <div class="padding-md">
                <div class="panel panel-default table-responsive">
                    <div class="panel-heading ">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fa fa-eye fa-lg"></i> <strong> View Customer</strong>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }
                                    if (isset($_SESSION['status']) && $_SESSION['status'] == true) {
                                        echo '<div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success!</strong> Active Operation is Performed.
                                    </div>';
                                    }
                                    unset($_SESSION['status']);
                                    ?>

                                    <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }
                                    if (isset($_SESSION['inactive']) && $_SESSION['inactive'] == true) {
                                        echo '<div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success!</strong> Inactive Operation is Performed.
                                   </div>';
                                    }
                                    unset($_SESSION['inactive']);
                                    ?>

                                </div>
                            </div>
                        </div>

                        <span class="label label-info pull-right"></span>
                    </div>
                    <div class="padding-md clearfix">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Father name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Total Price</th>
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
                                        $mobile = $row['mobile'];
                                        $address = $row['address'];
                                        $price = $row['price'];
                                        $status = $row['status'];

                                ?>
                                        <!-- show data in the rows -->
                                        <tr>
                                        <td><?php echo "<span class='label label-success'>$id</span>";?></td>
                                            <td><a href="customer-info-display.php?customer_id=<?php echo $id; ?>"> <?php echo $name; ?> </a></td>
                                            <td><?php echo $father_name; ?></td>
                                            <td><?php echo $mobile; ?></td>
                                            <td><?php echo $address; ?></td>
                                            <td><?php echo number_format($price); ?></td>
                                            <td>
                                                <?php if ($status == 1) {
                                                    echo "<span class='label label-success'>Active</span>";
                                                } else {
                                                    echo "<span class='label label-warning'>Inactive</span>";
                                                }
                                                ?>

                                            </td>
                                            <td>
                                                <div class="btn-group pull-center">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                        Action <i class="fa fa-chevron-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu slidedown">
                                                        <li><a href="active-status.php?id=<?php echo $id;  ?>"><i class="fa fa-check-circle"></i> Active
                                                            </a></li>
                                                        <li><a href="inactive-status.php?id=<?php echo $id;  ?>"><i class="fa fa-times-circle"></i> Inactive</a></li>
                                                    </ul>

                                                </div>
                                            </td>
                                        </tr>
                                <?php }
                                }  ?>
                            </tbody>
                        </table>
                    </div><!-- /.padding-md -->
                </div><!-- /panel -->
            </div>
        </div><!-- /main-container -->

    </div><!-- /wrapper -->
    <!-- Scroll to top -->
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

    <!-- Including footer from include folders -->
    <?php include("./include/footer.html"); ?>
</body>

</html>

<!-- Datatable -->
<script src='js/jquery.dataTables.min.js'></script>
<script>
   $(function() {
		$('#dataTable').dataTable({
			"bJQueryUI": true,
			"sPaginationType": "full_numbers"
		});

		$('#chk-all').click(function() {
			if ($(this).is(':checked')) {
				$('#responsiveTable').find('.chk-row').each(function() {
					$(this).prop('checked', true);
					$(this).parent().parent().parent().addClass('selected');
				});
			} else {
				$('#responsiveTable').find('.chk-row').each(function() {
					$(this).prop('checked', false);
					$(this).parent().parent().parent().removeClass('selected');
				});
			}
		});
	});
</script>

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