@extends('master')
@section('header')
    <header id="topnav">
        <div class="topbar-main">
            <div id="main" class="container">
                <div class="col-sm-3" id="logo">
                    <a href="{{ url('/') }}"><img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo"></a>
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
            <form>
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1><i>Welcome to Onlicoin – your gateway towards flexible investments.</i></h1>
                        </div>
                    </div>
                    <div class="row testimonials text-center">
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
                            <h4>INVEST THROUGH OUR MANAGE FUNDS.</h4>
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
                                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <input id="fname" type="text" placeholder="First Name" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                    @if ($errors->has('fname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <input id="lname" type="text" placeholder="Last Name" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                    @if ($errors->has('lname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lname') }}</strong>
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
                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <input id="mobile_no" type="text" placeholder="Mobile Number" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" required autofocus>

                            @if ($errors->has('mobile_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile_no') }}</strong>
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
                        <div class="form-group{{ $errors->has('confirm_pass') ? ' has-error' : '' }}">
                            <input id="confirm_pass" type="password" placeholder="Confirm Password" class="form-control" name="confirm_pass" value="{{ old('confirm_pass') }}" required autofocus>

                            @if ($errors->has('confirm_pass'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('confirm_pass') }}</strong>
                                </span>
                            @endif
                        </div>
                        <p class="pull-left"><i><b>I have a promo or referral code</b></i></p>
                        <div class="form-group{{ $errors->has('referral_code') ? ' has-error' : '' }}">
                            <input id="referral_code" type="text" placeholder="Referral Code" class="form-control" name="referral_code" value="{{ old('referral_code') }}" required autofocus>

                            @if ($errors->has('referral_code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('referral_code') }}</strong>
                                </span>
                            @endif
                        </div>
                        <h5>By clicking <b><i>Create Account</i></b>, you agree to our <b><i>Terms of Service</i></b> and <b><i>Privacy Policy</i></b>.</h5>
                        <br>
                        <button class="btn btn-reverse"><a href="{{ route('auth-verify') }}">Create Account</a></button>
                    </div>
                </div>
            </form>
        </div>
@stop 

@section('footer')
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
                        <a href="https://www.facebook.com/onlicointoken"><img src="assets/images/social_icons/fb-icon-oct.png" alt="Facebook"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/onlicointoken"><img src="assets/images/social_icons/twitter-icon-oct.png" alt="Twitter"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/onlicoin"><img src="assets/images/social_icons/linkedin-icon-oct.png" alt="LinkedIn"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    </div>
@stop