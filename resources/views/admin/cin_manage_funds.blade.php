@extends('master')
@section('content')
    @include('admin.header')
<!-- <div class="wrapper">
    <div class="container" id="index-wrap">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 panel-name">COIN IN</h4>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="text-center" id="coin-in-nav">
                                <a href="{{ route('auth-cin_remittance') }}"><img src="assets/images/oct-remittance.png" alt=""></a>
                                <a href="{{ route('auth-cin_manage_funds') }}"><img src="assets/images/oct-mngfnd.png" alt=""></a>
                                <a href="{{ route('auth-cin_payment') }}"><img src="assets/images/oct-payment.png" alt=""></a>
                                <a href="{{ route('auth-cin_buy_oct') }}"><img src="assets/images/oct-buy.png" alt=""></a>
                                <h3><b>MANAGE FUND</b></h3>
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
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div> -->
<div class="container-fluid mf-coinin card-box">
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
            <h3 class="text-center"><b>MANAGE FUND</b></h3>
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
</div>
@stop

@section('footer')
<!--        footer-->
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