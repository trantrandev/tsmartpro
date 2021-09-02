<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Main Menu</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Route::is('dashboard')?'active':null }}">
                <a  href="{{ url('admin') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <div class="pcoded-navigatio-lavel">Page overview</div>
            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Pages</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('admin/page/list') }}">
                            <span class="pcoded-mtext">List page</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('admin/page/add') }}">
                            <span class="pcoded-mtext">Add page</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                    <span class="pcoded-mtext">Posts</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('admin/post/list') }}">
                            <span class="pcoded-mtext">List post</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('admin/post/add') }}">
                            <span class="pcoded-mtext">Add post</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('admin/post/cat') }}">
                            <span class="pcoded-mtext">Categories</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('admin/product/list') }}">
                            <span class="pcoded-mtext">List product</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('admin/product/add') }}">
                            <span class="pcoded-mtext">Add product</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('admin/product/cat') }}">
                            <span class="pcoded-mtext">Categories</span>
                        </a>
                    </li>
                </ul>
            </li>

            <div class="pcoded-navigatio-lavel">Order perfomance</div>
            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Orders</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('admin/order/list') }}">
                            <span class="pcoded-mtext">List order</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-trending-up"></i></span>
                    <span class="pcoded-mtext">Statistical</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('admin/statictical') }}">
                            <span class="pcoded-mtext">List post</span>
                        </a>
                    </li>                                     
                </ul>
            </li>

            <div class="pcoded-navigatio-lavel">Manager HR</div>
            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Customers</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('admin/customer/list') }}">
                            <span class="pcoded-mtext">List customer</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu {{ Request::segment(2)=='user'?'pcoded-trigger':null }}" dropdown-icon="style1" subitem-icon="style1">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Users</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Route::is('user.list')?'active':null }}">
                        <a  href="{{ url('admin/user/list') }}">
                            <span class="pcoded-mtext">List user</span>
                        </a>
                    </li>                                     
                    <li class="{{ Route::is('user.add')?'active':null }}">
                        <a  href="{{ url('admin/user/add') }}">
                            <span class="pcoded-mtext">Add user</span>
                        </a>
                    </li>                                     
                </ul>
            </li>

            <li class="">
                <a href="{{ url('admin/setting') }}">
                    <span class="pcoded-micon"><i class="feather icon-settings"></i> </span>
                    <span class="pcoded-mtext">Setting</span>
                </a>
            </li>
        </div>
    </nav>