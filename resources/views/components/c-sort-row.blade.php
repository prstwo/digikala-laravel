<div class="c-sort-row">
    <i class="c-icon-font" data-icon="icon-action-sort"></i>
    <span class="c-sort-row-text">
                                                مرتب‌سازی دیدگاه‌ها بر اساس:
                                            </span>
    <ul class="c-sort-row-items">
        {{-- @foreach($sortComments as $csorter)
            <li class="c-sort-row-item">
                <a href="#" class={!! $csorter['class'] !!} data-sort-mode={!! $csorter['data-mode'] !!}>
                    {{$csorter['sort-text']}}
                </a>
            </li>
        @endforeach --}}

        <li class="c-sort-row-item">
            <a href="#" class="c-sort-row-label is-active" data-sort-mode="newest_comment">
                جدیدترین دیدگاه&zwnj;ها
            </a>
        </li>
    </ul>
</div>
