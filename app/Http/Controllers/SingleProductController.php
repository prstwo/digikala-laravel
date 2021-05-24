<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('singleproduct', [
            'productGalleryPictures'=> [
                ['img'=>'images/product-pic-example1.jpg','data'=>'images/product-data-src0.jpg'],
                ['img'=>'images/product-pic-example2.jpg','data'=>'images/product-data-src1.jpg'],
                ['img'=>'images/product-pic-example3.jpg','data'=>'images/product-data-src2.jpg'],
                ['img'=>'images/product-pic-example4.jpg','data'=>'images/product-data-src3.jpg']
            ] ,'breadcrumbs'=>[  'دیجی کالا ', 'کالای دیجیتال', 'موبایل ', 'گوشی موبایل ']
            , 'productTabs' =>[
                ['href'=>'#reviews', 'text'=>'نقد و بررسی'],
                ['href'=>'#details', 'text'=>'مشخصات'],
                ['href'=>'#comments', 'text'=>' دیدگاه کاربران '],
                ['href'=>'#faq', 'text'=>'پرسش و پاسخ  ']
            ], 'commentExpertRatings'=>[
                ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
                ['title'=>'ارزش خرید به نسبت قیمت', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
                ['title'=>'نوآوری', 'percent'=>'"84%"', 'width'=>'"width: 84%;"' , 'rate'=>'۴.۲'],
                ['title'=>'امکانات و قابلیت ها', 'percent'=>'"66%"', 'width'=>'"width: 66%;"' , 'rate'=>'۴.۳'],
                ['title'=>'سهولت استفاده', 'percent'=>'"80%"', 'width'=>'"width: 80%;"' , 'rate'=>'۴'],
                ['title'=>'کیفیت ساخت', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳'],
                ['title'=>'طراحی و ظاهر', 'percent'=>'"86%"', 'width'=>'"width: 86%;"' , 'rate'=>'۴.۳']
            ], 'params_lists'=>[ ['title'=>'حافظه داخلی', 'content'=>'256 گیگابایت'],
                ['title'=>'مقدار رم', 'content'=>'8گیگابایت'] ],
            'params_lists_2'=>[ ['title'=>'حافظه داخلی', 'content'=>'256 گیگابایت'],
                ['title'=>'مقدار رم', 'content'=>'8گیگابایت'] ] ,
            'params_lists_3'=>[ ['title'=>'تراشه', 'content'=>'Qualcomm SM8250 Snapdragon 865 (7 nm+) Chipset'],
                ['title'=>'پردازنده مرکزی', 'content'=>'Single-Core Kryo 585 & Triple-Core Kryo 585 & Quad-Core Kryo 585 CPU'],
                ['title'=>'فرکانس پردازنده مرکزی ', 'content'=>'2.84 , 2.42  1.80 گیگاهرتز']],
            'sortComments'=>[['data-mode'=>'newest_comment', 'class'=>'"c-sort-row-label is-active"', 'sort-text'=>'   جدیدترین دیدگاه‌ها'],
                ['data-mode'=>'most_liked','class'=>'"c-sort-row-label"', 'sort-text'=>'مفیدترین دیدگاه‌ها'],
                ['data-mode'=>'buyers','class'=>'"c-sort-row-label "', 'sort-text'=>'  دیدگاه خریداران']]
            ,'modalGalleryPictures'=>[['img'=>'images/product-pic-example1.jpg','data'=>'images/product-data-src0.jpg'],
                ['img'=>'images/product-pic-example2.jpg','data'=>'images/product-data-src1.jpg'],
                ['img'=>'images/product-pic-example3.jpg','data'=>'images/product-data-src2.jpg'],
                ['img'=>'images/product-pic-example4.jpg','data'=>'images/product-data-src3.jpg'],
                ['img'=>'images/product-pic-example5.jpg','data'=>'images/product-data-src4.jpg'],
                ['img'=>'images/product-pic-example6.jpg','data'=>'images/product-data-src5.jpg']]
            ,'productItemContainer3'=>[
                ['img'=>'images/phone-1.jpg','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
                    'discount'=>' ۱۵٪', 'new-price'=>'۷,۲۲۹,۰۰۰','progressbar'=>true,'progressbar-value'=>'60'],
                ['img'=>'images/phone-2.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ ','progressbar'=>true,'progressbar-value'=>'40'],
                ['img'=>'images/phone-8.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ ','progressbar'=>false],
                ['img'=>'images/phone-4.jpg','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ ','progressbar'=>false],
                ['img'=>'images/phone-5.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ ','progressbar'=>false],
                ['img'=>'images/phone-6.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ ','progressbar'=>false],
                ['img'=>'images/phone-7.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ ','progressbar'=>false],
                ['img'=>'images/phone-8.jpg','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ ','progressbar'=>true,'progressbar-value'=>'60']
            ],
            'productConfigInfo'=>[

                    ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت', 'class'=>'""'],
                    ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G ', 'class'=>'""'],
                    ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین', 'class'=>'""'],
                    ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)', 'class'=>'""'],
                    ['span1'=>'حافظه داخلی:', 'span2'=>'256 گیگابایت', 'class'=>'"c-products-params-more"'],
                    ['span1'=>'شبکه های ارتباطی: ', 'span2'=>'2G, 3G, 4g, 5G ','class'=>'"c-products-params-more"'],
                    ['span1'=>'دوربین‌های پشت گوشی: ', 'span2'=>' 3 ماژول دوربین','class'=>'"c-products-params-more"'],
                    ['span1'=>'توضیحات سیم کارت: ', 'span2'=>' سایز نانو (8.8 × 12.3 میلی‌متر)','class'=>'"c-products-params-more"']
            ]
            ,'productColors'=>[
                ['color'=>'خاکستری','dataTitle'=>'خاکستری','colorCode'=>'#dedede']
                ,['color'=>'مشکی','dataTitle'=>'مشکی','colorCode'=>'black']
                ,['color'=>'آبی','dataTitle'=>'آبی','colorCode'=>'#2196f3']
            ]
            ,'productspecs'=> [['headline'=>'مشخصات کلی'
            ,'items'=> [['key'=>'ابعاد', 'value'=>'165.1x76.4x9.3 میلی‌متر'],['key'=>'بدنه', 'value'=>'قاب پشتی و جلو از جنس شیشه با محافظت Gorilla Glass 5'] ]]
            ,['headline'=>' CPU'
                ,'items'=> [['key'=>'حافظه', 'value'=>'مقدار RAM '],['key'=>'داخلی', 'value'=>'256 گیگابایت']]
            ]]
            ,'strengthes'=>['باتری قوی','کیفیت صفحه نمایش','سخت افزار قوی','دوربین عالی']
            ,'weaknesses'=>['یکم داغ میکنه','یکم سنگین']
            ,'footerAdressImages'=>[
                ['src'=>'images/google-play.png'],
                ['src'=>'images/bazaar.svg'],
                [ 'src'=>'images/myket.svg']
                ,['src'=>'images/sibapp.png']
            ]
            ,'footerLinksUl1'=>[
                ['name'=>' نحوه ثبت سفارش'],
                ['name'=>' رویه ارسال سفارش'],
                ['name'=>'شیوه های پرداخت']
            ]
            ,'mobileFooterLinksUl2'=>[
                ['name'=>'فروش در دیجی کالا'],
                ['name'=>'سوالات متداول'],
                ['name'=>'  دانلود اپلیکیشن'],
                ['name'=>'شرایط استفاده'],
                ['name'=>'حریم خصوصی'],
                ['name'=>'اتاق خبر دیجی کالا']
            ]
            ,'footerLinksUl2'=>[
                ['name'=>' پاسخ به پرسش‌های متداول'],
                ['name'=>' شرایط استفاده'],
                ['name'=>' حریم خصوصی'],
                ['name'=>' گزارش باگ'],
            ]
            ,'footerLinksUl3'=>[
                ['name'=>' اتاق خبر دیجی‌کالا'],
                ['name'=>' فروش در دیجی کالا  '],
                ['name'=>' فرصت های شغلی  '],
                ['name'=>' تماس با دیجی کالا    '],
                ['name'=>'راهنمای هویت بصری ']
            ]
            , 'mobileMenuItems' => [['title'=>'سوپرمارکت','icon_class'=>'fa fa-shopping-basket ml-2 text-green-500	']
                ,['title'=>'تخفیف ها و پیشنهادها'
                    ,'icon_class'=>'fa fa-percent ml-2 text-red-600', 'sublist'=>
                        [
                            ['item'=>'مشاهده همه پیشنهاد ها'],
                            ['item'=> 'پرفروش ترین کالاها '],
                            ['item'=>'کالاهای شگفت انگیز'],
                            ['item'=>'شگفت انگیز سوپرمارکتی'],
                            ['item'=>'فروش ویژه'],
                            ['item'=>'با هر خرید هدیه بگیرید'],
                            ['item'=>'تخفیف پایان فصل'],
                            ['item'=>'مشاهدهکارت هدیه خرید از دیجی کالا'],
                            ['item'=>'تازه های فروشنده های جدید']
                        ]
                ]
                ,['title'=>'دیجی کالای من','icon_class'=>'far fa-check-square ml-2 text-red-600	']
                ,['title'=>'دیجی پلاس','icon_class'=>'fa fa-random ml-2 text-purple-800']
                ,['title'=>'دیجی کلاب','icon_class'=>'fa fa-random ml-2 text-yellow-300']
                ,['title'=>'دیجی پی','icon_class'=>'fa fa-coins ml-2 text-blue-400']
                ,['title'=>'مپنت','icon_class'=>'fas fa-calculator ml-2 text-yellow-500']
                ,['title'=>'فروشنده شوید','icon_class'=>'fa fa-list-ul ml-2']
            ]
            ,'categoriesSubmenu'=>[
                ['cat'=>'کالای دیجیتال','fa-class'=>'fa-laptop','class'=>'kalayeDigital']
                ,['cat'=>'خودرو، ابزار، تجهیزات صنعتی','fa-class'=>'fa-wrench','class'=>'sanati']
                ,['cat'=>'مد و پوشاک','fa-class'=>'fa-check','class'=>'mod']
                ,['cat'=>'اسباب بازی، کودک، نوزاد','class'=>'asbabBazi','fa-class'=>'fa-child']
                ,['cat'=>'زیبایی و سلامت','class'=>'zibayie','fa-class'=>'fa-heart']
                ,['cat'=>'خانه و آشپزخانه','class'=>'khane','fa-class'=>'fa-home']
                ,['cat'=>'کتاب، لوازم تحریر، هنر','class'=>'ketab','fa-class'=>'fa-pencil']
                ,['cat'=>'ورزش و سفر','class'=>'varzesh','fa-class'=>'fa-tree']
            ]

            ,'mobileMenuCats'=>[
                ['cat'=>'کالای دیجیتال', 'submenu'=>[
                    ['class'=>'mobile-toggle-li js-mobile-toggle','chevron'=>true, 'title'=>'لوازم جانبی گوشی',
                        'sublists'=>['واقعیت مجازی','دوربین', 'کامپیوتر و لوازم جانبی']]
                    ,['class'=>'mobile-toggle-li js-mobile-toggle','chevron'=>true, 'title'=>'لوازم جانبی لپ تاپ',
                        'sublists'=>['کابل صدا','کاور', ' کیف و کوله']]
                    ,['class'=>'', 'title'=>'واقعیت مجازی','chevron'=>false,
                        'sublists'=>['سامسونگ','هوآوی', ' اپل']]
                ]],

                ['cat'=>'خودرو، ابزار و تجهیزات صنعتی', 'submenu'=>[
                    ['class'=>'', 'title'=>'خودرو ایرانی و خارجی','chevron'=>false,
                    ]
                    ,['class'=>'mobile-toggle-li js-mobile-toggle','chevron'=>true, 'title'=>'ابزار برقی',
                        'sublists'=>[' کارواش','مکنده و دمنده', 'گمپرسور جک و خودرو']]
                    ,['class'=>'mobile-toggle-li js-mobile-toggle','chevron'=>true, 'title'=>'حفاظتی و امنیتی',
                        'sublists'=>['گاوصندوق']]

                ]]

            ]


        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
