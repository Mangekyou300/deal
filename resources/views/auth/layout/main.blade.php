<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link rel="stylesheet" href="{{ asset('deal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('deal/css/owl.theme.default.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('deal/css/style.css') }}">
    

    @yield('style')

    <title>@yield('title')</title>
  </head>
  <body>
      @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="{{ asset('js/app.js') }}"></script>
    
    {{-- jquery --}}
    <script src="{{ asset('deal/js/jquery-3.6.0.min.js') }}"></script>
    
    {{-- owl-carousel --}}
    <script src="{{ asset('deal/js/owl.carousel.min.js') }}"></script>
    
    {{-- main js --}}
    <script src="{{ asset('deal/js/dashboard.js') }}"></script>
    
    @yield('scripts')
  </body>
</html>