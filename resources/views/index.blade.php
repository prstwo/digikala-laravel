@extends('layouts.master')
@section('keyword-description')
    <meta name="keyword" content="digikala, دیجی کالا">
    <meta name="description" content="this is home page of digikala">
@show
@section('page-title','فروشگاه اینترنتی دیجی کالا')
@section('main-content')

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
        <!--incredible specials component-->
        <div class="">
            <section class="incredible-specials-container">
                <div class="incredible-specials">
                    <x-specials-title/>
                    <div class="specials">
                        <div class="product-items ">
                            <div class="hidden md:block swiper-container">

                               {{--@include('sections.swiper-wrapper1') --}}
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
                            <div class="hidden md:block swiper-container2">
                                <x-swiper.swiper-wrapper5 :productItemContainer4="$productItemContainer4"/>
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                            <div class="block md:hidden swiper-container-mobile-2">
                                <x-swiper.swiper-wrapper5 :productItemContainer4="$productItemContainer4"/>
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
