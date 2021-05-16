@props(['mobileTitle','title','link'])
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="head">
        <span class="text-gray-500  mobile-title">{{$mobileTitle}}</span>
        <span class="head-title">
              {{$title}}
        </span>
        <div class="head-link">
            <a href="#products-page"> {{$link}}</a>
        </div>
    </div>
</div>
