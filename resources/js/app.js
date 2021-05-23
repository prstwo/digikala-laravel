import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
//swiper customize
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
    grabCursor:true
});
var swiper2 = new Swiper('.swiper-container2', {
    slidesPerView: 5,
    spaceBetween: 10,
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
    grabCursor:true
});
var swiperM = new Swiper('.swiper-container-mobile', {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination-product-mobile',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var swiperM2 = new Swiper('.swiper-container-mobile-2', {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
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
var swiperM3 = new Swiper('.swiper-container-mobile3', {
    slidesPerView: 2,
    spaceBetween: 8,
    slidesPerGroup: 2,
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
var mySwiper = new Swiper ('.swiper-instant-offers',
    {
        speed:1000,
        direction: 'horizontal',
        zoom: true,
        keyboard:
            {
                enabled: true,
                onlyInViewport: false,
            },
        allowTouchMove:false
        ,
        mousewheel:
            {
                invert: true,
            },
        autoplay:
            {
                delay: 5500,
            },
        loop: true,
    });

//nav menu js
let navOverlay= document.querySelector('.nav-overlay');
function toggleNav(){
   if (window.scrollY > 300 ) {
        document.querySelector(".desktop-nav .nav-container").classList.add('hide')

    }
    else {
        document.querySelector(".desktop-nav .nav-container").classList.remove('hide')
    }
}
window.addEventListener('scroll',()=>{
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
    link.classList.toggle('change');
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
    document.body.classList.toggle('no-overflow');
    if(!mobileMenuCon.classList.contains('hide')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            mobileMenuCon.classList.add('hide');
            overlay.target.classList.remove('active');
            document.body.classList.remove('no-overflow');
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


/* countdown*/
var countDownDate = new Date("Jan 5, 2022 16:37:52").getTime();

setInterval(function() {
    var now = new Date().getTime();
    var timeleft = countDownDate - now;
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    document.querySelector('.submenu-lists-counter .counter-day').innerText = days
    document.querySelector('.submenu-lists-counter .counter-hour').innerText = hours
    document.querySelector('.submenu-lists-counter .counter-minute').innerText = minutes
    document.querySelector('.submenu-lists-counter .counter-second').innerText = seconds
}, 1000)

/*countdown پیشنهاد شگفت انگیز */


/**/

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
function ifRemodalOpend(){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
            overlay.target.classList.remove('active');
            document.body.classList.remove('no-overflow');
        })
}
function  defaultModalToggle(){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.body.classList.toggle('no-overflow');
    document.querySelector('.remodal-img-container').src ='images/product-main-pic.jpg';
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        ifRemodalOpend();
    }
}
function  modalToggle(send){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.body.classList.toggle('no-overflow');
    document.querySelector('.remodal-img-container').src =send.target.getAttribute('data-src');
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        ifRemodalOpend();
    }
}
document.querySelector('#thumb-lens').addEventListener('mouseover',()=>{
    document.getElementById('preview').classList.add('reveal')
})
document.querySelector('#thumb-lens').addEventListener('mouseleave',()=>{
    document.getElementById('preview').classList.remove('reveal')
})
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
    document.querySelectorAll('.remodal-gallery-thumb-selected').forEach(img=>{
        img.classList.remove('remodal-gallery-thumb-selected');
    })
    miniImg.classList.add('remodal-gallery-thumb-selected');
}
function closeModal(){
    document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
    document.querySelector('.m-overlay').classList.remove('active');
    document.body.classList.toggle('no-overflow');
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
function shipmentEmebedShow(){
    document.querySelector('.product-summary-box-items').classList.add('hide');
    document.querySelector('.js-shipment-info-changable').classList.remove('hide');
}
document.querySelector('.js-product-summary-ship').addEventListener('click',()=>{
    shipmentEmebedShow();
})
function shipmentEmebedHide(){
    document.querySelector('.product-summary-box-items').classList.remove('hide');
    document.querySelector('.js-shipment-info-changable').classList.add('hide');
}
document.querySelector('.js-embeded-shipment-back').addEventListener('click',()=>{
    shipmentEmebedHide();
})
function sellerEmebedShow(){
    document.querySelector('.product-summary-box-items').classList.add('hide');
    document.querySelector('.js-seller-info-changable').classList.remove('hide');
}
document.querySelector('.js-seller-embeded-info').addEventListener('click',()=>{
    sellerEmebedShow();
})
function sellerEmebedHide(){
    document.querySelector('.product-summary-box-items').classList.remove('hide');
    document.querySelector('.js-seller-info-changable').classList.add('hide');
}
document.querySelector('.js-embeded-seller-back').addEventListener('click',()=>{
    sellerEmebedHide();
})

var observerReviews = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting === true) {
        document.querySelectorAll('.o-box-tab').forEach((e)=>{
            e.classList.remove('is-active')
        })
        document.querySelector('a[href="#reviews"]').parentElement.classList.add('is-active')
    }
    else {
        document.querySelector('a[href="#reviews"]').parentElement.classList.remove('is-active')
    }
}, { threshold: [0.05] });
observerReviews.observe(document.querySelector("#reviews"));

