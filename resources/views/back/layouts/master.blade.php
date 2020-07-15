@include('back.layouts.header')

<body class="hold-transition skin-primary dark-sidebar sidebar-mini">
    <div class="wrapper">
        @include('back.sections.topmenu')



        @include('back.sections.sidebar');
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto w-p50">
                            <h3 class="page-title">e-Commerce</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Control</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="right-title w-170">
                            <span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
                                <span class="subheader_daterange-label">
                                    <span class="subheader_daterange-title"></span>
                                    <span class="subheader_daterange-date text-primary"></span>
                                </span>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">

                        <div class="col-12 col-xl-4">
                            <div class="box box-body">
                                <div class="flexbox">
                                    <h6 class="text-uppercase">Analysis</h6>
                                    <h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
                                </div>

                                <ul class="list-inline my-10">
                                    <li class="px-10">
                                        <h6 class="mb-0 text-bold">8952</h6>
                                        <small>Abu Dhabi</small>
                                    </li>

                                    <li class="br-1 bl-1 px-10">
                                        <h6 class="mb-0 text-bold">7458</h6>
                                        <small>Miami</small>
                                    </li>

                                    <li class="px-10">
                                        <h6 class="mb-0 text-bold">3254</h6>
                                        <small>London</small>
                                    </li>
                                </ul>

                                <div id="linearea">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
                            </div>


                            <div class="box">
                                <div class="box-body bg-img"
                                    style="background-image: url(../images/gallery/thumb/5.jpg);" data-overlay="5">
                                    <div class="flexbox mb-20">
                                        <h6 class="text-uppercase text-white">Today</h6>
                                        <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
                                    </div>
                                    <div id="lineToday"></div>
                                </div>

                                <div class="box-body">
                                    <ul class="flexbox flex-justified align-items-center">
                                        <li class="text-right">
                                            <div class="font-size-20 text-success">%60</div>
                                            <small class="text-uppercase">Direct sale</small>
                                        </li>

                                        <li class="text-center px-2">
                                            <div class="easypie" data-percent="53">
                                                <span class="percent">53%</span>
                                            </div>

                                        </li>

                                        <li class="text-left">
                                            <div class="font-size-20 text-warning">%40</div>
                                            <small class="text-uppercase">Whole sale</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-xl-8">
                            <!-- AREA CHART -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Revenue Statistics</h4>

                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <p class="mb-0">Traffic</p>
                                                    <div class="font-size-20 mb-5">4854,22k</div>
                                                    <div class="font-size-18 text-success">
                                                        <i class="fa fa-arrow-up pr-5"></i><span>+18%</span>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <p class="mb-0">Orders</p>
                                                    <div class="font-size-20 mb-5">854,512k</div>
                                                    <div class="font-size-18 text-success">
                                                        <i class="fa fa-arrow-up pr-5"></i><span>+9%</span>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <p class="mb-0">Revenue</p>
                                                    <div class="font-size-20 mb-5">4875,84k</div>
                                                    <div class="font-size-18 text-danger">
                                                        <i class="fa fa-arrow-down pr-5"></i><span>-8%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div id="stacked-column" style="height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-primary rounded"><i class="ion ion-cash"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-number">51,642</span>
                                    <span class="info-box-text">ORDER RECEIVED</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger rounded"><i class="ion ion-stats-bars"></i></span>

                                <div class="info-box-content text-right">
                                    <span class="info-box-number">$5,354</span>
                                    <span class="info-box-text">TAX DEDUCATION</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-success rounded"><i class="ion ion-thumbsup"></i></span>

                                <div class="info-box-content text-right">
                                    <span class="info-box-number">$1,642</span>
                                    <span class="info-box-text">REVENUE STATUS</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                    </div>

                    <div class="row">

                        <div class="col-12 col-xl-8">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Top 10 Products Sale</h4>
                                </div>
                                <div class="box-body">

                                    <div id="basic-pie" style="height:505px;"></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Invoice List</h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
                                            <thead>
                                                <tr>
                                                    <th>#Invoice</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Issue</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#5010</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$548</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Jan</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5011</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$548</td>
                                                    <td><span class="label label-success">Paid</span> </td>
                                                    <td>15-Sep</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5012</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$9658</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Jun</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5013</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$4587</td>
                                                    <td><span class="label label-success">Paid</span> </td>
                                                    <td>15-May</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5014</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$856</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Mar</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5015</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$956</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Aug</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5016</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$745</td>
                                                    <td><span class="label label-success">Paid</span> </td>
                                                    <td>15-Aug</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5010</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$548</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Jan</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5011</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$548</td>
                                                    <td><span class="label label-success">Paid</span> </td>
                                                    <td>15-Sep</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5012</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$9658</td>
                                                    <td><span class="label label-danger">Unpaid</span> </td>
                                                    <td>15-Jun</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5013</td>
                                                    <td>Lorem Ipsum</td>
                                                    <td>$4587</td>
                                                    <td><span class="label label-success">Paid</span> </td>
                                                    <td>15-May</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-file-text-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /. box -->

                        </div>

                        <div class="col-12 col-xl-4 ">
                            <div class="box">
                                <div class="bg-img box-inverse"
                                    style="background-image: url(../images/gallery/thumb/14.jpg);" data-overlay="5">
                                    <div class="box-header no-border">
                                        <h4>Data Stats</h4>
                                        <ul class="box-controls pull-right">
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" href="#"
                                                    class="btn btn-rounded btn-outline btn-white px-10">Stats</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Import</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                        Export</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-printer"></i>
                                                        Print</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                        Settings</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-body">
                                        <div class="flexbox flex-justified text-center mt-50">
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">30%</p>
                                                <p class="mb-0 font-weight-300">DIRECT SALE</p>
                                            </div>
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">40%</p>
                                                <p class="mb-0 font-weight-300">WHOLE SALE</p>
                                            </div>
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">50%</p>
                                                <p class="mb-0 font-weight-300">RETAIL SALE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="text-center py-15 bb-1 bb-dashed">
                                        <h4>Monthly Income</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>Abu Dhabi</small>
                                            </li>

                                            <li class="br-1 bl-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>Miami</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>London</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center py-10 bb-1 bb-dashed">
                                        <h4>Taxes info</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class=" px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>Abu Dhabi</small>
                                            </li>

                                            <li class="br-1 bl-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>Miami</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>London</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center py-10 mt-2">
                                        <h4>Partners Sale</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>Abu Dhabi</small>
                                            </li>

                                            <li class="br-1 bl-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>Miami</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>London</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="box">
                                <div class="box-body text-center">
                                    <div class="mb-20 mt-20">
                                        <img src="../images/avatar/3.jpg" width="150" class="rounded-circle" alt="user">
                                        <h4 class="mt-20 mb-0">johen doe</h4>
                                        <a href="mailto:dummy@gmail.com">dummy@gmail.com</a>
                                    </div>
                                    <div class="badge badge-pill badge-light font-size-16">Dashboard</div>
                                    <div class="badge badge-pill badge-light font-size-16">UI</div>
                                    <div class="badge badge-pill badge-light font-size-16">UX</div>
                                    <div class="badge badge-pill badge-info font-size-16" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="3 more">+10</div>
                                </div>
                                <div class="p-25 mt-15 bt-1">
                                    <div class="row text-center">
                                        <div class="col-6 br-1">
                                            <a href="#"
                                                class="link d-flex align-items-center justify-content-center font-medium"><i
                                                    class="mdi mdi-message font-size-20 mr-5"></i>Message</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#"
                                                class="link d-flex align-items-center justify-content-center font-medium"><i
                                                    class="mdi mdi-developer-board font-size-20 mr-5"></i>Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">Revenue</span>
                                    <span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
                                </h6>
                                <br>
                                <p class="font-size-26">$845,1258</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <div class="font-size-12"><i class="ion-arrow-graph-down-right text-success mr-1"></i>
                                    %18 decrease from last month</div>
                            </div>
                        </div>



                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('back.layouts.footer')
