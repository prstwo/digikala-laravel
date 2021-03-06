<div class="block md:hidden px-2 mobile-container ">
    @include('sections.single-product.product-mobile-breadcrumb')
    <article class="relative">
        <section class="mobile-product-gallery">
            <x-product-info-title productTitleBrand="شیائومی" productTitleBrandLink="گوشی موبایل شیائومی" productTitle=" گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم&zwnj; کارت ظرفیت 256 گیگابای"/>
            @include('sections.single-product.product-title-english')
            <div class="swiper-container-mobile">
                    <x-swiper.swiper-wrapper :productItemContainer3='$productItemContainer3' slideDetails="false"/>
                    <div class=" swiper-pagination-product-mobile" id="swiper-pagination-product-mobile"></div>
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
            <a href="#sth" class="c-product-tab">
            <span class="c-product-tab-name">
                    رنگ
                    <span class="product-tab-color-value js-product-tab-color-value" style="background-color:green"></span>
                    <span class="js-filter-color-selector">سبز</span>
            </span>
                <span class="c-product-tab-value flex flex-row items-center">
                (2 رنگ)
                <x-angles.angle-bottom/>

                 </span>
            </a>
            <div class="c-dropup-container c-b-filters-color" style="bottom:-100%">
                <div class="c-dropup-content-wrapper">
                    <div class="c-dropup-header c-b-filters-color-header">
                        <div class="c-b-filters color-header-text">
                            رنگ
                            <span class="js-filter-color-modal-text">نقره ای</span>
                        </div>

                        <div class="c-b-filters-color-header-value js-filters-color-header-value" style="background-color: #dedede;"></div>
                    </div>
                    <div class="c-dropup-content">
                        <div class="c-b-filters-colors-items">
                            <div class="c-b-filters-colors-item js-color-picker">
                                <div class="c-b-filters-colors-item-text js-color-picker-text">نقره ای</div>
                                <div class="c-b-filters-colors-item-value js-color-picker-value" style="background-color:#dedede "></div>
                            </div>
                            <div class="c-b-filters-colors-item js-color-picker">
                                <div class="c-b-filters-colors-item-text js-color-picker-text">سبز</div>
                                <div class="c-b-filters-colors-item-value js-color-picker-value" style="background-color:green "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="my-4">
            <div class="c-product-data ">
                @include('sections.single-product.samane-hamta')
            </div>
        </section>
        <section class="my-4">
            <div class="c-product-data c-product-seller-info">
                <div class="c-product-data-section c-product-seller js-product-seller-trigger">
                    <div class="c-product-seller-main">
                        <div class="c-product-seller-wrapper">
                            فروشنده:
                            <span class="c-product-seller-seller">
                                <span class="js-seller-name">
                                    ایرانیان قایم همراه کاوش تیم
                                </span>
                            </span>
                        </div>
                        <div class="c-product-seller-rate-wrapper">
                            عملکرد:
                            <span class="c-product-seller-rate font-bold">
                                ۱.۹
                            </span>
                            از ۵
                        </div>
                    </div>
                    <div class="c-product-seller-extra js-c-product-seller-extra">
                    </div>
                </div>
                <div class="c-product-data-section c-product-guarantee">
                    <div class="c-product-guarantee-main">
                        <div class="">گارانتی ۱۸ ماهه کاوش تیم
                        </div>
                    </div>

                </div>
                <div class="c-product-data-section c-product-data-section-column js-shipment-info-trigger">
                    <div class="c-product-ship-main flex flex-row justify-between">
                        موجود در انبار فروشنده
                        <span class="c-product-ship-more"></span>
                    </div>
                    <ul class="list-none c-product-ship-sender-list">
                        <li>
                            <span class="c-line-bullet-list-item  c-line-bullet-list-item-digikala ">
                                ارسال دیجی‌کالا از ۱ روز کاری دیگر
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <section class="my-4">
            <div class="c-product-data c-product-text">
                <div class="c-product-text-header">
                    <span>نقد و بررسی اجمالی</span>
                    <a href="#product-more" class="c-product-text-more js-expert-review-show-more">بیشتر</a>
                </div>
                <div class="c-product-text-content">
                    <p>
                        گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم کارت ظرفیت
                        256 گیگابایت یکی از شگفت‌انگیزترین گوشی‌های کمپانی بزرگ شیائومی است که
                        با رونمایی آن، همه افرادی که از طرفداران شیائومی هستند را شگفت‌زده کرده است.
                        این گوشی تحول بسیار بزرگی در تصویربرداری، قدرت پردازش منطقی، محاسباتی، گرافیکی و وظای
                    </p>
                </div>
                <div class="c-product-text-header">
                    <span>مشخصات فنی</span>
                    <a href="#product-more" class="c-product-text-more js-show-more-specs">بیشتر</a>
                </div>
                <div class="c-product-text-content">
                    <ul>
                        <li>
                            <span>حافظه داخلی:
                            </span>
                            <span>
                                   256 گیگابایت
                            </span>
                        </li>
                        <li>
                            <span>شبکه های ارتباطی:
                            </span>
                            <span>
                                   5G، 4G، 3G، 2G
                            </span>
                        </li>
                        <li>
                            <span>دوربین&zwnj;
                                های پشت گوشی:
                            </span>
                            <span>
                                                                            3 ماژول دوربین                                                                    </span>
                        </li>
                        <li>
                            <span>سیستم عامل: </span>
                            <span>
                                    Android
                            </span>
                        </li>
                        <li>
                            <span>
                                توضیحات سیم کارت:
                            </span>
                            <span>
                                 سایز نانو (8.8 × 12.3 میلی&zwnj;متر)
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <aside class="my-4">
            <span class="mobile-collapse-headline js-sntracker-carousel-title">
                خریداران این محصول، محصولات زیر را هم خریده
                &zwnj;اند</span>
            <div class="product-row product-row-inner-page">
                <div class=" swiper-container-mobile3">
                    <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3" countdown="false"/>
                <!-- Add Pagination -->
                    <!-- Add Arrows -->
                    <div class="swiper-button-next arrow-left-3">
                    </div>
                    <div class="swiper-button-prev arrow-right-3"></div>
                </div>
            </div>
        </aside>
        <section class="my-4">
            <div class="mobile-comments-section">
                <div class="mobile-comments-headline">
                    مفیدترین نظرات کاربران
                    <a href="#comments" class="mobile-comments-add">
                        افزودن نظر
                    </a>
                </div>
                <div class="mobile-comments-digiclub">
                    <img src={{asset('images/digiclub-minicoin.png')}} alt="">
                    <div>
                        پس از عضویت در دیجی‌کلاب با ثبت نظر بر روی کالاهای خریداری شده
                        <span>۵</span>
                        امتیاز دریافت کنید
                    </div>
                </div>
                <ul class="mobile-comments-list">
                    <x-product-mobile.mobile-comment-section commentor="پرستو علیرضازاده" date="۲۹ بهمن ۱۳۹۹">
                        این گوشی عالیه، برای خریدش اصلا شک نکنید مخصوصا صفحه
                        144 هرتز که وقتی باهاش کار کنید اصلا دلتون نمیخاد برگردید به 60 هرتز
                    </x-product-mobile.mobile-comment-section>

                    <x-product-mobile.mobile-comment-section commentor="زهره رضایی" date="۱۲ دی ۱۳۹۹ ">
                        در کل نسبت به قیمتش عالیه؛ در خریدش شک نکنید.
                    </x-product-mobile.mobile-comment-section>
                </ul>
                <div class="mobile-comments-actions">
                    <a href="#more-comments" class="mobile-comments-show-more js-mobile-comments-more">
                        مشاهده همه <span>۲۰۲ </span> نظر کاربران
                    </a>
                </div>
            </div>
        </section>
        <section class="my-4">
            <div class="mobile-faq">
                <div class="mobile-faq-headline">
                    پرسش و پاسخ
                    <button class="mobile-question-add">
                        ارسال پرسش
                    </button>
                </div>
                <ul class="mobile-faq-list">
                    <x-product-mobile.mobile-faq-list name="اکرم مهری آسیابر" question="برای بازی 60fps رو ساپورت میکنه؟  " hidden="hidden"/>
                    <x-product-mobile.mobile-faq-list name="امیرحسین صفار" question="سلام میشه رنگ آبیشو موجود کنین   " hidden="hidden"/>
                </ul>
                <div class="mobile-faq-actions">
                    <a href="#show-comments" class="mobile-faq-show-more js-mobile-faq-more">
                        مشاهده همه ۱۰۳ پرسش کاربران
                    </a>
                </div>
            </div>
        </section>
        <div class="mobile-footer-product-id">
            <span>شناسه کالا :</span>
            <span>DKP - ۴۱۰۷۳۳۴</span>
        </div>
        <div class="c-checkout-submit flex-col">
            <a href="#kharid" class="c-btn-action">
                افزودن به سبد خرید
            </a>
        </div>
    </article>
