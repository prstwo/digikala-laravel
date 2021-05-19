<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('index', [
            'sandwichMenuItemsP1'=>  [
                ['class'=>'"fa fa-list-ul"', 'title'=>'دسته بندی کالاها'],
                ['class'=>'"fa fa-shopping-basket js-toggle"', 'title'=>'سوپرمارکت'],
                ['class'=>'"fa fa-percent"', 'title'=>' تخفیف ها و پشنهادها'],
                ['class'=>'"fa fa-check-circle-o"', 'title'=>'  دیجی کالای من']
            ], 'sandwichMenuItemsP2' =>[
                ['class'=>'"fa fa-random"', 'title'=>'دیجی کلاب'],
                ['class'=>'"fa fa-paypal"', 'title'=>'دیجی پی'],
                ['class'=>'""', 'title'=>'سوالی دارید؟'],
                ['class'=>'""', 'title'=>'فروشنده شوید']
            ], 'productItemContainer3'=>[
                ['img'=>'images/phone-1.jpg','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت ', 'old-price'=>'۸,۰۰۰,۰۰۰',
                    'discount'=>' ۱۵٪', 'new-price'=>'۷,۲۲۹,۰۰۰'],
                ['img'=>'images/phone-2.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-8.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-4.jpg','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
                ['img'=>'images/phone-5.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-6.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-7.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-8.jpg','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ ']
            ]
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
            , 'promotionSections'=>[
                ['icon'=>'"fa fa-laptop"', 'cat-name'=>' کالای دیجیتال', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-wrench"', 'cat-name'=>'خودرو، ابزار و تجهیزات صنعتی', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-check"', 'cat-name'=>'مد و پوشاک', 'cat-quantity'=>'+ ۱۱۱۰۰۰ کالا'],
                ['icon'=>'"fa fa-child"', 'cat-name'=>' اسباب بازی، کودک و نوزاد', 'cat-quantity'=>'+ ۴۸۸۰۰۰ کالا'],
                ['icon'=>'"fa fa-shopping-basket"', 'cat-name'=>'کالاهای سوپرمارکتی', 'cat-quantity'=>'+ ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-heart"', 'cat-name'=>'زیبایی و سلامت', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-home"', 'cat-name'=>'خانه و آشپزخانه', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-pencil"', 'cat-name'=>'کتاب، لوازم تحریر و هنر', 'cat-quantity'=>' + ۵۲۹۰۰۰ کالا'],
                ['icon'=>'"fa fa-tree"', 'cat-name'=>'ورزش و سفر', 'cat-quantity'=>'+ ۲۰۰۰۰۰ کالا']
            ], 'swiperBrands'=>[
                ['img'=>'images/huawei.jpg'],
                ['img'=>'images/x-vision.png'],
                ['img'=>'images/tcl.jpg'],
                ['img'=>'images/casio.jpg'],
                ['img'=>'images/pakshoma.png'],
                ['img'=>'images/panoramic.png'],
                ['img'=>'images/panasonic.png'],
                ['img'=>'images/honor.png'],
                ['img'=>'images/logitech.jpg'],
                ['img'=>'images/parskhazar.png'],
            ]
            ,'sponserBigPics'=>[
                ['src'=>'images/sponser-big-1.jpg'],
                ['src'=>'images/sponser-big-2.jpg'],
                ['src'=>'images/sponser-big-3.jpg'],
                ['src'=>'images/sponser-big-4.jpg']
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
