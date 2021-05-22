@props(['supplyover50','supplynum','supplyrate',
'sendover50','sendnum','sendrate',
'returnover50','returnnum','returnrate'])
<div class="c-seller-rating-ratings c-seller-rating-ratings-buy-box">
    <div class="c-round-progress-container">
        <div class="c-round-progress">
            <div class="progress-circle {{$supplyover50}} {{$supplynum}}">
                {{-- over50 p100--}}
                <span>{{$supplyrate}}</span>
                {{-- 100%--}}
                <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                </div>
            </div>
        </div>
        <span class="c-round-progress-label">تامین به موقع</span>
    </div>

    <div class="c-round-progress-container">
        <div class="c-round-progress">
            <div class="progress-circle {{$sendover50}} {{$sendnum}}">
                {{--over50 p99 --}}
                <span>{{$sendrate}}</span>
                {{-- 99% --}}
                <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                </div>
            </div>

        </div>
        <span class="c-round-progress-label">تعهد ارسال</span>
    </div>

    <div class="c-round-progress-container">
        <div class="c-round-progress">
            <div class="progress-circle {{$returnover50}} {{$returnnum}}">
                {{--  over50 p93--}}
                <span>
                    {{$returnrate}}
                </span>
                {{-- 93% --}}
                <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                </div>
            </div>
        </div>
        <span class="c-round-progress-label">بدون ثبت مرجوعی</span>
    </div>

</div>
