@extends('master')
@section('header')
<header id="topnav">
    <div class="topbar-main">
        <div class="row">
            <div class="col-sm-2">
                <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
            </div>
            <div class="col-sm-8">
                <div class="exchangRates text-center">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2">USD</div>
                        <div class="col-sm-2">BTC</div>
                        <div class="col-sm-2">ETH</div>
                        <div class="col-sm-2">OCT</div>
                        <div class="col-sm-2">EUR</div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2">$0.80</div>
                        <div class="col-sm-2">$4,001.81</div>
                        <div class="col-sm-2">$137.48</div>
                        <div class="col-sm-2">$0.80</div>
                        <div class="col-sm-2">$0.60</div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="extras">
                    <div class="row">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle img-responsive inline">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle img-responsive inline">
                            <p class="inline">Michael Alcala</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid navbar text-center">
        <a class="inline" href="{{ route('auth-index') }}"><img src="assets/images/my-wallet.png" alt="My Wallet"></a>
        <a class="inline" href="#"><img src="assets/images/earnings.png" alt="Earnings"></a>
        <a class="inline" href="#"><img src="assets/images/merchants-partner.png" alt="Merchant Partners"></a>
        <a class="inline" href="#"><img src="assets/images/buy-sell.png" alt="Buy / Sell"></a>
        <a class="inline" href="#"><img src="assets/images/subscribers.png" alt="Subscribers"></a>
    </div>
</header>
@stop

@section('content')
<div class="wrapper">
    <div class="container" id="index-wrap">
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
                            <a href="{{ route('auth-cin_remittance') }}"><button
                                    class=" btn btn-primary inline-block">COIN IN</button></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('auth-cout_remittance') }}"><button
                                    class=" btn btn-primary inline-block">COIN OUT</button></a>
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
</div>
@stop
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
                        <a href="#">About</a>
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
<!--
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a href="#">© Onlicoin 2019</a>
            </div>
            <div class="col-sm-6">
                <a href="#">About</a>

                <a href="#">Blog</a>

                <a href="#">Terms</a>

                <a href="#">Privacy</a>

                <a href="#">AML Policy</a>
            </div>
            <div class="col-sm-3">

                <a href="https://www.facebook.com/onlicointoken"><img src="assets/images/Social_Icons/fb-icon-oct.png" alt="Facebook"></a>
                <a href="https://twitter.com/onlicointoken"><img src="assets/images/Social_Icons/twitter-icon-oct.png" alt="Twitter"></a>
                <a href="https://www.linkedin.com/company/onlicoin"><img src="assets/images/Social_Icons/linkedin-icon-oct.png" alt="LinkedIn"></a>

            </div>
        </div>
    </div>
</div>
-->
</div>
</div>

<!--    scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<script src="assets/plugins/peity/jquery.peity.min.js"></script>

<!-- jQuery  -->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>

<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

<script src="assets/pages/jquery.dashboard.js"></script>

<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
</body>

</html>