<aside class="main-sidebar elevation-4 sidebar-dark-info">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        {{--<img src="{{asset('img/AdminLTELogo.png')}}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .2">--}}
        <span class="brand-text font-weight-light"><strong>Service</strong>Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
    {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
    </div>--}}

    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('account.list')}}" class="nav-link {{isset($active[0])&&$active[0]==1?'active':''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Account</p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{isset($active[0])&&$active[0]==2?'menu-open':''}}">
                    <a href="#" class="nav-link {{isset($active[0])&&$active[0]==2?'active':''}}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Client
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==2&&$active[1]==1?'active':''}}">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview {{isset($active[1])&&$active[0]==2&&$active[1]==2?'menu-open':''}}">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==2&&$active[1]==2?'active':''}}">
                                <i class="far fa-chart-bar nav-icon"></i>
                                <p>
                                    Report
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link {{isset($active[2])&&$active[0]==2&&$active[1]==2&&$active[2]==1?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Usage</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link {{isset($active[2])&&$active[0]==2&&$active[1]==2&&$active[2]==2?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Device</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link {{isset($active[2])&&$active[0]==2&&$active[1]==2&&$active[2]==3?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Subscribe</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{isset($active[0])&&$active[0]==3?'menu-open':''}}">
                    <a href="#" class="nav-link {{isset($active[0])&&$active[0]==3?'active':''}}">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Tools
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==3&&$active[1]==1?'active':''}}">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Upload/Calculate Workout</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==3&&$active[1]==2?'active':''}}">
                                <i class="fas fa-people-arrows nav-icon"></i>
                                <p>Clone Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==3&&$active[1]==3?'active':''}}">
                                <i class="fas fa-clone nav-icon"></i>
                                <p>Clone Workout</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{isset($active[1])&&$active[0]==3&&$active[1]==4?'active':''}}">
                                <i class="fas fa-file-import nav-icon"></i>
                                <p>Import Garmin Fit</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-assistive-listening-systems"></i>
                        <p>
                            System
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-share-alt nav-icon"></i>
                                <p>Social Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-server nav-icon"></i>
                                <p>Service Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-code nav-icon"></i>
                                <p>Service Type Attribute</p>
                            </a>
                        </li>
                    </ul>

                </li>


                <li class="nav-header">後端設定</li>
                <li class="nav-item">
                    <a href="{{route('settings.users.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.permission.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Permission</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.roles.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-passport"></i>
                        <p>Change Password</p>
                    </a>
                </li>








            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
