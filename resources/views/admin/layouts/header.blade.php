<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ URL::TO('/') }}/assets/admin/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ URL::TO('/') }}/assets/admin/plugins/morris/morris.css">

        <link href="{{ URL::TO('/') }}/assets/admin/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />


        <!-- ltr style -->
        <link href="{{ URL::TO('/') }}/assets/admin/css/core-ltr.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::TO('/') }}/assets/admin/css/responsive-ltr.css" rel="stylesheet">











        <script src="{{ URL::TO('/') }}/assets/admin/js/modernizr.min.js"></script>


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
                        <a href="index.html" class="logo">
                            <i class="icon-c-logo"> <img src="{{ URL::TO('/') }}/assets/admin/images/Artboard_5 .png" style="width: 85%; height: 42px; object-fit: cover;"/> </i>
                            <span><img src="{{ URL::TO('/') }}/assets/admin/images/Artboard_5 .png" style="height: auto; width: 100%;"/></span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav hidden-xs">
                                <li><a href="#" class="waves-effect waves-light">Files</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
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

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                    <li><a href="dashboard_3.html">Dashboard 3</a></li>
                                    <li><a href="dashboard_4.html">Dashboard 4</a></li>
                                    <li><a href="dashboard_5.html">dashboard 5</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> UI Kit </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-loading-buttons.html">Loading Buttons</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-portlets.html">Portlets</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a>
                                    <li><a href="ui-video.html">Video</a>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i><span class="label label-primary pull-right">9</span><span> Components </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Grid</a></li>
                                    <li><a href="components-widgets.html">Widgets</a></li>
                                    <li><a href="components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="components-range-sliders.html">Range sliders</a></li>
                                    <li><a href="components-masonry.html">Masonry</a></li>
                                    <li><a href="components-animation.html">Animation</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                    <li><a href="components-treeview.html">Treeview</a></li>
                                    <li><a href="components-tour.html">Tour</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                    <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                    <li><a href="icons-weather.html">Weather Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-code-editor.html">Code Editor</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-image-crop.html">Image Crop</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-foo-tables.html">FooTable</a></li>
                                    <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span class="label label-pink pull-right">11</span><span> Charts </span></a>
                                <ul class="list-unstyled">
                                	<li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline charts</a></li>
                                    <li><a href="chart-radial.html">Radial charts</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                    <li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="map-google.html"> Google Map</a></li>
                                    <li><a href="map-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-login-v2.html">Login v2</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-register-v2.html">Register v2</a></li>
                                    <li><a href="page-signup-signin.html">Signin - Signup</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-400.html">Error 400</a></li>
                                    <li><a href="page-403.html">Error 403</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404_alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                    <li><a href="page-503.html">Error 503</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extra-profile.html">Profile</a></li>
                                    <li><a href="extra-timeline.html">Timeline</a></li>
                                    <li><a href="extra-sitemap.html">Site map</a></li>
                                    <li><a href="extra-invoice.html">Invoice</a></li>
                                    <li><a href="extra-email-template.html">Email template</a></li>
                                    <li><a href="extra-maintenance.html">Maintenance</a></li>
                                    <li><a href="extra-coming-soon.html">Coming-soon</a></li>
                                    <li><a href="extra-faq.html">FAQ</a></li>
                                    <li><a href="extra-search-result.html">Search result</a></li>
                                    <li><a href="extra-gallery.html">Gallery</a></li>
                                    <li><a href="extra-pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i><span class="label label-success pull-right">3</span><span> Apps </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="apps-calendar.html"> Calendar</a></li>
                                    <li><a href="apps-contact.html"> Contact</a></li>
                                    <li><a href="apps-taskboard.html"> Taskboard</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="email-inbox.html"> Inbox</a></li>
                                    <li><a href="email-read.html"> Read Mail</a></li>
                                    <li><a href="email-compose.html"> Compose Mail</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-widget"></i><span> Layouts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="layout-leftbar_2.html"> Leftbar with User</a></li>
                                    <li><a href="layout-menu-collapsed.html"> Menu Collapsed</a></li>
                                    <li><a href="layout-menu-small.html"> Small Menu</a></li>
                                    <li><a href="layout-header_2.html"> Header style</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Crm </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="crm-dashboard.html"> Dashboard </a></li>
                                    <li><a href="crm-contact.html"> Contacts </a></li>
                                    <li><a href="crm-opportunities.html"> Opportunities </a></li>
                                    <li><a href="crm-leads.html"> Leads </a></li>
                                    <li><a href="crm-customers.html"> Customers </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span class="label label-warning pull-right">6</span><span> eCommerce </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>
                                    <li><a href="ecommerce-products.html"> Products</a></li>
                                    <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>
                                    <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>
                                    <li><a href="ecommerce-orders.html"> Orders</a></li>
                                    <li><a href="ecommerce-sellers.html"> Sellers</a></li>
                                </ul>
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
