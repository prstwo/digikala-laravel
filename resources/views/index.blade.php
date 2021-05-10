@extends('layouts.master')
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
                            <div class="hidden sm:block swiper-container">
                                @include('sections.swiper-wrapper1')
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                            <div class="block sm:hidden swiper-container-mobile">
                                @include('sections.swiper-wrapper1')
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
                            <div class="hidden sm:block swiper-container2">
                                @include('sections.swiper-wrapper2')
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                            <div class="block sm:hidden swiper-container-mobile-2">
                                @include('sections.swiper-wrapper2')
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
