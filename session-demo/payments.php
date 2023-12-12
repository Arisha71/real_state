<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payments Details</title>
    <?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
    <?php include("./include/top-nav.php"); ?>

    <div id="wrapper" class="preload">
        <?php include("./include/side-bar.php"); ?>
        <div id="main-container">

                                       <?php
                                        $view_admin_qry = "SELECT * FROM property_selling";
                                        $result = $cn->query($view_admin_qry);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // make variables and display in rows
                                                $id = $row['id'];
                                        ?>
                                        <?php }
                                        }  ?>

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
                                                 <a href="view-customer.php?id=<?php echo $id;  ?>"><button class='btn btn-success' type='submit' name='search-customer'><i class="fa fa-search fa-lg"></i>Search Customer</button></a> 

                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
             include('config.php');


            if(isset($_GET['id'])){
            $get_id = $_GET['id'];
            $view_students_qry = "SELECT * FROM property_selling WHERE id=$get_id";
            $result = $cn->query($view_students_qry);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            
                    // make variables and display in rows
                    $id = $row['id'];
                    $name = $row['name'];
                    $father_name = $row['father_name'];
                    $cnic = $row['cnic'];
                    $mobile = $row['mobile'];
                    $remaning = $row['remaning'];
                    $pay = $row['pay'];
                    
                }
            }
        }
            ?> 

            <div class="padding-md">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong><i class="fa fa-upload fa-lg"></i> Upload Payments</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <form action="">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Name <span style="color: red;"> * </span></label>
                                                        <input type="text" name="name" id="name" onkeyup="this.value = this.value.toUpperCase();"  value='<?php echo $name; ?>' class="form-control input-sm" readonly>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Father name <span style="color: red;"> * </span></label>
                                                        <input type="text" id="fname" onkeyup="this.value = this.value.toUpperCase();" name="fname"  value='<?php echo $father_name; ?>' class="form-control input-sm" readonly>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">CNIC <span style="color: red;"> * </span></label>
                                                        <input type="text" name="cnic" data-inputmask="'mask':'99999-9999999-9'" maxlength="15"  value='<?php echo $cnic; ?>' class="form-control input-sm" readonly>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label"> Mobile <span style="color: red;"> * </span></label>
                                                        <input type="text" data-inputmask="'mask' :'0399-9999999'" type="number" maxlength="12" name="mobile"  value='<?php echo $mobile; ?>' class="form-control input-sm" readonly>
                                                    </div>
                                                </div><!-- /.col -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Remaning</label>
                                                        <input type="text" name="remaning" class="form-control input-sm"  value='<?php echo $remaning; ?>' readonly>
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
                                                        <!-- <input type="text" placeholder="Enter here" name="remaning" class="form-control input-sm"> -->
                                                        <select class="form-control">
                                                            <option value="-1">Select Month</option>
                                                            <option value="Jan2023">Jan 2023</option>
                                                            <option value="feb2023">Feb 2023</option>
                                                            <option value="mar2023">Mar 2023</option>
                                                            <option value="apr2023">Apr 2023</option>
                                                            <option value="may2023">May 2023</option>
                                                            <option value="jun2023">Jun 2023</option>
                                                            <option value="Jul2023">Jul 2023</option>
                                                            <option value="aug2023">Aug 2023</option>
                                                            <option value="sep2023">Sep 2023</option>
                                                            <option value="oct2023">Oct 2023</option>
                                                            <option value="nov2023">Nov 2023</option>
                                                            <option value="dec2023">Dec 2023</option>
                                                        </select>

                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                            <div>
                                                <button class='btn btn-success' type='submit' name='search-customer'><i class="fa fa-upload fa-lg"></i> Save Update</button>

                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /.row -->
                            </div><!-- /pannel body -->
                        </div><!-- /pannel default-->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /padding md -->
        </div><!-- /main-container -->
    </div><!-- /wrapper -->

    <?php include("./include/footer.html"); ?>



    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>