</div>
<div class="dropup-overlay"></div>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-seller-info c-remodal-full-screen"
                                          extraClass2="remodal-seller-info" extraClass3="seller-remodal-back"
                    title="اطلاعات فروشنده">
        <div class="c-remodal-seller">
            <a href="" class="text-bold js-seller-name js-seller-url">
                ایرانیان قائم همراه کاوش تیم
            </a>
            <div class="c-remodal-seller-rates js-seller-score-container">
                عملکرد
                <span class="c-remodal-seller-total-rate js-seller-final-score">
                    ۱.۹
                </span>
                از ۵
                <span class="c-remodal-seller-registration-info js-seller-register-date-container">
                    (عضویت از
                    <span class="js-seller-register-date">۳
                        سال و ۱۰ ماه
                    </span>
                    پیش)
                </span>
                <div class="c-remodal-seller-rates-wrapper">
                    <div class="c-remodal-seller-rate">
                        <div class="c-remodal-seller-percent c-remodal-seller-percent-red js-seller-ship-on-time-percentage">
                            ۹۴.۳٪
                        </div>
                        <span class="c-remodal-seller-rate-title">تامین به موقع</span>
                    </div>
                    <div class="c-remodal-seller-rate"><div class="c-remodal-seller-percent c-remodal-seller-percent-green js-seller-cancel_percentage">
                            ۹۹.۹٪
                        </div>
                        <span class="c-remodal-seller-rate-title">تعهد ارسال

                        </span>
                    </div>
                    <div class="c-remodal-seller-rate">
                        <div class="c-remodal-seller-percent c-remodal-seller-percent-yellow js-seller-return-percentage">
                            ۹۹.۳٪
                        </div>
                        <span class="c-remodal-seller-rate-title">بدون مرجوعی</span>
                    </div>
                </div>
            </div>
        </div>
