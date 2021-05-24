<div class="product-breadcrumb flex flex-col items-start justify-between content-center md:items-center sm:flex-row content-center">
    <nav class="breadcrumb">
        <ul class="flex flex-row ">
            @foreach($breadcrumb as $breadItem)
                <li>
                    <a href={{$breadItem['href']}}>{{$breadItem['cat']}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="product-link-ex">
        <a href="#sell">
            کالای خود را در دیجی‌کالا
            بفروشید
            <i class="fa fa-home ml-2 text-sl"></i>
        </a>
    </div>
</div>
