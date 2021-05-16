{{-- مختص اسلایدرهای 4 تایی--}}
@props(['productItemContainer3'])
<div class="swiper-wrapper">
    @foreach($productItemContainer3 as $productItem3 )
        <div class="swiper-slide" >
            <div class="product-item-container-3 rounded-2xl">
                <div class="product-item">
                    <div>
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
                </div>
            </div>
        </div>
    @endforeach
</div>
