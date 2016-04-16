
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title') | Klinika</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/plugins/animate.css">
    <link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link href="/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css">
    <link href="/css/app/clinic.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/js/angular/angular.min.js"></script>

    @yield('css')

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

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery/jquery-ui-1.10.4.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/assets/plugins/smoothScroll.js"></script>

<script type="text/javascript" src="/js/angular/ui-bootstrap-0.11.0.min.js"></script>
<script type="text/javascript" src="/js/angular/angular-touch.min.js"></script>
<script type="text/javascript" src="/js/angular/angular-animate.min.js"></script>

<script type="text/javascript" src="/js/datepicker/datepicker.js"></script>
<script type="text/javascript" src="/js/app/app.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<!-- JS Page Level -->
<script type="text/javascript" src="/assets/js/app.js"></script>
<script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });

    jQuery(document).ready(function() {
        App.init();
        setNavigation();

        @if(\Illuminate\Support\Facades\Auth::guest())
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
        @endif


       function setNavigation() {
           var path = window.location.pathname;
           path = path.replace(/\/$/, "");
           path = decodeURIComponent(path);

           $(".nav a").each(function () {
               var href = $(this).attr('href');
               if (path.substring(0, href.length) === href) {
                   $(this).closest('li').addClass('active');
               }
           });
       }

    });
</script>
<!--[if lt IE 9]>
    <script src="/assets/plugins/respond.js"></script>
    <script src="/assets/plugins/html5shiv.js"></script>
    <script src="/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

@yield('js')
</body>
</html>