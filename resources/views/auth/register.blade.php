@extends('master')
@section('header')
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
@stop 

@section('content')
    <div class="wrapper" id="loginwrap">
        <div class="container reg-main">
	<form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
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
                        <h6>Already have an account? <a href="{{ route('login') }}"><b>Log in now</b></a></h6>
                        <br />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <input id="first_name" type="text" placeholder="First Name" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <input id="last_name" type="text" placeholder="Last Name" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('contactNo') ? ' has-error' : '' }}">
                            <input id="contactNo" type="text" placeholder="Mobile Number" class="form-control" name="contactNo" value="{{ old('contactNo') }}" required autofocus>

                            @if ($errors->has('contactNo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contactNo') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" placeholder="Password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password_confirmation" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <p class="pull-left"><i><b>I have a promo or referral code</b></i></p>
                        <div class="form-group{{ $errors->has('user_referralCode') ? ' has-error' : '' }}">
                            <input id="user_referralCode" type="text" placeholder="Referral Code" class="form-control" name="user_referralCode" value="{{ old('user_referralCode') }}" autofocus>

                            @if ($errors->has('user_referralCode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_referralCode') }}</strong>
                                </span>
                            @endif
                        </div>
                        <h5>By clicking <b><i>Create Account</i></b>, you agree to our <b><i>Terms of Service</i></b> and <b><i>Privacy Policy</i></b>.</h5>
                        <br>
                        <button class="btn btn-reverse" type="submit">Create Account</button>
                    </div>
                </div>
            </form>
        </div>
@stop 

@section('footer')
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
@stop
