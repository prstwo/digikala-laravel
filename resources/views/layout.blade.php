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
    <link rel="stylesheet" href="../../public/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="relative whole-div">
        <x-mobile-menu/>
        <x-header/>
        <!-- navigation component -->
        @yield('main-content')
          <!--footer component-->
        <x-footer/>
        <x-overlay/>
    </div>
    {{-- ابتدا با استفاده از لاراول میکس asset ها فراخوانی شدند و استایل ها و کدهای جاوااسکریپت با موفقیت اعمال شد. اما
     توابعی که از طریق رویدادهای inline در html استفاده شده بودند، برای داکیومنت غیرقابل خواندن شد. مثل onclick=toggler() که در عمل دیباگ به صورت toggler() is undefined ارور دریافت میشد. به همین دلیل مجدد به کامیت های قبلی بازگشته شد --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script href="{{ mix('js/app.js') }}" ></script>
    @yield('extra-scripts')
</body>
</html>
