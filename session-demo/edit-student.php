<?php include("auth.php"); ?>
<!DOCTYPE html>  
<html lang="en">
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

	<div id="wrapper" class="preload">
		<?php include("./include/top-nav.html"); ?>
		<?php include("./include/side-bar.html"); ?>
		<br><br><br><br>

<?php 
include("config.php");
// create select query.....
$get_student_id = $_GET['id']; //get data by id
$qry = "SELECT *  FROM student_information WHERE id='$get_student_id'";
$result = $cn->query($qry);
$num_rows = mysqli_num_rows($result); //number of rows
$rows = mysqli_fetch_array($result);
//if data found then....
if($num_rows>0){

$student_id =$rows ['id'];
$student_name =$rows ['name'];
$student_father_name =$rows ['fname'];
$student_cnic =$rows ['cnic'];
$student_mobile =$rows ['mobile'];
$student_address =$rows ['address'];
$student_status =$rows ['status'];
}
else{
     header("Location:view-student.php");
}

?>
		<div id="main-container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" >
					<div class="panel panel-default">
						<form action="fir-update-queries.php" method="post">
							<div class="panel-heading">
							Edit Student info <input type="hidden" name="student-edit-page-id" value='<?php echo $student_id; ?>'>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label"> Student Name:</label>
											<input type="text" name='name' value='<?php echo $student_name; ?>' class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Father name</label>
											<input type="text" value='<?php echo $student_father_name; ?>' name="fname" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">CNIC</label>
											<input type="text" name="cnic" value='<?php echo $student_cnic; ?>' data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" maxlength="15" placeholder="xxxxx-xxxxxxx-x" class="form-control input-sm" required >
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label"> Mobile</label>
											<input type="text" value='<?php echo $student_mobile; ?>' data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" type="number" maxlength="12" name="mobile" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="form-group">
									<label class="control-label">Address</label>
									<textarea class="form-control" name="address" rows="3" data-required="true"><?php echo $student_address; ?> </textarea>
								</div><!-- /form-group -->
							</div>
							<div class="panel-footer text-right">
								<button class="btn btn-success" type="submit" name="update-student">update student</button>
								<button class="btn btn-success" type="reset">Clear</button>
							</div>
						</form>
					</div><!-- /panel -->
				</div><!-- /.col-->
			</div><!-- /.row -->
        </div><!-- /main-container -->

	<?php include("./include/footer.html"); ?>
	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>
</html>

<script src="./maskingCNIC/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>

