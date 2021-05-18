@extends('layouts.master')
@section('keyword-description')
    <meta name="keyword" content="digikala, دیجی کالا">
    <meta name="description" content="this is home page of digikala">
@show
@section('page-title','فروشگاه اینترنتی دیجی کالا')
@section('main-content')
<style>
    @media (min-width: 768px){
        body{
            background: #f5f5f5;
        }
    }

</style>
    <main >
        <!-- main top container -->
        <article class="main-top-container">
            <div class="main-top">
                <div class="bullets-slider-container  ">
                    <!--bullets slider component attached-->
                    <div class="bullets-slider">
                        <div class="carousel relative ">
                            <div class="carousel-inner relative overflow-hidden bullets-slider">
                                <!--Slide 1-->
                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center rounded-2xl">
                                        <img src={{asset("images/maintop-1.jpg")}} alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	 transform hover:translate-x-0.5 rounded-full e leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	transform hover:translate-x-0.5	 rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 2-->
                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">
                                        <img src={{asset("images/maintop-2.jpg")}} alt="product img" class="rounded-lg">
                                    </div>
                                </div>
                                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full   leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 3-->
                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full">
                                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">
                                        <img src={{asset("images/maintop-3.jpg")}} alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full  leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!-- Add additional indicators for each slide-->
                                <ol class="carousel-indicators">
                                    @for($i=01;$i<=3;$i++)
                                        <li class="inline-block mr-3">
                                            <label for="carousel-{{$i}}" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                        </li>
                                    @endfor

                                </ol>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-top-sides hidden md:flex flex-col ">
                    <div class="side">
                        <a href="side product page">
                            <img src={{asset("images/maintop-topside.gif")}} alt="product gif">
                        </a>
                    </div>
                    <div class="side">
                        <a href="side product page">
                            <img src={{asset("images/maintop-bottomside.jpg")}} alt="product gif">
                        </a>
                    </div>
                </div>
            </div>
        </article>
        {{--incredible specials part --}}
        <div class="">
            <section class="incredible-specials-container">
                <div class="incredible-specials">
                    <x-specials-title/>
                    <div class="specials">
                        <div class="product-items ">
                            <div class="hidden md:block swiper-container">
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                            <div class="block md:hidden swiper-container-mobile">
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                        </div>
                        <!--product item component-->
                        <!-- Swiper JS -->
                    </div>

                </div>
        </div>

        </section>
        </div>
        {{--sponsers section --}}
        <article class="px-4 hidden md:block">
            <div class="mt-4 ">
                <div class="adplacement adplacement-container-row">

                    @foreach($sponserBigPics as $sponserBigPic)
                        <a href="#product_page" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src={{asset($sponserBigPic['src'])}} alt="" class="">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </article>

        <!--products section-->
        <div class="page-section relative">
            <section class="page-section-standard relative">
                <div class="products">
                    <x-head-sec mobileTitle="منتخب بهترین کالاها " title="گوشی موبایل   " link="مشاهده همه"/>
                    <div class="boxes static">
                        <div class="items">
                            <!-- product item component -->
                            <div class="hidden md:block swiper-container">
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                            <div class="block md:hidden swiper-container-mobile-2">
                            <div class="block md:hidden swiper-container-mobile-2">
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                            <!-- Add Pagination -->
                                <!-- Add Arrows -->
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

        </div>
        <!--brands section -->
        <div class="page-section ">
            <section class="swiper-brands-container page-section-standard pt-1 relative">
                <x-head-sec mobileTitle=" برندهای ویژه" title="برندهای ویژه" link=""/>
                <div class="swiper-brands flex flex-row ">
                    <div class="swiper-container2">
                        <div class="swiper-wrapper">
                            @foreach($swiperBrands as $brand)
                                <div class="swiper-slide" style="">
                                    <div class="swiper-brands-image-container">
                                        <a href="#brand-page" class="banner-brand-link">
                                            <img src={{asset($brand['img'])}} alt="brand">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <!-- Add Arrows -->
                        <div class="swiper-button-next arrow-left-3">
                        </div>
                        <div class="swiper-button-prev arrow-right-3"></div>
                    </div>
                </div>
            </section>
        </div>
        <!--promotion categories section-->
        <div class="page-section promotion-cats-section">
            <div class="page-section-standard promotion-categories">
                <div class="cat-head">
                    <div class="cat-title">
                        بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف
                    </div>
                </div>
                <div class="promotion-cats">
                    <!--promotion cat section-->
                    @foreach($promotionSections as $promotionsection)
                        <a href="#category" class="promotion-cat-sec">
                            <div class="promotion-cat-icon">
                                <i class={!! $promotionsection['icon'] !!}></i>
                            </div>
                            <div class="promotion-cat-name">
                                {!! $promotionsection['cat-name'] !!}
                            </div>
                            <div class="promotion-cat-quantity">
                                {!! $promotionsection['cat-quantity'] !!}
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
        <!--products section-->
        <div class=" relative hidden md:flex products-instant-offers-conrainer">
            <section class="pl-5 w-9/12">
                <section class="page-section-standard-no-p relative ">
                    <div class="products">
                        <x-head-sec mobileTitle="منتخب بهترین کالاها " title="گوشی موبایل   " link=""/>
                        <div class="boxes static">
                            <div class="items">
                                <!-- product item component -->
                                <div class=" swiper-container ">
                                    <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                                    <div class="swiper-button-next arrow-left-3">
                                    </div>
                                    <div class="swiper-button-prev arrow-right-3"></div>
                                </div>

                                <div class="block md:hidden swiper-container-mobile-2">
                                    <div class="block md:hidden swiper-container-mobile-2">
                                        <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3"/>
                                        <!-- Add Pagination -->
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next arrow-left-3">
                                        </div>
                                        <div class="swiper-button-prev arrow-right-3"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                </section>
            </section>
            <div class=" box-border w-3/12">
                <div class="c-box-container box-border	">
                    <div class="c-box">
                        <aside class=" box-promo-single">
                            <div class="c-promo-single">
                                <div class="c-promo-single-headline">پیشنهادهای لحظه&zwnj;ای برای شما</div>
                                <div class="swiper-instant-offers">
                                        <div class="swiper-wrapper" id="gallery_wrapper">
                                            <div class="swiper-slide flex flex-col">
                                                <div class="product-item-container-3 rounded-2xl">
                                                    <div class="product-item">
                                                        <div class="product-box-img">
                                                            <a href="#product-page">
                                                                <img src={{asset('images/instant-4.jpg')}} alt="a product example" class="product-img">
                                                            </a>
                                                        </div>
                                                        <div class="product-title">
                                                            <a href="#product-page">
                                                                لپ تاپ 15 اینچی ایسوس مدل VivoBook R521JP -MR
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-old-price">
                                                                <del> ۹۹,۰۰۰ </del>
                                                                <span class="old-price-discount">
                                                                 ٪۳۰
                                                            </span>
                                                            </div>
                                                            <div class="product-new-price">
                                                                ۲۰۴,۷۹۰
                                                                <span class="new-price-currency">تومان</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide flex flex-col">
                                                <div class="product-item-container-3 rounded-2xl">
                                                    <div class="product-item">
                                                        <div class="product-box-img">
                                                            <a href="#product-page">
                                                                <img src={{asset('images/instant-1.jpg')}} alt="a product example" class="product-img">
                                                            </a>
                                                        </div>
                                                        <div class="product-title">
                                                            <a href="#product-page">
                                                                نگهدارنده لاک ناخن کد 524
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-old-price">
                                                                <del> ۹۹,۰۰۰ </del>
                                                                <span class="old-price-discount">
                                                                 ٪۳۰
                                                            </span>
                                                            </div>
                                                            <div class="product-new-price">
                                                                ۲۰۴,۷۹۰
                                                                <span class="new-price-currency">تومان</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide flex flex-col">
                                                <div class="product-item-container-3 rounded-2xl">
                                                    <div class="product-item">
                                                        <div class="product-box-img">
                                                            <a href="#product-page">
                                                                <img src={{asset('images/instant-2.jpg')}} alt="a product example" class="product-img">
                                                            </a>
                                                        </div>
                                                        <div class="product-title">
                                                            <a href="#product-page">
                                                                نگهدارنده لاک ناخن کد 524
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-old-price">
                                                                <del> ۹۹,۰۰۰ </del>
                                                                <span class="old-price-discount">
                                                                 ٪۳۰
                                                            </span>
                                                            </div>
                                                            <div class="product-new-price">
                                                                ۲۰۴,۷۹۰
                                                                <span class="new-price-currency">تومان</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide flex flex-col">
                                                <div class="product-item-container-3 rounded-2xl">
                                                    <div class="product-item">
                                                        <div class="product-box-img">
                                                            <a href="#product-page">
                                                                <img src={{asset('images/instant-3.jpg')}} alt="a product example" class="product-img">
                                                            </a>
                                                        </div>
                                                        <div class="product-title">
                                                            <a href="#product-page">
                                                                نگهدارنده لاک ناخن کد 524
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="product-old-price">
                                                                <del> ۹۹,۰۰۰ </del>
                                                                <span class="old-price-discount">
                                                                 ٪۳۰
                                                            </span>
                                                            </div>
                                                            <div class="product-new-price">
                                                                ۲۰۴,۷۹۰
                                                                <span class="new-price-currency">تومان</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                        </aside>
                    </div>
                </div>

            </div>

        </div>

    </main>
    @endsection
