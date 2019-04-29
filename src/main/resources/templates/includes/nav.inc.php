<!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Univ Formation</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php

                        $login = new User();

                        if ($login->already_connect() == 1 )
                        {
                            $login_user = $_SESSION['user_login'];
                            
                            echo"
                            <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> $login_user Profile</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"logout.php\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                            </li>
                            ";
                        }
                        else
                        {
                            echo'<li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> login</a></li>';
                        }
                        ?>

                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?php
                        if ($login->already_connect() == 1 )
                        {
                            $login_user = $_SESSION['user_login'];
                            if($_SESSION['user_type'] == 1)
                            {
                                 echo '<li><a href="admin-dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Admin Dashboard</a></li>';
                            }
                        }
                        ?>
                     
                        <li>
                            <a href="index.php"><i class="fa fa-table fa-fw"></i>Formations</a>
                        </li>
                        
                        <?php
                        if ($login->already_connect() != 1 )
                        {
                           echo'
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Administration<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="login.php">Connexion</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>';
                       
                        } 
                        ?>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>