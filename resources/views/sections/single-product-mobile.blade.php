<div class="block md:hidden px-2 mobile-container ">
    <nav></nav>
    <article class="relative">
        <section class="mobile-product-gallery">
            <x-product-info-title/>
            <span class="product-title-english relative bottom-6 right-0 pl-2 bg-white">
                    Xiaomi Mi 10T PRO 5G M 2007J3SG Dual SIM 256GB Mobile Phone
            </span>
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

        <section class="my-4">
            <a href="" class="c-product-tab">
        <span class="c-product-tab-name">
            رنگ
            <span class="product-tab-color-value" style="background-color:black"></span>
            <span class="js-filter-color-selector">مشکی</span>
        </span>
                <span class="c-product-tab-value flex flex-row items-center">
            (2 رنگ)
            <x-angles.angle-bottom/>
        </span>
            </a>
        </section>
        <section class="my-4"></section>
        <div class="c-checkout-submit flex-col">
            <a href="#kharid" class="c-btn-action">
                افزودن به سبد خرید
            </a>
        </div>
    </article>
</div>