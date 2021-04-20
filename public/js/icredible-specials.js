/*
this file is used for sliders functionality (4 slides)
*/
document.querySelector('.arrow-right-2').addEventListener('click', function(){
    moveSlides(-4);
});
document.querySelector('.arrow-left-2').addEventListener('click', function(){
    moveSlides(4);
});

let productNumber=4;
function showSlides(n){
    let i;
    let products = document.querySelectorAll(".product-item-container-3");
    if (n > products.length) {productNumber = 4}    
    if (n < 1) {productNumber = products.length}
    for (i = 0; i < products.length; i++) {
        products[i].style.display = "none"; 
    }
    products[productNumber-1].style.display = "block";  
    products[productNumber-2].style.display = "block";  
    products[productNumber-3].style.display = "block";  
    products[productNumber-4].style.display = "block";  
}
function moveSlides(n){
    showSlides(productNumber+=n);
}

showSlides(productNumber);