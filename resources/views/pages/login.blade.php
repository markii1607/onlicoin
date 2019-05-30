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
    <div class="wrapper" id="loginwrap">
        <div class="container">
            <div class="card-box about" id="cb-login">
                <form>
                    {{ csrf_field() }}
                    <div id="blue_oc_logo">
                        <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
                    </div>
                    <br />
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control block" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                    </div>
                    <a href="#" class="block pull-right">Forgot password?</a>
                    <br />
                    <br />
                    <br />
                    <br />
                    <button class="btn btn-reverse"><a href="{{ route('auth-index') }}">Sign in</a></button>
                    <br />
                    <br />
                    <br />
                    <p>Dont have an account? <a href="{{ route('auth-register') }}"><b>Sign up now</b></a></p>
                </form>
            </div>
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