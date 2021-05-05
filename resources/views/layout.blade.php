<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('keyword-description')
    <title>@yield('page-title')</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='css/swiper-custom.css' rel="stylesheet">
</head>
<body>
    <div class="relative">
        <x-mobile_menu/>
        <x-header/>
        <!-- navigation component -->
        <x-navbar/>
        @yield('main-content')
    <!--footer component-->
        <x-footer/>
        <x-overlay/>
    </div>
    <script src="js/nav-menu.js"></script>
    <script src="js/icredible-specials.js"></script>
    <script src="js/category-products.js"></script>
    <script src="js/special-brands.js"></script>
    <script src="js/all.js"></script>
    <script src="js/footer.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper-customize.js"></script>
    @yield('extra-scripts')
</body>
</html>
