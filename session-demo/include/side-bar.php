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
        <div class="user-block clearfix">
            <img src="<?php echo $admin_photo;  ?>" alt="User Avatar not found">
            <div class="detail">
                <strong><?php echo $username; ?></strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs">4</span>
                <ul class="list-inline">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="inbox.html" class="no-margin">Inbox</a></li>
                </ul>
            </div>
        </div><!-- /user-block -->
        <div class="search-block">
            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="search here...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /search-block -->
        <div class="main-menu">
            <ul>
                <li>
                    <a href="home.php">
                        <span class="menu-icon">
                            <i class="fa fa-desktop fa-lg"></i>
                        </span>
                        <span class="text">
                            Dashboard
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>

                <li class="openable">
                    <a href="index.html#">
                        <span class="menu-icon">
                            <i class="fa fa-user fa-lg"></i> 
                        </span>
                        <span class="text">
                            Customer
                        </span>
                        <span class="menu-hover"></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="add-customer.php"><span class="submenu-label"><i class="fa fa-plus fa-lg"></i>  Add Customer</span></a></li>
                        <li><a href="view-customer.php"><span class="submenu-label"><i class="fa fa-eye fa-lg"></i> View Customer</span></a></li> 
                      </ul>
                </li>
                <li>
                    <a href="view-documunts.php">
                        <span class="menu-icon">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                        <span class="text">
                            View Documunts
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