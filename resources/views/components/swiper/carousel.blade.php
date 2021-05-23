@php
$mainTopSliders=[['src'=>'images/maintop-1.jpg'],['src'=>'images/maintop-2.jpg'],
['src'=>'images/maintop-3.jpg'],['src'=>'images/maintop-4.jpg'],['src'=>'images/maintop-5.jpg']]
@endphp
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
