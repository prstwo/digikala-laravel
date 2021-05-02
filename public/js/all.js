document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let mobileMenuCon= document.querySelector('.mobile-menu-container');
function toggleSub(link){
    link.querySelector('ul').classList.toggle('hide');

}

function mobileMenu(){
    mobileMenuCon.classList.toggle('hide');
    document.querySelector('.m-overlay').classList.toggle('active');
    if(!mobileMenuCon.classList.contains('hide')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            mobileMenuCon.classList.add('hide');
            overlay.target.classList.remove('active');
        })
    }
}
let submenuItems=document.querySelectorAll('.js-nav-submenu-items');
function kalayeDigital(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-kalaye-digital-menu').style.display=''
}
function sanati(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-abzar-sanati-menu').style.display=''
}
function mod(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-mod-menu').style.display=''
}
function asbabBazi(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-asbab-bazi-menu').style.display=''
}
function zibayie(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-salamet-menu').style.display=''
}
function khane(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-khane-menu').style.display=''
}
function ketab(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-ketab-menu').style.display=''
}
function varzesh(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-varzesh-menu').style.display=''
}

let due= new Date(2021, 7, 24, 15,30,0);

var second =60;
var minute = 60;
var hour=24;
var day = 60;
let dayDiv= document.querySelector('.counter-day');
let hourDiv= document.querySelector('.counter-hour');
let minuteDiv= document.querySelector('.counter-minute');
let secondDiv= document.querySelector('.counter-second');
setInterval(function(){
    //console.log(`${day}:${hour}:${minute}:${second-=1}-------`);
    secondDiv.innerText=second--;
    hourDiv.innerText=hour;
    dayDiv.innerText=day;
    minuteDiv.innerText=minute;

    if(second<=0){
        second=60;
        minute-=1;
        minuteDiv.innerText=minute;

        if(minute<=0){
            minute=60;
            hour-=1;
            hourDiv.innerText=hour;


            if(hour<=0){
                hour=24;

                day-=1;
                dayDiv.innerText=day;
            }
        }
    }
}, 1000);
/*
this file is used for sliders functionality (4 slides)
*/

if(window.innerWidth > 680){
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
}

if(window.innerWidth > 680) {
    document.querySelector('.arrow-right-3').addEventListener('click', function () {
        moveSlides(-5);
    });
    document.querySelector('.arrow-left-3').addEventListener('click', function () {
        moveSlides(5);
    });

    let productNum = 5;

    function showSlides(n) {
        let i;
        let products = document.querySelectorAll(".product-item-container-4");
        if (n > products.length) {
            productNum = 5
        }
        if (n < 1) {
            productNum = products.length
        }
        for (i = 0; i < products.length; i++) {
            products[i].style.display = "none";
        }
        products[productNum - 1].style.display = "block";
        products[productNum - 2].style.display = "block";
        products[productNum - 3].style.display = "block";
        products[productNum - 4].style.display = "block";
        products[productNum - 5].style.display = "block";
    }

    function moveSlides(n) {
        showSlides(productNum += n);
    }

    showSlides(productNum);
}


let productSummarySec=document.querySelector('.js-mask-text-product-summary');
let paramsList = document.querySelector('.c-products-params-more');
function  defaultModalToggle(){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.querySelector('.remodal-img-container').src ='images/product-main-pic.jpg';
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
            overlay.target.classList.remove('active');
        })
    }
}
function  modalToggle(send){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.querySelector('.remodal-img-container').src =send.target.getAttribute('data-src');
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
            overlay.target.classList.remove('active');
        })
    }
}
document.querySelectorAll('.product-gallery-pictures img').forEach((mp)=>{
    mp.addEventListener("click", (send)=>{
        modalToggle(send)
    })
})


function displayRemodal(miniImg){
    document.querySelector('.remodal-img-container').src=miniImg.querySelector('img').getAttribute('data-src');
    //console.log(miniImg)
    miniImg.classList.add('remodal-gallery-thumb-selected');
}
function closeModal(){
    document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
    document.querySelector('.m-overlay').classList.remove('active');
}

document.querySelector('.continue-btn-params').addEventListener('click',(btnParams)=>{
    btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.toggle('is-open');
    if( btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnParams.target.innerText='فقط نمایش مشخصات کلی کالا';
    }
    if(!btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnParams.target.innerText='نمایش همه مشخصات کالا';
    }
})
document.querySelector('.continue-btn-summary').addEventListener('click',(btnSummary)=>{
    productSummarySec.classList.toggle('is-open');
    if( productSummarySec.classList.contains('is-open')){
        btnSummary.target.innerText='نمایش کمتر';
    }
    if(!productSummarySec.classList.contains('is-open')){
        btnSummary.target.innerText='ادامه مطلب';
    }
})
document.querySelector('.continue-btn-config').addEventListener('click',(btnConfig)=>{
    document.querySelector('.product-config-info').querySelectorAll('.c-products-params-more').forEach((li)=>{
        li.classList.toggle('show');
        if( !li.classList.contains('show')){
            btnConfig.target.innerText='مشاهده بیشتر +';
        }
        if(li.classList.contains('show')){
            btnConfig.target.innerText='- بستن';
        }

    })
})
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




