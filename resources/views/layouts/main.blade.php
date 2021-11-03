<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link rel="stylesheet" href="{{ asset('deal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('deal/css/owl.theme.default.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('deal/css/style.css') }}">
    
    <title>@yield('title')</title>

</head>
<body>
        @include('layouts.navbar')

        <div class="container">

            @include('layouts.breadcrumbs')

            <div class="content">
                @yield('content')
            </div>
        </div>
        
    
    <script src="{{ asset('js/app.js') }}"></script>
    
    {{-- jquery --}}
    <script src="{{ asset('deal/js/jquery-3.6.0.min.js') }}"></script>
    
    {{-- owl-carousel --}}
    <script src="{{ asset('deal/js/owl.carousel.min.js') }}"></script>
    
    {{-- main js --}}
    <script src="{{ asset('deal/js/dashboard.js') }}"></script>
        
</body>
</html>