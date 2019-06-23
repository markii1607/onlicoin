@extends('master')
@section('content')
@include('admin.header-inside')
<div class="container w-index">
    <div class="row">
        <div class="col-sm-4">
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Current Balance</h5>
                <div class="row">
                    <p class="text-center current-value"><b>0</b></p>
                    <h3 class="text-center current-bal">OCT</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">2,888.00</div>
                    <div class="col-sm-4 text-center">0.00012</div>
                    <div class="col-sm-4 text-center">0.12345</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">PHP</div>
                    <div class="col-sm-4 text-center">BTC</div>
                    <div class="col-sm-4 text-center">ETH</div>
                </div>
                <div class="row cin-cout-btn">
                    <div class="col-sm-6">
                        <a href="{{ route('auth-cin_remittance') }}"><button class=" btn btn-primary inline-block">COIN
                                IN</button></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('auth-cout_remittance') }}">
                        <button class=" btn btn-primary inline-block">COIN OUT</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Verification</h5>
                <table class="table table-bordered tbl">
                    <tr>
                        <td>
                            <p>Isma want to verify your account.</p>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-check"></i></button>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Isma want to verify your account.</p>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-check"></i></button>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Isma want to verify your account.</p>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-check"></i></button>
                        </td>
                        <td>
                            <button class="btn btn-reverse"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Account Balance</h5>
                <div class="row">
                    <table class="table table-bordered tbl">
                        <tr>
                            <td>
                                <p>Current Account</p>
                            </td>
                            <td>
                                <p>0 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Subscription Amount</p>
                            </td>
                            <td>
                                <p>200.0687 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Manage Fund</p>
                            </td>
                            <td>
                                <p>0 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>TOTAL</p>
                            </td>
                            <td>
                                <p>200.0687 OCT</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card-box">
                <h5 class="m-t-0 m-b-30 panel-name">Recent Activity</h5>
                <table class="table table-bordered tbl">
                    <tbody>
                        <tr>
                            <td>
                                <p>Date</p>
                            </td>
                            <td>
                                <p>Remarks</p>
                            </td>
                            <td>
                                <p>Amount</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>APR 21 2019</p>
                            </td>
                            <td>
                                <p>Received OCT from ismael</p>
                            </td>
                            <td>
                                <p>+0.80 OCT</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- <div class="wrapper">
    <div class="container">
        <div class="row">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae odio necessitatibus esse molestias voluptate itaque at sapiente odit? Ex harum excepturi soluta atque ullam dolorum laboriosam facere vero id veritatis.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, beatae nesciunt nisi placeat quasi hic animi, quia perspiciatis ipsa rerum doloremque omnis sint porro laboriosam sapiente consectetur officia in similique.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, mollitia, voluptatum odit sit earum, laborum voluptatem quia aperiam reprehenderit cumque unde architecto. Quam doloremque qui ipsam sequi, impedit nam temporibus!
        </div>
    </div>
</div> -->
@include('admin.footer-inside')
@stop
<!-- @section('styles')
    <style>
        .footer{
            padding: 20px;
        }
        .footer ul li a{
            color: #fff;
        }
    </style>
@stop -->