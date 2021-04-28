<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مشخصات، قیمت و خرید گوشی موبایل </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>
@section('angle-left')
    <i class="fa fa-angle-left "></i>
@endsection
@section('half-separator')
    <div class="c-comment-separator c-comment-separator-half">

    @endsection
<?php
 $productConfigInfo = [
         ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت'],
         ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G '],
         ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین'],
         ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)'],
        ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت'],
        ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G '],
        ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین'],
        ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)'],
    ];
    $productGalleryPictures = [
        ['img'=>'"images/product-pic-example1.jpg"'],
        ['img'=>'"images/product-pic-example2.jpg"'],
        ['img'=>'"images/product-pic-example3.jpg"'],
        ['img'=>'"images/product-pic-example4.jpg"']
    ];
    $productTabs = [
        ['href'=>'#reviews', 'text'=>'نقد و بررسی'],
        ['href'=>'#details', 'text'=>'مشخصات'],
        ['href'=>'#comments', 'text'=>' دیدگاه کاربران '],
        ['href'=>'#faq', 'text'=>'پرسش و پاسخ  ']
    ]
?>
@php
    $commentExpertRatings = [
      ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
       ['title'=>'ارزش خرید به نسبت قیمت', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
       ['title'=>'نوآوری', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
        ['title'=>'امکانات و قابلیت ها', 'percent'=>'"66%"', 'width'=>'"width: 66%;"' , 'rate'=>'۴.۳'],
         ['title'=>'سهولت استفاده', 'percent'=>'"80%"', 'width'=>'"width: 80%;"' , 'rate'=>'۴'],
          ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
           ['title'=>'طراحی و ظاهر', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳']
                           ]
@endphp
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
                <article class="bg-white w-full flex flex-row mb-3 items-start">
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
                                            <div class="thumb-wrapper"><img src={!! $productgallerypicture['img'] !!} alt="">
                                                <div class="gallery-images-count">
                                                 <span class="gallery-count-circle">
                                                     <div class="text-2xl">
                                                         ...
                                                     </div>
                                                 </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                        <li class=" ">
                                            <div class="thumb-wrapper"><img src={!! $productgallerypicture['img'] !!} alt=""></div>
                                        </li>

                                @endforeach

                            </ul>
                        </div>
                    </section>
                    <section class="product-info">
                        <div class="product-info-title flex px-0 py-2 items-center">
                                <div>
                                    <div class="product-title-flex">
                                        <div class="product-title-brand flex items-center">
                                            <a class="product-title-brand-link" href="#شیاُومی">

                                                شیائومی
                                            </a>
                                            <span> /
                                            </span>
                                            <a class="product-title-brand-link" href="#شیاُومی">
                                                گوشی موبایل شیائومی
                                            </a>
                                        </div>
                                    </div>
                                    <h1 class="single-product-title ">
                                        گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم&zwnj; کارت ظرفیت 256 گیگابایت
                                    </h1>
                                </div>
                        </div>
                        <div class="product-attributes flex flex-row">
                            <div class="product-config flex-shrink-0 relative pt-3 ml-4 border-t border-solid flex flex-col content-between ">
                                <span class="product-title-english relative bottom-6 right-0 pl-2 bg-white">Xiaomi Mi 10T PRO 5G M 2007J3SG Dual SIM 256GB Mobile Phone</span>
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
                                            @foreach($productConfigInfo as $productlist)
                                                <li>
                                                    <span>{{$productlist['span1']}} </span>
                                                    <span>{{$productlist['span2']}} </span>
                                                </li>
                                            @endforeach
                                        </ul>
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
                                        <div class="product-seller-row">
                                            <div class="product-seller-row-main">
                                                <div class="product-seller-first-line p-4 flex justify-between">
                                                    <span>دیجی‌کالا</span>

                                                    @section('angle-left')
                                                    @show
                                                </div>
                                                <div class="product-seller-second-line"></div>

                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-seller-row-main">
                                                گارانتی ۱۸ ماهه کاوش تیم
                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-delivery-warehouse relative pr-10 mt-5">
                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-seller-row-main flex flex-row justify-between">
                                                موجود در انبار دیجی‌کالا
                                                @section('angle-left')
                                                @show
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
                                    <div class="product-seller-add-to-card"></div>
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

                                    <x-boxheader  >
                                        نقد و بررسی اجمالی
                                    </x-boxheader>

                                    <section class="content-expert-summary " id="reviews">
                                        <div class="mb-4 relative">
                                            <div class="mask-text-product-summary">
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
                                            </div>

                                            <x-ContinueBtn>
                                                ادامه مطلب
                                            </x-ContinueBtn>
                                        </div>
                                    </section>
                                </article>

                            </div>
                            <div class="product-params">
                                <article class="mb-12">
                                    <x-boxheader>
                                        مشخصات کالا
                                    </x-boxheader>
                                    <section class="flex flex-row">
                                        <h3 class="params-title">مشخصات کلی</h3>
                                        <ul class="params-list">
                                            <li>
                                                <div class="params-list-key px-2">
                                                    <span class="block-content">ابعاد </span>
                                                </div>
                                                <div class="params-list-value px-2">
                                                    <span class="block-content">
                                                                                            165.1x76.4x9.3 میلی‌متر
                                                    </span>
                                                </div>
                                            </li>

                                        </ul>

                                    </section>
                                    <x-ContinueBtn>
                                        نمایش همه مشخصات کالا
                                    </x-ContinueBtn>
                                </article>
                            </div>
                            <div class="product-comments">
                                <x-boxheader>
                                    امتیاز و دیدگاه کاربران
                                </x-boxheader>
                                <div class="comments-container flex mb-15 mt-9 items-start ">
                                    <div class="comment-sidebar ml-15 sticky ">
                                        <div class="comment-side-rating-container mb-5 ">
                                               <div class="flex items-end">
                                                   <div class="comments-side-rating-main">۴.۳</div>
                                                   <div class="comments-side-rating-desc">از ۵</div>
                                               </div>

                                            <div class="comments-side-rating-bottom flex items-center">
                                                <div class="c-stars">
                                                    <span class="c-stars-item"></span>
                                                    <span class="c-stars-item"></span>
                                                    <span class="c-stars-item"></span>
                                                    <span class="c-stars-item"></span>
                                                    <span class="c-stars-item"></span>


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
                                            @php
                                                $sortComments=[['data-mode'=>'newest_comment', 'class'=>'"c-sort-row-label is-active"', 'sort-text'=>'   جدیدترین دیدگاه‌ها'],
                                                            ['data-mode'=>'most_liked','class'=>'"c-sort-row-label"', 'sort-text'=>'مفیدترین دیدگاه‌ها'],
                                                            ['data-mode'=>'buyers','class'=>'"c-sort-row-label "', 'sort-text'=>'  دیدگاه خریداران']]
                                            @endphp
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
                    <div class="sticky  mini-buy-box-fix mr-6 mb-10  justify-self-start ">
                        <div class="mini-buy-box  rounded-lg p-4 border bg-white">
                            <div class="mini-buy-box-product-info mb-5 py-4 border-b">
                                <img src="images/product-pic-example5.jpg" alt="product" class="w-20 h-20 ml-5">
                                <div class="w-full  mini-buy-box-product-info-info">
                                    <div class="w-full  title ">
                                        گوشی موبایل شیائومی مدل Mi 10T Pro 5G 2007J3SG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                    </div>
                                    <div class="colors flex flex-row content-center items-center">
                                        <div  class=" ml-2 border color-label " style=" background-color: rgb(222, 222, 222);"></div>
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
        </div>
    </main>
    <x-footer/>


</div>
    <x-overlay/>

    <script src="js/nav-menu.js"></script>

    <script src="js/footer.js"></script>
</body>
</html>
