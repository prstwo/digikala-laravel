@props(['extraClasses'=>'','extraClasses2'=>'','headMobileTitle','headTitle','headlink','link','swiperClass','swiperMobileClass','productItemContainer3'
,'countdown','swiperMobileClass','mobileCountdown'])
<div class=" page-section {{$extraClasses}} relative ">
    <section class="page-section-standard {{$extraClasses2}} relative">
        <div class="products">
            <x-head-sec :mobileTitle="$headMobileTitle" :title="$headTitle " :headlink="$headlink" :link="$link"/>
            {{--pass head-link if you want to apply head-link class and add a border bottom to head-title section --}}
            <div class="boxes static">
                <div class="items">
                    <div class="hidden md:block {{$swiperClass}}">
                        <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3" countdown="$countdown"/>
                        <x-swiper.swiper-next-prev/>
                    </div>
                    <div class="block md:hidden {{$swiperMobileClass}}">
                            <x-swiper.swiper-wrapper :productItemContainer3="$productItemContainer3" :countdown="$mobileCountdown"/>
                            <x-swiper.swiper-next-prev/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
