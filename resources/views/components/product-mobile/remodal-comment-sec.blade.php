@props(['title','name','date','hidden','seller','mood','verb','color','colorCode','strengthHidden','strengthes','weakHidden','weaknesses','likes'])
<div class="my-4 px-5 pb-5 mo-round-cart">
    <div class="mobile-remodal-comments-summary-title  mobile-remodal-comments-summary-title-main">
        {{--class haro edit konam--}}
        <div class="mobile-remodal-comments-summary-title-details">
            <p>{{$title}}</p>
            <div class="mobile-faq-submission-details mobile-remodal-comments-summary-sender">
                <span>{{$name}}</span>
                <span>({{$date}})</span>
            </div>
        </div>
        <div class="mobile-remodal-comments-summary-title-buyer {{$hidden}}">
            {{--pass 'hidden' if you want to hide this section', otherwise pass '' --}}
            خریدار
        </div>


    </div>
    <p class="mobile-remodal-comments-summary-bought-seller">
        <span>خریداری شده از:</span>
        <a href="#kavoshteampage" class="mobile-btn-link-spoiler">{{$seller}}</a>
    </p>
    <div class={{$attributes->merge(['class'=>'mobile-remodal-comments-recommend mobile-remodal-comments-recommend-'.$mood])}}>
        خرید این محصول را توصیه {{$verb}}
        {{--pass 'positive' or 'negative' to mood variable --}}
    </div>
    <div class="mobile-remodal-comments-summary-bought">
        <div class="mobile-remodal-comments-summary-bought-details">
            <div class="mobile-remodal-comments-summary-bought-color">
                <span>رنگ خریداری شده:</span> <span>{{$color}}</span>
                <div class="mobile-remodal-comments-summary-bought-color-value" style="background-color:{{$colorCode}};"></div>
            </div>
        </div>
    </div>
    <div class="mobile-remodal-comments-summary-title mobile-remodal-comments-summary-title-strength {{$strengthHidden}}">
        <span>نقاط قوت</span>
    </div>
    <ul class="mobile-remodal-comments-summary-points mobile-remodal-comments-summary-points-strength {{$strengthHidden}}">
        {{--pass 'hidden' if you want to hide this section', otherwise pass '' --}}
        @if($strengthHidden=='hidden')

        @else
            @foreach($strengthes as $strength)
                <li>{{$strength}}</li>
            @endforeach
        @endif

    </ul>
    <div class="mobile-remodal-comments-summary-title mobile-remodal-comments-summary-title-weakness {{$weakHidden}}">
        <span>نقاط ضعف</span>
    </div>
    <ul class="mobile-remodal-comments-summary-points mobile-remodal-comments-summary-points-weakness {{$weakHidden}}">
        {{--pass 'hidden' if you want to hide this section', otherwise pass '' --}}

        @if($weakHidden=='hidden')
        @else
            @foreach($weaknesses as $weakness)
                <li>{{$weakness}}</li>
            @endforeach
        @endif
    </ul>
    <div class="mobile-remodal-comments-comment-body">
        <p>{{$slot}}</p>
    </div>
    <div class="mobile-remodal-comments-comment-actions">
        <span>آیا این نظر برایتان مفید بود؟ </span>
        <div class="mobile-remodal-comments-comment-buttons" id="comment-like-container">
            <a href="#btn" class="mobile-remodal-comments-comment-button  mobile-comment-like" data-comment="20833444">
                <i class="far fa-thumbs-up"></i>

                <span>(<span class="js-like-count">{{$likes}}</span>)</span>
            </a>

            <a href="#" class="mobile-remodal-comments-comment-button  js-comment-dislike" data-comment="20833444">
                <div class="mobile-remodal-comments-comment-button-flag-icon">
                    <i class="far fa-flag"></i>
                </div>
            </a>

        </div>
    </div>
</div>
