@extends('layouts.auth')
@section('content')
    @include('headers.outside')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                    <div class="flex">
                        <div class="card-box about" id="cb-login">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div id="blue_oc_logo">
                                    <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
                                </div>
                                <br />
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control block" name="password"
                                           placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                    @endif
                                </div>
                                <a href="#" class="block pull-right">Forgot password?</a>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <button class="btn btn-reverse" type="submit"><a>Sign in</a></button>
                                <br>
                                <br>
                                <br>
                                <p>Dont have an account? <a href="{{ route('register') }}"><b>Sign up now</b></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footers.mini')
@stop
@section('styles')
    <style>
        #blue_oc_logo img{
            width: 121px;
            margin: auto;
            display: block;
        }
    </style>
@stop
