<div class="page-section promotion-cats-section">
    <div class="page-section-standard promotion-categories">
        @include('sections.home-page.categories-head', ['numbers' => '۲،۰۰۰،۰۰۰'])

        <div class="promotion-cats">
            <!--promotion cat section-->
            @foreach($promotionSections as $promotionsection)
                <a href="#category" class="promotion-cat-sec">
                    <div class="promotion-cat-icon">
                        <i class={!! $promotionsection['icon'] !!}></i>
                    </div>
                    <div class="promotion-cat-name">
                        {!! $promotionsection['cat-name'] !!}
                    </div>
                    <div class="promotion-cat-quantity">
                        {!! $promotionsection['cat-quantity'] !!}
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</div>
