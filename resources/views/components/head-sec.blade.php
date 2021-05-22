@props(['mobileTitle','title','headlink','link'])
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="head">
        <span class="text-gray-500  mobile-title">{{$mobileTitle}}</span>
        <span class="head-title">
              {{$title}}
        </span>
        <div class="{{$headlink}}">
            {{--pass head-link if you want this section --}}
            @if($headlink!=='')
                <a href="#products-page"> {{$link}}</a>
            @endif
        </div>
    </div>
</div>
