@php
    $productConfigInfo = [
    ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت', 'class'=>'""'],
    ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G ', 'class'=>'""'],
    ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین', 'class'=>'""'],
    ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)', 'class'=>'""'],
    ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت', 'class'=>'"c-products-params-more"'],
    ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G ','class'=>'"c-products-params-more"'],
    ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین','class'=>'"c-products-params-more"'],
    ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)','class'=>'"c-products-params-more"'],
    ];
@endphp
<div class="product-config flex-shrink-0 relative pt-3 ml-4 border-t border-solid flex flex-col content-between ">
    <x-product-title-english/>
    <div class="product-engagement">
        <div class="flex items-center">
            <div class="product-engagement-rating flex items-center">
                <span class="product-engagement-rating-star fa fa-star  ml-1"></span>
                ۴.۲
                <span class="product-engagement-rating-num mr-0.5 text-xs">
                                            (۶۵)
                                            </span>
            </div>
        </div>
        <div></div>
        <div></div>
    </div>
    <div class="product-config-wrapper">
        <div class="product-config-info">
            <ul class="list-none p-0 my-5 mx-0">
                @foreach($productConfigInfo as $productConfig)
                    <li class={!! $productConfig['class'] !!}>
                        <span>{{$productConfig['span1']}} </span>
                        <span>{{$productConfig['span2']}}</span>
                    </li>
                @endforeach
            </ul>
            <div class="mb-5">
                <a href="#continue" class="px-0 o-btn-link-blue-sm continue-btn-config" onclick="toggleCollapse(this)">
                    + موارد بیشتر
                </a>
            </div>
        </div>

    </div>
</div>
