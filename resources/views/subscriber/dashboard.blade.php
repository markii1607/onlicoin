@extends('layouts.subscriber')
@section('content')
    @include('headers.subscriber')
    <div class="container w-index">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Dev Triggers</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>Subscriptions</h5>
                                <a class="btn btn-primary btn-block {{($subscriber==1?'disabled':'')}}" href="{{url('trigger_subscription')}}?amount=2888" {{($subscriber==1?'disabled':'')}}>{{($subscriber==1?'Subscribed':'Subscribe')}}</a>
                            </div>
                            <div class="col-sm-6">
                                <h5>Manage Fund</h5>
                                @if($user_mf)
                                    <pre>{{json_encode($user_mf,JSON_PRETTY_PRINT)}}</pre>
                                    <a class="btn btn-danger btn-block" href="{{url('trigger_manage_fund_interest')}}?trigger">Trigger Maturity</a>
                                @else
                                    <a class="btn btn-primary btn-block" href="{{url('trigger_manage_fund')}}?term=1&amount=10000">10k - 3 Months</a>
                                    <a class="btn btn-primary btn-block" href="{{url('trigger_manage_fund')}}?term=2&amount=10000">10k - 6 Months</a>
                                    <a class="btn btn-primary btn-block" href="{{url('trigger_manage_fund')}}?term=1&amount=50000">50k - 3 Months</a>
                                    <a class="btn btn-primary btn-block" href="{{url('trigger_manage_fund')}}?term=2&amount=50000">50k - 6 Months</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-sm-4">
                <div class="card-box">
                    <h5 class="m-t-0 m-b-30 panel-name">Wallet</h5>
                    <p> {{($subscriber==1?'Subscriber Account':'')}}</p>
                    <div class="row">
                        <p class="text-center current-value"><b>{{number_format($account_balance['current_fund']*$CUR_CONVERSION['OCT']/$CUR_CONVERSION['USD'],2)}}</b></p>
                        <h3 class="text-center current-bal">OCT</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">{{number_format($account_balance['total'],2)}}</div>
                        <div class="col-sm-4 text-center">{{number_format($account_balance['total']*$CUR_CONVERSION['BTC'],4)}}</div>
                        <div class="col-sm-4 text-center">{{number_format($account_balance['total']*$CUR_CONVERSION['ETH'],4)}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">PHP</div>
                        <div class="col-sm-4 text-center">BTC</div>
                        <div class="col-sm-4 text-center">ETH</div>
                    </div>
                    <div class="row cin-cout-btn">
                        <div class="col-sm-6 text-center">
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#coin_in_buy_oct">COIN IN</button>
                        </div>
                        <div class="col-sm-6 text-center">
                            <a href="{{ route('auth-cout_remittance') }}">
                                <button class=" btn btn-primary btn-block">COIN OUT</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <h5 class="m-t-0 m-b-30 panel-name">Verification</h5>
                    {{ csrf_field() }}
                    <div id="verification-requests-container">
                        @unless($verification_requests->count())
                            No Verification Requests
                            @else
                                <ul>
                                    @foreach($verification_requests as $verification_request)
                                        <li>
                                            {{ $verification_request->verification_requests->first_name . " " . $verification_request->verification_requests->middle_name . " " . $verification_request->verification_requests->last_name }} wants to verify your account.
                                            <button class="btn btn-danger verification-request-button decline-verification-request" data-id="{{ $verification_request->id }}" data-name="{{ $verification_request->verification_requests->first_name . ' ' . $verification_request->verification_requests->middle_name . ' ' . $verification_request->verification_requests->last_name }}">Decline</button>
                                            <button class="btn btn-default verification-request-button approve-verification-request" data-id="{{ $verification_request->id }}" data-name="{{ $verification_request->verification_requests->first_name . ' ' . $verification_request->verification_requests->middle_name . ' ' . $verification_request->verification_requests->last_name }}">Approve</button>
                                        </li>
                                    @endforeach
                                </ul>
                                @endunless
                    </div>
                    <button class="btn btn-default verification-request-button" id="verification-request-prompt">Verify an Account</button>
                </div>
            </div>
            <div class="col-sm-8">
                @include('subscriber.partials.account_balance')
                @include('subscriber.partials.recent_activity')
            </div>
        </div>
    </div>
    @include('subscriber.cash_in.cin_buy_oct')
@stop
@section('styles')
    <style>
        #account_balance_table tr th:nth-last-child(2),
        #account_balance_table tr th:nth-last-child(1),
        #account_balance_table tr td:nth-last-child(1),
        #account_balance_table tr td:nth-last-child(2){
            text-align: right;
        }
        .grayed{
            background-color: #e6e6e6;
        }
    </style>
@stop
@section('scripts')
    <script>
        $('a.disabled').on('click',function (e) {
            e.preventDefault();
        });
        $(document).ready(function () {
            fetch_btc();
        });

        function fetch_btc(){
            $.ajax({
                url:'https://api.cryptowat.ch/markets/coinbase-pro/btcusd/price',
                dataType: 'json',
                contentType: 'json',
                success:function(data){
                    console.log(data);
                    setTimeout(fetch_btc,10000);
                }
            });
        }
    </script>
    @include('subscriber.scripts.verifications')
@stop
