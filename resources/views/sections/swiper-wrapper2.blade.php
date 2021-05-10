{{-- /*علت اینکه این بخش را به کامپوننت تبدیل نکردم، این بود که در صورت جاگذاری این کدها در کامپوننت جدا، متغیرهای کنترلر کار نمیکردند.
*/--}}
<div class="swiper-wrapper">
    @foreach($productItemContainer4 as $productItem4 )
        <div class="swiper-slide">
            <div class="product-item-container-4">
                <div class="product-item">
                    <div>
                        <a href="#product-page">
                            <img src={{asset($productItem4['img'])}} title="phone1" alt="a product example" class="product-img">
                        </a>
                    </div>
                    <div class="product-title">
                        <a href="#product-page">
                            {{$productItem4['product-title']}}
                        </a>
                    </div>
                    <div class="product-price">
                        <div class="product-old-price">
                            <del>{{$productItem4['old-price']}}</del>
                            <span class="old-price-discount">
                                                         {{$productItem4['discount']}}
                                                    </span>
                        </div>
                        <div class="product-new-price">
                            {{$productItem4['new-price']}}
                            <span class="new-price-currency">تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
