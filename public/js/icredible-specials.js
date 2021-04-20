/*
this file is used for sliders functionality (4 slides)
*/
document.querySelector('.arrow-right-2').addEventListener('click', function(){
    moveSlides2(-4);
});
document.querySelector('.arrow-left-2').addEventListener('click', function(){
    moveSlides2(4);
});

let productCount=4;
function showSlides2(n){
    let i;
    let products = document.querySelectorAll(".product-item-container-3");
    if (n > products.length) {productCount = 4}
    if (n < 1) {productCount = products.length}
    for (i = 0; i < products.length; i++) {
        products[i].style.display = "none";
    }
    products[productCount-1].style.display = "block";
    products[productCount-2].style.display = "block";
    products[productCount-3].style.display = "block";
    products[productCount-4].style.display = "block";
}
function moveSlides2(n){
    showSlides2(productCount+=n);
}

showSlides2(productCount);
