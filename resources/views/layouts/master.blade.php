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
    <script>
        var countDownDate = new Date("Jan 5, 2022 16:37:52").getTime();

        function incredibleCountDown(){
            setInterval(function() {
                var now = new Date().getTime();
                var timeleft = countDownDate - now;
                var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
                document.querySelectorAll('.specials .counter-day').forEach((daysSec)=>{
                    daysSec.innerText = days;
                })
                document.querySelectorAll('.specials .counter-hour').forEach((hoursSec)=>{
                    hoursSec.innerText = hours;
                })
                document.querySelectorAll('.specials .counter-minute').forEach((minutesSec)=>{
                    minutesSec.innerText = minutes;
                })
                document.querySelectorAll('.specials .counter-second').forEach((secondsSec)=>{
                    secondsSec.innerText = seconds;
                })

            }, 1000)
        }
        incredibleCountDown()

    </script>
@yield('extra-scripts')
</body>
</html>
