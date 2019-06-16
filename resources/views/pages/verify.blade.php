@extends('master')
@section('header')
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
<div class="container-fluid card-box cb-login text-center">
    <form>
        {{ csrf_field() }}
            <div id="blue_oc_logo">
                <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
            </div>
            <br />
            <h3>Verify your Registration</h3>
            <h5>We sent you an email</h5>
            <h6>To verify your registration, enter your verification code below.</h6>
            <br />
            <div class="form-group{{ $errors->has('code_mail') ? ' has-error' : '' }}">
                <input id="code_mail" type="text" placeholder="Enter Code Here..." class="form-control" name="code_mail"
                    value="{{ old('code_mail') }}" required autofocus>

                @if ($errors->has('code_mail'))
                <span class="help-block">
                    <strong>{{ $errors->first('code_mail') }}</strong>
                </span>
                @endif
            </div>
            <button class="btn btn-reverse"><a href="{{ route('auth-payment') }}">Verify</a></button>
            <br />
            <br />
            <h6>Didn't receive any email? <a href="#"><b>Resend email</b></a></h6>
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