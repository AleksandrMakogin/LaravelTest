<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">

    <title>Sunny Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
    {{-- //   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >--}}

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top pl-30">
            <!-- Sidebar toggle button-->
            <div>
                <ul class="nav">
                    <li class="btn-group nav-item">
                        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
                            <i class="nav-link-icon mdi mdi-menu"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
                            <i class="nav-link-icon mdi mdi-crop-free"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-check-box"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-calendar"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- full Screen -->
                    <li class="search-bar">
                        <div class="lookup lookup-circle lookup-right">
                            <input type="text" name="s">
                        </div>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
                            <i class="ti-bell"></i>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
                            <img src="../images/avatar/1.jpg" alt="">
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                            <i class="ti-settings"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <div class="user-profile">
                <div class="ulogo">
                    <a href="/">
                        <!-- logo for regular state and mobile devices -->
                        <div class="d-flex align-items-center justify-content-center">

                            <h3><b>?????????? </b> ?????????? ???????????? </h3>
                        </div>
                    </a>
                </div>
            </div>

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">

                <li>
                    <a href="/">
                        <i data-feather="pie-chart"></i>
                        <span>?????????????? </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>???????????? </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/api/films"><i class="ti-more"></i>Api ???????????? ????  ?????????????????? </a></li>
                        <li><a href="/api/films/2"><i class="ti-more"></i>Api ???????????? ????  id </a></li>
                        <li><a href="/api/gener"><i class="ti-more"></i>Api ???????? ????  ?????????????????? </a></li>
                        <li><a href="/api/gener/3"><i class="ti-more"></i>Api ???????? ????  id </a></li>
                    </ul>
                </li>







            </ul>
        </section>

        <div class="sidebar-footer">
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            @yield('content')


        </section>
        <!-- /.content -->
    </div>
</div>


</div>




<script src="{{asset('backend/js/vendors.min.js')}}"></script>
<script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/pages/data-table.js')}}"></script>

<script src="{{asset('backend/js/template.js')}}"></script>
<script src="{{asset('backend/js/pages/dashboard.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>
</html>


