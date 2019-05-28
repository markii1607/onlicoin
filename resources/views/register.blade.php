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
                <div class="col-sm3">
                    <ul id="reg-nav-links" class="pull-right about">
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">WHITEPAPER</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper" id="loginwrap">
        <div class="container reg-main">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-9">
                        <h1><i>Welcome to Onlicoin – your gateway towards flexible investments.</i></h1>
                    </div>
                </div>
                <div class="row testimonials about">
                    <div class="col-sm-4">
                        <img src="assets/images/qmark.png" class="inline" alt="">
                        <h4>PAY ONLINE</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/qmark.png" class="inline" alt="">
                        <h4> SEND AND RECEIVE MONEY</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/qmark.png" class="inline" alt="">
                        <h4>INVEST THROUGH OUR SUBSCRIPTION PLANS</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <h3>Join more than 8,888,888 users.</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
            <div class="col-sm-5">
                <div class="card-box about" id="cb-register">
                    <h3>Create Account</h3>
                    <h6>Already have an account?<a href="#"><b><i> Log in now</i></b></a></h6>
                    <br />
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Firstname">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Lastname">
                        </div>
                    </div>
                    <br />
                    <input type="text" class="form-control" placeholder="Email Address"><br />
                    <input type="text" class="form-control" placeholder="Mobile Number"><br />
                    <input type="text" class="form-control" placeholder="Password"><br />
                    <input type="text" class="form-control" placeholder="Confirm Password"><br />
                    <p class="pull-left"><i><b>I have a promo or referral code</b></i></p>
                    <input type="text" class="form-control" placeholder="Referral Code">
                    <br />
                    <h5>By clicking <b><i>Create Account</i></b>, you agree to our <b><i>Terms of Service</i></b> and <b><i>Privacy Policy</i></b>.</h5>
                    <br>
                    <button class="btn btn-reverse"><a href="{{ route('auth-verify') }}">Create Account</a></button>
                </div>
            </div>
            <!--------------------------------------------------footer--------------------------------------------------->

        </div>
        <footer id="foot2" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="col-sm-3">
                            <h4 class="head-links">
                                COMPANY
                            </h4>
                            <p>About Us</p>
                            <p>Contact Us</p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="head-links">
                                LEARN MORE
                            </h4>
                            <p>Fees</p>
                            <p>FAQ</p>
                            <p>Become a partner</p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="head-links">
                                BLOGS
                            </h4>
                            <p>Articles</p>
                            <p>Newsletter</p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="head-links">
                                OUR TECHNOLOGY
                            </h4>
                            <p>How it works</p>
                            <p>Safety</p>
                        </div>
                        <div class="clearfix"></div>
                        <h6 class="about copyright">Copyright 2019 Onlicoin, All rights reserved. <b><a href="#">Privacy Policy</a> <a href="">Terms of Service</a></b></h6>
                        <div class="social text-center">
                            <a href="https://www.facebook.com/onlicointoken"><img style="width:30px; height:30px" src="assets/images/fb-icon-oct.png" alt="Facebook"></a>
                            <a href="https://twitter.com/onlicointoken"><img style="width:30px; height:30px" src="assets/images/twitter-icon-oct.png" alt="Twitter"></a>
                            <a href="https://www.linkedin.com/company/onlicoin/"><img style="width:30px; height:30px" src="assets/images/linkedin-icon-oct.png" alt="LinkedIn"></a>
                        </div>

                    </div>
                    <div class="col-sm-2"></div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </footer>
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
