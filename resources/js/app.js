
//nav menu js
let navOverlay= document.querySelector('.nav-overlay');

document.documentElement.addEventListener('scroll',()=>{
    toggleNav()
})

document.querySelectorAll('.js-nav-link').forEach((navLink)=>{navLink.addEventListener('mouseover',()=>{
    navOverlay.classList.add('show')

})
});
document.querySelectorAll('.js-nav-link').forEach((navLink)=>{navLink.addEventListener('mouseout',()=>{
    navOverlay.classList.remove('show')

})
})


function toggleSub(link){
    link.querySelector('ul').classList.toggle('hide');
}

function mobileMenu(){
    let mobileMenuCon= document.querySelector('.mobile-menu-container');

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

document.querySelector('.kalayeDigital').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-kalaye-digital-menu').style.display=''
});
document.querySelector('.sanati').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-abzar-sanati-menu').style.display=''
});

document.querySelector('.mod').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-mod-menu').style.display=''
});

document.querySelector('.asbabBazi').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-asbab-bazi-menu').style.display=''
});
document.querySelector('.zibayie').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-salamet-menu').style.display=''
});
document.querySelector('.khane').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-khane-menu').style.display=''
});
document.querySelector('.ketab').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-ketab-menu').style.display=''
});
document.querySelector('.varzesh').addEventListener('mouseover',()=>{
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-varzesh-menu').style.display=''
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

function addBgWhite(search){
    search.target.parentElement.classList.add('is-active')
};
function rmBgWhite(search){
    search.target.parentElement.classList.remove('is-active')
}
document.querySelector('.js-search-input').addEventListener('focus',(e)=>{
    addBgWhite(e)
});
document.querySelector('.js-search-input').addEventListener('blur',(e)=>{
    rmBgWhite(e)
})

//common js
function toggleNav(){
    if (window.scrollY < 300 || window.scrollY < 300) {
        document.querySelector(".desktop-nav").classList.remove('hide')

    }
    else {
        document.querySelector(".desktop-nav").classList.add('hide')
    }
}
document.addEventListener('scroll',()=>{
    toggleNav()
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
/*single product*/
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
    replyShow.parentElement.parentElement.parentElement.querySelectorAll('.c-question-item-reply:not(:first-of-type)').forEach((replyItem)=>{
        replyItem.classList.toggle('show');
        if(replyItem.classList.contains('show')){
            replyShow.parentElement.classList.add('change');
            replyShow.innerText="مشاهده پاسخ های کمتر"
        }
        if(!replyItem.classList.contains('show')){
            replyShow.parentElement.classList.remove('change');
            replyShow.innerText="مشاهده پاسخ های دیگر"
        }
    })
}





