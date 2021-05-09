<section class="mobile-product-gallery">
    <x-product-info-title/>
    <x-product-title-english/>
    <div class="swiper-container">
        <div class="mo-swiper-slide"></div>
        <div class="swiper-container4">
            <div class="swiper-wrapper">
                @for($i=0;$i<5;$i++ )
                    <div class="swiper-slide">
                        <img src="images/phone-1.jpg">
                    </div>
                @endfor
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next arrow-left-3">
            </div>
            <div class="swiper-button-prev arrow-right-3"></div>
        </div>
    </div>
    <x-product-mobile.product-jumps>
        <div class="product-jumps-item">
            برند
            <a class="product-jump-text" href="#xiaomi">
                شیائومی
            </a>
        </div>
        <div class="product-jumps-item">
            <a class="product-jump-text" href="#xiaomi">
                گوشی موبایل شیائومی
            </a>
        </div>
    </x-product-mobile.product-jumps>
    <x-product-mobile.product-jumps>
        <div class="product-jumps-item">
            دسته‌بندی
            <a class="product-jump-text" href="#mobile">
                گوشی موبایل
            </a>
        </div>
    </x-product-mobile.product-jumps>

</section>
