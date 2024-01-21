<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payments</title>
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
                                                    <input type="text" placeholder="Enter here" name="customer_id" value="<?php // if(isset($_GET['customer_id'])){ echo $_GET('customer_id');}  
                                                                                                                            ?>" class="form-control input-sm" required>
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
            if (isset($_GET['search'])) {
                $get_customer_id = $_GET['customer_id']; //get data by id
                $qry = "SELECT * FROM property_selling WHERE id ='$get_customer_id'";
                $run = mysqli_query($cn, $qry);
                while ($row = mysqli_fetch_array($run)) {
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
                                                <form action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Name <span style="color: red;"> * </span></label>
                                                                <input type="text" name="name" id="name" value="<?php echo $row['name'];  ?>" onkeyup="this.value = this.value.toUpperCase();" class="form-control input-sm" readonly>
                                                            </div>
                                                        </div><!-- /.col -->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Father name <span style="color: red;"> * </span></label>
                                                                <input type="text" id="fname" value="<?php echo $row['father_name'];  ?>" onkeyup="this.value = this.value.toUpperCase();" name="fname" class="form-control input-sm" readonly>
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
                                                                <input type="text" value="<?php echo $row['price']; ?>" placeholder="Enter here" id="amountPay" oninput="decrementAmount()" name="pay" class="form-control input-sm" required>
                                                            </div>
                                                        </div><!-- /.col -->
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label" required >Month <span style="color: red;"> * </span></label>
                                                                <select class="form-control input-sm">
                                                                    <option value="-1">Select Month</option>
                                                                    <option value="Jan">January</option>
                                                                    <option value="feb">February</option>
                                                                    <option value="mar">March</option>
                                                                    <option value="apr">April</option>
                                                                    <option value="may">May</option>
                                                                    <option value="jun">June</option>
                                                                    <option value="Jul">July</option>
                                                                    <option value="aug">August</option>
                                                                    <option value="sep">September</option>
                                                                    <option value="oct">October</option>
                                                                    <option value="nov">November</option>
                                                                    <option value="dec">December</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                                    <label class="control-label" required >Year<span style="color: red;"> * </span></label>
                                                                    <select class="form-control input-sm" required>
                                                                        <option value="-1">Select Year</option>
                                                                        <option value="2023" name="2023">2023</option>
                                                                        <option value="2024" name="2024">2024</option>
                                                                    </select>

                                                                </div>
                                                                </div>
                                                    </div><!-- /.row -->
                                                    <div>
                                                        <button class='btn btn-success' type='submit' name='update-customer'><i class="fa fa-upload fa-lg"></i> Save Update</button>
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
            }
            ?>

        </div><!-- /main-container -->
    </div><!-- /wrapper -->

    <?php include("./include/footer.html"); ?>
    <a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
</body>

</html>
 <script>
    function decrementAmount() {
      // Get paid amount, remaining amount, and payment amount
      var paidAmountElement = document.getElementById("paidAmount");
      var remainingAmountElement = document.getElementById("remainingAmount");
      var paymentAmountElement = document.getElementById("paymentAmount");

      var paidAmount = parseFloat(paidAmountElement.innerText);
      var remainingAmount = parseFloat(remainingAmountElement.innerText);
      var paymentAmount = parseFloat(paymentAmountElement.value);

      // Check if payment amount is valid
      if (isNaN(paymentAmount) || paymentAmount <= 0) {
        alert("Please enter a valid payment amount.");
        return;
      }

      // Check if remaining amount is sufficient
      if (paymentAmount > remainingAmount) {
        alert("Payment amount exceeds remaining amount.");
        return;
      }

      // Increment the paid amount and decrement the remaining amount
      var newPaidAmount = paidAmount + paymentAmount;
      var newRemainingAmount = remainingAmount - paymentAmount;

      paidAmountElement.innerText = newPaidAmount;
      remainingAmountElement.innerText = newRemainingAmount;

      // You can perform additional actions here, such as updating a database or displaying a success message.
      alert("Payment successful. Paid amount: " + newPaidAmount + ", Remaining amount: " + newRemainingAmount);
    }
  </script>
<!------------------------------- update customer query --------------------->

<?php
if (isset($_POST['update-customer'])) {
    $remaning = $_POST['remaning'];
    $pay = $_POST['price'];

    // update query 
    $update_qry = "UPDATE property_selling SET remaning= '$remaning', price = '$pay' WHERE id ='$get_customer_id'";
    $result = mysqli_query($cn, $update_qry);
    if ($result) {
       echo '<script>alert("data has been uodated")</script>';
    } else {
        echo mysqli_error($cn);
       '<script>alert("data has not been uodated")</script>';

    }
}
?>