/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

//swiper customize
if (window.innerWidth < 680 || document.body.clientWidth < 680) {
  document.querySelector('.swiper-container').querySelectorAll('.swiper-slide').forEach(function (sw) {
    sw.style.width = '100%';
  });
  document.querySelector('.swiper-container2').querySelectorAll('.swiper-slide').forEach(function (sw2) {
    sw2.style.width = '100%';
  });
} //nav menu js


var navOverlay = document.querySelector('.nav-overlay');
document.documentElement.addEventListener('scroll', function () {
  toggleNav();
});
document.querySelectorAll('.js-nav-link').forEach(function (navLink) {
  navLink.addEventListener('mouseover', function () {
    navOverlay.classList.add('show');
  });
});
document.querySelectorAll('.js-nav-link').forEach(function (navLink) {
  navLink.addEventListener('mouseout', function () {
    navOverlay.classList.remove('show');
  });
});

function toggleSub(link) {
  link.querySelector('ul').classList.toggle('hide');
}

function mobileMenu() {
  var mobileMenuCon = document.querySelector('.mobile-menu-container');
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

function addBgWhite(search) {
  search.target.parentElement.classList.add('is-active');
}

;

function rmBgWhite(search) {
  search.target.parentElement.classList.remove('is-active');
}

document.querySelector('.js-search-input').addEventListener('focus', function (e) {
  addBgWhite(e);
});
document.querySelector('.js-search-input').addEventListener('blur', function (e) {
  rmBgWhite(e);
}); //common js

function toggleNav() {
  if (window.scrollY < 300 || window.scrollY < 300) {
    document.querySelector(".desktop-nav").classList.remove('hide');
  } else {
    document.querySelector(".desktop-nav").classList.add('hide');
  }
}

document.addEventListener('scroll', function () {
  toggleNav();
});
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
/*single product*/

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
  document.querySelector('.remodal-img-container').src = miniImg.querySelector('img').getAttribute('data-src'); //console.log(miniImg)

  miniImg.classList.add('remodal-gallery-thumb-selected');
}

function closeModal() {
  document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
  document.querySelector('.m-overlay').classList.remove('active');
}

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
  replyShow.parentElement.parentElement.parentElement.querySelectorAll('.c-question-item-reply:not(:first-of-type)').forEach(function (replyItem) {
    replyItem.classList.toggle('show');

    if (replyItem.classList.contains('show')) {
      replyShow.parentElement.classList.add('change');
      replyShow.innerText = "مشاهده پاسخ های کمتر";
    }

    if (!replyItem.classList.contains('show')) {
      replyShow.parentElement.classList.remove('change');
      replyShow.innerText = "مشاهده پاسخ های دیگر";
    }
  });
}

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;