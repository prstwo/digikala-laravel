<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('keyword-description')
    <title>@yield('page-title')</title>
    {{--در صورت استفاده از نود ماژول های swiper، اکشن های سوُیپر از کار می افتادند. فعلا سوییپر به صورت اکسترنال اتچ شده تا مجدد بررسی گردد --}}
    <link href="{{ asset('https://unpkg.com/swiper/swiper-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
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
    <x-overlay/>

</div>
{{--در صورت استفاده از نود ماژول های swiper، اکشن های سوُیپر از کار می افتادند. فعلا سوییپر به صورت اکسترنال اتچ شده تا مجدد بررسی گردد --}}

<script src="{{asset('https://unpkg.com/swiper/swiper-bundle.js')}}"></script>
<script src="{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{mix('js/app.js')}}" ></script>
{{--<script src="js/swiper-customize.js"></script> --}}
{{-- علت استفاده از اسکریپت داخلی این بود که کدهای سوییپر پس از ادغام در قالب یک فایل یعنی app.js،  از کار می افتادند--}}
<script >
    //swiper customize
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiper2 = new Swiper('.swiper-container2', {
        slidesPerView: 5,
        spaceBetween: 20,
        slidesPerGroup: 5,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiperM = new Swiper('.swiper-container-mobile', {
        slidesPerView: 1,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiperM2 = new Swiper('.swiper-container-mobile-2', {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiperM3 = new Swiper('.swiper-container-mobile3', {
        slidesPerView: 2,
        spaceBetween: 8,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

@yield('extra-scripts')
</body>
</html>
