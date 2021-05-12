@props(['jsClass','title','backBtn'])
<div class="c-product-info-embeded js-{{$jsClass}} hide">
    <div class="c-product-info-box-header">
        <div class="c-product-info-box-header-back {{$backBtn}}">
        </div>
        {{$title}}
    </div>
    <div class="c-product-info-box-body-wrapper">
        <div class="c-product-info-box-body">
            {{$slot}}
        </div>
    </div>
</div>
