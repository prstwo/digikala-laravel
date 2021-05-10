@extends('layouts.master')
@section('keyword-description')
    <meta name="keyword" content="گوشی موبایل, دیجی کالا">
    <meta name="description" content="this is product page of digikala">
@show
@section('page-title','مشخصات، قیمت و خرید گوشی موبایل ')
@section('main-content')
    <main class="w-full">
        <div class="product-whole-content">
            <div class="container hidden md:block px-6 py-0 bg-white">
                <div class="product-breadcrumb flex flex-col items-start justify-between content-center sm:items-center sm:flex-row ">
                    <nav class="breadcrumb">
                        <ul class="flex flex-row ">
                            <li>
                                <a href="#digikala">دیجی کالا</a>
                            </li>
                            <li>
                                <a href="digital-kala">کالای دیجیتال</a>
                            </li>
                            <li>
                                <a href="#mobile">
                                    موبایل
                                </a></li>
                            <li>
                                <a href="#mobile-phone">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="product-link-ex">
                        <a href="#sell">
                            کالای خود را در دیجی‌کالا
                            بفروشید
                            <i class="fa fa-home ml-2 text-sl"></i>
                        </a>
                    </div>
                </div>
                <article class="bg-white w-full flex flex-col sm:flex-row mb-3 items-start  ">
                    <section class="product-gallery pl-4 ml-4 flex flex-col top-28 static sm:sticky">
                        <div class="product-gallery-item">
                            <ul class="product-gallery-option list-none flex flex-col "></ul>
                            <div></div>
                        </div>
                        <div>
                            <div class="product-gallery-main-pic py-4">
                                <img src={{asset("images/product-main-pic.jpg")}} alt="product pic">
                            </div>
                            <ul class="flex product-gallery-pictures">
                                @foreach($productGalleryPictures as $productgallerypicture)

                                    @if($loop->last)
                                        <li class=" ">
                                            <div class="thumb-wrapper">
                                                <img src={{asset($productgallerypicture['img'])}}  alt="sth">
                                                <div class="gallery-images-count">
                                                 <span class="gallery-count-circle js-gallery-count-circle">
                                                     <div class="text-2xl">
                                                         ...
                                                     </div>
                                                 </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    <li class=" ">
                                        <div class="thumb-wrapper"><img src={{asset($productgallerypicture['img'] )}}  data-src={{asset($productgallerypicture['data']) }} alt=""></div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </section>
                    <section class="product-info ">
                        <x-product-info-title/>
                        <div class="product-attributes flex flex-col sm:flex-row justify-between">
                            <div class="product-config flex-shrink-0 relative pt-3 ml-4 border-t border-solid flex flex-col content-between ">
    <span class="product-title-english relative bottom-6 right-0 pl-2 bg-white">
        Xiaomi Mi 10T PRO 5G M 2007J3SG Dual SIM 256GB Mobile Phone
    </span>
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
                                    </div>

                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product-seller-info border border-solid rounded-lg">
                                    <div class="product-seller-box relative flex flex-col">
                                        <div class="product-seller-counter flex items-center">
                                            <div>فروشنده</div>
                                            <a href="#suppliers" class="seller-count-row">
                                                <span class="font-bold">۴</span>
                                                <span class="font-bold"> فروشنده</span>
                                                دیگر
                                            </a>
                                        </div>
                                        <div class="product-seller-row p-4 cursor-pointer hover:bg-gray-200 ">
                                            <div class="product-seller-row-main">
                                                <div class="product-seller-first-line flex justify-between">
                                                    <span>دیجی&zwnj;کالا</span>

                                                    <i class="fa fa-angle-left "></i>
                                                </div>
                                                <div class="product-seller-second-line"></div>

                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-seller-row-main">
                                                گارانتی ۱۸ ماهه کاوش تیم
                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4 cursor-pointer hover:bg-gray-200 ">
                                            <div class="product-seller-row-main flex flex-row justify-between">
                                                موجود در انبار دیجی&zwnj;کالا
                                                <i class="fa fa-angle-left "></i>
                                            </div>

                                        </div><div class="product-seller-row p-4">
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
                                    <div class="product-seller-row product-seller-add-to-card">
                                        <a class=" btn-add-to-cart w-full" data-product-id="4107334" data-variant="16089105" href="#payment" data-event="add_to_cart" data-event-category="ecommerce" data-event-label="price: 142790000 - seller: marketplace - seller_name: مرکز تامین کالای دیجیتال ایران
                                            - seller_rating: 84 - multiple_configs: True - position: 0">
                                            <span class="btn-add-to-cart-txt">افزودن به سبد خرید</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <!--بهتره بخش با کلاس head رو بعد تبدیل به کامپوننت کنم -->
                <div class="product-suppliers">
                    <div class="box-suppliers-head">
                        <x-HeadSec>
                            لیست فروشندگان این کالا
                        </x-HeadSec>
                    </div>
                    <div class="suppliers-list">
                        <x-supplier />
                        <x-supplier />
                        <x-supplier-mobile.supplier-mobile/>
                        <x-supplier-mobile.supplier-mobile/>
                        <!-- -->
                    </div>
                </div>
                <div class="carousel-horizontal-general"></div>
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
                            <div class="product-expert">
                                <article >
                                    <x-box-header s>نقد وبررسی اجمالی</x-box-header>

                                    <section class="content-expert-summary " id="reviews">
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
                                            {{--
                                             <x-ContinueBtn>
                                                ادامه مطلب
                                            </x-ContinueBtn>
                                            --}}
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
            <x-product-mobile.mobile-container/>
        </div>

        </div>
        </div>
        </div>
    </main>
    <div class="remodal-gallery remodal-is-closed" >
        <div class="remodal-top-bar flex flex-row justify-between items-center">
            <div class="remodal-top-bar-title">
                تصاویر رسمی
            </div>
            <div class="remodal-top-bar-close-btn-container ">
                <button class="fas fa-times js-remodal-close" ></button>
            </div>
        </div>
        <div class="remodal-images-gallery flex flex-row">
            <div class="remodal-gallery-main-image">
                <img src="" class="remodal-img-container">
            </div>
            <div class="remodal-gallery-info">
                <div class="remodal-gallery-thumbs">
                    @foreach($modalGalleryPictures as $modalGalleryPicture)
                        <div class="remodal-gallery-thumb js-remodal-gallery-thumb" >
                            <img src={{asset($modalGalleryPicture['img'])}} data-src={{asset( $modalGalleryPicture['data'] )}}
                                alt="گوشی"
                                 data-type=""
                                 loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra-scripts')
@endsection
