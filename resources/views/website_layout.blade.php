<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/OC_logwhite.png">

    <title>Onlicoin</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">

</head>


<body data-spy="scroll" data-target="#navbar-menu">

    @include('sweetalert::alert')
    
    @yield('header')

    @yield('content')

    @yield('footer')

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="glyphicon glyphicon-chevron-up"></i> </a>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Jquery easing -->
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <!--sticky header-->
    <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script type="text/javascript">
        AOS.init();

    </script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                }
            }
        })

    </script>
</body>

</html>
