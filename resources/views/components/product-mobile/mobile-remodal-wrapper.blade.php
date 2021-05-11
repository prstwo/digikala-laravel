@props(['extraClass1','extraClass2','extraClass3','title'])
<div class="remodal-wrapper c-remodal-full js-{{$extraClass2}}" style="display: none">
    <div class="c-remodal c-{{$extraClass1}}">
        <div class="p-2">
            <div class="c-page-title-bar">
                <div class="c-page-title-bar-holder">
                    <div class="c-page-title-bar-btn-back js-{{$extraClass3}}"></div>
                    <div class="c-page-title-bar-title">
                        {{$title}}
                    </div>
                </div>
            </div>
            {{$slot}}
        </div>

    </div>

</div>
