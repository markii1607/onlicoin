@extends('master')
@section('header')
    <header id="topnav">
        <div class="topbar-main">
            <div id="main" class="container">
                <div class="col-sm-3" id="logo">
                    <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <style>
        #code {
            text-transform: uppercase;
        }

        #code::placeholder {
            text-transform: none;
        }
    </style>
    <div class="wrapper" id="loginwrap">
        <div class="container">
            <form method="POST" action="{{ route('auth-verify') }}">
                {{ csrf_field() }}
                <div class="card-box about" id="cb-login">
                    <div id="blue_oc_logo">
                        <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
                    </div>
                    <br />
                    <h3>Verify your Registration</h3>
                    <h5>We sent you an email</h5>
                    <h6>To verify your registration, enter your verification code below.</h6>
                    <br />
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <input id="code" type="text" placeholder="Enter Code Here..." class="form-control" name="code" value="{{ old('code') }}" required autofocus>

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button class="btn btn-reverse" type="submit">Verify</button>
                    <br />
                    <br />
                    <h6>Didn't receive any email? <a href="#"><b>Resend email</b></a></h6>
                </div>
            </form>
        </div>
    </div>
@stop 

@section('footer')
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
@stop 