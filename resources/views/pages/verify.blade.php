@extends('master')
@section('header')
@include('pages.header-outside')
@stop

@section('content')
<div class="container-fluid cb-login text-center">
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
@stop

@section('footer')
@include('admin.footer-inside')
@stop