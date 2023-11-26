<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>fatehlinks</title>
	<?php include("./include/linked-files.html"); ?>

</head>

<body class="overflow-hidden">
	<?php include("./include/top-nav.html"); ?>

	<div id="wrapper" class="preload">
		<?php include("./include/side-bar.html"); ?>
            <br><br><br><br> <br><br>
			<div class="container">
				<div class="row">
                  <div class="col-md-1"></div>
					<div class="col-md-10 panel panel-default table-responsive">
					   <div class="panel-heading">
						Data Table
						<span class="label label-info pull-right">790 Items</span>
							</div>
							<div class="padding-md clearfix">
								<table class="table table-striped" id="dataTable">
									<thead>
										<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Father name</th>
									<th>CNIC</th>
									<th>Mobile</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
							   </thead>
							   <tbody>
									<?php 
									include ("config.php");
                                  $view_students_qry ="SELECT * FROM student_information";
								  $result = $cn->query($view_students_qry);
								  if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){

                                    // make variables and display in rows
									$id = $row['id'];	
                                    $name = $row['name'];
									$father_name = $row['fname'];
									$name = $row['cnic'];
									$name = $row['mobile']; 
									$name = $row['address'];
									$name = $row['status'];
                                  ?>
								  <!-- show data in the rows -->
                                <tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?> </td>
									<td><?php echo $row['fname']; ?></td>
									<td><?php echo $row['cnic']; ?></td>
									<td><?php echo $row['mobile']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td>
										<a href='edit-student.php?id=<?php echo $id; ?>'><i class="fa fa-edit"></i>Edit</a> 
										|
										<a href='delete.php?deleteid=<?php echo $id; ?>'><i class=" fa fa-trash-o"></i>Delte</a>
									</td>
								</tr>
							<?php }}  ?>

							</tbody>
						</table>
					</div><!-- /.padding-md -->
				</div><!-- /panel -->
				</div>	
				<div class="col-md-1"></div>
				</div>	
			</div>

			<a href="table.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

	</div><!-- /main-container -->
	<?php include("./include/footer.html"); ?>
	

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

</body>

</html>

<script>
		$(function	()	{
			$('#dataTable').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			});
			
			$('#chk-all').click(function()	{
				if($(this).is(':checked'))	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked', true);
						$(this).parent().parent().parent().addClass('selected');
					});
				}
				else	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked' , false);
						$(this).parent().parent().parent().removeClass('selected');
					});
				}
			});
		});
	</script>