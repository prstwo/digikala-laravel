
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
    link.parentElement.querySelector('ul').classList.toggle('hide');
}
document.querySelectorAll('.js-mobile-toggle a').forEach((d)=>{
    d.addEventListener('click',(mmt)=>{
        toggleSub(mmt.target)
    })
})
//mmt is abb of mobile menu toggler
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
document.querySelector('.js-sandwich-btn').addEventListener('click',()=>{
    mobileMenu()
})
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
document.querySelector('.js-gallery-count-circle').addEventListener('click',()=>{
    defaultModalToggle()
})
document.querySelectorAll('.product-gallery-pictures img').forEach((mp)=>{
    mp.addEventListener("click", (send)=>{
        modalToggle(send)
    })
})


function displayRemodal(miniImg){
    document.querySelector('.remodal-img-container').src=miniImg.getAttribute('data-src');
    //console.log(miniImg)
    miniImg.classList.add('remodal-gallery-thumb-selected');
}
function closeModal(){
    document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
    document.querySelector('.m-overlay').classList.remove('active');
}
document.querySelectorAll('.js-remodal-gallery-thumb img').forEach((miniImg)=>{
    miniImg.addEventListener(
        'click',(e)=>{
            displayRemodal(e.target)
        }
    )
});
document.querySelector('.js-remodal-close').addEventListener('click',()=>{
    closeModal()
});
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
document.querySelectorAll('.js-more-replies a').forEach(moreReplies=>{
    moreReplies.addEventListener('click',(e)=>{
            showReplies(e.target)
        })
})

/*responsive product page */
function removeColorBorder(){
    document.querySelectorAll('.js-color-picker').forEach((f)=>{
        f.classList.remove('selected');
    })
}
function colorBorder(colorElem){
    var productColor=document.querySelector('.js-filter-color-selector').innerText;
    if (colorElem.querySelector('.js-color-picker-text').innerText==productColor){
        colorElem.classList.add('selected');
    }
    else{
        colorElem.classList.remove('selected');
    }
}
function tabOpen(dropup){
    let dropUpCon=dropup.parentElement.querySelector('.c-dropup-container');
    dropUpCon.style.bottom='0';
    document.querySelector('.dropup-overlay').classList.add('active');
    document.querySelectorAll('.js-color-picker').forEach((e)=>{
        colorBorder(e)
    })

}
document.querySelector('.c-product-tab').addEventListener('click',(t)=>{
    tabOpen(t.target)
});

function removeDropUP(duo){
    document.querySelector('.c-dropup-container').style.bottom='-100%';
    duo.classList.remove('active')
}
document.querySelector('.dropup-overlay').addEventListener('click',(e)=>{
    removeDropUP(e.target)
})
function changeColorText(colorPick){
    var colorText=colorPick.querySelector('.js-color-picker-text').innerText;
    var colorValue=colorPick.querySelector('.js-color-picker-value').style.backgroundColor;
    document.querySelector('.js-filters-color-header-value').style.backgroundColor=colorValue;
    document.querySelector('.js-filter-color-modal-text').innerText=colorText;
    document.querySelector('.js-product-tab-color-value').style.backgroundColor=colorValue;
    document.querySelector('.js-filter-color-selector').innerText=colorText;
}
document.querySelectorAll('.js-color-picker').forEach((c)=>{
    c.addEventListener('click', (cp)=>{
        changeColorText(cp.target);
        removeColorBorder();
        colorBorder(cp.target)
    })
})
function remodalSellershow(){
    document.querySelector('.js-remodal-seller-info').style.display='block'
}
function remodalSellerHide(){
    document.querySelector('.js-remodal-seller-info').style.display='none'
}
document.querySelector('.js-c-product-seller-extra').addEventListener('click',()=>{
    remodalSellershow();
})

document.querySelector('.js-seller-remodal-back').addEventListener('click',()=>{
    remodalSellerHide();
})
function remodalShipmentShow(){
    document.querySelector('.js-remodal-add-to-cart').style.display='block'
}
document.querySelector('.js-shipment-info-trigger').addEventListener('click',()=>{
    remodalShipmentShow()
});
function remodalShipmentHide(){
    document.querySelector('.js-remodal-add-to-cart').style.display='none'
}
document.querySelector('.js-shipment-remodal-back').addEventListener('click',()=>{
    remodalShipmentHide()
})
