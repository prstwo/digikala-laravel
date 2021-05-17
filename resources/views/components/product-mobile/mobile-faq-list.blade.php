@props(['name','question','hidden'])
<li class="is-question">
    <div class="mobile-faq-header">
        پرسش
        <span class="mobile-faq-submission-details">
                                <span class="mobile-faq-fullname">{{$name}}
                                </span>
                            </span>
    </div>
    <p>{{$question}}  </p>
    <div class="{{$hidden}} mobile-comments-actions">
        {{-- in case of hide this dic, pass hidden ad value of hidden variable--}}
        <a href="#page" class="mobile-comments-show-more js-add-answer-btn" data-question-id="" data-question-body="ساخت کدوم کشوره؟
        ">به این پرسش پاسخ دهید</a>
    </div>
</li>
