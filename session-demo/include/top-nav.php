<div id="top-nav" class="skin-6 fixed">
    <div class="brand">
        <span>Fatehlinks</span>
    </div><!-- /brand -->
    <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav-notification clearfix">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blank.html#">
                <i class="fa fa-envelope fa-lg"></i>
                <span class="notification-label bounceIn animation-delay4">7</span>
            </a>
            <ul class="dropdown-menu message dropdown-1">
                <li><a>You have 4 new unread messages</a></li>					  
                <li>
                    <a class="clearfix" href="blank.html#">
                        <img src="img/user.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong></strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
                        </div>
                    </a>	
                </li>
                <li>
                    <a class="clearfix" href="blank.html#">
                        <img src="img/user2.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Jane Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
                        </div>
                    </a>	
                </li>
                <li>
                    <a class="clearfix" href="blank.html#">
                        <img src="img/user.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Bill Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
                        </div>
                    </a>	
                </li>
                <li>
                    <a class="clearfix" href="blank.html#">
                        <img src="img/user2.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Baby Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
                        </div>
                    </a>	
                </li>
                <li><a href="blank.html#">View all messages</a></li>					  
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blank.html#">
                <i class="fa fa-bell fa-lg"></i>
                <span class="notification-label bounceIn animation-delay6">5</span>
            </a>
            <ul class="dropdown-menu notification dropdown-3">
                <li><a href="blank.html#">You have 5 new notifications</a></li>					  
                <li>
                    <a href="blank.html#">
                        <span class="notification-icon bg-warning">
                            <i class="fa fa-warning"></i>
                        </span>
                        <span class="m-left-xs">Server #2 not responding.</span>
                        <span class="time text-muted">Just now</span>
                    </a>
                </li>
                <li>
                    <a href="blank.html#">
                        <span class="notification-icon bg-success">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">2m ago</span>
                    </a>
                </li>
                <li>
                    <a href="blank.html#">
                        <span class="notification-icon bg-danger">
                            <i class="fa fa-bolt"></i>
                        </span>
                        <span class="m-left-xs">Application error.</span>
                        <span class="time text-muted">5m ago</span>
                    </a>
                </li>
                <li>
                    <a href="blank.html#">
                        <span class="notification-icon bg-success">
                            <i class="fa fa-usd"></i>
                        </span>
                        <span class="m-left-xs">2 items sold.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li>
                    <a href="blank.html#">
                        <span class="notification-icon bg-success">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li><a href="blank.html#">View all notifications</a></li>					  
            </ul>
        </li>
        <li class="profile dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blank.html#">
                <strong><?php //echo $_SESSION['name']; ?></strong>
                <span><i class="fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="clearfix" href="blank.html#">
                        <img src="<?php echo $_SESSION['image'];  ?>" alt="User Avatar">
                        <div class="detail">
                            <strong><?php echo $_SESSION['name'];  ?></strong>
                            <p class="grey"><?php echo $_SESSION['email'];  ?></p> 
                        </div>
                    </a>
                </li>
                <li><a tabindex="-1" href="edit-admin.php" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
                <li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
                <li><a tabindex="-1" href="blank.html#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" class=" logoutConfirm_open" href="logout.php"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
            </ul>
        </li>
    </ul>
</div><!-- /top-nav-->