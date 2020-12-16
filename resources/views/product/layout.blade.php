<html>
    <head>
        <title>App Name - @yield('title')</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/1488.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/468.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/15.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/91.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>
    <body>
         @include('product.header')

        @yield('content')
        
         @include('product.partners')
         @include('product.footer')
         
        <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>