/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// require('./swiper');
// require('./services');
// require('./saleStatus');
// require('./status');
__webpack_require__(/*! ./choosingLotImage */ "./resources/js/choosingLotImage.js");

__webpack_require__(/*! ./itemGallery */ "./resources/js/itemGallery.js");

__webpack_require__(/*! ./dropdown-input */ "./resources/js/dropdown-input.js");

__webpack_require__(/*! ./selectSaver */ "./resources/js/selectSaver.js"); // минин
// require('./select/select-class');
// require('./select');
// require('./input');
// require('./admin-create-lot/createLot');
// require('./admin-create-lot/createLot-setLotSizeTitle');
// require('./admin-create-lot/createLot-weightCounter');
// require('./databaseItemOpener');
// require('./hideHomeBreadcrumb');
// require('./fslightbox');
// require('./filter');
// require('./range-slider');
// require('./fastPageLinks');

/***/ }),

/***/ "./resources/js/choosingLotImage.js":
/*!******************************************!*\
  !*** ./resources/js/choosingLotImage.js ***!
  \******************************************/
/***/ (() => {

if (document.querySelector('.databaseItem-image-section')) {
  var databaseItemImage = document.querySelector('.databaseItem-image');
  var databaseItems = document.querySelectorAll('.databaseItem-images-wrapper'); //geting the path of the first thumbnail image in array of images under the main image of a lot to incert it as main image path. 

  var firstImage = document.querySelector('.databaseItem-images');
  var path = firstImage.getAttribute('src');
  var pathStart = path.slice(0, 23);
  var newPath = path.split('/');
  var newPath_4 = newPath[4];
  var newPath_5 = newPath[5];
  var pathEnd = '/' + newPath_4 + '/' + newPath_5;
  path = pathStart + 'main_images' + pathEnd;
  databaseItemImage.setAttribute('src', path); //getting picked thumbnail image path to set src attribute for main image of the lot.

  databaseItems.forEach(function (element) {
    element.addEventListener('click', function (event) {
      item = event.target;
      var path = item.getAttribute('src');
      var pathStart = path.slice(0, 23);
      var newPath = path.split('/');
      var newPath_4 = newPath[4];
      var newPath_5 = newPath[5];
      var pathEnd = '/' + newPath_4 + '/' + newPath_5;
      path = pathStart + 'main_images' + pathEnd;
      databaseItemImage.setAttribute('src', path);
    });
  });
}

;

/***/ }),

/***/ "./resources/js/dropdown-input.js":
/*!****************************************!*\
  !*** ./resources/js/dropdown-input.js ***!
  \****************************************/
/***/ (() => {

document.querySelectorAll('.dropdown').forEach(function (dropDownWrapper) {
  var dropDownBtn = dropDownWrapper.querySelector('.dropdown__button');
  var dropDownList = dropDownWrapper.querySelector('.dropdown__list');
  var dropDownListItems = dropDownList.querySelectorAll('.dropdown__list-item');
  var dropDownInput = dropDownWrapper.querySelector('.dropdown__input-hidden'); //Клик по кнопке. Открыть/Закрыть select.

  dropDownBtn.addEventListener('click', function () {
    dropDownList.classList.toggle('dropdown__list--visible');
    this.classList.add('dropdown__button--active');
  }); //Выбор элемента списка. Запомнить выбранное значение. Закрыть дропдаун.

  dropDownListItems.forEach(function (listItem) {
    listItem.addEventListener('click', function (e) {
      e.stopPropagation();
      dropDownBtn.innerText = this.innerText;
      dropDownBtn.focus();
      dropDownInput.value = this.dataset.value;
      dropDownList.classList.remove('dropdown__list--visible');
    });
  }); //клик снаружи Дропдауна. Закрыть дропдаун.

  document.addEventListener('click', function (e) {
    if (e.target !== dropDownBtn) {
      dropDownList.classList.remove('dropdown__list--visible');
      dropDownBtn.classList.remove('dropdown__button--active');
    }
  }); //Нажатие на Tab или Escape. Закрыть дропдаун.

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Tab' || e.key === 'Escape') {
      dropDownList.classList.remove('dropdown__list--visible');
      dropDownBtn.classList.remove('dropdown__button--active');
    }
  });
});

/***/ }),

/***/ "./resources/js/itemGallery.js":
/*!*************************************!*\
  !*** ./resources/js/itemGallery.js ***!
  \*************************************/
/***/ (() => {

if (document.querySelector('.databaseItem-images-wrapper')) {
  var image = document.querySelector('.databaseItem-images-wrapper');
  image.classList.add('databaseItem-images-wrapper-active');

  if (document.querySelectorAll('.databaseItem-images-wrapper')) {
    var imageCollection = document.querySelectorAll('.databaseItem-images-wrapper');
    imageCollection.forEach(function (element) {
      element.addEventListener('click', function (event) {
        document.querySelector('.databaseItem-images-wrapper-active').classList.remove('databaseItem-images-wrapper-active');
        el = event.currentTarget;
        el.classList.add('databaseItem-images-wrapper-active');
      });
    });
  }
}

/***/ }),

/***/ "./resources/js/selectSaver.js":
/*!*************************************!*\
  !*** ./resources/js/selectSaver.js ***!
  \*************************************/
/***/ (() => {

if (document.querySelector('.select')) {
  var selectedCategory = document.querySelector('.select-category');
  console.log(selectedCategory);
}

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
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
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
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
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
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
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;