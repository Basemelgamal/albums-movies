<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="\images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!-- DataTables -->
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- ltr style -->
        {{--  <link href="{{ URL::TO('/') }}/public/assets/admin/css/core-ltr.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/responsive-ltr.css" rel="stylesheet">  --}}

        <link href="{{ URL::TO('/') }}/public/assets/admin/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/core.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/components.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/pages.css" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::TO('/') }}/public/assets/admin/css/responsive.css" rel="stylesheet" type="text/css"/>
        {{--  Fontawesome CDN integrate  --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js does not work if you view the page via file:// -->
        <!-- [if lt IE 9] -->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ URL::TO('/') }}/public/assets/admin/js/modernizr.min.js"></script>

    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!-- <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a> -->
                        <!-- Image Logo here -->
                        <a href="{{ url('/') }}" class="logo">
                            <i class="icon-c-logo"> <img src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" style="width: 40px height: 60px; object-fit: cover;"/> </i>
                            <span><img src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" style="height: 40px; width:60px;"/></span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><i class="fas fa-user"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Dashboard</li>
                            <li class="has_sub">
                                <a href="{{ url('admin/') }}" class="waves-effect"><i class="fas fa-home"></i><span class="label label-primary pull-right"></span><span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ url('admin/roles') }}" class="waves-effect"><i class="fas fa-network-wired"></i><span class="label label-primary pull-right">{{ App\Models\Role::count() }}</span><span> Roles </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ url('admin/members') }}" class="waves-effect"><i class="fas fa-users"></i><span class="label label-primary pull-right">{{ App\Models\User::count() }}</span><span> Members </span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                @yield('content')
                <footer class="footer text-right">
                    <span style="font-size: 12px; color: black; font-weight: bold;">All rights reserved © 2020</span>
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            </div>
            <!-- END wrapper -->
            <script>
                var resizefunc = [];
            </script>

            <!-- jQuery  -->
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/bootstrap-rtl.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/detect.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/fastclick.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.slimscroll.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.blockUI.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/waves.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/wow.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.nicescroll.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.scrollTo.min.js"></script>

            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>

            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.buttons.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/buttons.bootstrap.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/jszip.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/pdfmake.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/vfs_fonts.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/buttons.html5.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/buttons.print.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.fixedHeader.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.keyTable.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/responsive.bootstrap.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.scroller.min.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.colVis.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/dataTables.fixedColumns.min.js"></script>

            <script src="{{ URL::TO('/') }}/public/assets/admin/pages/datatables.init.js"></script>

            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.core.js"></script>
            <script src="{{ URL::TO('/') }}/public/assets/admin/js/jquery.app.js"></script>

            <!-- SwalAlert.js -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            @yield('additional_scripts')
            @if(\Session::has('alert'))
                @if( \Session::get('alert')['icon'] == 'success')
                    <script>
                        Swal.fire({
                            icon: "{{ \Session::get('alert')['icon']??'notice' }}",
                            title: "{{ \Session::get('alert')['title']??''}}",
                            showConfirmButton: false,
                            timer: 1500
                          })
                    </script>
                @else
                <script>
                    Swal.fire({
                        icon: "{{ \Session::get('alert')['icon']    ?? '' }}",
                        title: "{{ \Session::get('alert')['title']  ?? ''}}",
                        text: "{{ \Session::get('alert')['text']    ?? '' }}",
                    });
                </script>
                @endif
            @endif
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                    $('#datatable-keytable').DataTable({keys: true});
                    $('#datatable-responsive').DataTable();
                    $('#datatable-colvid').DataTable({
                        "dom": 'C<"clear">lfrtip',
                        "colVis": {
                            "buttonText": "Change columns"
                        }
                    });
                    $('#datatable-users').DataTable({
                        "dom": 'C<"clear">lfrtip',
                        "colVis": {
                            "buttonText": "Change columns"
                        }
                    });
                    $('#datatable-scroller').DataTable({
                        ajax: "{{ URL::TO('/') }}/public/assets/admin/plugins/datatables/json/scroller-demo.json",
                        deferRender: true,
                        scrollY: 380,
                        scrollCollapse: true,
                        scroller: true
                    });
                    var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                    var table = $('#datatable-fixed-col').DataTable({
                        scrollY: "300px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        fixedColumns: {
                            leftColumns: 1,
                            rightColumns: 1
                        }
                    });
                });
                TableManageButtons.init();

            </script>
        </body>
</html>


