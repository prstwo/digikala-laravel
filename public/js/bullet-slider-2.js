/*
this file is used for bullet or dots sliders functionality (3 slides- 3 bullets)
*/
document.querySelector('.arrow-right').addEventListener('click', function(){
    moveSlides0(-1);
});
document.querySelector('.arrow-left').addEventListener('click', function(){
    moveSlides0(1);
});
document.querySelectorAll('.dot')[0].addEventListener('click', function(){
    currentSlide0(1);
});
document.querySelectorAll('.dot')[1].addEventListener('click', function(){
    currentSlide0(2);
});
document.querySelectorAll('.dot')[2].addEventListener('click', function(){
    currentSlide0(3);
});
let slideNum=1;

function showSlides0(n){
    let i;
    let slides = document.querySelectorAll(".slide-pic");
    let bullets = document.querySelectorAll(".dot");
    if (n > slides.length) {slideNum = 1}
    if (n < 1) {slideNum = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        bullets[i].style.color='';
    }
    slides[slideNum-1].style.display = "block";
    bullets[slideNum-1].style.color='#00bfd6';

}
function moveSlides0(n){
    showSlides0(slideNum+=n);
}
function currentSlide0(n){
    showSlides0(slideNum = n);
}
showSlides0(slideNum);
