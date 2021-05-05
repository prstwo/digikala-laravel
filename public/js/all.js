/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/all.js ***!
  \*****************************/
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  spaceBetween: 10,
  slidesPerGroup: 4,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
var swiper2 = new Swiper('.swiper-container2', {
  slidesPerView: 5,
  spaceBetween: 20,
  slidesPerGroup: 5,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
var swiper3 = new Swiper('.swiper-container3', {
  slidesPerView: 5,
  spaceBetween: 30,
  slidesPerGroup: 5,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});

if (window.innerWidth < 680 || document.body.clientWidth < 680) {
  document.querySelector('.swiper-container').querySelectorAll('.swiper-slide').forEach(function (sw) {
    sw.style.width = '100%';
  });
  document.querySelector('.swiper-container2').querySelectorAll('.swiper-slide').forEach(function (sw2) {
    sw2.style.width = '100%';
  });
}

document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
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

var mobileMenuCon = document.querySelector('.mobile-menu-container');

function toggleSub(link) {
  link.querySelector('ul').classList.toggle('hide');
}

function mobileMenu() {
  mobileMenuCon.classList.toggle('hide');
  document.querySelector('.m-overlay').classList.toggle('active');

  if (!mobileMenuCon.classList.contains('hide')) {
    document.querySelector('.m-overlay').addEventListener('click', function (overlay) {
      mobileMenuCon.classList.add('hide');
      overlay.target.classList.remove('active');
    });
  }
}

var submenuItems = document.querySelectorAll('.js-nav-submenu-items');

function kalayeDigital() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-kalaye-digital-menu').style.display = '';
}

function sanati() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-abzar-sanati-menu').style.display = '';
}

function mod() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-mod-menu').style.display = '';
}

function asbabBazi() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-asbab-bazi-menu').style.display = '';
}

function zibayie() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-salamet-menu').style.display = '';
}

function khane() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-khane-menu').style.display = '';
}

function ketab() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-ketab-menu').style.display = '';
}

function varzesh() {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-varzesh-menu').style.display = '';
}

var due = new Date(2021, 7, 24, 15, 30, 0);
var second = 60;
var minute = 60;
var hour = 24;
var day = 60;
var dayDiv = document.querySelector('.counter-day');
var hourDiv = document.querySelector('.counter-hour');
var minuteDiv = document.querySelector('.counter-minute');
var secondDiv = document.querySelector('.counter-second');
setInterval(function () {
  //console.log(`${day}:${hour}:${minute}:${second-=1}-------`);
  secondDiv.innerText = second--;
  hourDiv.innerText = hour;
  dayDiv.innerText = day;
  minuteDiv.innerText = minute;

  if (second <= 0) {
    second = 60;
    minute -= 1;
    minuteDiv.innerText = minute;

    if (minute <= 0) {
      minute = 60;
      hour -= 1;
      hourDiv.innerText = hour;

      if (hour <= 0) {
        hour = 24;
        day -= 1;
        dayDiv.innerText = day;
      }
    }
  }
}, 1000);
/*document.querySelector('.search-input').addEventListener('focus', (search)=>{
    //
    console.log('hello')
});*/

function bgWhite(search) {
  search.parentElement.classList.add('is-active');
}

;
var productSummarySec = document.querySelector('.js-mask-text-product-summary');
var paramsList = document.querySelector('.c-products-params-more');

function defaultModalToggle() {
  document.querySelector('.m-overlay').classList.toggle('active');
  document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
  document.querySelector('.remodal-img-container').src = 'images/product-main-pic.jpg';

  if (!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')) {
    document.querySelector('.m-overlay').addEventListener('click', function (overlay) {
      document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
      overlay.target.classList.remove('active');
    });
  }
}

document.querySelector('.gallery-count-circle').addEventListener('click', function () {
  defaultModalToggle();
});

function modalToggle(send) {
  document.querySelector('.m-overlay').classList.toggle('active');
  document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
  document.querySelector('.remodal-img-container').src = send.target.getAttribute('data-src');

  if (!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')) {
    document.querySelector('.m-overlay').addEventListener('click', function (overlay) {
      document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
      overlay.target.classList.remove('active');
    });
  }
}

document.querySelectorAll('.product-gallery-pictures img').forEach(function (mp) {
  mp.addEventListener("click", function (send) {
    modalToggle(send);
  });
});

function displayRemodal(miniImg) {
  document.querySelector('.remodal-img-container').src = miniImg.target.getAttribute('data-src'); //console.log(miniImg)

  miniImg.target.classList.add('remodal-gallery-thumb-selected');
}

function closeModal() {
  document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
  document.querySelector('.m-overlay').classList.remove('active');
}

document.querySelector('.remodal-top-bar-close-btn-container button').addEventListener('click', function () {
  closeModal();
});
document.querySelectorAll('.js-remodal-gallery-thumb').forEach(function (remodalThumb) {
  remodalThumb.addEventListener('click', function (e) {
    displayRemodal(e);
  });
});
document.querySelector('.continue-btn-params').addEventListener('click', function (btnParams) {
  btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.toggle('is-open');

  if (btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')) {
    btnParams.target.innerText = 'فقط نمایش مشخصات کلی کالا';
    btnParams.target.classList.add('change');
  }

  if (!btnParams.target.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')) {
    btnParams.target.innerText = 'نمایش همه مشخصات کالا';
    btnParams.target.classList.remove('change');
  }
});
document.querySelector('.continue-btn-summary').addEventListener('click', function (btnSummary) {
  productSummarySec.classList.toggle('is-open');

  if (productSummarySec.classList.contains('is-open')) {
    btnSummary.target.classList.add('change');
    btnSummary.target.innerText = 'نمایش کمتر';
  }

  if (!productSummarySec.classList.contains('is-open')) {
    btnSummary.target.innerText = 'ادامه مطلب';
    btnSummary.target.classList.remove('change');
  }
});
document.querySelector('.continue-btn-config').addEventListener('click', function (btnConfig) {
  document.querySelector('.product-config-info').querySelectorAll('.c-products-params-more').forEach(function (li) {
    li.classList.toggle('show');

    if (!li.classList.contains('show')) {
      btnConfig.target.innerText = 'مشاهده بیشتر +';
    }

    if (li.classList.contains('show')) {
      btnConfig.target.innerText = '- بستن';
    }
  });
});

function showReplies(replyShow) {
  replyShow.target.parentElement.parentElement.parentElement.querySelectorAll('.c-question-item-reply:not(:first-of-type)').forEach(function (replyItem) {
    replyItem.classList.toggle('show');

    if (replyItem.classList.contains('show')) {
      replyShow.target.parentElement.classList.add('change');
      replyShow.target.innerText = "مشاهده پاسخ های کمتر";
    }

    if (!replyItem.classList.contains('show')) {
      replyShow.target.parentElement.classList.remove('change');
      replyShow.target.innerText = "مشاهده پاسخ های دیگر";
    }
  });
}

document.querySelectorAll('.js-more-replies a').forEach(function (moreRepllies) {
  moreRepllies.addEventListener('click', function (e) {
    showReplies(e);
  });
});
/******/ })()
;