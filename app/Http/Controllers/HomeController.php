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
                ['img'=>'images/phone-1.jpg','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
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
            ], 'productItemContainer4'=>[
                ['img'=>'images/phone-1.jpg','product-title'=>'گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت
                                            گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت', 'old-price'=>'۸,۰۰۰,۰۰۰',
                    'discount'=>' ٪۱۵', 'new-price'=>'۷,۲۲۹,۰۰۰'],
                ['img'=>'images/phone-7.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-8.jpg','product-title'=>'کاور جویروم مدل Chi مناسب برای گوشی موبایل اپل iPhone 7 Plus', 'old-price'=>'۳۷,۰۰۰  ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۲۹,۵۰۰ '],
                ['img'=>'images/phone-2.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-7.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-3.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۶', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-4.jpg','product-title'=>'کاور نیلکین مدل Camshield مناسب برای گوشی موبایل شیائومی POCO X3 NFC', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>'٪۳۰ ', 'new-price'=>'۲۰۴,۷۹۰ '],
                ['img'=>'images/phone-5.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-6.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۵۴', 'new-price'=>'۴۵,۵۰۰ '],
                ['img'=>'images/phone-7.jpg','product-title'=>' کاور جوی روم مدل JR-BP273 مناسب برای گوشی موبایل اپل iPhone 6 Plus', 'old-price'=>'۹۹,۰۰۰ ',
                    'discount'=>' ٪۳۰', 'new-price'=>'۴۵,۵۰۰ ']
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
