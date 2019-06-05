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
                                <!--                                <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000">About Us</h1>-->
                                <h1 data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1000"><i>"Grow Your Money By Doing Less"</i></h1>
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
<section class="section" id="mission">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 data-aos="fade-right" data-aos-duration="1000"><b>Our Mission</b></h2>
                <h4 data-aos="fade-right" data-aos-duration="1000">Onlicoin aims to provide safe, fast, and easy remittance services and low-risk investment opportunities, both locally and internationally.</h4>
            </div>
            <div class="col-sm-6">
                <img data-aos="fade-left" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section" id="values">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 data-aos="fade-right" data-aos-duration="1000"><b>Values</b></h2>
                <h3 data-aos="fade-right" data-aos-duration="1000">Innovative</h3>
                <h4 data-aos="fade-right" data-aos-duration="1000">There is always something new in the emerging tech, our company purses to continue to evolve in order to provide the best up to date ways for the customer’s convenience.</h4>
            </div>
            <div class="col-sm-6">
                <!--                    <h3><b>Values</b></h3>-->
                <img data-aos="fade-left" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-6">
                <img data-aos="fade-right" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
            <div class="col-sm-6">
                <h3 data-aos="fade-left" data-aos-duration="1000">Transparent</h3>
                <h4 data-aos="fade-left" data-aos-duration="1000">Onlicoin believes that honesty and transparency is one of the building blocks of trust for partners and our customers.</h4>
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-6">
                <h3 data-aos="fade-right" data-aos-duration="1000">Impact - Oriented</h3>
                <h4 data-aos="fade-right" data-aos-duration="1000">Onlicoin is driven by its purpose to provide solutions to the people. It is important to us that when it comes to the services we provide, we make people’s lives easier.</h4>
            </div>
            <div class="col-sm-6">
                <img data-aos="fade-left" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-6">
                <img data-aos="fade-right" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
            <div class="col-sm-6">
                <h3 data-aos="fade-left" data-aos-duration="1000">User - Centered</h3>
                <h4 data-aos="fade-left" data-aos-duration="1000">We want to create a positive experience for the users. Our designs are made to skip the complicated and make the platform easy to use.</h4>
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-6">
                <h3 data-aos="fade-right" data-aos-duration="1000">Integrity</h3>
                <h4 data-aos="fade-right" data-aos-duration="1000">We uphold strong moral and ethical standards in running our company. Our desire is to work with people who value integrity.</h4>
            </div>
            <div class="col-sm-6">
                <!--                    <h3><b>Values</b></h3>-->
                <img data-aos="fade-left" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-6">
                <img data-aos="fade-right" data-aos-duration="1000" style="width: 100%; height: 300px;" src="https://placeimg.com/1000/768/tech" alt="">
            </div>
            <div class="col-sm-6">
                <h3 data-aos="fade-left" data-aos-duration="1000">Passionate</h3>
                <h4 data-aos="fade-left" data-aos-duration="1000">We work to consistently reach our goals in order to contribute our share in helping the community. We look for people driven by their desire to work towards reaching the goal of the company.</h4>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section" id="story">
    <div class="container">
        <div class="row">
            <h2 data-aos="zoom-in-up" data-aos-duration="1000" class="text-center"><b>Company Story</b></h2>
            <h4 data-aos="zoom-in-up" data-aos-duration="1000" class="text-center">Onlicoin is a financial company that started in 2019 with the vision of a better online platform for remittance and investment. Through the use of blockchain technology, we are creating a safer place for digital transactions both for business and personal use. Licensed by the Bangko Sentral ng Pilipinas and trusted by more than (number) partners nationwide, Onlicoin meets the needs of more than (number) Filipinos worldwide.</h4>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<!--   Call to action   -->
<section class="section" id="cta">
    <div class="container">
        <div class="row">
            <div id="cta-content">
                <h3 data-aos="zoom-in-up">Whether you’re a business owner, a merchant, or an individual, Onlicoin is the perfect platform for you!</h3>
            </div>
        </div> <!-- end row -->
        <div class="text-center" data-aos="zoom-in-up">
            <a href="{{ route('register') }}"><button id="bottom-signup" class="btn btn-black-bordered navbar-btn"> SIGN UP</button></a>
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

<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="glyphicon glyphicon-chevron-up"></i> </a>
@stop
