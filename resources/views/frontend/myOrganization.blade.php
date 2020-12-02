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
        @foreach($systems as $system)
            @if($system->organization_id === Illuminate\Support\Facades\Session::get('OrganizationId'))
                <div class="col col-3">
                    <div class="card" style="box-shadow:  10px 0.9rem 0.4rem #e5e5e5;">
                        <a href="{{route('admin.systems.Organization',['organization_id'=>$system->organization_id,'system_id'=>$system->id])}}"> 
                            <div class="card-body">
                                <h1 class="text-black-50 text-center">{{$system->name}}</h1>
                                <br>
                                <br>
                                <p class="card-text text-center">Reference # {{$system->id}} SYS</p>
                            </div>
                        </a>
                    </div>
                </div>

            @endif
        @endforeach
    </div>
</div>


</div>
</body>
</html>
