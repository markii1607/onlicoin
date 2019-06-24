<!-- Navbar -->
<div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
    <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header">

            <!-- Responsive menu button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <img id="onlicoinlogo" src="assets/images/OC_logwhite.png" alt="onlicoin logo">

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">

            <!-- Navbar right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#features" class="nav-link">FEATURES</a>
                </li>
                <li>
                    <a href="#whitepaper" class="nav-link">WHITEPAPER</a>
                </li>
                <li>
                    <a href="#pricing" class="nav-link">ABOUT US</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="nav-link">LOGIN</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="btn btn-white-bordered navbar-btn">SIGN UP</a>
                </li>
            </ul>

        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- End navbar-custom -->
