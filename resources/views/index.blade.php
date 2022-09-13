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
                    <x-swiper.carousel :mainTopSliders="$mainTopSliders"/>
                </div>
                @include('sections.home-page.main-top-sides')
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
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3" countdown='true'/>
                                    <x-swiper.swiper-next-prev/>
                            </div>
                            <div class="block md:hidden swiper-container-mobile">
                                <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3" countdown=true />
                                <x-swiper.swiper-next-prev/>
                            </div>
                        </div>
                        <!--product item component-->
                        <!-- Swiper JS -->
                    </div>
                </div>
            </section>
        </div>
        {{--sponsers section --}}
        <article class="px-4 hidden md:block">
            <div class="mt-4 ">
                <div class="adplacement adplacement-container-row">

                    @foreach($sponserBigPics as $sponserBigPic)
                        <a href="/sponser-page" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src={{asset($sponserBigPic['src'])}} alt="" class="">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </article>
        <!--products section-->
        <x-swiper.swiper-gallery headMobileTitle="منتخب بهترین کالاها" headTitle="گوشی موبایل "
                                 headlink="head-link" link="مشاهده همه" swiperClass="swiper-container"
                                  :productItemContainer3="$productItemContainer3"
                                 countdown="false" swiperMobileClass="swiper-container-mobile-2" mobileCountdown="false"/>
        <!--brands section -->
        <div class="page-section ">
            <section class="swiper-brands-container page-section-standard pt-1 relative">
                <x-head-sec mobileTitle=" برندهای ویژه" title="برندهای ویژه" headlink="head-link" link="مشاهده همه" />
                <div class="swiper-brands flex flex-row ">
                    <div class="swiper-container2">
                        <div class="swiper-wrapper">
                            @foreach($swiperBrands as $brand)
                                <div class="swiper-slide" style="">
                                    <div class="swiper-brands-image-container">
                                        <a href="/brand-page" class="banner-brand-link">
                                            <img src={{asset($brand['img'])}} alt="brand">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <!-- Add Arrows -->
                        <x-swiper.swiper-next-prev/>
                    </div>
                </div>
            </section>
        </div>
        <!--promotion categories section-->
        @include('sections.home-page.promotion-cats-section')
        <!--products section-->
        <div class=" relative hidden md:flex products-instant-offers-conrainer">
            <section class="pl-5 w-9/12">
                    <x-swiper.swiper-gallery extraClasses="page-section-full" extraClasses2="page-section-standard-no-m" headMobileTitle="منتخب بهترین کالاها" headTitle="گوشی موبایل "
                                             headlink="head-link" link="مشاهده همه" swiperClass="swiper-container"
                                             :productItemContainer3="$productItemContainer3"
                                             countdown="false" swiperMobileClass="swiper-container-mobile-2" mobileCountdown="false"/>
            </section>
            <div class=" box-border w-3/12">
                    <div class="c-box-container box-border	">
                        <div class="c-box">
                            <aside class=" box-promo-single">
                                <div class="c-promo-single">
                                    @include('sections.pishnehadat-lahzeii')
                                    <div class="swiper-instant-offers">
                                            <x-swiper.swiper-wrapper :productItemContainer3="$productInstantOffers"
                                            countdown="false"/>
                                        </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>

        </div>
    </main>
    @endsection


