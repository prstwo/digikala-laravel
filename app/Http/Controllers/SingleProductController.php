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
                ['img'=>'"images/product-pic-example1.jpg"','data'=>'"images/product-data-src0.jpg"'],
                ['img'=>'"images/product-pic-example2.jpg"','data'=>'"images/product-data-src1.jpg"'],
                ['img'=>'"images/product-pic-example3.jpg"','data'=>'"images/product-data-src2.jpg"'],
                ['img'=>'"images/product-pic-example4.jpg"','data'=>'"images/product-data-src3.jpg"']
            ], 'productTabs' =>[
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
