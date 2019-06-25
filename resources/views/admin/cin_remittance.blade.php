@extends('master')
@section('content')
    @include('admin.header-inside')
<div class="container-fluid rem-coinin card-box">
    <h4 class="m-t-0 m-b-30 panel-name">COIN IN</h4>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="text-center" id="coin-in-nav">
                <a href="{{ route('auth-cin_remittance') }}"><img src="assets/images/oct-remittance.png" alt=""></a>
                <a href="{{ route('auth-cin_manage_funds') }}"><img src="assets/images/oct-mngfnd.png" alt=""></a>
                <a href="{{ route('auth-cin_payment') }}"><img src="assets/images/oct-payment.png" alt=""></a>
                <a href="{{ route('auth-cin_buy_oct') }}"><img src="assets/images/oct-buy.png" alt=""></a>

            </div>
            <hr>
            <h3 class="text-center"><b>REMITTANCE</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="inp-field-labels">
                        <h5 class="pull-right">Current Balance:</h5>
                        <h5 class="pull-right">Wallet Address:</h5>
                        <h5 class="pull-right">Amount:</h5>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="inp-fields">
                        <input class="form-control" type="text">
                        <input class="form-control" type="text">
                        <input class="form-control" type="text">
                    </div>

                    <div class="text-center" id="convert-buttons">
                        <a class="btn btn-reverse">PHP</a>
                        <a class="btn btn-reverse">BTC</a>
                        <a class="btn btn-reverse">ETH</a>
                    </div>
                </div>
            </div>
            <div class="text-center" id="proc-button">
                <button class="btn btn-reverse">Proceed</button>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@stop

@section('footer')
@include('admin.footer-inside')
@stop