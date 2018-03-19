<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Dynamic Table</title>


    {{--<link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <link href="{{ asset('customcss/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!--Core CSS -->

    <link href="{{ asset('bucket_admin/bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bucket_admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('bucket_admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!--dynamic table-->
    <link href="{{ asset('bucket_admin/js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('bucket_admin/js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bucket_admin/js/data-tables/DT_bootstrap.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('bucket_admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bucket_admin/css/style-responsive.css') }}" rel="stylesheet" />


    @yield('css_scripts');


</head>

<body>

<section id="container">
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="" class="logo">
                Customized D-Table
                {{--<img src="{{ asset('bucket_admin/images/logo.png') }}" alt="">--}}
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="nav notify-row" id="top_menu">
           <h4> Full Customized Datatable with Custom Searching , Paginaiton </h4>
        </div>
        {{--<div class="top-nav clearfix">--}}

        </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="/d_board">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="/">
                            <i class="fa fa-dashboard"></i>
                            <span>Data-Table</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <section id="main-content">
        <section class="wrapper">
                @yield('content')
        </section>
    </section>

    <div class="right-sidebar">
        <div class="search-row">
            <input type="text" placeholder="Search" class="form-control">
        </div>
        <div class="right-stat-bar">
            <ul class="right-side-accordion">
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head red-bg active clearfix">
                        <span class="pull-left">work progress (5)</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                        <li>
                            <div class="prog-row side-mini-stat clearfix">
                                <div class="side-graph-info">
                                    <h4>Target sell</h4>
                                    <p>
                                        25%, Deadline 12 june 13
                                    </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="target-sell">
                                    </div>
                                </div>
                            </div>
                            <div class="prog-row side-mini-stat">
                                <div class="side-graph-info">
                                    <h4>product delivery</h4>
                                    <p>
                                        55%, Deadline 12 june 13
                                    </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="p-delivery">
                                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prog-row side-mini-stat">
                                <div class="side-graph-info payment-info">
                                    <h4>payment collection</h4>
                                    <p>
                                        25%, Deadline 12 june 13
                                    </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                                    </div>
                                </div>
                            </div>
                            <div class="prog-row side-mini-stat">
                                <div class="side-graph-info">
                                    <h4>delivery pending</h4>
                                    <p>
                                        44%, Deadline 12 june 13
                                    </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="d-pending">
                                    </div>
                                </div>
                            </div>
                            <div class="prog-row side-mini-stat">
                                <div class="col-md-12">
                                    <h4>total progress</h4>
                                    <p>
                                        50%, Deadline 12 june 13
                                    </p>
                                    <div class="progress progress-xs mtop10">
                                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head terques-bg active clearfix">
                        <span class="pull-left">contact online (5)</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                        <li>
                            <div class="prog-row">
                                <div class="user-thumb">
                                    <a href="#"><img src="{{ asset('bucket_admin/images/avatar1_small.jpg') }}" alt=""></a>
                                </div>
                                <div class="user-details">
                                    <h4><a href="#">Jonathan Smith</a></h4>
                                    <p>
                                        Work for fun
                                    </p>
                                </div>
                                <div class="user-status text-danger">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb">
                                    <a href="#"><img src="{{ asset('bucket_admin/images/avatar1.jpg') }}" alt=""></a>
                                </div>
                                <div class="user-details">
                                    <h4><a href="#">Anjelina Joe</a></h4>
                                    <p>
                                        Available
                                    </p>
                                </div>
                                <div class="user-status text-success">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb">
                                    <a href="#"><img src="{{ asset('bucket_admin/images/chat-avatar2.jpg') }}" alt=""></a>
                                </div>
                                <div class="user-details">
                                    <h4><a href="#">John Doe</a></h4>
                                    <p>
                                        Away from Desk
                                    </p>
                                </div>
                                <div class="user-status text-warning">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb">
                                    <a href="#"><img src="{{ asset('bucket_admin/images/avatar1_small.jpg') }}" alt=""></a>
                                </div>
                                <div class="user-details">
                                    <h4><a href="#">Mark Henry</a></h4>
                                    <p>
                                        working
                                    </p>
                                </div>
                                <div class="user-status text-info">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb">
                                    <a href="#"><img src="{{ asset('bucket_admin/images/avatar1.jpg') }}" alt=""></a>
                                </div>
                                <div class="user-details">
                                    <h4><a href="#">Shila Jones</a></h4>
                                    <p>
                                        Work for fun
                                    </p>
                                </div>
                                <div class="user-status text-danger">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                            </div>
                            <p class="text-center">
                                <a href="#" class="view-btn">View all Contacts</a>
                            </p>
                        </li>
                    </ul>
                </li>
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head purple-bg active">
                        <span class="pull-left"> recent activity (3)</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                        <li>
                            <div class="prog-row">
                                <div class="user-thumb rsn-activity">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="rsn-details ">
                                    <p class="text-muted">
                                        just now
                                    </p>
                                    <p>
                                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                                    </p>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb rsn-activity">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="rsn-details ">
                                    <p class="text-muted">
                                        2 min ago
                                    </p>
                                    <p>
                                        <a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
                                    </p>
                                </div>
                            </div>
                            <div class="prog-row">
                                <div class="user-thumb rsn-activity">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="rsn-details ">
                                    <p class="text-muted">
                                        1 day ago
                                    </p>
                                    <p>
                                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head yellow-bg active">
                        <span class="pull-left"> shipment status</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                        <li>
                            <div class="col-md-12">
                                <div class="prog-row">
                                    <p>
                                        Full sleeve baby wear (SL: 17665)
                                    </p>
                                    <div class="progress progress-xs mtop10">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prog-row">
                                    <p>
                                        Full sleeve baby wear (SL: 17665)
                                    </p>
                                    <div class="progress progress-xs mtop10">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>






<script src="{{ asset('bucket_admin/js/jquery.js') }}"></script>
<script src="{{ asset('bucket_admin/bs3/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('bucket_admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('bucket_admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('bucket_admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('bucket_admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('bucket_admin/js/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('bucket_admin/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('bucket_admin/js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('bucket_admin/js/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('bucket_admin/js/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('bucket_admin/js/flot-chart/jquery.flot.pie.resize.js') }}"></script>
{{--<script type="text/javascript" language="javascript" src="{{ asset('bucket_admin/js/advanced-datatable/js/jquery.dataTables.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('bucket_admin/js/data-tables/DT_bootstrap.js') }}"></script>
<script src="{{ asset('bucket_admin/js/scripts.js') }}"></script>
<script src="{{ asset('bucket_admin/js/dynamic_table_init.js') }}"></script>
{{-- for Data Table --}}
@yield('js_scripts')

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


{{-- AXIOS--}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>

</html>