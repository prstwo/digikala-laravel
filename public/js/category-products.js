/*
this file is used for sliders functionality (5 slides)
*/
document.querySelector('.arrow-right').addEventListener('click', function(){
    moveSlides(-5);
});
document.querySelector('.arrow-left').addEventListener('click', function(){
    moveSlides(5);
});

let productNum=5;
function showSlides(n){
    let i;
    let products = document.querySelectorAll(".product-item-container-4");
    if (n > products.length) {productNum = 5}    
    if (n < 1) {productNum = products.length}
    for (i = 0; i < products.length; i++) {
        products[i].style.display = "none"; 
    }
    products[productNum-1].style.display = "block";  
    products[productNum-2].style.display = "block";  
    products[productNum-3].style.display = "block";  
    products[productNum-4].style.display = "block";  
    products[productNum-5].style.display = "block";  
}
function moveSlides(n){
    showSlides(productNum+=n);
}

showSlides(productNum);