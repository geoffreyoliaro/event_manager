<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

<!-- Styles -->
<link href="{{asset('css/app.css') }}" rel="stylesheet">
<link href="{{asset('css/style.css') }}" rel="stylesheet">
<link href="{{asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{asset('lib/easing/easing.min.js') }}" defer></script>
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
