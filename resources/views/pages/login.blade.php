@extends('master')
@section('header')
<!-- <header id="topnav">
    <div class="topbar-main">
        <div id="main" class="container">
            <div class="col-sm-3" id="logo">
                <a href="{{ url('/') }}"><img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo"></a>
            </div>
        </div>
    </div>
</header> -->

<header>
    <div class="container-fluid topnav">
        <div class="row">
            <div class="col-sm-3">
                <a href="{{ url('/') }}"><img id="onlicoinlogo" src="assets/images/OC_logwhite.png"
                        alt="onlicoin logo"></a>
            </div>
            <div class="col-sm-9"></div>
        </div>
    </div>
</header>
@stop

@section('content')
<div class="container-fluid card-box cb-login">
    <form>
        {{ csrf_field() }}
        <div id="blue_oc_logo" class="text-center">
            <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
        </div>
        <br />
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" placeholder="Email Address" class="form-control" name="email"
                value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control block" name="password" placeholder="Password"
                required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="#" class="pull-right">Forgot password?</a>
            </div>
        </div>
        <div class="row text-center">
            <button class="btn btn-reverse"><a href="{{ route('auth-index') }}">Sign in</a></button>
        </div>
        <div class="row text-center">
            <p>Dont have an account? <a href="{{ route('auth-register') }}"><b>Sign up now</b></a></p>
        </div>
    </form>
</div>
@stop

@section('footer')
<!--------------------------------------------------footer--------------------------------------------------->
<footer class="footer">
    <div class="row">
        <div class="col-sm-3 text-center">
            <a href="#">© Onlicoin 2019</a>
        </div>
        <div class="col-sm-6 text-center">

            <a href="#">About</a>

            <a href="#">Blog</a>

            <a href="#">Terms</a>

            <a href="#">Privacy</a>

            <a href="#">AML Policy</a>
        </div>
        <div class="col-sm-3 text-center">
            <a href="https://www.facebook.com/onlicointoken"><img src="assets/images/social_icons/fb-icon-oct.png"
                    alt="Facebook"></a>
            <a href="https://twitter.com/onlicointoken"><img src="assets/images/social_icons/twitter-icon-oct.png"
                    alt="Twitter"></a>
            <a href="https://www.linkedin.com/company/onlicoin"><img
                    src="assets/images/social_icons/linkedin-icon-oct.png" alt="LinkedIn"></a>
        </div>
    </div>
</footer>
@stop