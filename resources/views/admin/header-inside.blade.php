<header>
    <!-- <div class="container-fluid topnav">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{ url('/') }}">
                    <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
                </a>
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
                <ul class="nav navbar-right">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell" style="font-size: 23px;vertical-align: middle;"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                Notification
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle img-responsive inline">
                            <p class="inline">Michael Alcala</p>
                        </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="{{route('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
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
    </div> -->



    <div class="top-navigation">
        <a href="{{ url('/') }}">
            <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
        </a>

        <div>
            USD
            <div>$0.80</div>
        </div>
        <div>
            BTC
            <div>$4,001.81</div>
        </div>
        <div>
            ETH
            <div>$137.48</div>
        </div>
        <div>
            OCT
            <div>$0.80</div>
        </div>
        <div>
            EUR
            <div>$0.60</div>
        </div>

        <ul>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-bell" style="font-size: 23px;vertical-align: middle;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        Notification
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle avatar">
                    <p class="inline">Michael Alcala</p>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="navibar">
        <a href="{{ route('auth-index') }}"><img src="assets/images/my-wallet.png" alt="My Wallet"></a>
        <a href="#"><img src="assets/images/earnings.png" alt="Earnings"></a>
        <a href="#"><img src="assets/images/merchants-partner.png" alt="Merchant Partners"></a>
        <a href="#"><img src="assets/images/buy-sell.png" alt="Buy / Sell"></a>
        <a href="#"><img src="assets/images/subscribers.png" alt="Subscribers"></a>
    </div>
</header>