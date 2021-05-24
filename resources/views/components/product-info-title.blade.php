@props(['productTitleBrand','productTitleBrandLink','productTitle'])
<div class="product-info-title flex px-0 py-2 items-center">
    <div>
        <div class="product-title-flex">
            <div class="product-title-brand flex items-center">
                <a class="product-title-brand-link" href="#s">
                    {{$productTitleBrand}}
                    {{--شیائومی --}}

                </a>
                <span> /
                                            </span>
                <a class="product-title-brand-link" href="#s">
                    {{$productTitleBrandLink}}
                    {{--گوشی موبایل شیائومی --}}

                </a>
            </div>
        </div>
        <h1 class="single-product-title ">
            {{$productTitle}}
            {{--             گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم&zwnj; کارت ظرفیت 256 گیگابایت
--}}
        </h1>
    </div>
</div>
