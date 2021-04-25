/*
this file is used for sliders functionality (5 slides)
*/
if(window.innerWidth > 680){
    document.querySelector('.arrow-right-5').addEventListener('click', function(){
        moveBrands(-5);
    });
    document.querySelector('.arrow-left-5').addEventListener('click', function(){
        moveBrands(5);
    });

    let brandNum=5;
    function showBrands(n){
        let i;
        let brands = document.querySelectorAll(".swiper-brands-image-container");
        if (n > brands.length) {brandNum = 5}
        if (n < 1) {brandNum = brands.length}
        for (i = 0; i < brands.length; i++) {
            brands[i].style.display = "none";
        }
        brands[brandNum-1].style.display = "block";
        brands[brandNum-2].style.display = "block";
        brands[brandNum-3].style.display = "block";
        brands[brandNum-4].style.display = "block";
        brands[brandNum-5].style.display = "block";
    }
    function moveBrands(n){
        showBrands(brandNum+=n);
    }
    showBrands(brandNum);
}

