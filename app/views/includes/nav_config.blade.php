 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
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
                    <li>
                        <a href="{{ URL::to('business_units') }}"><i class="fa fa-home fa-fw"></i> Business Units</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('branches') }}"><i class="fa fa-user fa-fw"></i> Branches</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('currencies') }}"><i class="fa fa-link fa-fw"></i> Currency</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('holidays') }}"><i class="fa fa-lock fa-fw"></i> Holidays</a>
                    </li>
                    
                    
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->