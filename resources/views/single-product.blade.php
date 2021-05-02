<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مشخصات، قیمت و خرید گوشی موبایل </title>
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
@section('angle-left')
    <i class="fa fa-angle-left "></i>
@endsection
@section('half-separator')
    <div class="c-comment-separator c-comment-separator-half">
    @endsection
<div>
    <x-mobile_menu/>
    <!-- Header component -->
    <x-header/>
    <!-- navigation component -->
    <x-navbar/>
    <!--در این قسمت هدر و نوبار جای دارند -->
    <main class="w-full">
        <div class="product-whole-content mt-4">
            <div class="container px-6 py-0 bg-white">
                <div class="product-breadcrumb flex justify-between items-center">
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
                <article class="bg-white w-full flex flex-row mb-3 items-start ">
                    <section class="product-gallery pl-4 ml-4 flex flex-col top-28">
                        <div class="product-gallery-item">
                            <ul class="product-gallery-option list-none flex flex-col "></ul>
                            <div></div>
                        </div>
                        <div>
                            <div class="product-gallery-main-pic py-4">
                                <img src="images/product-main-pic.jpg" alt="product pic">
                            </div>
                            <ul class="flex product-gallery-pictures">
                                @foreach($productGalleryPictures as $productgallerypicture)

                                    @if($loop->last)
                                        <li class=" ">
                                            <div class="thumb-wrapper">
                                                <img src={!! $productgallerypicture['img'] !!}  alt="sth">
                                                <div class="gallery-images-count">
                                                 <span class="gallery-count-circle" onclick="defaultModalToggle()">
                                                     <div class="text-2xl">
                                                         ...
                                                     </div>
                                                 </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                        <li class=" ">
                                            <div class="thumb-wrapper"><img src={!! $productgallerypicture['img'] !!}  data-src={!! $productgallerypicture['data'] !!} alt=""></div>
                                        </li>
                                @endforeach

                            </ul>
                        </div>
                    </section>
                    <section class="product-info ">
                        <x-product_info_title/>
                        <x-product_attributes/>
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
                        <!-- -->
                    </div>
                </div>
                <div class="carousel-horizontal-general"></div>
                <div class="relative product-more flex flex-row">
                    <div class="product-tabs-container">
                        <ul class="box-tabs-sticky sticky bg-white top-28 o-box-tabs z-10">
                            @foreach($productTabs as $productstab)
                                <li class="o-box-tab">
                                    <a href={!! $productstab['href'] !!} >{!! $productstab['text'] !!}</a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="box-tabs-info">
                            <div class="product-expert">
                                <article >
                                    <x-box_header s>نقد وبررسی اجمالی</x-box_header>

                                    <section class="content-expert-summary " id="reviews">
                                        <div class="mb-4 relative">
                                            <div class="mask-text-product-summary js-mask-text-product-summary">
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
                                            </div>
                                            {{--
                                             <x-ContinueBtn>
                                                ادامه مطلب
                                            </x-ContinueBtn>
                                            --}}
                                            <x-cntu_btn txt="ادامه مطلب" category="summary"/>

                                        </div>
                                    </section>
                                </article>

                            </div>
                            <div class="product-params" id="details">
                                <article class="mb-12 params-border-bottom">
                                    <x-box_header>
                                        مشخصات کالا
                                    </x-box_header>
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
                                    <x-cntu_btn txt="نمایش همه مشخصات کالا" category="params"/>
                                </article>
                            </div>
                            <div class="product-comments " id="comments">
                                <x-boxheader>
                                    امتیاز و دیدگاه کاربران
                                </x-boxheader>
                                <div class="comments-container flex mb-15 mt-9 pb-5 items-start ">
                                    <div class="comment-sidebar ml-15 sticky ">
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
                                        <a href="#add-comment" data-product-id="4107334"
                                           class="o-btn o-btn-outlined-red o-btn-full-width">افزودن دیدگاه</a>

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
                                                    @section('half-separator') @show                                                    </div>
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
                                                        @section('half-separator')     @show                                                   </div>
                                                        <div class="c-comments-modal-evaluation">
                                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-positive items-start">
                                                                باطری پرسرعت و پرقدرت با ظرفیت 5 هزار میلی امپر
                                                            </div>
                                                            <div class="c-comments-modal-evaluation-item c-comments-modal-evaluation-item-negative items-start">
                                                                صفحه نمایش IPS LCD
                                                            </div>
                                                        </div>
                                                        @section('half-separator')     @show
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
                                                            <div class="c-comments-helpful">
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

                                </div>
                            </div>
                            <div class="product-faq"></div>
                        </div>
                    </div>
                    <x-mini_buy_box_fix/>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
</div>
    <x-remodal_gallery action="button"/>
    <x-overlay/>

    <script src="js/nav-menu.js"></script>
    <script src="js/single-product.js"></script>
    <script src="js/all.js"></script>
    <script src="js/footer.js"></script>
</body>
</html>
