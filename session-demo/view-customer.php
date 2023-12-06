<!-- Including include/auth.php file for user authentication -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>fatehlinks</title>
    <!-- Datatable -->
    <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">

    <!-- Including links from include folders -->
    <?php include("./include/linked-files.html"); ?>
</head>

<body class="overflow-hidden">

    <div id="wrapper" class="preload">
        <!-- Including top-nav from include folders -->
        <?php include("include/top-nav.html"); ?>
        <!-- Including side-bar from include folders -->
        <?php include("include/side-bar.php"); ?>
        <div id="main-container">
            <div class="padding-md">
                <div class="panel panel-default table-responsive">
                    <div class="panel-heading">
                       Customer Detail

                        <span class="label label-info pull-right">790 Items</span>
                    </div>
                    <div class="padding-md clearfix">
                        <table class="table table-striped" id="dataTable">
                            <thead>
							<tr>
								
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
								$view_students_qry = "SELECT * FROM property_selling WHERE status='1'";
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
											<td><?php echo $name; ?></td>
											<td><?php echo $father_name; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php echo $price; ?></td>
											<td><?php echo $status; ?></td>

											<td>
												<a href='edit-customer.php?id=<?php echo $id; ?>'><i class="fa fa-edit"></i></a>
												|
												<a href='delete.php?deleteid=<?php echo $id; ?>'><i class=" fa fa-trash-o"></i></a>
											</td>
											</tr>
									<?php } }  ?>
                            </tbody>
                        </table>
                    </div><!-- /.padding-md -->
                </div><!-- /panel -->
            </div>

        </div><!-- /main-container -->

        <!-- Including footer from include folders -->
        <?php include("include/page-parts/footer.php"); ?>

    </div><!-- /wrapper -->
    <!-- Scroll to top -->
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

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