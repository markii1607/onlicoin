@extends('master')
@section('header')
@include('pages.header')
@stop

@section('content')
<div class="container reg-main">
    <form>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
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
                                <input id="fname" type="text" placeholder="First Name" class="form-control" name="fname"
                                    value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                <input id="lname" type="text" placeholder="Last Name" class="form-control" name="lname"
                                    value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" placeholder="Email Address" class="form-control" name="email"
                            value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                        <input id="mobile_no" type="text" placeholder="Mobile Number" class="form-control"
                            name="mobile_no" value="{{ old('mobile_no') }}" required autofocus>

                        @if ($errors->has('mobile_no'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile_no') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                            value="{{ old('password') }}" required autofocus>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('confirm_pass') ? ' has-error' : '' }}">
                        <input id="confirm_pass" type="password" placeholder="Confirm Password" class="form-control"
                            name="confirm_pass" value="{{ old('confirm_pass') }}" required autofocus>

                        @if ($errors->has('confirm_pass'))
                        <span class="help-block">
                            <strong>{{ $errors->first('confirm_pass') }}</strong>
                        </span>
                        @endif
                    </div>
                    <p class="pull-left"><i><b>I have a promo or referral code</b></i></p>
                    <div class="form-group{{ $errors->has('referral_code') ? ' has-error' : '' }}">
                        <input id="referral_code" type="text" placeholder="Referral Code" class="form-control"
                            name="referral_code" value="{{ old('referral_code') }}" required autofocus>

                        @if ($errors->has('referral_code'))
                        <span class="help-block">
                            <strong>{{ $errors->first('referral_code') }}</strong>
                        </span>
                        @endif
                    </div>
                    <h5>By clicking <b><i>Create Account</i></b>, you agree to our <b><i>Terms of Service</i></b> and
                        <b><i>Privacy Policy</i></b>.</h5>
                    <br>
                    <button class="btn btn-reverse"><a href="{{ route('auth-verify') }}">Create Account</a></button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@section('footer')
@include('admin.footer-inside')
@stop