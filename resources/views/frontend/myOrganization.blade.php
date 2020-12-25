<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>
    <div class="container" style="margin:5%">
        <div class="row">
            <div class="col-md-12">
                <p class="lead text-center">
                    These are your assigned systems.
                  </p>
            </div>
        </div>
        <div class="row">
            @foreach($systems as $system)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.systems.Organization',['organization_id'=>$organization->id,'system_id'=>$system->id])}}">
                                <h5 class="card-title">{{$system->name}}</h5>
                                <p class="card-text">Reference # {{$system->id}} SYS</p>
                            </a> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
