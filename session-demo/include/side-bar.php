<aside class="fixed skin-6">
    <div class="sidebar-inner scrollable-sidebars">
        <div class="size-toggle">
            <a class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="btn btn-sm pull-right logoutConfirm_open" href="logout.php">
                <i class="fa fa-power-off"></i>
            </a>

        </div><!-- /size-toggle -->
        <?php
	include('config.php');

	$userauthentication = $_SESSION['email'];
	$select_user_qry="SELECT * FROM admin WHERE email='$userauthentication'";
	$result = mysqli_query($cn,$select_user_qry);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
	  $username = $row['username'];
	  $photo = $row['photo'];
	
	}
	?>
        <div class="user-block clearfix">
            <img src="<?php echo $photo;  ?>" alt="User Avatar not found">
            <div class="detail">
                <strong><?php echo $username; ?></strong><span class=" animation-delay4 m-left-xs"></span>
                <ul class="list-inline">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="inbox.html" class="no-margin">Inbox</a></li>
                </ul>
            </div>
        </div><!-- /user-block -->

        <form action="" method="GET">
            <div class="search-block">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" id="search-input" 
                    name="search" placeholder="search here...">
                    <span class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button" onclick="searchCustomers()" name="search-btn"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /search-block -->
        </form>
        </a>
        <div class="main-menu">
        <ul>
					<li>
						<a href="home.php">
							<span class="menu-icon">
								<i class="fa fa-dashboard fa-lg"></i>
							</span>
							<span class="text">
								Dashboard
							</span>
							<span class="menu-hover"></span>
						</a>
					</li>

               

               <!-- customer tab -->
					<!-- <li class="openable open">
						<a href="customers.php">
							<span class="menu-icon">
								<i class="fa fa-file-text fa-lg"></i>
							</span>
							<span class="text">
								Customers
							</span>
							<span class="menu-hover"></span>
						</a>
						<ul class="submenu">
							<li><a href="customers.php"><span class="submenu-label"><i class="fa fa-plus"></i> Add Customer</span></a></li>
							<li><a href="view-customers.php"><span class="submenu-label"><i class="fa fa-eye"></i> View Customers</span></a></li>
						</ul>
					</li> -->
					
               <!-- product tab -->
					<li class="openable open">
						<a href="add-customer.php">
							<span class="menu-icon">
								<i class="fa fa-user fa-lg"></i>
							</span>
							<span class="text">
								Customer
							</span>
							<span class="menu-hover"></span>
						</a>
						<ul class="submenu">
							<li><a href="add-customer.php"><span class="submenu-label"><i class="fa fa-plus"></i> Add Customer</span></a></li>
							<li><a href="view-customer.php"><span class="submenu-label"><i class="fa fa-eye"></i> View Customer</span></a></li>
						</ul>
					</li>

				

                 

                

                  <!-- report tab -->
					<li class="openable open">
						<a href="payments.php">
							<span class="menu-icon">
								<i class="fa fa-money fa-lg"></i>
							</span>
							<span class="text">
								Payment
							</span>
							<span class="menu-hover"></span>
						</a>
						
					</li>
				</ul>

            <div class="alert alert-info">
                Welcome to Perfect Admin. Do not forget to check all my pages.
            </div>
        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner -->
</aside>

<script>
function searchCustomers() {
    var searchInput = document.getElementById("search-input").value;

    // Check if the searchInput is empty
    if (searchInput.trim() === "") {
        alert("Please enter any customer ID.");
        window.location.href = "home.php";
    } else if (!isValidId(searchInput)) {
        alert("You entered an invalid ID. Please enter a valid customer ID.");
    } else {
        // Redirect to the search page with the search query
        window.location.href = "customer-info-display.php?customer_id=" + searchInput;
    }
}

function isValidId(id) {
    // You can implement your own logic to check if the provided ID is valid
    // For example, you can check if it's a numeric value or meets specific criteria
    return /^\d+$/.test(id);
}
</script>
