<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Klinika | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <!-- CSS Global Compulsory -->

        <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/css/unify/style.css">

        <!-- CSS Header and Footer -->
        <link rel="stylesheet" href="/css/unify/headers/header-default.css">
        <link rel="stylesheet" href="/css/unify/footers/footer-v1.css">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="/css/unify/animate.css">
        <link rel="stylesheet" href="/css/unify/line-icons/line-icons.css">
        <link rel="stylesheet" href="/css/unify/font-awesome/css/font-awesome.min.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="/css/unify/custom.css">
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css">
        <link href="/css/app/clinic.css" rel="stylesheet" type="text/css">

        @yield('css')

        <script type="text/javascript" src="/js/angular/angular.min.js"></script>
</head>
<body id="app-layout">
    <div class="wrapper">
        <!--=== Header ===-->
        <div class="header">
            <div class="container">
                <!-- Logo -->
                <a class="logo" href="/">
                    <img src="/images/logo1-default.png" alt="Logo">
                </a>

                <!-- End Logo -->
                @if(Auth::check())
                    <div class="topbar">
                        <ul class="loginbar pull-right">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <div class="topbar">
                        <ul class="loginbar pull-right">
                            <li><a href="{{ url('/login') }}">Login</a></li> |
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        </ul>
                    </div>
                @endif

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
            </div><!--/end container-->

            @if(Auth::check())
                @include('includes.nav-client')
            @else
                @include('includes.nav-guest')
            @endif
        </div>
        <!--=== End Header ===-->

        <!--=== Content Part ===-->
        <div class="container content">
            @yield('content')
        </div>
        <!-- End Content Part -->

        <div class="footer-v1">
            @yield('footer')
        </div>
    </div><!--/wrapper-->


    <!-- JavaScripts -->
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-ui-1.10.4.min.js"></script>

s   <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="/js/unify/back-to-top.js"></script>
    <script type="text/javascript" src="/plugins/smoothScroll.js"></script>

    <script type="text/javascript" src="/js/angular/ui-bootstrap-0.11.0.min.js"></script>
    <script type="text/javascript" src="/js/angular/angular-touch.min.js"></script>
    <script type="text/javascript" src="/js/angular/angular-animate.min.js"></script>

    <script type="text/javascript" src="/js/datepicker/datepicker.js"></script>
    <script type="text/javascript" src="/js/app/app.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- JS Customization -->
    <script type="text/javascript" src="/js/unify/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="/js/unify/app.js"></script>

    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

       jQuery(document).ready(function() {
           App.init();

           $('a[href*=#]:not([href=#])').click(function() {
               if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                       || location.hostname == this.hostname) {

                   var target = $(this.hash);
                   target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                   if (target.length) {
                       $('html,body').animate({
                           scrollTop: target.offset().top
                       }, 1000);
                       return false;
                   }
               }
           });
       });
    </script>


    <!--[if lt IE 9]>
    <script src="/js/unify/respond.js"></script>
    <script src="/js/unify/html5shiv.js"></script>
    <script src="/js/unify/placeholder-IE-fixes.js"></script>
    <![endif]-->

    @yield('js')
</body>
</html>
