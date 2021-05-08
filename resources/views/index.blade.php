@extends('layout')
@section('keyword-description')
    <meta name="keyword" content="digikala, دیجی کالا">
    <meta name="description" content="this is home page of digikala">
@show
@section('page-title','فروشگاه اینترنتی دیجی کالا')
@section('main-content')
    <main >
        <!-- main top container -->
        <x-home-main-top/>
        <!--incredible specials component-->
        <div class="">
            <section class="incredible-specials-container">
                <div class="incredible-specials">
                    <x-specials-title/>
                    <div class="specials">
                        <div class="product-items ">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach($productItemContainer3 as $productItem3 )
                                        <div class="swiper-slide" >
                                            <div class="product-item-container-3 rounded-2xl">
                                                <div class="product-item">
                                                    <div>
                                                        <a href="#product-page">
                                                            <img src={!!$productItem3['img']!!}} alt="a product example" class="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-title">
                                                        <a href="#product-page">
                                                            {{$productItem3['product-title']}}
                                                        </a>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="product-old-price">
                                                            <del> {{$productItem3['old-price']}}</del>
                                                            <span class="old-price-discount">
                                                     {{$productItem3['discount']}}
                                                </span>
                                                        </div>
                                                        <div class="product-new-price">
                                                            {{$productItem3['new-price']}}
                                                            <span class="new-price-currency">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
        <!--products component-->
        <div class="page-section relative">
            <section class="page-section-standard relative">
                <div class="products">
                    <div class="head">
                        <span class="text-gray-400 mobile-title	">منتخب بهترین کالاها</span>
                        <span class="head-title">
                            گوشی موبایل
                        </span>
                        <div class="head-link">
                            <a href="#products-page"> مشاهده همه</a>
                        </div>
                    </div>
                    <div class="boxes static">
                        <div class="items">
                            <!-- product item component -->
                            <div class="swiper-container2">
                                <div class="swiper-wrapper">
                                    @foreach($productItemContainer4 as $productItem4 )
                                        <div class="swiper-slide">
                                            <div class="product-item-container-4">
                                                <div class="product-item">
                                                    <div>
                                                        <a href="#product-page">
                                                            <img src={!!$productItem4['img']!!}} title="phone1" alt="a product example" class="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-title">
                                                        <a href="#product-page">
                                                            {{$productItem4['product-title']}}
                                                        </a>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="product-old-price">
                                                            <del>{{$productItem4['old-price']}}</del>
                                                            <span class="old-price-discount">
                                                     {{$productItem4['discount']}}
                                                </span>
                                                        </div>
                                                        <div class="product-new-price">
                                                            {{$productItem4['new-price']}}
                                                            <span class="new-price-currency">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
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
                    </div>


                </div>
            </section>

        </div>
        <!--brands component -->
        <div class="page-section ">
            <section class="swiper-brands-container page-section-standard pt-1 relative">
                <div class="head">
                    <span class="text-gray-500  mobile-title	">برندهای محبوب</span>
                    <span class="head-title">
                            برندهای ویژه
                        </span>
                    <div class="head-link">

                    </div>
                </div>
                <div class="swiper-brands flex flex-row ">
                    <div class="swiper-container3">
                        <div class="swiper-wrapper">
                            @foreach($swiperBrands as $brand)
                                <div class="swiper-slide" style="">
                                    <div class="swiper-brands-image-container">
                                        <a href="#brand-page" class="banner-brand-link">
                                            <img src={!! $brand['img'] !!} alt="brand">
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
        <!--promotion categories component-->
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

    </main>
    @endsection
