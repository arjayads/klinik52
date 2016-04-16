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
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/css/app/clinic.css">
    <link rel="stylesheet" href="/assets/css/pages/page_log_reg_v2.css">
    <link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">

        @yield('css')
</head>
<body id="app-layout">
    <div class="container content">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script type="text/javascript" src="/assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
