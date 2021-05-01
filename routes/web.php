<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sandwichMenuItemsP1 = [
        ['class'=>'"fa fa-list-ul"', 'title'=>'دسته بندی کالاها'],
        ['class'=>'"fa fa-shopping-basket js-toggle"', 'title'=>'سوپرمارکت'],
        ['class'=>'"fa fa-percent"', 'title'=>' تخفیف ها و پشنهادها'],
        ['class'=>'"fa fa-check-circle-o"', 'title'=>'  دیجی کالای من']
    ];

    $sandwichMenuItemsP2 = [
        ['class'=>'"fa fa-random"', 'title'=>'دیجی کلاب'],
        ['class'=>'"fa fa-paypal"', 'title'=>'دیجی پی'],
        ['class'=>'""', 'title'=>'سوالی دارید؟'],
        ['class'=>'""', 'title'=>'فروشنده شوید']
    ];

    $productItemContainer3 = [
        ['img'=>'"images/phone-1.jpg"','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
            'discount'=>' ۱۵٪', 'new-price'=>'۷,۲۲۹,۰۰۰'],
        ['img'=>'"images/phone-2.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-3.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-4.jpg"','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
        ['img'=>'"images/phone-5.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-6.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-8.jpg"','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
            'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ ']
    ];
    $productItemContainer4 = [
        ['img'=>'"images/phone-1.jpg"','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
            'discount'=>' ٪۱۵', 'new-price'=>'۷,۲۲۹,۰۰۰'],
        ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-8.jpg"','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
            'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ '],
        ['img'=>'"images/phone-2.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-3.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-4.jpg"','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
        ['img'=>'"images/phone-5.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-6.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
        ['img'=>'"images/phone-7.jpg"','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
            'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ ']
    ];
    $promotionSections = [
        ['icon'=>'"fa fa-laptop"', 'cat-name'=>' کالای دیجیتال', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-wrench"', 'cat-name'=>'خودرو، ابزار و تجهیزات صنعتی', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-check"', 'cat-name'=>'مد و پوشاک', 'cat-quantity'=>'+ ۱۱۱۰۰۰ کالا'],
        ['icon'=>'"fa fa-child"', 'cat-name'=>' اسباب بازی، کودک و نوزاد', 'cat-quantity'=>'+ ۴۸۸۰۰۰ کالا'],
        ['icon'=>'"fa fa-shopping-basket"', 'cat-name'=>'کالاهای سوپرمارکتی', 'cat-quantity'=>'+ ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-heart"', 'cat-name'=>'زیبایی و سلامت', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-home"', 'cat-name'=>'خانه و آشپزخانه', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-pencil"', 'cat-name'=>'کتاب، لوازم تحریر و هنر', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
        ['icon'=>'"fa fa-tree"', 'cat-name'=>'ورزش و سفر', 'cat-quantity'=>'+ ۲۰۰۰۰۰ کالا']
    ];
    return view('index',compact(['sandwichMenuItemsP1',
        'sandwichMenuItemsP2',
        'productItemContainer3', 'productItemContainer4','promotionSections']));
});
Route::get('/product', function () {
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
        $productGalleryPictures = [
            ['img'=>'"images/product-pic-example1.jpg"','data'=>'"images/product-data-src0.jpg"'],
            ['img'=>'"images/product-pic-example2.jpg"','data'=>'"images/product-data-src1.jpg"'],
            ['img'=>'"images/product-pic-example3.jpg"','data'=>'"images/product-data-src2.jpg"'],
            ['img'=>'"images/product-pic-example4.jpg"','data'=>'"images/product-data-src3.jpg"']
        ];

        $productTabs = [
            ['href'=>'#reviews', 'text'=>'نقد و بررسی'],
            ['href'=>'#details', 'text'=>'مشخصات'],
            ['href'=>'#comments', 'text'=>' دیدگاه کاربران '],
            ['href'=>'#faq', 'text'=>'پرسش و پاسخ  ']
        ];
        $commentExpertRatings = [
            ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
            ['title'=>'ارزش خرید به نسبت قیمت', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
            ['title'=>'نوآوری', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
            ['title'=>'امکانات و قابلیت ها', 'percent'=>'"66%"', 'width'=>'"width: 66%;"' , 'rate'=>'۴.۳'],
            ['title'=>'سهولت استفاده', 'percent'=>'"80%"', 'width'=>'"width: 80%;"' , 'rate'=>'۴'],
            ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
            ['title'=>'طراحی و ظاهر', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳']
        ];
        $params_lists=[ ['title'=>'ابعاد', 'content'=>'165.1x76.4x9.3 میلی‌متر'],
            ['title'=>'ابعاد', 'content'=>'165.1x76.4x9.3 میلی‌متر'] ];
        $params_lists_2=[ ['title'=>'حافظه داخلی', 'content'=>'256 گیگابایت'],
            ['title'=>'مقدار رم', 'content'=>'8گیگابایت'] ];
        $params_lists_3=[ ['title'=>'تراشه', 'content'=>'Qualcomm SM8250 Snapdragon 865 (7 nm+) Chipset'],
            ['title'=>'پردازنده مرکزی', 'content'=>'Single-Core Kryo 585 & Triple-Core Kryo 585 & Quad-Core Kryo 585 CPU'],
            ['title'=>'فرکانس پردازنده مرکزی ', 'content'=>'2.84 , 2.42  1.80 گیگاهرتز']];
    $sortComments=[['data-mode'=>'newest_comment', 'class'=>'"c-sort-row-label is-active"', 'sort-text'=>'   جدیدترین دیدگاه‌ها'],
        ['data-mode'=>'most_liked','class'=>'"c-sort-row-label"', 'sort-text'=>'مفیدترین دیدگاه‌ها'],
        ['data-mode'=>'buyers','class'=>'"c-sort-row-label "', 'sort-text'=>'  دیدگاه خریداران']];


    return view('single-product',compact(['productConfigInfo',
        'productGalleryPictures',
        'productTabs',
        'commentExpertRatings',
        'params_lists',
        'params_lists_2', 'params_lists_3','sortComments']));
});

