@props(['txt1','txt2','txt3','txt4','txt5'])
<div class="mobile-remodal-comments-faq-sort-header">
    <p>مرتب&zwnj;سازی بر اساس:</p>
    <div class="mobile-remodal-comments-faq-sort-options">
        <div class="mobile-remodal-comments-faq-sort-option">
            <div class="mobile-ui-radio-wrapper ">
                <label class="mobile-filter-label " for="comments-sort1">
                    {{$txt1}}
                </label>
                <label class="mobile-ui-radio">
                    <input type="radio" value="buyers" name="comments_sort" class="" id="comments-sort1" checked="checked" data-title={{$txt1}}>
                    <span class="mobile-ui-radio-check">

                                </span>
                </label>
            </div>
        </div>
        <div class="mobile-remodal-comments-faq-sort-option">
            <div class="mobile-ui-radio-wrapper ">
                <label class="mobile-filter-label " for="comments-sort1">
                    {{$txt2}}
                </label>
                <label class="mobile-ui-radio">
                    <input type="radio" value="buyers" name="comments_sort" class="" id="comments-sort1"  data-title={{$txt2}}>
                    <span class="mobile-ui-radio-check">

                                </span>
                </label>
            </div>
        </div>
        <div class="mobile-remodal-comments-sort-option">
            <div class="mobile-ui-radio-wrapper ">
                <label class="mobile-filter-label " for="comments-sort1">
                    {{$txt3}}
                </label>
                <label class="mobile-ui-radio">
                    <input type="radio" value="buyers" name="comments_sort" class="" id="comments-sort1"  data-title="{{$txt3}}">
                    <span class="mobile-ui-radio-check">

                                </span>
                </label>
            </div>
        </div>
    </div>
</div>
