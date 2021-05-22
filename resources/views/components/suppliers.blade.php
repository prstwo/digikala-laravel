@props(['seller','rate','sender','guarantee','price',
'supplyover50','supplynum','supplyrate',
'sendover50','sendnum','sendrate',
'returnover50','returnnum','returnrate'])
<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="supplier-list-row hidden md:flex flex-wrap flex-col md:flex-row justify-between" >
        <div class="supplier-cell supplier-cell-title">
            <span class="supplier-seller-icon   is-digikala"></span>
            <div class="suppliers-seller-wrapper relative">
                <p class=" suppliers-seller-wrapper-name">
                    <a href="#kala-supplier">
                        {{$seller}}
                    </a>
                </p>
                <div class="suppliers-rating flex ">
                    <span class="ml-1">عملکرد:</span>
                    <span class="u-text-bold ml-1">
                                            {{$rate}}
                                        </span>
                    از ۵
                    <span class="u-divider"></span>
                </div>
                <p>

                </p>
            </div>
            <div class="table-suppliers-seller-info summary-overlay">
                <div class="seller-rating">
                    <div class="seller-rating-title ">
                        {{$seller}}
                    </div>
                    <div class="seller-rating-text">
                        <div class="seller-rating-thin-text">
                            عملکرد:
                        </div>
                        <div class="seller-rating-bold-text">
                            {{$rate}}
                        </div>
                    </div>
                    <x-round-rating :supplyover50="$supplyover50" :supplynum="$supplynum" :supplyrate="$supplyrate"
                                    :sendover50="$sendover50" :sendnum="$sendnum" :sendrate="$sendrate"
                                    :returnover50="$returnover50" :returnnum="$returnnum" :returnrate="$returnrate"/>
                </div>
            </div>
        </div>
        <div class="supplier-cell supplier-cell-conditions">
            <div class="suppliers-sender suppliers-sender-digikala no-lead-time">
                {{$sender}}
            </div></div>
        <div class="supplier-cell supplier-cell-guarantee">
            <span>{{$guarantee}}</span>
        </div>
        <div class="supplier-cell suppliers-cell-price ">
            <div class="c-price">
                <div class="c-price-value">

                    {{--  ۱۳,۳۹۹,۰۰۰--}}
                    {{$price}}
                    <span class="text-sm">تومان</span>
                </div>
            </div>
        </div>
        <div class="supplier-cell  supplier-cell-action">
            <a class=" o-btn o-btn-outlined-red " href="#add-to-card">
                افزودن به سبد
            </a>
        </div>
    </div>
</div>
