<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
        
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{asset('css/line-awesome.min.css')}}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="error-page">
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        
        <div class="error-box">
            <h1>404</h1>
            <h3><i class="fa fa-warning"></i> Oops! Your System Does Not Have Any Permissions Yet. Please Contact Admin For Further Details!</h3>
            <p>The page you requested was not found.</p>
			{{-- <a href="{{ route('MyOrganization') }}" class="btn btn-primary">Please Click me to go back</a> --}}
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                Click here to logout of application
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="js/app.js"></script>
    
</body>
</html>
