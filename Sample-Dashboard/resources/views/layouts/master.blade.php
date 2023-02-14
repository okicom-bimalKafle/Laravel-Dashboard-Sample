<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('assets/css/admin.min.css')}}" rel="stylesheet">

    
  
</head>
<body>


@include('layouts.Shared_Resource._top_navbar')
@include('layouts.Shared_Resource._side_navbar')
<div id="content">
    <main>
        @yield('content')
    </main>
    @include('layouts.Shared_Resource._footer')
</div>

<script src="{{asset('assets/js/admin.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
