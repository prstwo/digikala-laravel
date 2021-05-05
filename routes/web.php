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

    return view('index');
});
Route::get('/', '\App\Http\Controllers\HomeController@show');
Route::get('/product', '\App\Http\Controllers\SingleProductController@show');

Route::get('/swiper', function (){
    return view('swiper');
});
Route::get('/swiper2', function (){
    return view('swiper2');
});
