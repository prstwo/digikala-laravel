{{-- مختص اسلایدرهای 4 تایی--}}
@props(['productItemContainer3','countdown'])
{{--pass false if you dont want countdown section, pass true if you need countdown sectipon --}}
<div class="swiper-wrapper">
    @foreach($productItemContainer3 as $productItem3 )
        <x-swiper.swiper-slide :productItem3="$productItem3" :countdown="$countdown"/>
    @endforeach
</div>
