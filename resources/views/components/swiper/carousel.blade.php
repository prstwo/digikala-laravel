@props(['mainTopSliders'])
<div class="swiper-container-carousel">
    <div class="swiper-wrapper">
        @foreach($mainTopSliders as $mainTopSlider)
            <div class="swiper-slide">
                <a href="side product page">
                    <img src={{asset($mainTopSlider['src'])}} alt="product-gif">
                </a>
            </div>
        @endforeach
    </div>
    <x-swiper.swiper-next-prev/>
    <x-swiper.swiper-pagination/>
</div>
