<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('keyword-description')
    <title>@yield('page-title')</title>
    <link href="{{ asset('fonts/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="relative whole-div">
    <div id="top"></div>
    @include('sections.mobile-menu')
    @include('sections.header')
    <!-- navigation component -->
    @yield('main-content')
    @include('sections.footer')
    <div class="m-overlay"></div>
</div>
<script src="{{mix('js/app.js')}}" ></script>
@yield('extra-scripts')
</body>
</html>
