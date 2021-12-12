<!doctype html>
<html lang="pt-BR">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('deal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('deal/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('deal/css/style.css') }}">


    @yield('style')

  </head>
  <body id="auth-body">
    <div id="auth-content-custom">
      <img src="{{ asset('deal/image/logos/deal-logo-branco-cortado.png') }}" alt="">
        @yield('content')
      </div>

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
