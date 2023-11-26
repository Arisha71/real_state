<?php include("auth.php"); ?>
<!DOCTYPE html>  
<html lang="en">
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

	<div id="wrapper" class="preload">
		<?php include("./include/top-nav.html"); ?>
		<?php include("./include/side-bar.html"); ?>
		<br><br><br><br>
		<div id="main-container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" >
					<div class="panel panel-default">
						<form action="fir-add-queries.php" method="post">
							<div class="panel-heading">
							Customer data
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Name</label>
											<input type="text" name="name" placeholder="Your name" class="form-control input-sm" required>
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Father name</label>
											<input type="text" placeholder="Your fname" name="fname" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">CNIC</label>
											<input type="text" name="cnic" data-inputmask="'mask':'99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" maxlength="15" placeholder="xxxxx-xxxxxxx-x" class="form-control input-sm" required >
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label"> Mobile</label>
											<input type="text" data-inputmask="'mask' :'0399-9999999'" placeholder="xxxx-xxxxxxx" type="number" maxlength="12" name="mobile" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="form-group">
									<label class="control-label">Address</label>
									<textarea class="form-control" name="address" placeholder="Your message here..." rows="3" data-required="true"></textarea>
								</div><!-- /form-group -->

								<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Plot #</label>
											<input type="number" placeholder="plot no" name="plotno" class="form-control input-sm" required >
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Price</label>
											<input type="number"  placeholder="price"  name="price" class="form-control input-sm">
										</div>
									</div><!-- /.col --><div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Installment</label>
											<input type="number" name="installment" placeholder="installment"  class="form-control input-sm" required >
										</div>
									</div><!-- /.col -->

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Advance</label>
											<input  type="number" placeholder="plot advance" name="advance" class="form-control input-sm">
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Remaning</label>
											<input type="number" name="remaning" placeholder="remainig" class="form-control input-sm" required >
										</div>
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Total</label>
											<input type="number"  name="total" placeholder="total" class="form-control input-sm">
										</div>
									</div><!-- /.col -->

							</div>
							<div class="panel-footer text-right">
								<button class="btn btn-success" type="add-student" name="add-customer">Add Customer</button>
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

<!-- <script src="./maskingCNIC/jquery.min.js"></script> -->
<script src="./maskingCNIC/jquery.inputmask.bundle.js"></script>
<script>
    $(":input").inputmask();
</script>

