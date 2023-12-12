<?php  include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
<title>Customer</title>
<?php include ('include/linked-files.html');?>
<?php include ('include/top-nav.php');?>
<?php include ('include/side-bar.php');?>
<?php include('config.php');  ?>

<div id="wrapper" class="preload">
    <div id="main-container">
        <div class="padding-md">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <form>
                            <div class="panel-heading ">

                                <div class="row">
                                    <div class="col-md-6">
                                        <strong><i class="fa fa-credit-card fa-lg"></i> Payments</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Customer ID <span style="color: red;"> * </span></label>
                                            <input type="text" name="customer-id" id="name" placeholder="Enter here" class="form-control input-sm" required>

                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                <button>Search Customer</button>

                            </div>
                        </form>
                    </div><!-- /panel -->
                </div> <!--/.col-->
            </div><!-- row-->
        </div><!-- padding md-->
    </div><!-- /main-container -->
</div><!-- /wrapper -->
<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
<?php include("./include/footer.html"); ?>

</body>

</html>