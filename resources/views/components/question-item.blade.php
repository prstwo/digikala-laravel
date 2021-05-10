@props(['question','reply','name','badge'])
<div class="c-question-item" id="faq">
    <div class="c-question-item-title">
        {{$question}}
    </div>
    <x-question-item-reply :reply="$reply" :name="$name" :badge="$badge"/>
    <x-question-item-reply reply="خود این دستگاه 5G ساپورت میکنه" name="پرستو" badge=""/>
    <x-question-item-reply reply="پردازنده فرقی نداره جفتشون اسنپدراگون ۸۶۵ هستن تنها فرقشون تو دوربین و رام" name="زهرا" badge="خریدار"/>
    <div class="c-question-item-action">
        <div class="o-btn o-btn-link-blue-sm  with-chevron js-more-replies">
            <a href="#more-questions" >مشاهده پاسخ‌های دیگر</a>
        </div>
    </div>
</div>
