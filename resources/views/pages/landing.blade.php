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
                    <a href="#htu" class="nav-link">WHITEPAPER</a>
                </li>
                <li>
                    <a href="{{route('auth-about')}}" class="nav-link">ABOUT US</a>
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
                                <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000"><i>Financial Services </i></h1>
                                <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000"><i>Tailored For All Your Needs.</i></h1>

                                <!--                                    <h1><i>Onlicoin - The Next Generation Online Currency</i></h1>-->
                                <!--                                    <h1><i>Remittance and Investment Services All in One Place</i></h1>-->
                                <div class="bsign-up">
                                    <a href="{{route('register')}}"><button class="btn btn-signup">SIGN UP</button></a>
                                </div>
                            </div>
                            <div class="col-sm-5"></div>
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
                    <img data-aos="fade-down" data-aos-easing="ease-out" data-aos-duration="800" src="assets/images/feat_icons/versatile.png" alt="">
                    <h3 data-aos="fade-right">ONLINE CURRENCY <br> & VERSATILE</h3>
                    <p class="text-muted" data-aos="zoom-in" data-aos-duration="1200">Onlicoin is a unique online currency that can be exchanged into (add number of included fiat money) fiat money and can be converted into any/(number) cryptocurrency.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="features-box">
                    <img data-aos="fade-down" data-aos-easing="ease-out" data-aos-duration="800" src="assets/images/feat_icons/convenient.png" alt="">
                    <h3 data-aos="fade-right">CONVENIENT</h3>
                    <p class="text-muted" data-aos="zoom-in" data-aos-duration="1200">Send payments, receive money, and control your investments wherever you go.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features-box">
                    <img data-aos="fade-down" data-aos-easing="ease-out" data-aos-duration="1000" src="assets/images/feat_icons/transparency.png" alt="">
                    <h3 data-aos="fade-right">TRANSPARENCY</h3>
                    <p class="text-muted" data-aos="zoom-in" data-aos-duration="1200">No shady transactions. Verify other people’s wallets for security, trust, and integrity.</p>
                </div>
            </div>

        </div> <!-- end row -->

    </div> <!-- end container -->
</section>

<section class="section" id="htu">
    <div class="container">
        <div class="row">
        <h1>How It Works</h1>
            <div class="col-sm-4">
                <div class="features-box">
                    <img data-aos="zoom-in-up" data-aos-duration="1000" src="assets/images/hiw_icons/signup.png" alt="">
                    <p data-aos="zoom-in" data-aos-duration="1000" class="text-muted"><strong>Sign Up For Free</strong><br> It only takes a few minutes.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="features-box">
                    <img data-aos="zoom-in-up" data-aos-duration="1000" src="assets/images/hiw_icons/watch.png" alt="">
                    <p data-aos="zoom-in" data-aos-duration="1000" class="text-muted"><strong>Watch Our Video on <br> How to Use Onlicoin</strong><br>Learn all the benefits you can get!</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features-box">
                    <img data-aos="zoom-in-up" data-aos-duration="1000" src="assets/images/hiw_icons/transact.png" alt="">
                    <p data-aos="zoom-in" data-aos-duration="1000" class="text-muted"><strong>Start Any of Your <br> Financial Transactions</strong><br>Onlicoin Got You Covered!</p>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end Features -->

<!-- Testimonials section -->
<section class="section bg-testimonial">
    <div class="bg-overlay-testimonial"></div>
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
            <div class="col-sm-6">
                <img data-aos="fade-right" data-aos-duration="1000" class="pull-right" src="assets/images/hiw_icons/bottom.png" alt="">
            </div>
            <div class="col-sm-6">
                <div id="cta-content">
                    <h1>Experience The <br> Difference</h1>
                    <h4 data-aos="fade-left" data-aos-duration="1000">With the use of blockchain technology, <br> every transaction is more secure. <br> <em><b>(Sign Up for Free!)</b></em> </h4>
                    <a href="{{ route('auth-register') }}"><button data-aos="zoom-in-up" data-aos-duration="1000" id="bottom-signup" class="btn btn-white-bordered navbar-btn"> SIGN UP</button></a>
                </div>
            </div>
        </div> <!-- end row -->
<<<<<<< HEAD
        <div class="text-center">
            <a href="{{ route('register') }}"><button data-aos="zoom-in-up" data-aos-duration="1000" id="bottom-signup" class="btn btn-white-bordered navbar-btn"> SIGN UP</button></a>
        </div>
=======
>>>>>>> d7283e77e6b926e89d48a1fc07c85e1f80c50342
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
                <br>
                <br>
                <h6 class="text-center copyright">Copyright 2019 Onlicoin, All rights reserved. <b><a href="#">Privacy Policy</a> <a href="">Terms of Service</a></b></h6>
                <div class="social text-center">
                    <a href="https://www.facebook.com/onlicointoken"><img style="width:30px; height:30px" src="assets/images/social_icons/fb-icon-oct.png" alt="Facebook"></a>
                    <a href="https://twitter.com/onlicointoken"><img style="width:30px; height:30px" src="assets/images/social_icons/twitter-icon-oct.png" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/onlicoin/"><img style="width:30px; height:30px" src="assets/images/social_icons/linkedin-icon-oct.png" alt="LinkedIn"></a>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="clearfix"></div>
        </div>

    </div>
</footer>
<!-- End Footer -->
@stop
