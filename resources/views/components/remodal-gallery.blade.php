@php
    $modalGalleryPictures = [
           ['img'=>'images/product-pic-example1.jpg','data'=>'images/product-data-src0.jpg'],
           ['img'=>'images/product-pic-example2.jpg','data'=>'images/product-data-src1.jpg'],
           ['img'=>'images/product-pic-example3.jpg','data'=>'images/product-data-src2.jpg'],
           ['img'=>'images/product-pic-example4.jpg','data'=>'images/product-data-src3.jpg'],
           ['img'=>'images/product-pic-example5.jpg','data'=>'images/product-data-src4.jpg'],
           ['img'=>'images/product-pic-example6.jpg','data'=>'images/product-data-src5.jpg']
       ];
@endphp
<div class="remodal-gallery remodal-is-closed" >
    <div class="remodal-top-bar flex flex-row justify-between items-center">
        <div class="remodal-top-bar-title">
            تصاویر رسمی
        </div>
        <div class="remodal-top-bar-close-btn-container">
            <button class="fas fa-times " onclick="closeModal()"></button>
        </div>
    </div>
    <div class="remodal-images-gallery flex flex-row">
        <div class="remodal-gallery-main-image">
            <img src="" class="remodal-img-container">
        </div>
        <div class="remodal-gallery-info">
            <div class="remodal-gallery-thumbs">
                @foreach($modalGalleryPictures as $modalGalleryPicture)
                    <div class="remodal-gallery-thumb js-remodal-gallery-thumb" onclick="displayRemodal(this)">
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
