<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
         
                



                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog fa-fw"></i> Configuration <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-cog fa-fw"></i> User management
                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                       
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-cog fa-fw"></i> Organisation Management
                                    
                                </div>
                            </a>
                        </li>
                         <li class="divider"></li>
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-cog fa-fw"></i> Module Management
                                    
                                </div>
                            </a>
                        </li>

                         
                       

                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>



                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog fa-fw"></i>  Administration <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>  General settings</a>
                        </li>
                        <li class="divider"></li>
                         <li><a href="#"><i class="fa fa-user fa-fw"></i>  Databse Backup</a>
                        </li>
                        <li class="divider"></li>
                         <li><a href="#"><i class="fa fa-user fa-fw"></i>  Audit Trail</a>
                        </li>
                        
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->





                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  {{ Confide::user()->username}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>  Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('users/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->