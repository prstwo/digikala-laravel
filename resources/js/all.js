
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 4,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var swiper2 = new Swiper('.swiper-container2', {
    slidesPerView: 5,
    spaceBetween: 20,
    slidesPerGroup: 5,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var swiper3 = new Swiper('.swiper-container3', {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 5,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

if(window.innerWidth < 680 || document.body.clientWidth <680){
    document.querySelector('.swiper-container').querySelectorAll('.swiper-slide').forEach((sw)=>{
        sw.style.width='100%';
    });
    document.querySelector('.swiper-container2').querySelectorAll('.swiper-slide').forEach((sw2)=>{
        sw2.style.width='100%';
    })
}
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
/*document.querySelectorAll('.submenu').forEach((sm)=>{
    if(sm.classList.contains('show')){
       // document.querySelector('.m-overlay').classList.add('active');
        //console.log(getComputedStyle(sm).display)
        console.log(window.getComputedStyle(sm).getPropertyValue('display'))
    }
})*/
let mobileMenuCon= document.querySelector('.mobile-menu-container');
function toggleSub(link){
    link.target.querySelector('ul').classList.toggle('hide');
}
document.querySelector('.js-offers-mobile-toggle').addEventListener('click',(e)=>{
    toggleSub(e)
})
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
document.querySelector('.js-sandwich-mobile-menu').addEventListener('click',()=>{
    mobileMenu()
})
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

document.querySelector('.js-varzesh').addEventListener('mouseover',()=>{
    varzesh()
});
document.querySelector('.js-kalaye-digital').addEventListener('mouseover',()=>{
    kalayeDigital()
});
document.querySelector('.js-sanati').addEventListener('mouseover',()=>{
    sanati()
});
document.querySelector('.js-mod').addEventListener('mouseover',()=>{
    mod()
});
document.querySelector('.js-asbabbazi').addEventListener('mouseover',()=>{
    asbabBazi()
});
document.querySelector('.js-zibayi').addEventListener('mouseover',()=>{
    zibayi()
});
document.querySelector('.js-khane').addEventListener('mouseover',()=>{
    khane()
});
document.querySelector('.js-ketab').addEventListener('mouseover',()=>{
    ketab()
});

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

/*document.querySelector('.search-input').addEventListener('focus', (search)=>{
    //
    console.log('hello')
});*/
function bgWhite(search){
    search.parentElement.classList.add('is-active')
};
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
document.querySelector('.gallery-count-circle').addEventListener('click',()=>{
    defaultModalToggle()
})
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
    document.querySelector('.remodal-img-container').src=miniImg.target.getAttribute('data-src');
    //console.log(miniImg)
    miniImg.target.classList.add('remodal-gallery-thumb-selected');
}
function closeModal(){
    document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
    document.querySelector('.m-overlay').classList.remove('active');
}
document.querySelector('.remodal-top-bar-close-btn-container button').addEventListener('click',()=>{closeModal()})
document.querySelectorAll('.js-remodal-gallery-thumb').forEach((remodalThumb)=>{
    remodalThumb.addEventListener('click', (e)=>{displayRemodal(e)})
})

document.querySelector('.continue-btn-params').addEventListener('click',(btnParams)=>{
    btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.toggle('is-open');
    if( btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnParams.target.innerText='فقط نمایش مشخصات کلی کالا';
        btnParams.target.classList.add('change');
    }
    if(!btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnParams.target.innerText='نمایش همه مشخصات کالا';
        btnParams.target.classList.remove('change');
    }
})
document.querySelector('.continue-btn-summary').addEventListener('click',(btnSummary)=>{
    productSummarySec.classList.toggle('is-open');
    if( productSummarySec.classList.contains('is-open')){
        btnSummary.target.classList.add('change');
        btnSummary.target.innerText='نمایش کمتر';
    }
    if(!productSummarySec.classList.contains('is-open')){
        btnSummary.target.innerText='ادامه مطلب';
        btnSummary.target.classList.remove('change');
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
function showReplies(replyShow){
    replyShow.target.parentElement.parentElement.parentElement.querySelectorAll('.c-question-item-reply:not(:first-of-type)').forEach((replyItem)=>{
        replyItem.classList.toggle('show');
        if(replyItem.classList.contains('show')){
            replyShow.target.parentElement.classList.add('change');
            replyShow.target.innerText="مشاهده پاسخ های کمتر"
        }
        if(!replyItem.classList.contains('show')){
            replyShow.target.parentElement.classList.remove('change');
            replyShow.target.innerText="مشاهده پاسخ های دیگر"
        }
    })
}
document.querySelectorAll('.js-more-replies a').forEach((moreRepllies)=>{
    moreRepllies.addEventListener('click',(e)=>{showReplies(e)})
})
