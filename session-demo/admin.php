<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<title>Admin Details</title>
<?php include("./include/linked-files.html"); ?>
<div id="wrapper" class="preload">
    <?php include("./include/top-nav.php"); ?>
    <?php include("./include/side-bar.php"); ?>

    <div id="main-container">
        <div class="padding-md">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <form class="form-horizontal form-border" action="fir-admin-query.php" method="post" enctype="multipart/form-data">
                            <div class="panel-heading fa fa-user">
                                Admin
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
                                        <input type="email" class="form-control input-sm" placeholder="email" name="email" required>
                                    </div><!-- /.col -->
                                </div><!-- /form-group -->
                                <div class="form-group">
                                    <label class="control-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control input-sm" placeholder="password" name="Password" required>
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
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
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
                                    <button class="btn btn-sm btn-success fa fa-plus" type="submit" name="add-admin"> Add admin</button>
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