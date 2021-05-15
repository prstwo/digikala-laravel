@props(['name','question'])
<li class="is-question">
    <div class="mobile-faq-header">
        پرسش
        <span class="mobile-faq-submission-details">
                                <span class="mobile-faq-fullname">{{$name}}
                                </span>
                            </span>
    </div>
    <p>{{$question}}  </p>
</li>
