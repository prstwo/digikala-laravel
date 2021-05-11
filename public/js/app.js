/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

//nav menu js
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
  link.parentElement.querySelector('ul').classList.toggle('hide');
}

document.querySelectorAll('.js-mobile-toggle a').forEach(function (d) {
  d.addEventListener('click', function (mmt) {
    toggleSub(mmt.target);
  });
}); //mmt is abb of mobile menu toggler

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

document.querySelector('.js-sandwich-btn').addEventListener('click', function () {
  mobileMenu();
});
var submenuItems = document.querySelectorAll('.js-nav-submenu-items');
document.querySelector('.kalayeDigital').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-kalaye-digital-menu').style.display = '';
});
document.querySelector('.sanati').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-abzar-sanati-menu').style.display = '';
});
document.querySelector('.mod').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-mod-menu').style.display = '';
});
document.querySelector('.asbabBazi').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-asbab-bazi-menu').style.display = '';
});
document.querySelector('.zibayie').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-salamet-menu').style.display = '';
});
document.querySelector('.khane').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-khane-menu').style.display = '';
});
document.querySelector('.ketab').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-ketab-menu').style.display = '';
});
document.querySelector('.varzesh').addEventListener('mouseover', function () {
  submenuItems.forEach(function (item) {
    item.style.display = 'none';
  });
  document.querySelector('.js-varzesh-menu').style.display = '';
});
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

document.querySelector('.js-gallery-count-circle').addEventListener('click', function () {
  defaultModalToggle();
});
document.querySelectorAll('.product-gallery-pictures img').forEach(function (mp) {
  mp.addEventListener("click", function (send) {
    modalToggle(send);
  });
});

function displayRemodal(miniImg) {
  document.querySelector('.remodal-img-container').src = miniImg.getAttribute('data-src'); //console.log(miniImg)

  miniImg.classList.add('remodal-gallery-thumb-selected');
}

function closeModal() {
  document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
  document.querySelector('.m-overlay').classList.remove('active');
}

document.querySelectorAll('.js-remodal-gallery-thumb img').forEach(function (miniImg) {
  miniImg.addEventListener('click', function (e) {
    displayRemodal(e.target);
  });
});
document.querySelector('.js-remodal-close').addEventListener('click', function () {
  closeModal();
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

document.querySelectorAll('.js-more-replies a').forEach(function (moreReplies) {
  moreReplies.addEventListener('click', function (e) {
    showReplies(e.target);
  });
});
/*responsive product page */

function removeColorBorder() {
  document.querySelectorAll('.js-color-picker').forEach(function (f) {
    f.classList.remove('selected');
  });
}

function colorBorder(colorElem) {
  var productColor = document.querySelector('.js-filter-color-selector').innerText;

  if (colorElem.querySelector('.js-color-picker-text').innerText == productColor) {
    colorElem.classList.add('selected');
  } else {
    colorElem.classList.remove('selected');
  }
}

function tabOpen(dropup) {
  var dropUpCon = dropup.parentElement.querySelector('.c-dropup-container');
  dropUpCon.style.bottom = '0';
  document.querySelector('.dropup-overlay').classList.add('active');
  document.querySelectorAll('.js-color-picker').forEach(function (e) {
    colorBorder(e);
  });
}

document.querySelector('.c-product-tab').addEventListener('click', function (t) {
  tabOpen(t.target);
});

function removeDropUP(duo) {
  document.querySelector('.c-dropup-container').style.bottom = '-100%';
  duo.classList.remove('active');
}

document.querySelector('.dropup-overlay').addEventListener('click', function (e) {
  removeDropUP(e.target);
});

function changeColorText(colorPick) {
  var colorText = colorPick.querySelector('.js-color-picker-text').innerText;
  var colorValue = colorPick.querySelector('.js-color-picker-value').style.backgroundColor;
  document.querySelector('.js-filters-color-header-value').style.backgroundColor = colorValue;
  document.querySelector('.js-filter-color-modal-text').innerText = colorText;
  document.querySelector('.js-product-tab-color-value').style.backgroundColor = colorValue;
  document.querySelector('.js-filter-color-selector').innerText = colorText;
}

document.querySelectorAll('.js-color-picker').forEach(function (c) {
  c.addEventListener('click', function (cp) {
    changeColorText(cp.target);
    removeColorBorder();
    colorBorder(cp.target);
  });
});

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