@extends('master')
@section('content')
@include('admin.header-inside')

<div class="container-fluid mf-coinout card-box">
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
                <hr>
                <h3><b>MANAGE FUNDS</b></h3>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="inp-field-labels">
                        <h5 class="pull-right">Current Balance:</h5>
                        <h5 class="pull-right">Amount:</h5>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="inp-fields">
                        <input class="form-control" type="text" value="100.4321 OCT" readonly>
                        <input class="form-control" type="text" placeholder="Php 2,888.00">
                    </div>

                    <div class="text-center" id="convert-buttons">
                        <a class="btn btn-reverse">OCT</a>
                        <a class="btn btn-reverse">BTC</a>
                        <a class="btn btn-reverse">ETH</a>
                        <a class="btn btn-reverse">USD</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="pull-left">Terms:</p>
                <p class="pull-right"><i>Note: Minimum of ₱ 10,000.00</i></p>
            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="radio">
                        <input type="radio" name="six-months" id="six-months">
                        <label for="six-months">3 months</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="radio">
                        <input type="radio" name="one-year" id="one-year">
                        <label for="one-year">6 months</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="#">History</a>
                <p>Date Joined: 01-21-2019</p>
            </div>
            <div class="text-center" id="proc-button">
                <a href="{{ route('auth-payment') }}"><button class="btn btn-reverse">Proceed</button></a>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <h5 class="pull-right">
                            <i>
                                <a href="">
                                    Privacy Policy
                                </a>
                            </i>
                        </h5>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <h5 class="pull-left">
                            <i>
                                <a href="">Terms of Service</a>
                            </i>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@stop

@section('footer')
@include('admin.footer-inside')
@stop