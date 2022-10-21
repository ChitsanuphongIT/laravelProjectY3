<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'laravel')</title>
    {{-- Jquery --}}
    <script src="{{ asset('vendor\jquery\jquery-3.6.1.min.js') }}"></script>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor\bootstrap\js\bootstrap.min.js') }}"></script>
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.css') }}">
    {{-- Toast --}}
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    {{-- AngularJS --}}
    <script src="{{ asset('vendor\angular\angular.min.js') }}"></script>
    {{-- TailwindCss --}}
    {{-- <script src="{{ '' }}"></script> --}}
    @yield('tag_head')
</head>
<body>

    {{-- left 2 right 2 = 4 + 8 = 12
    <div class="col-md-8 col-md-offset-2">2</div> --}}
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            
            @include('components.navbar')
            
        </div>
    </nav>
    {{-- <h3 style="text-align: center; width: 100%;">นายชิษณุพงศ์ ไชยหงษ์ 6306021621138</h3> --}}
    
    <div class="container">

        @yield('content')

    </div>
    

    {{-- Bootstrap --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- Toast --}}
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    {{-- AngularJS --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- JS form public --}}
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/cart.js') }}"></script> --}}


    @yield('bottom-script-area')
    @yield('script-area')

</body>
</html>


<style>
    /* div {
        height: 40rem;
        border: 2px solid #222;
    } */
</style>