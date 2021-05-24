@php
$singleProduct=[
    ['model'=>'Xiaomi Mi 10T PRO']
]
@endphp
<div class="container hidden md:block px-6 py-0 bg-white">
    @include('sections.single-product.product-desktop-breadcrumb')
    <article class="bg-white w-full flex flex-col sm:flex-row mb-3 items-start  ">
        @include('sections.single-product.product-desktop-gallery')
        @include('sections.single-product.product-info',['productTitleBrand'=>'شیائومی','productTitleBrandLink'=>'گوشی موبایل شیائومی'
                    ,'productTitle'=>' گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم&zwnj; کارت ظرفیت 256 گیگابایت'])
    </article>
    @include('sections.single-product.product-desktop-suppliers')
    <div class="carousel-horizontal-general mb-3">
        <x-swiper.swiper-gallery extraClasses="page-section-full" extraClasses2="page-section-standard-no-mb" headMobileTitle="منتخب بهترین کالاها" headTitle="محصولات مرتبط  "
                                 headlink="" link="" swiperClass="swiper-container"
                                 :productItemContainer3="$productItemContainer3"
                                 countdown="false" swiperMobileClass="" mobileCountdown="false"/>
    </div>
    <div class="relative product-more flex flex-row">
        <div class="product-tabs-container ">
            <ul class="box-tabs-sticky sticky bg-white top-28 o-box-tabs z-8">
                @foreach($productTabs as $productstab)
                    <li class="o-box-tab">
                        <a href={!! $productstab['href'] !!} >{!! $productstab['text'] !!}</a>
                    </li>
                @endforeach
            </ul>
            <div class="box-tabs-info">
                <div class="product-expert js-product-expert" id="reviews">
                    <article >
                        <x-box-header s>نقد وبررسی اجمالی</x-box-header>
                        <section class="content-expert-summary " >
                            <div class="mb-4 relative">
                                <x-product-expert-children.mask-text-product-summary>
                                    گوشی «Mi 10T Pro 5G» از سری محصولات شرکت مطرح شیائومی است
                                    که با پنل IPS و پشتیبانی از فناوری ارتباطی 5G روانه بازار شده است.
                                    نمایشگر Mi 10T Pro 5G از رزولوشن بالایی برخوردار است ؛ به‌طوری‌که در اندازه‌ی 6.67 اینچی آن
                                    ، حدود 395 پیکسل را در هر اینچ جا داده است. در گوشی Mi 10T Pro 5G
                                    شیائومی نمایشگر تقریباً تمام قاب جلویی گوشی را پر کرده است. این مشخصه
                                    در کنار قاب شیشه‌ای و فریم تهیه شده از آلومینیوم قرار گرفته است که
                                    ظاهر زیبایی را به آن بخشیده است. این بدنه‌ی زیبا در کنار نمایشگر
                                    این محصول، با استفاده از Corning Gorilla Glass 5 محافظت می‌شود تا
                                    گوشی در برابر خط‌وخش ایمن باشد. ویژگی دیگر Xiaomi Mi 10T Pro 5G
                                    مجهز شدن به حسگر اثرانگشت در کناره گوشی که نشان از بالارده بودن
                                    محصول دارد. اما این پایان کار نیست؛ ۳ دوربین که سنسور اصلی آن 108
                                    مگاپیکسلی است در قسمت پشتی این گوشی جا خوش کرده‌اند. این دوربین‌ها
                                    قادرند ویدئوی 8K را ثبت و ضبط کنند. دوربین‌ سلفی این محصول هم به
                                    سنسوری 20 مگاپیکسلی مجهز شده است. بلوتوث نسخه 5.1، نسخه 10 سیستم
                                    عامل اندروید، امکان استفاده به عنوان پاوربانک، شارژ بی‌سیم سریع
                                    و باتری 5000 میلی آمپرساعتی از دیگر ویژگی‌‌های این گوشی جدید هستند.
                                    گوشی «Mi 10T Pro 5G» از سری محصولات شرکت مطرح شیائومی است
                                    که با پنل IPS و پشتیبانی از فناوری ارتباطی 5G روانه بازار شده است.
                                    نمایشگر Mi 10T Pro 5G از رزولوشن بالایی برخوردار است ؛ به‌طوری‌که در اندازه‌ی 6.67 اینچی آن
                                    ، حدود 395 پیکسل را در هر اینچ جا داده است. در گوشی Mi 10T Pro 5G
                                    شیائومی نمایشگر تقریباً تمام قاب جلویی گوشی را پر کرده است. این مشخصه
                                    در کنار قاب شیشه‌ای و فریم تهیه شده از آلومینیوم قرار گرفته است که
                                    ظاهر زیبایی را به آن بخشیده است. این بدنه‌ی زیبا در کنار نمایشگر
                                    این محصول، با استفاده از Corning Gorilla Glass 5 محافظت می‌شود تا
                                    گوشی در برابر خط‌وخش ایمن باشد. ویژگی دیگر Xiaomi Mi 10T Pro 5G
                                    مجهز شدن به حسگر اثرانگشت در کناره گوشی که نشان از بالارده بودن
                                    محصول دارد. اما این پایان کار نیست؛ ۳ دوربین که سنسور اصلی آن 108
                                    مگاپیکسلی است در قسمت پشتی این گوشی جا خوش کرده‌اند.
                                </x-product-expert-children.mask-text-product-summary>
                                <x-cntu-btn txt="ادامه مطلب" category="summary"/>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="product-params" id="details">
                    <article class="mb-12 params-border-bottom">
                        <x-box-header>
                            مشخصات کالا
                        </x-box-header>
                        <section class="flex flex-row">
                            <h3 class="params-title">مشخصات کلی</h3>
                            <ul class="params-list">
                                @foreach($params_lists as $param_list)
                                    <li>
                                        <div class="params-list-key px-2">
                                            <span class="block-content"> {{$param_list['title']}} </span>
                                        </div>
                                        <div class="params-list-value px-2">
                                                    <span class="block-content">
                                                                                           {{$param_list['content']}}
                                                    </span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </section>
                        <div class="params-collapse-content flex flex-col">
                            <section class="flex flex-row">
                                <h3 class="params-title"> حافظه</h3>
                                <ul class="params-list">
                                    @foreach($params_lists_2 as $param_list_2)
                                        <li>
                                            <div class="params-list-key px-2">
                                                <span class="block-content"> {{$param_list_2['title']}} </span>
                                            </div>
                                            <div class="params-list-value px-2">
                                                    <span class="block-content">
                                                                                           {{$param_list_2['content']}}
                                                    </span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </section>
                            <section class="flex flex-row">
                                <h3 class="params-title">پردازنده</h3>
                                <ul class="params-list">
                                    @foreach($params_lists_3 as $param_list_3)
                                        <li>
                                            <div class="params-list-key px-2">
                                                <span class="block-content"> {{$param_list_3['title']}} </span>
                                            </div>
                                            <div class="params-list-value px-2">
                                                    <span class="block-content">
                                                                                           {{$param_list_3['content']}}
                                                    </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>
                        <x-cntu-btn txt="نمایش همه مشخصات کالا" category="params"/>
                    </article>
                </div>
                <div class="product-comments " id="comments">
                    <x-boxheader>
                        امتیاز و دیدگاه کاربران
                    </x-boxheader>
                    <div class="comments-container flex mb-15 mt-9 pb-5 items-start ">
                        <div class="comment-sidebar hidden sm:block ml-15 sticky ">
                            <div class="comment-side-rating-container mb-5 ">
                                <div class="flex items-end">
                                    <div class="comments-side-rating-main">۴.۳</div>
                                    <div class="comments-side-rating-desc">از ۵</div>
                                </div>

                                <div class="comments-side-rating-bottom flex items-center">
                                    <div class="c-stars">
                                        @for ($i = 0; $i < 5; $i++)
                                            <span class="c-stars-item"></span>
                                        @endfor
                                    </div>
                                    <div class="comments-side-rating-all mr-2 flex items-center">
                                        از مجموع ۱۴۲ امتیاز
                                    </div>
                                </div>
                            </div>
                            <ul class="c-content-expert-rating">

                                @foreach($commentExpertRatings as $commentrating)
                                    <li>
                                        <div class="c-content-expert-rating-title">{{$commentrating['title']}}</div>
                                        <div class="c-content-expert-rating-value">
                                            <div class="c-rating c-rating-general ">
                                                <div class="c-rating-rate -" data-rate-value={!! $commentrating['percent']!!} style={!! $commentrating['width']!!}></div>
                                            </div>
                                            <span class="c-rating-overall-word">{{$commentrating['rate']}}</span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <x-idea-register>
                                افزودن دیدگاه
                            </x-idea-register>

                        </div>
                        <div class="comment-content-section">
                            <div class="c-sort-row">
                                <i class="c-icon-font" data-icon="icon-action-sort"></i>
                                <span class="c-sort-row-text">
                                                مرتب‌سازی دیدگاه‌ها بر اساس:
                                            </span>
                                <ul class="c-sort-row-items">
                                    @foreach($sortComments as $csorter)
                                        <li class="c-sort-row-item">
                                            <a href="#" class={!! $csorter['class'] !!} data-sort-mode={!! $csorter['data-mode'] !!}>
                                                {{$csorter['sort-text']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="product-comment-list">
                                <div class="product-comment item">
                                    <div class="c-comment-list padding-0">
                                        <div class="c-comments-item c-comments-item-pdp">
                                            <div class="c-comment-row">
                                                        <span class="c-comment-title">
                                                            گوشی شبه پرچم دار می 10 تی پرو 5G
                                                        </span>
                                            </div>
                                            <div class="c-comment-row">
                                                        <span class="c-comment-datail">
                                                            ۶ اردیبهشت ۱۴۰۰
                                                        </span>
                                                <span class="c-comment-datail">
                                                            کاربر دیجی‌کالا
                                                        </span>
                                            </div>
                                            <x-half-seperator/>                                                   </div>
                                        <div class="c-comment-row">

                                        </div>
                                        <div class="c-comment-row c-comment-row-comment c-comment-row-grow">
                                            <div class="c-comments-content">سلام دوستان عزیز این گوشی مخصوص
                                                طرفداران عکاسی و گیم و بازی هستش
                                                پردازنده قوی اسنپ دراگون 865G که
                                                رو این گوشیه واقعا جواب گوی بازی
                                                های خیلی سنگین و گرافیکی هست
                                                باطری و فست شارژش واقعا عالیه
                                                دوربینش معرکه اس واقعا محشره
                                                توصیه میکنم حتما اینو بخرید
                                                تنها یه عیب کوچیک دارع که اونم
                                                صفحه نمایش IPS LCD هستش
                                                که چندان فرقی هم با بقیه ندارع
                                            </div>
                                            <x-half-seperator/>                                                 </div>
                                        <div class="c-comments-modal-evaluation">
                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-positive items-start">
                                                باطری پرسرعت و پرقدرت با ظرفیت 5 هزار میلی امپر
                                            </div>
                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-negative items-start">
                                                صفحه نمایش IPS LCD
                                            </div>
                                        </div>
                                        <x-half-seperator/>
                                    </div>
                                    <div class="c-comment-row">
                                        <div class="c-comments-color">
                                            <span class="c-comments-color-circle" style="background-color: #2196f3;"></span>
                                            آبی
                                        </div>
                                        <div class="c-comments-seller">
                                            دیجی‌کالا
                                        </div>
                                    </div>
                                    <div class="c-comment-row">
                                        <div class="c-comments-helpful justify-start sm:justify-end">
                                            <div class="c-comments-helpful-question">آیا این دیدگاه برایتان مفید بود؟</div>
                                            <div class="c-comments-helpful-items  is-modal">
                                                <div class="c-comments-helpful-yes " data-comment="19842425">۲</div>
                                                <div class="c-comments-helpful-no  " data-comment="19842425"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-comment-row">
                                    </div>
                                </div>
                                <div class="product-comment item">
                                    <div class="c-comment-list padding-0">
                                        <div class="c-comments-item c-comments-item-pdp">
                                            <div class="c-comment-row">
                                                        <span class="c-comment-title">
                                                            گوشی شبه پرچم دار می 10 تی پرو 5G
                                                        </span>
                                            </div>
                                            <div class="c-comment-row">
                                                        <span class="c-comment-datail">
                                                            ۶ اردیبهشت ۱۴۰۰
                                                        </span>
                                                <span class="c-comment-datail">
                                                            کاربر دیجی‌کالا
                                                        </span>
                                            </div>
                                            <x-half-seperator/>                                                   </div>
                                        <div class="c-comment-row">

                                        </div>
                                        <div class="c-comment-row c-comment-row-comment c-comment-row-grow">
                                            <div class="c-comments-content">سلام دوستان عزیز این گوشی مخصوص
                                                طرفداران عکاسی و گیم و بازی هستش
                                                پردازنده قوی اسنپ دراگون 865G که
                                                رو این گوشیه واقعا جواب گوی بازی
                                                های خیلی سنگین و گرافیکی هست
                                                باطری و فست شارژش واقعا عالیه
                                                دوربینش معرکه اس واقعا محشره
                                                توصیه میکنم حتما اینو بخرید
                                                تنها یه عیب کوچیک دارع که اونم
                                                صفحه نمایش IPS LCD هستش
                                                که چندان فرقی هم با بقیه ندارع
                                            </div>
                                            <x-half-seperator/>                                                 </div>
                                        <div class="c-comments-modal-evaluation">
                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-positive items-start">
                                                باطری پرسرعت و پرقدرت با ظرفیت 5 هزار میلی امپر
                                            </div>
                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-negative items-start">
                                                صفحه نمایش IPS LCD
                                            </div>
                                        </div>
                                        <x-half-seperator/>
                                    </div>
                                    <div class="c-comment-row">
                                        <div class="c-comments-color">
                                            <span class="c-comments-color-circle" style="background-color: #2196f3;"></span>
                                            آبی
                                        </div>
                                        <div class="c-comments-seller">
                                            دیجی‌کالا
                                        </div>
                                    </div>
                                    <div class="c-comment-row">
                                        <div class="c-comments-helpful justify-start sm:justify-end">
                                            <div class="c-comments-helpful-question">آیا این دیدگاه برایتان مفید بود؟</div>
                                            <div class="c-comments-helpful-items  is-modal">
                                                <div class="c-comments-helpful-yes " data-comment="19842425">۲</div>
                                                <div class="c-comments-helpful-no  " data-comment="19842425"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-comment-row">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="product-faq">
                    <x-boxheader>
                        پرسش و پاسخ
                    </x-boxheader>
                    <div class="c-question-container">
                        <div class="question-sidebar hidden sm:block ml-15 sticky ">
                            <div class="c-question-filter">
                                <label class="o-form-checkbox" >
                                    <input  class="o-form-check-box-input" name="answered_questions" value="1" type="checkbox">
                                    <span class="o-form-check-box-sign"></span>
                                    <span>پرسش‌های پاسخ داده شده</span>
                                </label>
                                <label  class="o-form-checkbox">
                                    <input  class="o-form-check-box-input" name="unanswered_questions" value="1" type="checkbox">
                                    <span class="o-form-check-box-sign"></span>
                                    <span> پرسش‌های بی پاسخ</span>
                                </label>
                                <div class="c-question-filter-bottom">
                                    <label class="c-ui-new-switch">
                                        <input class="u-hidden input-filter-toggle" name="user_questions" type="checkbox">
                                        <span class="c-ui-new-switch-slider">
                            <span class="c-ui-new-switch-slider-toggle"></span>
                        </span>
                                    </label>  پرسش&zwnj;های من

                                </div>
                            </div>
                            <div class="c-question-action-text">پرسش خود را درباره این کالا بیان کنید
                            </div>
                            <x-idea-register>
                                ثبت پرسش
                            </x-idea-register>
                        </div>
                        <div class="c-question-content">
                            <x-c-sort-row/>
                            <div class="product-questions-list">
                                <div class="c-question-list">
                                    <x-question-item question=" مناسب فیلم برداری هست؟!"  reply="اصلاح کنم فقط مدل mi 10t قابلیت فیلمبرداری اسلوموشن 960 فریم داره ولی به جاش لرزشگیر اپتیکال نداره" name="نیکزاد" badge="خریدار" />
                                    <x-question-item question=" چرا این موبایل که میان رده هست از mate 30pro گرون تره؟؟؟؟؟؟"  reply="میت 30 واقعا بهتره چون پرچم داره" name="نیکزاد" badge="خریدار" />
                                    <x-question-item question=" برای گیم مناسبه؟!"  reply="فوق العاده برای گیم" name="مهدی علینزاد" badge="خریدار" />
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="hidden sm:block sticky  mini-buy-box-fix mr-6 mb-10 top-3 justify-self-start ">
            <div class="mini-buy-box  rounded-lg p-4 border bg-white">
                <div class="mini-buy-box-product-info mb-5 py-4 border-b">
                    <img src='{{asset("images/product-pic-example5.jpg")}}' alt="product" class="w-20 h-20 ml-5">
                    <div class="w-full  mini-buy-box-product-info-info">
                        <div class="w-full  title ">
                            گوشی موبایل شیائومی مدل Mi 10T Pro 5G 2007J3SG دو سیم&zwnj; کارت ظرفیت 128 گیگابایت
                        </div>
                        <div class="colors flex flex-row content-center items-center">
                            <div class=" ml-2 border color-label " style=" background-color: rgb(222, 222, 222);"></div>
                            <span>نقره ای</span>
                        </div>
                    </div>
                </div>
                <div class="mini-buy-box-row mini-buy-box-seller">
                    دیجی کالا
                </div>
                <div class="mini-buy-box-row mini-buy-box-warranty">
                    گارانتی 18 ماهه
                </div>
                <div class="mini-buy-box-row mini-buy-box-stock">
                    موجود در انبار دیجی کالا
                </div>
                <div class="mini-buy-box-row mini-buy-box-row-price">
                    <div class="product-seller-price-info">
                        ۱۳,۳۹۹,۰۰۰
                        <span class="text-sm font-extrabold">تومان</span>
                    </div>

                </div>
                <div class="mini-buy-box-btn-row mt-2">
                    <a href="#sabad" class="o-btn w-full text-center font-xl py-2 px-4  text-white">افزودن به سبد خرید</a>
                </div>

            </div>

        </div>

    </div>

</div>
<x-remodal-gallery :modalGalleryPictures="$modalGalleryPictures"/>
