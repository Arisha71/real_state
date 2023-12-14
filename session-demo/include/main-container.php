<div id="breadcrumb">
	<ul class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
		<li class="active">Blank page</li>
	</ul>
</div><!-- breadcrumb -->


<div class="main-header clearfix">
	<div class="page-title">
		<h3 class="no-margin">Dashboard</h3>
		<span>Welcome: <?php echo $_SESSION['name']; ?></span>
	</div><!-- /page-title -->
</div><!-- /main-header -->
<?php
$mydate = getdate(date("U"));
//echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<span class="pull-left">Today: <?php echo "$mydate[weekday] $mydate[mday]-$mydate[month], $mydate[year]"; ?> </span>

			</div>
			<div class="loading-overlay">
				<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
			</div>
		</div><!-- /panel -->
	</div><!-- /.col -->
</div><!-- ./row -->



<div class="padding-md">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="panel panel-default panel-stat2 bg-success">
				<div class="panel-body">
					<span class="stat-icon">
						<i class="fa fa-bar-chart-o"></i>
					</span>


					<!-- query for fetch data from databse that are exists -->
					<?php

					// include("config.php");
					// $qry = "SELECT * FROM property_selling ";
					// $run_qry = mysqli_query($cn, $qry);
					// if ($total_plots = mysqli_num_rows($run_qry)) {
					// } else {
					// 	echo "no record found";
					// }


											
							include("config.php");

							// Fetch total plots
							$qryPlots = "SELECT * FROM property_selling";
							$run_qryPlots = mysqli_query($cn, $qryPlots);

							if ($run_qryPlots) {
								$total_plots = mysqli_num_rows($run_qryPlots);
							} else {
								// Handle the error
								echo "Error executing query for total plots: " . mysqli_error($cn);
							}


							// Fetch total sales
							$qrySales = "SELECT * FROM property_selling WHERE status = '0'";
							$run_qrySales = mysqli_query($cn, $qrySales);

							if ($run_qrySales) {
								$total_sales = mysqli_num_rows($run_qrySales);
							} else {
								// Handle the error
								echo "Error executing query for total sales: " . mysqli_error($cn);
							}


							// Fetch total pending sales
							$qryPendingSales = "SELECT * FROM property_selling WHERE status = '1'";
							$run_qryPendingSales = mysqli_query($cn, $qryPendingSales);

							if ($run_qryPendingSales) {
								$total_pending_sales = mysqli_num_rows($run_qryPendingSales);
							} else {	
								// Handle the error
								echo "Error executing query for total pending sales: " . mysqli_error($cn);
							}
							

							//select customer from database
							$qryCustomers = "SELECT * FROM property_selling";
							$run_qryCustomers = mysqli_query($cn, $qryCustomers);

							if ($run_qryCustomers) {
								$total_customers = mysqli_num_rows($run_qryCustomers);
							} else {
								// Handle the error
								echo "Error executing query for total customers: " . mysqli_error($cn);
							}
							?>

					<div class="pull-right text-right">
						<div class="value" id="totalPlots"><?php echo $total_plots;  ?></div>
						<div class="title">Total Plots</div>
					</div>
				</div>
			</div><!-- /panel -->
		</div><!-- /.col -->

		<div class="col-md-3 col-sm-3">
			<div class="panel panel-default panel-stat2 bg-warning">
				<div class="panel-body">
					<span class="stat-icon">
						<i class="fa fa-bar-chart-o"></i>
					</span>
					<div class="pull-right text-right">
						<div class="value" id="totalSales"><?php echo $total_sales; ?></div>
						<div class="title">Total Sales</div>
					</div>
				</div>
			</div><!-- /panel -->
		</div><!-- /.col -->

		<div class="col-md-3 col-sm-3">
			<div class="panel panel-default panel-stat2 bg-info">
				<div class="panel-body">
					<span class="stat-icon">
						<i class="fa fa-envelope"></i>
					</span>
					<div class="pull-right text-right">
						<div class="value" id="totalPendingSales"><?php echo $total_pending_sales; ?></div>
						<div class="title">Pending Sales</div>
					</div>
				</div>
			</div><!-- /panel -->
		</div><!-- /.col -->

		<div class="col-md-3 col-sm-3">
			<div class="panel panel-default panel-stat2 bg-danger">
				<div class="panel-body">
					<span class="stat-icon">
						<i class="fa fa-envelope"></i>
					</span>
					<div class="pull-right text-right">
						<div class="value" id="customers"><?php echo $total_customers; ?></div>
						<div class="title">Total Customers</div>
					</div>
				</div>
			</div><!-- /panel -->
		</div><!-- /.col -->
	</div><!-- /.row -->

	<div class="loading-overlay">
		<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
	</div>
</div><!-- /panel -->
</div><!-- /.col -->

</div><!-- ./row -->

</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
	$(document).ready(function() {
		// Ajax request to fetch data
		$.ajax({
			url: 'fetch_data.php',
			type: 'GET',
			dataType: 'json',
			success: function(data) {
				// Update the totalPlots and totalSales elements with the fetched data
				$('#totalPlots').text(data.total_plots);
				$('#totalSales').text(data.total_sales);
				$('#totalPendingSales').text(data.total_pending_sales);
				$('#customers').text(data.total_sales);
			},
			error: function(xhr, status, error) {
				console.error('Error fetching data:', status, error);
			}
		});
	});
</script>