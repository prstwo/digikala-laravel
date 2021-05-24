<section class="product-gallery pl-4 ml-4 flex flex-col top-28 static sm:sticky">
    <div class="product-gallery-item">
        <ul class="product-gallery-option list-none flex flex-col "></ul>
        <div></div>
    </div>
    <div>
        <div class="product-gallery-main-pic py-4  magnifier-thumb-wrapper js-product-gallery-main-pic">
            <img id="thumb" src={{asset("images/product-main-pic.jpg")}} alt="product-pic"
                 data-large-img-url={{asset("images/product-main-pic.jpg")}}
                     data-large-img-wrapper="preview" class="" dir="ltr">
            <div dir="ltr" id="thumb-lens" class="magnifier-lens hidden" style="width: 67px; height: 52px; background: url(&quot;images/product-main-pic.jpg;)
                                 -2px -1px no-repeat scroll; left: 1px; top: 0px;"></div>
        </div>
        <ul class="flex product-gallery-pictures">
            @foreach($productGalleryPictures as $productgallerypicture)
                @if($loop->last)
                    <li class=" ">
                        <div class="thumb-wrapper">
                            <img src={{asset($productgallerypicture['img'])}}  alt="sth">
                            <div class="gallery-images-count">
                                                 <span class="gallery-count-circle js-gallery-count-circle">
                                                     <div class="text-2xl">
                                                         ...
                                                     </div>
                                                 </span>
                            </div>
                        </div>
                    </li>
                @endif
                <li class=" ">
                    <div class="thumb-wrapper"><img src={{asset($productgallerypicture['img'] )}}  data-src={{asset($productgallerypicture['data']) }} alt=""></div>
                </li>
            @endforeach

        </ul>
    </div>
</section>
