@extends('master')
@section('header')
@include('pages.header-outside')
@stop
@section('content')
<div class="container">
    <div class="flex">
        <div class="row">
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
            <div class="col-sm-5 col-sm-offset-1">
                <div class="card-box about" id="cb-register">
                    <h3>Create Account</h3>
                    <h6>Already have an account? <a href="{{ route('login') }}"><b>Log in now</b></a></h6>
                    <br />

                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <input id="first_name" type="text" placeholder="First Name" class="form-control"
                                        name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <input id="last_name" type="text" placeholder="Last Name" class="form-control"
                                        name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
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
                        <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">
                            <input id="contact_no" type="text" placeholder="Mobile Number" class="form-control"
                                name="contact_no" value="{{ old('contact_no') }}" autofocus>

                            @if ($errors->has('contact_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact_no') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" placeholder="Password" class="form-control"
                                name="password" value="{{ old('password') }}" required autofocus>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password_confirmation" type="password" placeholder="Confirm Password"
                                class="form-control" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" required autofocus>

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <p class="pull-left"><i><b>I have a promo or referral code</b></i></p>
                        <div class="form-group{{ $errors->has('referral_code') ? ' has-error' : '' }}">
                            <input id="referral_code" type="text" placeholder="Referral Code" class="form-control"
                                name="referral_code" value="{{ old('referral_code') }}" autofocus>

                            @if ($errors->has('referral_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('referral_code') }}</strong>
                            </span>
                            @endif
                        </div>
                        <h5>By clicking <b><i>Create Account</i></b>, you agree to our <b><i>Terms of Service</i></b>
                            and <b><i>Privacy Policy</i></b>.</h5>
                        <br>
                        <button class="btn btn-reverse" type="submit">Create Account</button>
                    </form>

                </div>

                </div>
            </div>
        </div>
    </div>

</div>
@include('admin.footer-inside')
@stop
@section('styles')
<style>
    .flex {
        display: flex;
        min-height: 80vh;
        align-items: center;
        margin: 17px 20px;
    }

    #topnav {
        position: relative;
        background-color: #0F75BC;
    }
</style>
@stop
@section('styles')
    <style>
        .flex{
            display: flex;
            min-height: 80vh;
            align-items: center;
            margin: 17px 20px;
        }
        #topnav{
            position: relative;
            background-color: #0F75BC;
        }
    </style>
@stop