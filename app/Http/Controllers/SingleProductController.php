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
            ,'breadcrumbs'=>[  'دیجی کالا ', 'کالای دیجیتال', 'موبایل ', 'گوشی موبایل ']
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
            ,'productConfigInfo'=>[

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
