@extends('master')
@section('header')
    <header>
        <div class="container-fluid topnav">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{ url('/') }}"><img id="onlicoinlogo" src="assets/images/OC_logwhite.png"
                                                  alt="onlicoin logo"></a>
                </div>
                <div class="col-sm-9">
                    <ul id="reg-nav-links" class="pull-right text-center">
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">WHITEPAPER</a></li>
                        <li><a href="{{ route('about') }}">ABOUT US</a></li>
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="wrapper" id="paymentwrap">
        <div class="container">
            <div id="blue_oc_logo" class="about">
                <img src="assets/images/Onlicoin%20Final%20Logo.png" alt="">
            </div>
            <div class="card-box" id="cb-payment">
                <div class="col-sm-5">

                    <p>Subscription fee:</p>
                    <h1 class="inline"><b>$56.63</b></h1>
                    <p class="inline">only</p>
                    <br>
                    <br>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ex accusamus sed a totam itaque placeat alias?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis mollitia itaque aspernatur ipsam sunt, iusto consectetur temporibus, eos iure earum minima, obcaecati. Commodi fugiat nostrum aperiam, consequatur recusandae animi libero.</h6>
                    <br>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ex accusamus sed a totam itaque placeat alias?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum libero placeat eum illum cupiditate voluptas. Nam in magnam exercitationem quidem ullam quibusdam minus repellendus consequatur laborum, sit rerum tempora error.</h6>
                </div>
                <div class="col-sm-7">
                    <h5>Payment Method</h5>
                    <ul class="list-inline inline-block m-b-0">
                        <li>
                            <img src="assets/images/Visa.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/mastercard.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/7eleven.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/bitcoin.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/ethereum.png" alt="">
                        </li>

                    </ul>
                    <br />
                    <br />

                    <div id="form-container">
                        <div id="sq-ccbox">
                            <form id="nonce-form" novalidate action="payments/square-paying" method="post">
                                {{ csrf_field() }}
                                <label for="">Test Card: <span>4111111111111111</span></label>
                                <label for="">Test CCV/Expiration Date/Postal: <span>Any</span></label>
                                <fieldset class="payment_input_form">
                                    <div class="row">
                                        <div class="third col-xs-12">
                                            <div id="sq-card-number"></div>
                                        </div>
                                        <div class="third col-xs-6">
                                            <div id="sq-expiration-date"></div>
                                        </div>
                                        <div class="third col-xs-6">
                                            <div id="sq-cvv"></div>
                                        </div>

                                        <div class="third col-xs-6">
                                            <div id="sq-postal-code"></div>
                                        </div>
                                    </div>

                                </fieldset>
                                <button id="sq-creditcard" class="button-credit-card" onclick="onGetCardNonce(event)">Subscribe Now</button>
                                <!--
                                  After a nonce is generated it will be assigned to this hidden input field.
                                -->
                                <input type="hidden" id="card-nonce" name="nonce">
                            </form>
                        </div> <!-- end #sq-ccbox -->
                    </div> <!-- end #form-container -->
                    <p><strong>Developers Note:</strong> The Postal Code will be remove upon Production. </p>

                    @include('payment_test.sq_payment_js')
                    {{--<label for="ch-name">Cardholder Name</label>--}}
                    {{--<input class="form-control" id="ch-name" type="text">--}}
                    {{--<br />--}}
                    {{--<label for="ch-name">Card Number</label>--}}
                    {{--<input class="form-control" id="ch-name" type="text">--}}
                    {{--<br />--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-sm-5">--}}
                    {{--<label for="ch-name">Exp Date</label>--}}
                    {{--<input class="form-control" id="ch-name" type="text">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2"></div>--}}
                    {{--<div class="col-sm-5">--}}
                    {{--<label for="ch-name">CVC</label>--}}
                    {{--<input class="form-control" id="ch-name" type="text">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<br />--}}
                    {{--<button class="btn btn-reverse btn-block"><button>Subscribe now</button></button>--}}
                    {{--{{Form::close()}}--}}
                    <br />
                    <br />
                    <a href="{{ route('auth-index') }}" class="pull-right">Skip for now >></a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{url('/css/mysqpaymentform.css')}}">
    <style>
        /*#form-container{*/
            /*display: none;*/
        /*}*/
        .payment_input_form{
            min-height: 180px;
        }
        #sq-creditcard{
            margin: auto;
            display: block;
            background-color: #0f75bc;
            color: #fff;
            border-radius: 4px;
            border: 1px solid #0f75bc;
            padding: 9px 32px;
            margin-bottom: 11px;
        }
        #nonce-form .third iframe{
            border: 1px solid #ccc;
        }
    </style>
@stop
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.payment_input_form').LoadingOverlay('show')
        });
    </script>
@stop
@section('footer')
    <footer class="footer">
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
    </footer>
@stop

