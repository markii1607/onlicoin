@extends('master')
@section('content')
    @include('admin.header-inside')
<div class="wrapper">
    <div class="container" id="index-wrap">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 panel-name">COIN OUT</h4>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="text-center" id="coin-out-nav">
                                <a href="{{ route('auth-cout_remittance') }}"><img src="assets/images/oct-remittance.png" alt=""></a>
                                <a href="{{ route('auth-cout_manage_funds') }}"><img src="assets/images/oct-mngfnd.png" alt=""></a>
                                <a href="{{ route('auth-cout_payment') }}"><img src="assets/images/oct-payment.png" alt=""></a>
                                <a href="{{ route('auth-cout_sell_oct') }}"><img src="assets/images/oct-sell.png" alt=""></a>
                                <a href="{{ route('auth-cout_transfer') }}"><img src="assets/images/oct-transfer.png" alt=""></a>
                                <h3><b>TRANSFER TO ATM</b></h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="inp-field-labels">
                                        <h5 class="pull-right">Current Balance:</h5>
                                        <h5 class="pull-right">Wallet Address:</h5>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="inp-fields">
                                        <input class="form-control" type="text">
                                        <input class="form-control" type="text">
                                    </div>

                                    <div class="text-center" id="convert-buttons">
                                        <a class="btn btn-reverse">PHP</a>
                                        <a class="btn btn-reverse">BTC</a>
                                        <a class="btn btn-reverse">ETH</a>
                                    </div>
                                </div>
                                <h4><b>ATM Details</b></h4>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-10">
                                        <label for="">Cardholder Name</label>
                                        <input type="text" class="form-control">
                                        <label for="">Card Number</label>
                                        <input type="text" class="form-control">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <label for="">Exp Date</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-5 pull-right">
                                                <label for="">CVC</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                            </div>
                            <br />
                            <div class="text-center" id="proc-button">
                                <button class="btn btn-primary">Proceed</button>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
@stop

@section('footer')
<!--        footer-->
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
                        <a href="{{ route('auth-about') }}">About</a>
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
@stop
