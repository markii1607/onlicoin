@extends('master')
@section('content')
@include('admin.header-inside')
<div class="container-fluid transfer-coinout card-box">
    <div class="row">
        <h4 class="m-t-0 m-b-30 panel-name">COIN OUT</h4>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="text-center" id="coin-out-nav">
                    <a href="{{ route('auth-cout_remittance') }}"><img src="assets/images/oct-remittance.png"
                            alt=""></a>
                    <a href="{{ route('auth-cout_manage_funds') }}"><img src="assets/images/oct-mngfnd.png" alt=""></a>
                    <a href="{{ route('auth-cout_payment') }}"><img src="assets/images/oct-payment.png" alt=""></a>
                    <a href="{{ route('auth-cout_sell_oct') }}"><img src="assets/images/oct-sell.png" alt=""></a>
                    <a href="{{ route('auth-cout_transfer') }}"><img src="assets/images/oct-transfer.png" alt=""></a>
                    <hr>
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
                <br />
                <div class="text-center" id="proc-button">
                    <button class="btn btn-primary">Proceed</button>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>
@stop

@section('footer')
@include('admin.footer-inside')
@stop