@props(['productItem3','countdown'])
<div class="swiper-slide" >
    <div class="product-item-container-3 rounded-2xl">
        <div class="product-item">
            <div class="product-box-img">
                <a href="#product-page">
                    <img src={{asset($productItem3['img'])}} alt="a-product-example" class="product-img">
                </a>
            </div>
            <div class="product-title">
                <a href="#product-page">
                    {{$productItem3['product-title']}}
                </a>
            </div>
            <div class="product-price">
                <div class="product-old-price">
                    <del> {{$productItem3['old-price']}}</del>
                    <span class="old-price-discount">
                                                     {{$productItem3['discount']}}
                                                </span>
                </div>
                <div class="product-new-price">
                    {{$productItem3['new-price']}}
                    <span class="new-price-currency">تومان</span>
                </div>
            </div>
            @if($countdown==='true')
                @if($productItem3['progressbar']===true)
                <div class="specials-progressbar">
                    <progress  value={{$productItem3['progressbar-value']}} min="0" max="100">
                    </progress>
                </div>
                    <div class="w-full flex flex-row justify-between items-center content-center ">
                        <div class="text-right text-sm flex flex-row text-gray-500">
                            <span class="text-red-500 text-sm ml-1">{{$productItem3['progressbar-value']}}%</span>
                        </div>
                        <div class="product-countdown">
                            <x-countdown/>
                        </div>
                    </div>
                @else
                    <div class="product-countdown">
                        <x-countdown/>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
