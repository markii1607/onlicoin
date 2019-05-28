<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>Onlicoin</title>

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/onlicoinStyle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="assets/js/modernizr.min.js"></script>
</head>

<body>
    <header id="topnav">
        <div class="topbar-main">
            <div id="main" class="container">
                <div class="col-sm-3" id="logo">
                    <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
                </div>
                <div class="col-sm-6 exchangeRate" id="exchangeRates">
                    <ul>
                        <li>
                            <h4>USD</h4>
                            <h5>$0.80</h5>
                        </li>
                        <li>
                            <h4>BTC</h4>
                            <h5>$4,001.81</h5>
                        </li>
                        <li>
                            <h4>ETH</h4>
                            <h5>$137.48</h5>
                        </li>
                        <li>
                            <h4>OCT</h4>
                            <h5>$0.80</h5>
                        </li>
                        <li>
                            <h4>EUR</h4>
                            <h5>$0.60</h5>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3" id="">
                    <ul class="nav-links pull-right">
                        <li>
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
                        </li>
                        <li>
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
                            <p class="inline-block">Michael Alcala</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar-custom">
            <div class="container">
                <div id="navbar">
                    <ul>
                        <li><a href="{{ route('auth-index') }}"><img src="assets/images/samp.png" alt="My Wallet"></a></li>
                        <li><a href="#"><img src="assets/images/samp.png" alt="Earnings"></a></li>
                        <li><a href="#"><img src="assets/images/samp.png" alt="Merchant Partners"></a></li>
                        <li><a href="#"><img src="assets/images/samp.png" alt="Buy / Sell"></a></li>
                        <li><a href="#"><img src="assets/images/samp.png" alt="Subscribers"></a></li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <div class="wrapper">
        <div class="container" id="index-wrap">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-30 panel-name">Current Balance</h4>

                        <div class="widget-chart text-center">
                            <h1>0</h1>
                            <h1>OCT</h1>
                            <ul class="list-inline m-t-15">
                                <li>
                                    <h5 class="text-muted m-t-20">2,888.00</h5>
                                    <h4 class="m-b-0">PHP</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">0.00012</h5>
                                    <h4 class="m-b-0">BTC</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">0.12345</h5>
                                    <h4 class="m-b-0">ETH</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('auth-cin_remittance') }}"><button class=" btn btn-primary">COIN IN</button></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('auth-cout_remittance') }}"><button class=" btn btn-primary">COIN OUT</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-30 panel-name">Verification</h4>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>Ismael wants to verify your account.</p>
                                </td>
                                <td><button class="btn btn-reverse"><i class="fa fa-check"></i></button></td>
                                <td><button class="btn btn-reverse"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>Mark wants to verify your account.</p>
                                </td>
                                <td><button class="btn btn-reverse"><i class="fa fa-check"></i></button></td>
                                <td><button class="btn btn-reverse"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>Kenn wants to verify your account.</p>
                                </td>
                                <td><button class="btn btn-reverse"><i class="fa fa-check"></i></button></td>
                                <td><button class="btn btn-reverse"><i class="fa fa-times"></i></button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-box">
                        <h3>Insert ADS here</h3>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-30 panel-name">Account Balance</h4>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Current Account</p>
                                    </td>
                                    <td>
                                        <p>0 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Subscription Amount</p>
                                    </td>
                                    <td>
                                        <p>200.0687 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Manage Fund</p>
                                    </td>
                                    <td>
                                        <p>0 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>TOTAL</p>
                                    </td>
                                    <td>
                                        <p>200.0687 OCT</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-box">
                        <h4 class="m-t-0 m-b-30 panel-name">Recent Activity</h4>
                        <table id="datatable" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Date</p>
                                    </td>
                                    <td>
                                        <p>Remarks</p>
                                    </td>
                                    <td>
                                        <p>Amount</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>APR 21 2019</p>
                                    </td>
                                    <td>
                                        <p>Received OCT from ismael</p>
                                    </td>
                                    <td>
                                        <p>+0.80 OCT</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--        footer-->
            <footer id="foot" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">

                            <ul class="pull-left list-inline inline-block m-b-0">
                                <li>
                                    <a href="#">© Onlicoin 2019</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 about">
                            <ul class="list-inline inline-block m-b-0">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">AML Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="pull-right list-inline inline-block m-b-0">
                                <li>
                                    <a href="https://www.facebook.com/onlicointoken"><img src="assets/images/fb-icon-oct.png" alt="Facebook"></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/onlicointoken"><img src="assets/images/twitter-icon-oct.png" alt="Twitter"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/onlicoin"><img src="assets/images/linkedin-icon-oct.png" alt="LinkedIn"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--    scripts-->
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
</body>

</html>
