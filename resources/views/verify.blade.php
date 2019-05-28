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
            </div>
        </div>
    </header>
    <div class="wrapper" id="loginwrap">
        <div class="container">
            <div class="card-box about" id="cb-login">
                <div id="blue_oc_logo">
                    <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
                </div>
                <br />
                <h3>Verify your Registration</h3>
                <h5>We sent you an email</h5>
                <h6>To verify your registration, enter your verification code below.</h6>
                <br />
                <input type="text" class="form-control block" placeholder="Enter Code Here">
                <br />
                <br />
                <button class="btn btn-reverse"><a href="{{ route('auth-payment') }}">Verify</a></button>
                <br />
                <br />
                <h6>Didn't receive any email? <a href="#"><b>Resend email</b></a></h6>
            </div>
            <!--------------------------------------------------footer--------------------------------------------------->
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
