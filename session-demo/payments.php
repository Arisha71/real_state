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
                                        <form action="" method="GET">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Customer ID <span style="color: red;"> * </span></label>
                                                    <input type="text" placeholder="Enter here" name="customer_id" value="<?php // if(isset($_GET['customer_id'])){ echo $_GET('customer_id');}  ?>" class="form-control input-sm" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <br>
                                                    <button class='btn btn-success' name="search" type='submit'><i class="fa fa-search fa-lg"></i>Search Customer</button>

                                                </div>
                                            </div><!-- /.col -->
                                    </div><!-- /.row -->
                            </form>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    
    <?php
    include("config.php");
    if(isset($_GET['search']))
    {
        $get_customer_id = $_GET['customer_id']; //get data by id
        $qry = "SELECT * FROM property_selling WHERE id ='$get_customer_id'";
        $run = mysqli_query($cn,$qry);
        if($run){
          $row = mysqli_fetch_array($run);
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
                                <div class="panel-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Name <span style="color: red;"> * </span></label>
                                                <input type="text" name="name"  value="<?php echo $row['name'];  ?>" onkeyup="this.value = this.value.toUpperCase();" class="form-control input-sm" readonly>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Father name <span style="color: red;"> * </span></label>
                                                <input type="text"value="<?php echo $row['father_name'];  ?>" onkeyup="this.value = this.value.toUpperCase();" name="fname" class="form-control input-sm" readonly>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">CNIC <span style="color: red;"> * </span></label>
                                                <input type="text" name="cnic" value="<?php echo $row['cnic'];  ?>" data-inputmask="'mask':'99999-9999999-9'" maxlength="15" class="form-control input-sm" readonly>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label"> Mobile <span style="color: red;"> * </span></label>
                                                <input type="text" value="<?php echo $row['mobile'];  ?>" data-inputmask="'mask' :'0399-9999999'" type="number" maxlength="12" name="mobile" class="form-control input-sm" readonly>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Remaning</label>
                                                <input type="text" value="<?php echo $row['remaning'];  ?>" name="remaning" class="form-control input-sm" readonly>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Pay<span style="color: red;"> * </span></label>
                                                <input type="text" value="<?php echo $row['price'];  ?>" placeholder="Enter here" name="price" class="form-control input-sm">
                                            </div>
                                        </div><!-- /.col -->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Month <span style="color: red;"> * </span></label>
                                                <select class="form-control">
                                                    <option value="-1">Select Month</option>
                                                    <option value="Jan">Jan </option>
                                                    <option value="feb">Feb </option>
                                                    <option value="mar">Mar </option>
                                                    <option value="apr">Apr </option>
                                                    <option value="may">May </option>
                                                    <option value="jun">Jun </option>
                                                    <option value="Jul">Jul </option>
                                                    <option value="aug">Aug </option>
                                                    <option value="sep">Sep </option>
                                                    <option value="oct">Oct </option>
                                                    <option value="nov">Nov </option>
                                                    <option value="dec">Dec </option>
                                                </select>

                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div>
                                        <button class='btn btn-success' type='submit' name='search-customer'><i class="fa fa-upload fa-lg"></i> Save Update</button>

                                    </div>
                                    </form>
                                </div>
                            
                        </div><!-- /.row -->
                    </div><!-- /pannel body -->
                </div><!-- /pannel default-->
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /padding md -->
            
            <?php
        }
        else{
            echo mysqli_error($cn);

        }
    }

    // // create select query.....
    // $qry = "SELECT *  FROM property_selling WHERE id='$get_customer_id'";
    // $result = mysqli_query($cn, $qry);
    // $num_rows = mysqli_num_rows($result); //number of rows
    // $rows = mysqli_fetch_array($result);

    // //if data found then....
    // if ($num_rows > 0) {

    // 	$id = $rows['id'];
    // 	$name = $rows['name'];
    // 	$father_name = $rows['father_name'];
    // 	$cnic = $rows['cnic'];
    // 	$mobile = $rows['mobile'];
    // 	$price = $rows['price'];
    // 	$advance = $rows['advance'];
    // 	$remaning = $rows['remaning'];
    // 	$status = $rows['status'];
    // } else {
    // 	echo mysqli_error($cn);
    // 	// header("Location:view-customer.php");
    // }
    ?>
    
  </div><!-- /main-container -->
</div><!-- /wrapper -->

    <?php include("./include/footer.html"); ?>
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>
</html>