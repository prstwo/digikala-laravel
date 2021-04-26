<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مشخصات، قیمت و خرید گوشی موبایل </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>
@section('angle-left')
    <i class="fa fa-angle-left "></i>
@endsection
<?php
 $productConfigInfo = [
         ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت'],
         ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G '],
         ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین'],
         ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)'],
        ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت'],
        ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G '],
        ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین'],
        ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)'],
    ];
    $productGalleryPictures = [
        ['img'=>'"images/product-pic-example1.jpg"'],
        ['img'=>'"images/product-pic-example2.jpg"'],
        ['img'=>'"images/product-pic-example3.jpg"'],
        ['img'=>'"images/product-pic-example4.jpg"']
    ]
?>
<div>
    <!--در این قسمت هدر و نوبار جای دارند -->
    <main class="w-full">
        <div class="product-whole-content mt-4">
            <div class="container px-6 py-0 bg-white">
                <div class="product-breadcrumb flex justify-between items-center">
                    <nav class="breadcrumb">
                        <ul class="flex flex-row ">
                            <li>
                                <a href="#digikala">دیجی کالا</a>
                            </li>
                            <li>
                                <a href="digital-kala">کالای دیجیتال</a>
                            </li>
                            <li>
                                <a href="#mobile">
                                    موبایل
                                </a></li>
                            <li>
                                <a href="#mobile-phone">
                                    گوشی موبایل
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="product-link-ex">
                        <a href="#sell">
                            کالای خود را در دیجی‌کالا
                            بفروشید
                            <i class="fa fa-home ml-2 text-sl"></i>
                        </a>
                    </div>
                </div>
                <article class="bg-white w-full flex flex-row mb-3 items-start">
                    <section class="product-gallery pl-4 ml-4 flex flex-col top-28">
                        <div class="product-gallery-item">
                            <ul class="product-gallery-option list-none flex flex-col "></ul>
                            <div></div>
                        </div>
                        <div>
                            <div class="product-gallery-main-pic py-4">
                                <img src="images/product-main-pic.jpg" alt="product pic">
                            </div>
                            <ul class="flex product-gallery-pictures">
                                @foreach($productGalleryPictures as $productgallerypicture)

                                    @if($loop->last)
                                        <li class=" ">
                                            <div class="thumb-wrapper"><img src={!! $productgallerypicture['img'] !!} alt="">
                                                <div class="gallery-images-count">
                                                 <span class="gallery-count-circle">
                                                     <div class="text-2xl">
                                                         ...
                                                     </div>
                                                 </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                        <li class=" ">
                                            <div class="thumb-wrapper"><img src={!! $productgallerypicture['img'] !!} alt=""></div>
                                        </li>

                                @endforeach

                            </ul>
                        </div>
                    </section>
                    <section class="product-info">
                        <div class="product-info-title flex px-0 py-2 items-center">
                                <div>
                                    <div class="product-title-flex">
                                        <div class="product-title-brand flex items-center">
                                            <a class="product-title-brand-link" href="#شیاُومی">

                                                شیائومی
                                            </a>
                                            <span> /
                                            </span>
                                            <a class="product-title-brand-link" href="#شیاُومی">
                                                گوشی موبایل شیائومی
                                            </a>
                                        </div>
                                    </div>
                                    <h1 class="single-product-title ">
                                        گوشی موبایل شیائومی مدل Mi 10T PRO 5G M 2007J3SG دو سیم&zwnj; کارت ظرفیت 256 گیگابایت
                                    </h1>
                                </div>
                        </div>
                        <div class="product-attributes flex flex-row">
                            <div class="product-config flex-shrink-0 relative pt-3 ml-4 border-t border-solid flex flex-col content-between ">
                                <span class="product-title-english relative bottom-6 right-0 pl-2 bg-white">Xiaomi Mi 10T PRO 5G M 2007J3SG Dual SIM 256GB Mobile Phone</span>
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
                                            @foreach($productConfigInfo as $productlist)
                                                <li>
                                                    <span>{{$productlist['span1']}} </span>
                                                    <span>{{$productlist['span2']}} </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product-seller-info border border-solid rounded-lg">
                                    <div class="product-seller-box relative flex flex-col">
                                        <div class="product-seller-counter flex items-center">
                                            <div>فروشنده</div>
                                            <a href="#suppliers" class="seller-count-row">
                                                <span class="font-bold">۴</span>
                                                <span class="font-bold"> فروشنده</span>
                                                دیگر
                                            </a>
                                        </div>
                                        <div class="product-seller-row">
                                            <div class="product-seller-row-main">
                                                <div class="product-seller-first-line p-4 flex justify-between">
                                                    <span>دیجی‌کالا</span>

                                                    @section('angle-left')
                                                    @show
                                                </div>
                                                <div class="product-seller-second-line"></div>

                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-seller-row-main">
                                                گارانتی ۱۸ ماهه کاوش تیم
                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-delivery-warehouse relative pr-10 mt-5">
                                            </div>
                                        </div>
                                        <div class="product-seller-row p-4">
                                            <div class="product-seller-row-main flex flex-row justify-between">
                                                موجود در انبار دیجی‌کالا
                                                @section('angle-left')
                                                @show
                                            </div>

                                        </div><div class="product-seller-row p-4">
                                            <div class="product-seller-row-price flex flex-row justify-between">
                                                <div class="product-seller-row-price-real">
                                                    <div class="product-seller-price-pure inline-flex">
                                                        ۱۴,۹۹۰,۰۰۰
                                                    </div>
                                                    تومان
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-seller-add-to-card"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <div class="product-suppliers">
                    <div class="box-suppliers-head"></div>
                    <div class="suppliers-list"></div>
                </div>
                <div class="carousel-horizontal-general"></div>
                <div class="product-more">
                    <div>
                        <ul class="box-tabs-sticky"></ul>
                        <div class="box-tabs-info">
                            <div class="product-expert"></div>
                            <div class="product-params"></div>
                            <div class="product-comments"></div>
                            <div class="product-faq"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

    <script src="js/nav-menu.js"></script>
    <script src="js/category-products.js"></script>
    <script src="js/footer.js"></script>
</body>
</html>
