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
                    <li><i class="fa fa-home"></i><a href="home.php"> Home</a></li>
                    <li class="active"><a href="admin.php">Add admin</a></li>
                    <li class="active"><a href="view-admin.php">View admin</a></li>

                </ul>
            </div><!--breadcrumb-->

            <div class="padding-md">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <form class="form-horizontal form-border">
                                <div class="panel-heading fa fa-user fa-lg">
                                    Admin Details
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
                                                        <a href='delete-admin.php?id=<?php echo $id; ?>'><button class="btn btn-danger"> Delete</button></a>
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