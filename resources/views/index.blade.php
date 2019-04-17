<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/tnav.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>


    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- Logo container-->
                <div class="logo">
                    <a href="#" class="logo"><span>onlic<i class="md md-album"></i>in</span></a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras">
                    <ul class="nav navbar-nav navbar">
                        <li class="dropdown navbar-c-items" style="margin-left:90px;">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">USD <font color="yellow"><b>$0.80</b></font> </a>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">BTC <font color="yellow"><b>$4,011.81</b></font> </a>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">ETH <font color="yellow"><b>$137.43</b></font> </a>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">OCT <font color="yellow"><b>$0.80</b></font> </a>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">EUR <font color="yellow"><b>€0.60</b></font> </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img style="height:21px;width:21px;" src="assets/images/users/qmark.png" alt="user-img" class="img-circle"> HELP CENTER </a>
                        </li>

                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> Ismael Jerusalem </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

            </div>
        </div>

        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a><i class="md md-dashboard"></i>My Wallets</a>
                        </li>
                        <li class="has-submenu">
                            <a><i class="md md-color-lens"></i>Earnings</a>
                        </li>


                        <li class="has-submenu">
                            <a><i class="md md-layers"></i>Merchant Partners</a>
                        </li>
                        <li class="has-submenu">
                            <a><i class="md md-class"></i>Buy/Sell</a>
                        </li>
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h3>Current Balance</h3>
                    <div class="widget-bg-color-icon card-box fadeInDown animated">
                        <h1 align="center">100.4321</h1>
                        <h1 align="center">OCT</h1>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <a class="btn btn-block"><i class="fa fa-money fa-1x"></i> COIN IN</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-block"><i class="fa fa-money fa-1x"></i> COIN OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-9">
                    <h3>Account Balance</h3>
                    <div class="widget-bg-color-icon card-box">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th></th>
                                   <th></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Current Account</td>
                                   <td>200.0687</td>
                               </tr>
                               <tr>
                                   <td>Maintaining Balance</td>
                                   <td>200.0687</td>
                               </tr>
                               <tr>
                                   <td>Available Referral Codes</td>
                                   <td>200.0687</td>
                               </tr>
                               <tr>
                                  <td>Account Opening</td>
                                  <td>200.0687</td>  
                               </tr>  
                                <tr>
                                   <td>Manage Fund</td>
                                   <td>200.0687</td>
                                </tr>   
                                <tr>
                                   <td>Dormant</td>
                                   <td>200.0687</td>
                                </tr>
                                   
                           </tbody>
                       </table>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3">
                    <h3>Verification</h3>
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>
                        <div class="widget-chart text-center">
                            <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                            <h5 class="text-muted m-t-20">Total sales made today</h5>
                            <h2 class="font-600">$75</h2>
                            <ul class="list-inline m-t-15">
                                <li>
                                    <h5 class="text-muted m-t-20">Target</h5>
                                    <h4 class="m-b-0">$1000</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">Last week</h5>
                                    <h4 class="m-b-0">$523</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">Last Month</h5>
                                    <h4 class="m-b-0">$965</h4>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-9">
                    <h3>Recent Activity</h3>
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-pink pull-left">
                            <i class="md md-add-shopping-cart text-pink"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">280</b></h3>
                            <p class="text-muted">Today's Sales</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            © 2019 ONLICOIN.
                        </div>
                        <div class="col-xs-4">
                            <ul class="pull-right list-inline m-b-0">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul class="pull-right list-inline m-b-0">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
    </div>



    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/plugins/peity/jquery.peity.min.js"></script>

    <!-- jQuery  -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="assets/pages/jquery.dashboard.js"></script>

    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });

            $(".knob").knob();

        });
    </script>


</body>

</html>