@props(['question','reply','name','badge'])
<div class="c-question-item" id="faq">
    <div class="c-question-item-title">
        {{$question}}
    </div>
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
    <div class="c-question-item-action">
        <div class="o-btn o-btn-link-blue-sm">
            مشاهده پاسخ‌های دیگر
        </div>
    </div>
</div>
