@props(['extraClass1','extraClass2'])
<div class="remodal-wrapper c-remodal-full js-{{$extraClass2}}" style="display: none">
    <div class="c-remodal c-{{$extraClass1}}">
        {{$slot}}
    </div>
</div>
