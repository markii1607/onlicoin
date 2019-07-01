<header>
    <a href="{{ url('/') }}">
        <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">
    </a>
    @include('subscriber.partials.currency_conversions')
    <div class="navbar-nav navbar-right">
        <div class="notification_dropdown" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">
                <i class="fa fa-bell" style="font-size: 23px;vertical-align: middle;"></i>
                <span class="badge badge-warning" style="position: absolute;top: 1px;left: 1px;">1</span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="javascript:void(0)">You got <b>100</b> OCT!</a>
                </li>
            </ul>
        </div>
        <div class="logged_in_user_dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">
                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle avatar">
                <p class="inline">{{auth()->user()->personal_information->getFullName()}}</p>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('subscriber.dashboard')}}">Dashboard</a>
                </li>
                <li>
                    <a href="{{route('subscriber.account-settings')}}">Account Settings</a>
                </li>
                <li>
                    <a href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="container-fluid navbar text-center">
    <a class="inline" href="{{ route('subscriber.dashboard') }}"><img src="assets/images/my-wallet.png" alt="My Wallet"></a>
    <a class="inline" href="{{ route('subscriber.earnings') }}"><img src="assets/images/earnings.png" alt="Earnings"></a>
    <a class="inline" href="javascript:void(0)" style="opacity: 0.2"><img src="assets/images/merchants-partner.png" alt="Merchant Partners"></a>
    <a class="inline" href="javascript:void(0)" style="opacity: 0.2"><img src="assets/images/buy-sell.png" alt="Buy / Sell"></a>
    <a class="inline" href="{{ route('subscriber.referrals') }}"><img src="assets/images/subscribers.png" alt="Subscribers"></a>
</div>