<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header nav-small-cap">PERSONAL</li>

            <li class="treeview active">
                <a href="#">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ti-files"></i>
                    <span>{{__('messages.Blog')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route("blog.index") }}"><i class="ti-more"></i>{{__('messages.List Blog')}}</a></li>
                    <li><a href="{{ route("blog.create") }}"><i class="ti-more"></i>{{__('messages.Create New Blog')}}</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-direction-alt"></i>
                    <span>{{__('messages.Content')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="ti-more"></i>{{__('messages.Slider')}}
                        </a></li>
                    <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="ti-more"></i>{{__('messages.Banner')}}
                        </a></li>
                    <li><a href="pages/page_layout_inner_fixed_left_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Left Sidebar </a></li>
                    <li><a href="pages/page_layout_inner_fixed_right_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Right Sidebar </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="ti-direction-alt"></i>
                    <span>{{__('messages.Shop')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="ti-more"></i>{{__('messages.Product')}}
                        </a></li>
                    <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="ti-more"></i>{{__('messages.Category')}}
                        </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ti-direction-alt"></i>
                    <span>{{__('messages.Order')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="ti-more"></i>Inner Left Sidebar
                        </a></li>
                    <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="ti-more"></i>Inner Right Sidebar
                        </a></li>
                    <li><a href="pages/page_layout_inner_fixed_left_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Left Sidebar </a></li>
                    <li><a href="pages/page_layout_inner_fixed_right_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Right Sidebar </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ti-direction-alt"></i>
                    <span>{{__('messages.Sytem')}} </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="ti-more"></i>Inner Left Sidebar
                        </a></li>
                    <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="ti-more"></i>Inner Right Sidebar
                        </a></li>
                    <li><a href="pages/page_layout_inner_fixed_left_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Left Sidebar </a></li>
                    <li><a href="pages/page_layout_inner_fixed_right_sidebar.html"><i class="ti-more"></i>Inner Fixed
                            Right Sidebar </a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
