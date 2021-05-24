<section class="product-info ">
    <x-product-info-title :productTitleBrand="$productTitleBrand" :productTitleBrandLink="$productTitleBrandLink" :productTitle="$productTitle"/>
    <div class="product-attributes flex flex-col sm:flex-row justify-between relative">
        <div class="product-config flex-shrink-0 relative pt-3 ml-4 border-t border-solid flex flex-col content-between ">
            @include('sections.single-product.product-title-english')
            <div class="product-engagement">
                <div class="flex items-center">
                    <div class="product-engagement-rating flex items-center">
                        <span class="product-engagement-rating-star fa fa-star  ml-1"></span>
                        ۴.۲
                        <span class="product-engagement-rating-num mr-0.5 text-xs">
                                            (۶۵)
                                            </span>
                    </div>
                </div>
                <div></div>
                <div></div>
            </div>
            <div class="product-circle-variants">
                <div class="product-circle-variant-title">
                    <header>رنگ: </header>
                    <span class="js-color-title">خاکستری</span>
                </div>
                <ul class="js-product-variants">
                    @foreach($productColors as $productColor)
                        <x-product-color :productColor="$productColor" />
                    @endforeach
                </ul>
            </div>
            <div class="product-config-wrapper">
                <div class="product-config-info">
                    <ul class="list-none p-0 my-5 mx-0">
                        @foreach($productConfigInfo as $productConfig)
                            <li class={!! $productConfig['class'] !!}>
                                <span>{{$productConfig['span1']}} </span>
                                <span>{{$productConfig['span2']}}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mb-5">
                        <a href="#continue" class="px-0 o-btn-link-blue-sm continue-btn-config" onclick="toggleCollapse(this)">
                            + موارد بیشتر
                        </a>
                    </div>
                    <div class="mb-5">
                        <div class="c-product-data-section-additional  desktop-hamta">
                            <div class="c-product-data-info-icon"></div>
                            <span class="text-justify">
                                                        هشدار
                                                        سامانه همتا: حتما در زمان تحویل دستگاه، به کمک کد فعال&zwnj;سازی چاپ شده
                                                        روی جعبه یا کارت
                                                        گارانتی، دستگاه را
                                                        از طریق #7777*،
                                                        برای سیم&zwnj;کارت خود فعال&zwnj;سازی کنید. آموزش تصویری در آدرس اینترنتی hmti.ir/05
                                                    </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-summary">
            <div class="product-seller-info border border-solid rounded-lg">
                <div class="product-seller-box relative flex flex-col">
                    <div class="product-summary-box-items relative flex flex-col">
                        <div class="product-seller-counter flex items-center">
                            <div>فروشنده</div>
                            <a href="#suppliers" class="seller-count-row">
                                <span class="font-bold">۴</span>
                                <span class="font-bold"> فروشنده</span>
                                دیگر
                            </a>
                        </div>
                        <div class="product-seller-row product-seller-row-first-line js-seller-embeded-info p-4 cursor-pointer hover:bg-gray-200 ">
                            <div class="product-seller-row-fund relative pl-7">
                                <div class="product-seller-first-line flex justify-between">
                                    <span>دیجی&zwnj;کالا</span>

                                </div>
                                <div class="product-seller-second-line"></div>

                            </div>
                        </div>
                        <div class="product-seller-row p-4">
                            <div class="product-seller-row-main">
                                گارانتی ۱۸ ماهه کاوش تیم
                            </div>
                        </div>
                        <div class="product-seller-row p-4 flex-col cursor-pointer hover:bg-gray-200 ">
                            <div class="product-ship-main js-product-summary-ship flex flex-row justify-between">
                                موجود در انبار فروشنده
                                <span class="product-ship-arrow-left"></span>
                            </div>
                            <ul class="list-none c-product-ship-sender-list">
                                <li>
                                                    <span class="c-line-bullet-list-item  c-line-bullet-list-item-digikala ">
                                                        ارسال دیجی‌کالا از ۱ روز کاری دیگر
                                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="product-seller-row p-4 flex flex-row justify-end">
                            <div class="product-seller-row-price flex flex-row justify-between">
                                <div class="product-seller-row-price-real">
                                    <div class="product-seller-price-pure inline-flex">
                                        ۱۴,۹۹۰,۰۰۰
                                    </div>
                                    تومان
                                </div>
                            </div>

                        </div>
                    </div>
                    <x-product-info-embeded jsClass="seller-info-changable" title="اطلاعات تکمیلی فروشنده"  backBtn="js-embeded-seller-back">
                        <div class="c-shipment-info-row ">
                            <div class="c-shipment-info-row-title">
                                ایرانیان قایم همراه کاوش تیم
                            </div>
                            <x-round-rating supplyover50="over50" supplynum="p100" supplyrate="100%"
                                            sendover50="over50" sendnum="p99" sendrate="99%"
                                            returnover50="over50" returnnum="p93" returnrate="93%"/>

                        </div>
                    </x-product-info-embeded>
                    <x-product-info-embeded jsClass="shipment-info-changable" title="جزئیات ارسال" backBtn="js-embeded-shipment-back">
                        <div class="c-shipment-info-row ">
                            <div class="c-shipment-info-row-title">
                                ارسال توسط دیجی‌کالا از ۱ روز کاری دیگر
                            </div>
                            <div class="c-shipment-info-row-content">
                                این کالا پس از مدت زمان مشخص شده توسط فروشنده در انبار دیجی&zwnj;کالا تامین و آماده پردازش
                                می&zwnj;گردد و توسط پیک دیجی&zwnj;کالا در بازه انتخابی ارسال خواهد شد.

                            </div>

                        </div>
                    </x-product-info-embeded>

                </div>
                <div class="product-seller-row product-seller-add-to-card p-4 cursor-pointer">
                    <a class=" btn-add-to-cart w-full" data-product-id="4107334" data-variant="16089105" href="#payment" data-event="add_to_cart" data-event-category="ecommerce" data-event-label="price: 142790000 - seller: marketplace - seller_name: مرکز تامین کالای دیجیتال ایران
                                            - seller_rating: 84 - multiple_configs: True - position: 0">
                        <span class="btn-add-to-cart-txt">افزودن به سبد خرید</span>
                    </a>

                </div>
            </div>
        </div>
        <div dir="ltr" class="magnifier-preview" id="preview" style="width: 100%; height: calc(100% + 20px); top:-19px">
        </div>
    </div>
</section>
