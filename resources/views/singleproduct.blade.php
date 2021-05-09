@extends('layout')
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
                        <x-product-info-title/>
                        <x-product-attributes/>
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
                            <x-product-expert/>
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
                            <x-product-faq/>
                        </div>

                    </div>
                    <x-mini-buy-box-fix/>
                </div>

            </div>
            <x-product-mobile.mobile-container/>
        </div>

        </div>
        </div>
        </div>
    </main>
    <x-remodal-gallery action="button"/>
@endsection

@section('extra-scripts')
    <script src="js/single-product.js"></script>
@endsection
