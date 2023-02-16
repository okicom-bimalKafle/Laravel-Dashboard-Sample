<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/admin.min.css')}}" rel="stylesheet">
    
    
  
</head>
<body>
<div id="wrapper">
@include('layouts.Shared_Resource._side_navbar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('layouts.Shared_Resource._top_navbar')
                
                    <main>
                        @yield('content')
                    </main>
                    
               
            </div>
            @include('layouts.Shared_Resource._footer')
        </div>
</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/admin.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
