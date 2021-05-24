@extends('layouts.master')
@section('keyword-description')
    <meta name="keyword" content="گوشی موبایل, دیجی کالا">
    <meta name="description" content="this is product page of digikala">
@show
@section('page-title','مشخصات، قیمت و خرید گوشی موبایل ')
@section('main-content')
    <main class="w-full">
        <div class="product-whole-content">
            @include('sections.single-product-desktop')
            @include('sections.single-product-mobile')
        </div>
    </main>
@endsection
@section('extra-scripts')
@endsection
