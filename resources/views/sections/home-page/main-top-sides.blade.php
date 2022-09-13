<div class="main-top-sides hidden md:flex flex-col ">
    @foreach($mainTopSides as $mainTopSide)
    <div class="side">
        <a href="/side-product-page">
            <img src={{asset($mainTopSide['src'])}} alt="product-gif">
        </a>
    </div>
        @endforeach()
</div>