</x-product-mobile.mobile-remodal-wrapper>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-shipment-info c-remodal-full-screen"
                                          extraClass2="remodal-add-to-cart" extraClass3="shipment-remodal-back"
                    title="جزئیات ارسال">
        <div class="c-remodal-seller">
            <div class="c-remodal-shipment-main">
                <div class="text-bold">
                    ارسال توسط دیجی‌کالا از ۱ روز کاری دیگر
                </div>
                <div class="mb-5">
                    این کالا پس از مدت زمان مشخص شده توسط فروشنده در انبار دیجی‌کالا تامین
                    و آماده پردازش می‌گردد و توسط پیک دیجی‌کالا در بازه انتخابی ارسال خواهد شد.
                </div>
            </div>
        </div>
</x-product-mobile.mobile-remodal-wrapper>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-expert-review c-remodal-full-screen"
                                          extraClass2="remodal-expert-review" extraClass3="remodal-review-back"
                    title="نقد و بررسی اجمالی">
        <div class="my-4">
            <article class="c-product-data">
                <div class="c-product-text-header remodal-c-product-text-header">
                    <h2>
                        <span>
                            گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم‌ کارت ظرفیت 256 گیگابایت
                        </span>
                    </h2>
                </div>
                <div class="c-product-text-content">
                    <p>

                        گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم کارت ظرفیت 256 گیگابایت یکی از
                        شگفت‌انگیزترین گوشی‌های کمپانی بزرگ شیائومی است که با رونمایی آن،
                        همه افرادی که از طرفداران شیائومی هستند را شگفت‌زده کرده است.
                        این گوشی تحول بسیار بزرگی در تصویربرداری، قدرت پردازش منطقی،
                        محاسباتی، گرافیکی و وظایف اینترنتی از قبیل بازی، سوشیال و بسیاری
                        دیگر ایجاد کرده است. در گوشی شیائومی نمایشگر تقریباً تمام
                        قاب جلویی گوشی را پر کرده است. این مشخصه در کنار فریم
                        تهیه شده از آلومینیوم  قرار گرفته است که ظاهر زیبایی را
                        به آن بخشیده است. این بدنه­‌ی زیبا در کنار نمایشگر این محصول،
                        با استفاده از Corning Gorilla Glass 5 محافظت می‌شود تا گوشی
                        در برابر خط‌وخش ایمن باشد. حافظه‌هایی که در این گوشی به‌کار رفته است
                        دارای ظرفیت‌های بسیار بالایی هستند. ۲۵۶ گیگابایت برای حافظه‌داخلی
                        و ۸ گیگابایت حافظه RAM می‌تواند همه‌کارهای همزمان سنگین
                        شما را به‌راحتی انجام دهد. این گوشی شیائومی دارای فناوری ارتباطی شبکه
                        5G یا نسل پنجم است که اتفاقی بسیار بزرگ و پرقدرت در بهبود سرعت دانلود
                        و آپلود است. این گوشی می‌تواند با کیفیت 8K تصویربرداری کند.

                    </p>
                </div>
            </article>
        </div>
