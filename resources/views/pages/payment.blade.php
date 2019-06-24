@extends('master')
@section('header')
@include('pages.header')
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
                            <img src="assets/images/Payment_icons/Visa.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/Payment_icons/mastercard.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/Payment_icons/7eleven.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/Payment_icons/bitcoin.png" alt="">
                        </li>
                        <li>
                            <img src="assets/images/Payment_icons/ethereum.png" alt="">
                        </li>

                    </ul>
                    <br />
                    <br />
                    <label for="ch-name">Cardholder Name</label>
                    <input class="form-control" id="ch-name" type="text">
                    <br />
                    <label for="ch-name">Card Number</label>
                    <input class="form-control" id="ch-name" type="text">
                    <br />
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="ch-name">Exp Date</label>
                            <input class="form-control" id="ch-name" type="text">
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5">
                            <label for="ch-name">CVC</label>
                            <input class="form-control" id="ch-name" type="text">
                        </div>
                    </div>
                    <br />
                    <button class="btn btn-reverse btn-block"><a href="{{ route('auth-index') }}">Subscribe now</a></button>
                    <br />
                    <br />
                    <a href="#" class="pull-right"><a href="{{ route('auth-index') }}">Skip for now >></a></a>
                </div>
            </div>  
        </div>
    </div>
@stop 

@section('footer')
@include('admin.footer-inside')
@stop