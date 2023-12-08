<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<title>fatehlinks</title>
<?php include("./include/linked-files.html"); ?>

<div id="wrapper" class="preload">
    <?php include("./include/top-nav.php"); ?>
    <?php include("./include/side-bar.php"); ?>

    <?php 
include("config.php");
// create select query.....
$get_admin_id = $_GET['id']; //get data by id
$qry = "SELECT *  FROM admin  WHERE id='$get_admin_id'";
$result = $cn->query($qry);
$num_rows = mysqli_num_rows($result); //number of rows
$rows = mysqli_fetch_array($result);
//if data found then....
if($num_rows>0){

	$id = $rows['id'];
	$username = $rows['username'];
	$admin_mobile = $rows['email'];
	$admin_password = $rows['Password'];
	$admin_mobile = $rows['mobile'];
	$admin_usertype = $rows['usertype'];
	$admin_photo = $rows['photo'];
}
else{
}
?>
    <br><br><br><br>

    <div id="main-container">
        <div class="panel panel-default">
            <form class="form-horizontal form-border" action="fir-admin-update.php" method="post">
                <div class="panel-heading">
                    Admin Information <input type="hidden" name="admin-edit-page-id" value='<?php echo $id; ?>'>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label col-md-2">Username</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-sm" placeholder="Username" name="username">
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-sm" placeholder="email" name="email">
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control input-sm" placeholder="password" name="Password">
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">Mobile</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-sm" placeholder="mobile" name="mobile">
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">User type</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-sm"  placeholder="user type" name="utype">
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
                        <button class="btn btn-sm btn-success" type="submit" name="edit-admin">Edit admin</button>
                        <button class="btn btn-sm btn-success" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div><!-- /panel -->
    </div>
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

    </body>

</html>

<?php include("./include/footer.html"); ?>
<!-- <script src="./maskingCNIC/jquery.min.js"></script> -->
<script src="./maskingCNIC/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>