</x-product-mobile.mobile-remodal-wrapper>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-tech-specs c-remodal-full-screen"
                                          extraClass2="remodal-tech-specs" extraClass3="remodal-tech-back"
                    title="مشخصات فنی">
        <div class="my-4 py-5 px-4">
            @foreach($productspecs as $productspec)
                <h3 class="c-product-spec-headline">
                    {{$productspec['headline']}}
                </h3>
                <div class="c-table-spec">
                    <div class="c-table-spec-item">
                        @foreach($productspec['items'] as $productspecitemdet)
                            <div class="c-table-spec-key">
                               {{$productspecitemdet['key']}}
                            </div>
                            <div class="c-table-spec-value">
                                {{$productspecitemdet['value']}}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
</x-product-mobile.mobile-remodal-wrapper>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-comments c-remodal-full-screen"
                                          extraClass2="remodal-comments" extraClass3="remodal-comments-back"
                    title=" نظرات کاربران">
        <div class="o-round-file my-4 py-5 ">
            <div class="mobile-remodal-comments-head-actions">
                <h2 class="mobile-remodal-comments-title">
                    نظر خود را ثبت کنید
                </h2>
                <a href="" class="mobile-remodal-comments-add-action">
                    افزودن نظر
                </a>
            </div>
            <x-product-mobile.sort-comment-faq txt1="نظر خریداران " txt2="مفیدترین نظرات" txt3="جدیترین نظرات" />
        </div>
    <x-product-mobile.remodal-comment-sec title="بخرید" name="دانش رادمهر" date="۲۶ اردیبهشت ۱۴۰۰" hidden=""
    seller="ایرانیان قایم همراه کاوش تیم" mood="positive" verb="میکنم" color="نقره ای" colorCode=" #dedede"
                                          strengthHidden='' :strengthes="$strengthes" weakHidden='' :weaknesses="$weaknesses" likes="۲">
        من خیلی باهاش حال میکنم و حس ی گوشی پرچم دار و خفن رو بهتون میده و واقعن هم همینطوره هیچی کم نداره
    </x-product-mobile.remodal-comment-sec>
    <x-product-mobile.remodal-comment-sec title="T10poro" name="کاربر دیجی‌کالا" date="۲۴ اردیبهشت ۱۴۰۰" hidden="hidden"
    seller="" mood="positive" verb="میکنم" color="مشکی" colorCode=" #212121"
                                          strengthHidden='hidden' weakHidden='hidden'  likes="۵">
        بنده مهندس برنامه نویس هستم این
        گوشی رو برای همسرم که طراح داخلی هستش تهیه کردم آنقدر از کیفیت و کارایی این
        گوشی خوشم آمد که برای خودمم تهیه کردم تمامی نیازهای یک کاربر حرفه ای
        رو برآورده میکنه، پیشنهاد میکنم حتما تهیه کنید وقتی تهیه کنید
        متوجه میشوید که قیمتش نسبت به گوشی خیلی بصرفه هستش.
    </x-product-mobile.remodal-comment-sec>
    <x-product-mobile.remodal-comment-sec title="bekharid" name="پرستو علیرضازاده" date="۲۴ فروردین ۱۴۰۰" hidden=""
    seller="دیجی کالا" mood="positive" verb="میکنم" color="مشکی" colorCode=" #212121"
                                          strengthHidden='hidden' weakHidden='' :weaknesses="$weaknesses"  likes="۵">
        فقط میشه گف در مقایسه باهم قیمتاش بی رقیبه
    </x-product-mobile.remodal-comment-sec>
</x-product-mobile.mobile-remodal-wrapper>
<x-product-mobile.mobile-remodal-wrapper  extraClass1="remodal-faq c-remodal-full-screen"
                                          extraClass2="remodal-faq" extraClass3="remodal-faq-back"
                    title=" پرسش و پاسخ">
        <div class="o-round-file-no-bg my-4 py-5 ">
            <x-product-mobile.sort-comment-faq txt1="جدیدترین پرسش  " txt2="بیشترین پاسخ به پرسش" txt3="پرسش های شما " />

        </div>
        <div class="o-round-file my-4 p-5">
            <div class="modal-remodal-questions">
                <div class="mobile-product-text-header">
                    <span>پرسش و پاسخ</span>
                </div>
                <ul class="mobile-faq-list">
                    <x-product-mobile.mobile-faq-list name="فرشته حسین زاده" question="ساخت کدوم کشوره؟" hidden=""/>
                    <x-product-mobile.mobile-faq-list name="  رضا باقرزاده" question="کدوم رنگ این گوشی مات هست  ؟" hidden=""/>
                </ul>
            </div>

        </div>
</x-product-mobile.mobile-remodal-wrapper>
