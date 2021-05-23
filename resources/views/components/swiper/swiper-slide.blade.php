@props(['productItem3','countdown'])
<div class="swiper-slide" >
    <div class="product-item-container-3 rounded-2xl">
        <div class="product-item">
            <div class="product-box-img">
                <a href="#product-page">
                    <img src={{asset($productItem3['img'])}} alt="a product example" class="product-img">
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
                <div class="product-countdown">
                    <x-countdown/>
                </div>
            @endif

        </div>
    </div>
</div>
