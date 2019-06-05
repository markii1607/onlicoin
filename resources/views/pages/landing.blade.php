@extends('website_layout')
@section('header')
    <!-- Navbar -->
    <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
        <div class="container">

            <!-- Navbar-header -->
            <div class="navbar-header">

                <!-- Responsive menu button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- LOGO -->
                <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">

            </div>
            <!-- end navbar-header -->

            <!-- menu -->
            <div class="navbar-collapse collapse" id="navbar-menu">

                <!-- Navbar right -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#features" class="nav-link">FEATURES</a>
                    </li>
                    <li>
                        <a href="#whitepaper" class="nav-link">WHITEPAPER</a>
                    </li>
                    <li>
                        <a href="#pricing" class="nav-link">ABOUT US</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="nav-link">LOGIN</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="btn btn-white-bordered navbar-btn">SIGN UP</a>
                    </li>
                </ul>

            </div>
            <!--/Menu -->
        </div>
        <!-- end container -->
    </div>
    <!-- End navbar-custom -->
@stop

@section('content')
    <!-- HOME -->
    <section class="home bg-img-1" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-fullscreen">
                        <div class="full-screen">
                            <div class="home-wrapper home-wrapper-alt">
                                <div class="col-sm-7" id="banner-msg">
                                    <h1><i>Financial Services </i></h1>
                                    <h1><i>Tailored For All Your Needs.</i></h1>

                                    <!--                                    <h1><i>Onlicoin - The Next Generation Online Currency</i></h1>-->
                                    <!--                                    <h1><i>Remittance and Investment Services All in One Place</i></h1>-->
                                    <div class="bsign-up">
                                        <button class="btn btn-primary btn-white-bordered"><a href="{{route('register')}}">SIGN UP</a></button>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


    <!-- Features -->
    <section class="section" id="features">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <h5>ONLINE CURRENCY / VERSATILE</h5>
                        <p class="text-muted">Onlicoin is a unique online currency that can be exchanged into (add number of included fiat money) fiat money and can be converted into any/(number) cryptocurrency.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <h5>CONVENIENT</h5>
                        <p class="text-muted">Send payments, receive money, and control your investments wherever you go.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <h5>TRANSPARENCY</h5>
                        <p class="text-muted">No shady transactions. Verify other people’s wallets for security, trust, and integrity.</p>
                    </div>
                </div>

            </div> <!-- end row -->

        </div> <!-- end container -->
    </section>

    <section class="section" id="htu">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <p class="text-muted">Sign Up For Free - It only takes a few minutes.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <p class="text-muted">Watch Our Video on How to Use Onlicoin - Learn all the benefits you can get!</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="assets/images/gallery/1.jpg" alt="">
                        <p class="text-muted">Start Any of Your Financial Transactions - Onlicoin Got You Covered!</p>
                    </div>
                </div>
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section>
    <!-- end Features -->

    <!-- Testimonials section -->
    <section class="section bg-img-1">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="owl-carousel text-center">
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>·Onlicoin has allowed me to expand my investments and grow them to unexpected proportions.</h4>
                                <img src="assets/images/user.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Businessman</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>I’ve never had any experience with regards to trading, but with Onlicoin, I never thought it would be this simple!</h4>
                                <img src="assets/images/user2.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Millennial</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>I love the verification process. For me, Onlicoin has given me the elevated sense of security I needed.</h4>
                                <img src="assets/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Online Seller</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>Onlicoin changed my view about paying bills. No need to go to several places and wait for long hours in line. I love it!</h4>
                                <img src="assets/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Busy Person</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>As a cryptocurrency investor, I switched to Onlicoin because of the potential it has in terms of investments. Security is a big factor in deciding whether to invest or not. Onlicoin has fulfilled my criteria.</h4>
                                <img src="assets/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Rich Dude</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>I’m an OFW and whenever I send money at home, I’m always worried about the low and outdated conversion rates that takes a part of my earning. Luckily for me, I found Onlicoin. The conversion rate is up to date, the transfer charge is cheap and very reasonable.</h4>
                                <img src="assets/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- OFW</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <h4>I’ve had a lot of transactions with strangers through online selling. In fact, many people have given me false hope that they will buy my products. Most of the time, I get reservations with no concrete proof. Not anymore. Now, with Onlicoin, my life as an online merchant is better. I can check every person whom I transact with.</h4>
                                <img src="assets/images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                <p>- Online Seller</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Testimonials section -->

    <!--   Call to action   -->
    <section class="section" id="cta">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img class="pull-right" src="assets/images/gallery/1.jpg" alt="">
                </div>
                <div class="col-sm-9">
                    <div id="cta-content">
                        <h4>With the use of blockchain technology, every transaction is more secure. Experience the Difference. Get Started Now. (Sign Up for Free!)</h4>
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="text-center">
                <button id="bottom-signup" class="btn btn-black-bordered navbar-btn"> <a href="{{ route('register') }}">SIGN UP</a></button>
            </div>
        </div> <!-- end container -->
    </section>
    <!--   End call to action  -->
@stop

@section('footer')
    <!-- FOOTER -->
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
                    <h6 class="text-center copyright">Copyright 2019 Onlicoin, All rights reserved. <b><a href="#">Privacy Policy</a> <a href="">Terms of Service</a></b></h6>
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
    <!-- End Footer -->
@stop