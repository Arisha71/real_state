<?php include("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
<title>Payemtns</title>
<?php include('include/linked-files.html'); ?>
<?php include('include/top-nav.php'); ?>
<?php include('include/side-bar.php'); ?>
<?php include('config.php')  ?>

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
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Customer ID <span style="color: red;"> * </span></label>
                                                <input type="text" name="customer-id" id="name" placeholder="Enter here" class="form-control input-sm" required>

                                            </div>
                                            <div>
                                                <button class='btn btn-success' type='submit' name='search-customer'><i class="fa fa-search fa-lg"></i>Search Customer</button>

                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                </div>
                            </div>

                        </form>

                        <div>
                            <form>
                                <div class="panel-heading ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong><i class="fa fa-upload fa-lg"></i> Upload Payments</strong>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Name <span style="color: red;"> * </span></label>
                                                    <input type="text" name="name" id="name" onkeyup="this.value = this.value.toUpperCase();" class="form-control input-sm" readonly>
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Father name <span style="color: red;"> * </span></label>
                                                    <input type="text" id="fname" onkeyup="this.value = this.value.toUpperCase();" name="fname" class="form-control input-sm" readonly>
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">CNIC <span style="color: red;"> * </span></label>
                                                    <input type="text" name="cnic" data-inputmask="'mask':'99999-9999999-9'" maxlength="15" class="form-control input-sm" readonly>
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"> Mobile <span style="color: red;"> * </span></label>
                                                    <input type="text" data-inputmask="'mask' :'0399-9999999'" type="number" maxlength="12" name="mobile" class="form-control input-sm" readonly>
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Remaning</label>
                                                    <input type="text" name="remaning" class="form-control input-sm" readonly>
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Pay<span style="color: red;"> * </span></label>
                                                    <input type="text" placeholder="Enter here" name="remaning" class="form-control input-sm">
                                                </div>
                                            </div><!-- /.col -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Month <span style="color: red;"> * </span></label>
                                                    <input type="text" placeholder="Enter here" name="remaning" class="form-control input-sm">
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                        <div>
                                            <button class='btn btn-success' type='submit' name='search-customer'><i class="fa fa-upload fa-lg"></i> Save Update</button>

                                        </div>
                                    </div>
                            </form>
                        </div>
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