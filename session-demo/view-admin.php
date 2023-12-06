<?php include("auth.php"); 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>fatehlinks</title>
    <?php include("./include/linked-files.html"); ?>
    
  </head>

  <body class="overflow-hidden">
  <?php include("./include/top-nav.html"); ?>
<br><br><br>
	<div id="wrapper" class="preload">
        <?php include("./include/side-bar.php"); ?>
		<div id="main-container">
            <div class="padding-md">
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
                                $password = $row['password'];
                                $admin_mobile = $row['mobile'];
                                $usertype = $row['usertype'];
                                $admin_pic = $row['photo'];
                        ?>
                                <!-- show data in the rows -->
                                <tr>
                                    <td><img src="<?php echo $admin_pic; ?>" alt="admin picture" height="100px"></td>
                                    <td> <?php echo $username ?> </td>
                                    <td><?php echo $admin_email; ?></td>
                                    
                                    <td>                                        
                                        <a href='delete-admin.php?id=<?php echo $id; ?>'><button class="btn btn-secondary"> Delete</button></a>
                                    </td>
                                </tr>
                        <?php }
                        }  ?>
                    </tbody>
                </table>
            </div>
        </div><!-- /main-container -->

		<?php include("./include/footer.html"); ?>

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

  </body>
</html>



