<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
    <?php include("./include/top-nav.php"); ?>

    <div id="wrapper" class="preload">
        <?php include("./include/side-bar.php"); ?>
        <div id="main-container">
        <div class="padding-md">
                <div class="panel panel-default table-responsive">
                    <div class="panel-heading ">
                       <i class="fa fa-eye fa-lg"></i> <strong>View Customer</strong> 

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
                                    <th>CNIC</th>
                                    <th>Remaning</th>
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
                                        $cnic = $row['cnic'];
                                        $remaning = $row['remaning'];
                                        $status = $row['status'];

                                ?>
                                        <!-- show data in the rows -->
                                        <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $name; ?> </a></td>
                                            <td><?php echo $father_name; ?></td>
                                            <td><?php echo $mobile; ?></td>
                                            <td><?php echo $cnic; ?></td>
                                            <td><?php echo $remaning; ?></td>
                                            <td>
                                                <?php if( $status==1){
                                                    echo "<span class='label label-success'>Active</span>";
                                                } 
                                                else{
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
                                                        <li><a href="active-status.php?id=<?php echo $id;  ?>"><i class="fa fa-check-circle"></i> Active</a></li>
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
        <?php include("./include/footer.html"); ?>

    </div><!-- /wrapper -->
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>
</html>


<script>
		$(function	()	{
			$('#dataTable').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			});
			
			$('#chk-all').click(function()	{
				if($(this).is(':checked'))	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked', true);
						$(this).parent().parent().parent().addClass('selected');
					});
				}
				else	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked' , false);
						$(this).parent().parent().parent().removeClass('selected');
					});
				}
			});
		});
	</script>