var observerDetails = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting === true) {
        document.querySelectorAll('.o-box-tab').forEach((e)=>{
            e.classList.remove('is-active')
        })
        document.querySelector('a[href="#details"]').parentElement.classList.add('is-active')
    }
    else {
        document.querySelector('a[href="#details"]').parentElement.classList.remove('is-active')
    }
}, { threshold: [0.05] });
observerDetails.observe(document.querySelector("#details"));

var observerComments = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting === true) {
        document.querySelectorAll('.o-box-tab').forEach((e)=>{
            e.classList.remove('is-active')
        })
        document.querySelector('a[href="#comments"]').parentElement.classList.add('is-active')
    }
    else {
        document.querySelector('a[href="#comments"]').parentElement.classList.remove('is-active')
    }
}, { threshold: [0] });
observerComments.observe(document.querySelector("#comments"));

var observerFaq = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting === true) {
        document.querySelectorAll('.o-box-tab').forEach((e)=>{
            e.classList.remove('is-active')
        })
        document.querySelector('a[href="#faq"]').parentElement.classList.add('is-active')
    }
    else {
        document.querySelector('a[href="#faq"]').parentElement.classList.remove('is-active')
    }
}, { threshold: [0] });

observerFaq.observe(document.querySelector("#faq"));
/*product page*/
document.querySelectorAll('.circle-variant-color input').forEach((inputElem)=>{
    inputElem.addEventListener('click',(inputElem)=>{
        document.querySelector('.js-color-title').innerText=inputElem.target.getAttribute('data-title')
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
    document.querySelector('.js-remodal-seller-info').style.display='block';
    document.querySelector('.js-remodal-seller-info').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
function remodalSellerHide(){
    document.querySelector('.js-remodal-seller-info').style.display='none';
    document.querySelector('.js-remodal-seller-info').style.overflowY=''
    document.body.classList.remove('no-overflow');
}
document.querySelector('.js-product-seller-trigger').addEventListener('click',()=>{
    remodalSellershow();
})
document.querySelector('.js-seller-remodal-back').addEventListener('click',()=>{
    remodalSellerHide();
})
function remodalShipmentShow(){
    document.querySelector('.js-remodal-add-to-cart').style.display='block';
    document.querySelector('.js-remodal-add-to-cart').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
document.querySelector('.js-shipment-info-trigger').addEventListener('click',()=>{
    remodalShipmentShow()
});
function remodalShipmentHide(){
    document.querySelector('.js-remodal-add-to-cart').style.display='none';
    document.querySelector('.js-remodal-add-to-cart').style.overflowY=''
    document.body.classList.remove('no-overflow');
}
document.querySelector('.js-shipment-remodal-back').addEventListener('click',()=>{
    remodalShipmentHide()
})
function remodalExpertShow(){
    document.querySelector('.js-remodal-expert-review').style.display='block';
    document.querySelector('.js-remodal-expert-review').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
function remodalExpertHide(){
    document.querySelector('.js-remodal-expert-review').style.display='none';
    document.querySelector('.js-remodal-expert-review').style.overflowY=''
    document.body.classList.remove('no-overflow');

}
document.querySelector('.js-expert-review-show-more').addEventListener(
    'click', ()=>{
        remodalExpertShow()
    }
)
document.querySelector('.js-remodal-review-back').addEventListener(
    'click', ()=>{
        remodalExpertHide()
    }
)
function remodalSpecShow(){
    document.querySelector('.js-remodal-tech-specs').style.display='block';
    document.querySelector('.js-remodal-tech-specs').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
function remodalSpecHide(){
    document.querySelector('.js-remodal-tech-specs').style.display='none';
    document.querySelector('.js-remodal-tech-specs').style.overflowY=''
    document.body.classList.remove('no-overflow');
}
document.querySelector('.js-show-more-specs').addEventListener(
    'click', ()=>{
        remodalSpecShow()
    }
)
document.querySelector('.js-remodal-tech-back').addEventListener(
    'click', ()=>{
        remodalSpecHide()
    }
)
function remodalCommentsShow(){
    document.querySelector('.js-remodal-comments').style.display='block';
    document.querySelector('.js-remodal-comments').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
function remodalCommentsHide(){
    document.querySelector('.js-remodal-comments').style.display='none';
    document.querySelector('.js-remodal-comments').style.overflowY=''
    document.body.classList.remove('no-overflow');

}
document.querySelector('.js-mobile-comments-more').addEventListener('click',()=>{
    remodalCommentsShow()
})
document.querySelector('.js-remodal-comments-back').addEventListener('click',()=>{
    remodalCommentsHide()
})
function  remodalFaqShow(){
    document.querySelector('.js-remodal-faq').style.display='block';
    document.querySelector('.js-remodal-comments').style.overflowY='scroll'
    document.body.classList.add('no-overflow');
}
function  remodalFaqHide(){
    document.querySelector('.js-remodal-faq').style.display='none';
    document.querySelector('.js-remodal-comments').style.overflowY=''
    document.body.classList.remove('no-overflow');
}
document.querySelector('.js-mobile-faq-more').addEventListener('click',()=>{
    remodalFaqShow()
})

document.querySelector('.js-remodal-faq-back').addEventListener('click',()=>{
    remodalFaqHide()
})
/*zoom facility */
function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    /*insert lens:*/
    img.parentElement.insertBefore(lens, img);
    /*calculate the ratio between result DIV and lens:*/
    cx = result.offsetWidth / lens.offsetWidth;
    cy = result.offsetHeight / lens.offsetHeight;
    /*set background properties for the result DIV:*/
    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    /*execute a function when someone moves the cursor over the image, or the lens:*/
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    /*and also for touch screens:*/
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);
    function moveLens(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        /*calculate the position of the lens:*/
        x = pos.x - (lens.offsetWidth / 2);
        y = pos.y - (lens.offsetHeight / 2);
        /*prevent the lens from being positioned outside the image:*/
        if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
        if (x < 0) {x = 0;}
        if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
        if (y < 0) {y = 0;}
        /*set the position of the lens:*/
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        /*display what the lens "sees":*/
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }
    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
    }
}
document.getElementById('myimage').addEventListener('mouseover',()=>{
    imageZoom("myimage", "myresult");
})

/*magnifier*/
/**
 * Unifies event handling across browsers
 *
 * - Allows registering and unregistering of event handlers
 * - Injects event object and involved DOM element to listener
 *
 * @author Mark Rolich <mark.rolich@gmail.com>
 */
var Event = function () {
    "use strict";
    this.attach = function (evtName, element, listener, capture) {
        var evt         = '',
            useCapture  = (capture === undefined) ? true : capture,
            handler     = null;

        if (window.addEventListener === undefined) {
            evt = 'on' + evtName;
            handler = function (evt, listener) {
                element.attachEvent(evt, listener);
                return listener;
            };
        } else {
            evt = evtName;
            handler = function (evt, listener, useCapture) {
                element.addEventListener(evt, listener, useCapture);
                return listener;
            };
        }

        return handler.apply(element, [evt, function (ev) {
            var e   = ev || event,
                src = e.srcElement || e.target;

            listener(e, src);
        }, useCapture]);
    };

    this.detach = function (evtName, element, listener, capture) {
        var evt         = '',
            useCapture  = (capture === undefined) ? true : capture;

        if (window.removeEventListener === undefined) {
            evt = 'on' + evtName;
            element.detachEvent(evt, listener);
        } else {
            evt = evtName;
            element.removeEventListener(evt, listener, useCapture);
        }
    };

    this.stop = function (evt) {
        evt.cancelBubble = true;

        if (evt.stopPropagation) {
            evt.stopPropagation();
        }
    };

    this.prevent = function (evt) {
        if (evt.preventDefault) {
            evt.preventDefault();
        } else {
            evt.returnValue = false;
        }
    };
};
/**
 * Magnifier.js is a Javascript library enabling magnifying glass effect on an images.
 *
 * Features
 *
 * Zoom in / out functionality using mouse wheel
 * Setting options via Javascript or data attributes
 * Magnified image can be displayed in the lens itself or outside of it in a wrapper
 * Attachment to multiple images with single call
 * Attachment of user defined functions for thumbnail entering, moving and leaving and image zooming events
 * Display loading text while the large image is being loaded, and switch to lens once its loaded
 *
 * Magnifier.js uses Event.js as a cross-browser event handling wrapper, which is available at
 * Github and JSClasses.org:
 *
 * Github - https://github.com/mark-rolich/Event.js
 * JS Classes - http://www.jsclasses.org/package/212-JavaScript-Handle-events-in-a-browser-independent-manner.html
 *
 * Works in Chrome, Firefox, Safari, IE 7, 8, 9 & 10.
 *
 * @author Mark Rolich <mark.rolich@gmail.com>
 */
var Magnifier = function (evt, options) {
    "use strict";

    var gOptions = options || {},
        curThumb = null,
        curData = {
            x: 0,
            y: 0,
            w: 0,
            h: 0,
            lensW: 0,
            lensH: 0,
            lensBgX: 0,
            lensBgY: 0,
            largeW: 0,
            largeH: 0,
            largeL: 0,
            largeT: 0,
            zoom: 2,
            zoomMin: 1.1,
            zoomMax: 5,
            mode: 'outside',
            largeWrapperId: (gOptions.largeWrapper !== undefined)
                ? (gOptions.largeWrapper.id || null)
                : null,
            status: 0,
            zoomAttached: false,
            zoomable: (gOptions.zoomable !== undefined)
                ? gOptions.zoomable
                : false,
            onthumbenter: (gOptions.onthumbenter !== undefined)
                ? gOptions.onthumbenter
                : null,
            onthumbmove: (gOptions.onthumbmove !== undefined)
                ? gOptions.onthumbmove
                : null,
            onthumbleave: (gOptions.onthumbleave !== undefined)
                ? gOptions.onthumbleave
                : null,
            onzoom: (gOptions.onzoom !== undefined)
                ? gOptions.onzoom
                : null
        },
        pos = {
            t: 0,
            l: 0,
            x: 0,
            y: 0
        },
        gId = 0,
        status = 0,
        curIdx = '',
        curLens = null,
        curLarge = null,
        gZoom = (gOptions.zoom !== undefined)
            ? gOptions.zoom
            : curData.zoom,
        gZoomMin = (gOptions.zoomMin !== undefined)
            ? gOptions.zoomMin
            : curData.zoomMin,
        gZoomMax = (gOptions.zoomMax !== undefined)
            ? gOptions.zoomMax
            : curData.zoomMax,
        gMode = gOptions.mode || curData.mode,
        data = {},
        inBounds = false,
        isOverThumb = 0,
        getElementsByClass = function (className) {
            var list = [],
                elements = null,
                len = 0,
                pattern = '',
                i = 0,
                j = 0;

            if (document.getElementsByClassName) {
                list = document.getElementsByClassName(className);
            } else {
                elements = document.getElementsByTagName('*');
                len = elements.length;
                pattern = new RegExp("(^|\\s)" + className + "(\\s|$)");

                for (i, j; i < len; i += 1) {
                    if (pattern.test(elements[i].className)) {
                        list[j] = elements[i];
                        j += 1;
                    }
                }
            }

            return list;
        },
        $ = function (selector) {
            var idx = '',
                type = selector.charAt(0),
                result = null;

            if (type === '#' || type === '.') {
                idx = selector.substr(1, selector.length);
            }

            if (idx !== '') {
                switch (type) {
                    case '#':
                        result = document.getElementById(idx);
                        break;
                    case '.':
                        result = getElementsByClass(idx);
                        break;
                }
            }

            return result;
        },
        createLens = function (thumb, idx) {
            var lens = document.createElement('div');

            lens.id = idx + '-lens';
            lens.className = 'magnifier-loader';

            thumb.parentNode.appendChild(lens);
        },
        updateLensOnZoom = function () {
            curLens.style.left = pos.l + 'px';
            curLens.style.top = pos.t + 'px';
            curLens.style.width = curData.lensW + 'px';
            curLens.style.height = curData.lensH + 'px';
            curLens.style.backgroundPosition = '-' + curData.lensBgX + 'px -' +
                curData.lensBgY + 'px';

            curLarge.style.left = '-' + curData.largeL + 'px';
            curLarge.style.top = '-' + curData.largeT + 'px';
            curLarge.style.width = curData.largeW + 'px';
            curLarge.style.height = curData.largeH + 'px';
        },
        updateLensOnLoad = function (idx, thumb, large, largeWrapper) {
            var lens = $('#' + idx + '-lens'),
                textWrapper = null;

            if (data[idx].status === 1) {
                textWrapper = document.createElement('div');
                textWrapper.className = 'magnifier-loader-text';
                lens.className = 'magnifier-loader hidden';

                textWrapper.appendChild(document.createTextNode('Loading...'));
                lens.appendChild(textWrapper);
            } else if (data[idx].status === 2) {
                lens.className = 'magnifier-lens hidden';
                lens.removeChild(lens.childNodes[0]);
                lens.style.background = 'url(' + thumb.src + ') no-repeat 0 0 scroll';

                large.id = idx + '-large';
                large.style.width = data[idx].largeW + 'px';
                large.style.height = 'auto';
                large.className = 'magnifier-large hidden';

                if (data[idx].mode === 'inside') {
                    lens.appendChild(large);
                } else {
                    largeWrapper.appendChild(large);
                }
            }

            lens.style.width = data[idx].lensW + 'px';
            lens.style.height = data[idx].lensH + 'px';
        },
        getMousePos = function () {
            var xPos = pos.x - curData.x,
                yPos = pos.y - curData.y,
                t    = 0,
                l    = 0;

            inBounds = (
                xPos < 0 ||
                yPos < 0 ||
                xPos > curData.w ||
                yPos > curData.h
            )
                ? false
                : true;

            l = xPos - (curData.lensW / 2);
            t = yPos - (curData.lensH / 2);

            if (curData.mode !== 'inside') {
                if (xPos < curData.lensW / 2) {
                    l = 0;
                }

                if (yPos < curData.lensH / 2) {
                    t = 0;
                }

                if (xPos - curData.w + (curData.lensW / 2) > 0) {
                    l = curData.w - (curData.lensW + 2);
                }

                if (yPos - curData.h + (curData.lensH / 2) > 0) {
                    t = curData.h - (curData.lensH + 2);
                }
            }

            pos.l = Math.round(l);
            pos.t = Math.round(t);

            curData.lensBgX = pos.l + 1;
            curData.lensBgY = pos.t + 1;

            if (curData.mode === 'inside') {
                curData.largeL = Math.round(xPos * (curData.zoom - (curData.lensW / curData.w)));
                curData.largeT = Math.round(yPos * (curData.zoom - (curData.lensH / curData.h)));
            } else {
                curData.largeL = Math.round(curData.lensBgX * curData.zoom * (curData.largeWrapperW / curData.w));
                curData.largeT = Math.round(curData.lensBgY * curData.zoom * (curData.largeWrapperH / curData.h));
            }
        },
        zoomInOut = function (e) {
            var delta = (e.wheelDelta > 0 || e.detail < 0) ? 0.1 : -0.1,
                handler = curData.onzoom,
                multiplier = 1,
                w = 0,
                h = 0;

            if (e.preventDefault) {
                e.preventDefault();
            }

            e.returnValue = false;

            curData.zoom = Math.round((curData.zoom + delta) * 10) / 10;

            if (curData.zoom >= curData.zoomMax) {
                curData.zoom = curData.zoomMax;
            } else if (curData.zoom >= curData.zoomMin) {
                curData.lensW = Math.round(curData.w / curData.zoom);
                curData.lensH = Math.round(curData.h / curData.zoom);

                if (curData.mode === 'inside') {
                    w = curData.w;
                    h = curData.h;
                } else {
                    w = curData.largeWrapperW;
                    h = curData.largeWrapperH;
                    multiplier = curData.largeWrapperW / curData.w;
                }

                curData.largeW = Math.round(curData.zoom * w);
                curData.largeH = Math.round(curData.zoom * h);

                getMousePos();
                updateLensOnZoom();

                if (handler !== null) {
                    handler({
                        thumb: curThumb,
                        lens: curLens,
                        large: curLarge,
                        x: pos.x,
                        y: pos.y,
                        zoom: Math.round(curData.zoom * multiplier * 10) / 10,
                        w: curData.lensW,
                        h: curData.lensH
                    });
                }
            } else {
                curData.zoom = curData.zoomMin;
            }
        },
        onThumbEnter = function () {
            curData = data[curIdx];
            curLens = $('#' + curIdx + '-lens');

            if (curData.status === 2) {
                curLens.className = 'magnifier-lens';

                if (curData.zoomAttached === false) {
                    if (curData.zoomable !== undefined && curData.zoomable === true) {
                        evt.attach('mousewheel', curLens, zoomInOut);

                        if (window.addEventListener) {
                            curLens.addEventListener('DOMMouseScroll', function (e) {
                                zoomInOut(e);
                            });
                        }
                    }

                    curData.zoomAttached = true;
                }

                curLarge = $('#' + curIdx + '-large');
                curLarge.className = 'magnifier-large';
            } else if (curData.status === 1) {
                curLens.className = 'magnifier-loader';
            }
        },
        onThumbLeave = function () {
            if (curData.status > 0) {
                var handler = curData.onthumbleave;

                if (handler !== null) {
                    handler({
                        thumb: curThumb,
                        lens: curLens,
                        large: curLarge,
                        x: pos.x,
                        y: pos.y
                    });
                }

                if (curLens.className.indexOf('hidden') === -1) {
                    curLens.className += ' hidden';
                    curThumb.className = curData.thumbCssClass;

                    if (curLarge !== null) {
                        curLarge.className += ' hidden';
                    }
                }
            }
        },
        move = function () {
            if (status !== curData.status) {
                onThumbEnter();
            }

            if (curData.status > 0) {
                curThumb.className = curData.thumbCssClass + ' opaque';

                if (curData.status === 1) {
                    curLens.className = 'magnifier-loader';
                } else if (curData.status === 2) {
                    curLens.className = 'magnifier-lens';
                    curLarge.className = 'magnifier-large';
                    curLarge.style.left = '-' + curData.largeL + 'px';
                    curLarge.style.top = '-' + curData.largeT + 'px';
                }

                curLens.style.left = pos.l + 'px';
                curLens.style.top = pos.t + 'px';
                curLens.style.backgroundPosition = '-' +
                    curData.lensBgX + 'px -' +
                    curData.lensBgY + 'px';

                var handler = curData.onthumbmove;

                if (handler !== null) {
                    handler({
                        thumb: curThumb,
                        lens: curLens,
                        large: curLarge,
                        x: pos.x,
                        y: pos.y
                    });
                }
            }

            status = curData.status;
        },
        setThumbData = function (thumb, thumbData) {
            var thumbBounds = thumb.getBoundingClientRect(),
                w = 0,
                h = 0;

            thumbData.x = thumbBounds.left;
            thumbData.y = thumbBounds.top;
            thumbData.w = Math.round(thumbBounds.right );
            thumbData.h = Math.round(thumbBounds.bottom);
            /*
            thumbData.w = Math.round(thumbBounds.right - thumbData.x);
            thumbData.h = Math.round(thumbBounds.bottom - thumbData.y);
            */

            thumbData.lensW = Math.round(thumbData.w / thumbData.zoom);
            thumbData.lensH = Math.round(thumbData.h / thumbData.zoom);

            if (thumbData.mode === 'inside') {
                w = thumbData.w;
                h = thumbData.h;
            } else {
                w = thumbData.largeWrapperW;
                h = thumbData.largeWrapperH;
            }

            thumbData.largeW = Math.round(thumbData.zoom * w);
            thumbData.largeH = Math.round(thumbData.zoom * h);
        };

    this.attach = function (options) {
        if (options.thumb === undefined) {
            throw {
                name: 'Magnifier error',
                message: 'Please set thumbnail',
                toString: function () {return this.name + ": " + this.message; }
            };
        }

        var thumb = $(options.thumb),
            i = 0;

        if (thumb.length !== undefined) {
            for (i; i < thumb.length; i += 1) {
                options.thumb = thumb[i];
                this.set(options);
            }
        } else {
            options.thumb = thumb;
            this.set(options);
        }
    };

    this.setThumb = function (thumb) {
        curThumb = thumb;
    };

    this.set = function (options) {
        if (data[options.thumb.id] !== undefined) {
            curThumb = options.thumb;
            return false;
        }

        var thumbObj    = new Image(),
            largeObj    = new Image(),
            thumb       = options.thumb,
            idx         = thumb.id,
            zoomable    = null,
            largeUrl    = null,
            largeWrapper = (
                $('#' + options.largeWrapper) ||
                $('#' + thumb.getAttribute('data-large-img-wrapper')) ||
                $('#' + curData.largeWrapperId)
            ),
            zoom = options.zoom || thumb.getAttribute('data-zoom') || gZoom,
            zoomMin = options.zoomMin || thumb.getAttribute('data-zoom-min') || gZoomMin,
            zoomMax = options.zoomMax || thumb.getAttribute('data-zoom-max') || gZoomMax,
            mode = options.mode || thumb.getAttribute('data-mode') || gMode,
            onthumbenter = (options.onthumbenter !== undefined)
                ? options.onthumbenter
                : curData.onthumbenter,
            onthumbleave = (options.onthumbleave !== undefined)
                ? options.onthumbleave
                : curData.onthumbleave,
            onthumbmove = (options.onthumbmove !== undefined)
                ? options.onthumbmove
                : curData.onthumbmove,
            onzoom = (options.onzoom !== undefined)
                ? options.onzoom
                : curData.onzoom;

        if (options.large === undefined) {
            largeUrl = (options.thumb.getAttribute('data-large-img-url') !== null)
                ? options.thumb.getAttribute('data-large-img-url')
                : options.thumb.src;
        } else {
            largeUrl = options.large;
        }

        if (largeWrapper === null && mode !== 'inside') {
            throw {
                name: 'Magnifier error',
                message: 'Please specify large image wrapper DOM element',
                toString: function () {return this.name + ": " + this.message; }
            };
        }

        if (options.zoomable !== undefined) {
            zoomable = options.zoomable;
        } else if (thumb.getAttribute('data-zoomable') !== null) {
            zoomable = (thumb.getAttribute('data-zoomable') === 'true');
        } else if (curData.zoomable !== undefined) {
            zoomable = curData.zoomable;
        }

        if (thumb.id === '') {
            idx = thumb.id = 'magnifier-item-' + gId;
            gId += 1;
        }

        createLens(thumb, idx);

        data[idx] = {
            zoom: zoom,
            zoomMin: zoomMin,
            zoomMax: zoomMax,
            mode: mode,
            zoomable: zoomable,
            thumbCssClass: thumb.className,
            zoomAttached: false,
            status: 0,
            largeUrl: largeUrl,
            largeWrapperId: mode === 'outside' ? largeWrapper.id : null,
            largeWrapperW: mode === 'outside' ? largeWrapper.offsetWidth : null,
            largeWrapperH: mode === 'outside' ? largeWrapper.offsetHeight : null,
            onzoom: onzoom,
            onthumbenter: onthumbenter,
            onthumbleave: onthumbleave,
            onthumbmove: onthumbmove
        };

        evt.attach('mouseover', thumb, function (e, src) {
            if (curData.status !== 0) {
                onThumbLeave();
            }

            curIdx = src.id;
            curThumb = src;

            onThumbEnter(src);

            setThumbData(curThumb, curData);

            pos.x = e.clientX;
            pos.y = e.clientY;

            getMousePos();
            move();

            var handler = curData.onthumbenter;

            if (handler !== null) {
                handler({
                    thumb: curThumb,
                    lens: curLens,
                    large: curLarge,
                    x: pos.x,
                    y: pos.y
                });
            }
        }, false);

        evt.attach('mousemove', thumb, function (e, src) {
            isOverThumb = 1;
        });

        evt.attach('load', thumbObj, function () {
            data[idx].status = 1;

            setThumbData(thumb, data[idx]);
            updateLensOnLoad(idx);

            evt.attach('load', largeObj, function () {
                data[idx].status = 2;
                updateLensOnLoad(idx, thumb, largeObj, largeWrapper);
            });

            largeObj.src = data[idx].largeUrl;
        });

        thumbObj.src = thumb.src;
    };

    evt.attach('mousemove', document, function (e) {
        pos.x = e.clientX;
        pos.y = e.clientY;

        getMousePos();

        if (inBounds === true) {
            move();
        } else {
            if (isOverThumb !== 0) {
                onThumbLeave();
            }

            isOverThumb = 0;
        }
    }, false);

    evt.attach('scroll', window, function () {
        if (curThumb !== null) {
            setThumbData(curThumb, curData);
        }
    });
};
var evt = new Event(),
    m = new Magnifier(evt);
m.attach({
    thumb: '#thumb',
    large:'images/product-main-large-pic.jpg',
    largeWrapper: 'preview',
    zoom: 3
});
