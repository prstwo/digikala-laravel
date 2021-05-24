@props(['modalGalleryPictures'])
<div class="remodal-gallery remodal-is-closed" >
    <div class="remodal-top-bar flex flex-row justify-between items-center">
        <div class="remodal-top-bar-title">
            تصاویر رسمی
        </div>
        <div class="remodal-top-bar-close-btn-container ">
            <button class="fas fa-times js-remodal-close" ></button>
        </div>
    </div>
    <div class="remodal-images-gallery flex flex-row">

        <div class="remodal-gallery-main-image img-zoom-container relative">
            <img src="" class="remodal-img-container" id="myimage" style="width: 300px; height: 300px">
            <div id="myresult" class="img-zoom-result"></div>
        </div>

        <div class="remodal-gallery-info">
            <div class="remodal-gallery-thumbs">
                @foreach($modalGalleryPictures as $modalGalleryPicture)
                    <div class="remodal-gallery-thumb js-remodal-gallery-thumb" >
                        <img src={{asset($modalGalleryPicture['img'])}} data-src={{asset( $modalGalleryPicture['data'] )}}
                            alt="گوشی"
                             data-type=""
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
