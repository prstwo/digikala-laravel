@props(['reply','name','badge'])
<div class="c-question-item-reply">
    <div class="c-question-reply-body">
        {{$reply}}
    </div>
    <div class="c-question-reply-body">
        <div>
            <span class="question-reply-name">{{$name}} </span>
            <span  class="question-reply-buyer-badge">{{$badge}}</span>
        </div>
    </div>
</div>
