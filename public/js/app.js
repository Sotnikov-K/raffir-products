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

__webpack_require__(/*! ./select/select-class */ "./resources/js/select/select-class.js");

__webpack_require__(/*! ./select */ "./resources/js/select.js"); // require('./input');
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

/***/ "./resources/js/select.js":
/*!********************************!*\
  !*** ./resources/js/select.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _select_select_class__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./select/select-class */ "./resources/js/select/select-class.js");

var select = new _select_select_class__WEBPACK_IMPORTED_MODULE_0__.Select('#select', {
  placeholder: 'Все категории',
  // selectedId: '4',
  data: [{
    id: '1',
    value: 'React'
  }, {
    id: '2',
    value: 'Angular'
  }, {
    id: '3',
    value: 'Vue'
  }, {
    id: '4',
    value: 'React Native'
  }, {
    id: '5',
    value: 'Next'
  }, {
    id: '6',
    value: 'Nest'
  }],
  onSelect: function onSelect(item) {
    console.log(item);
  }
});

/***/ }),

/***/ "./resources/js/select/select-class.js":
/*!*********************************************!*\
  !*** ./resources/js/select/select-class.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Select": () => (/* binding */ Select)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classPrivateMethodInitSpec(obj, privateSet) { _checkPrivateRedeclaration(obj, privateSet); privateSet.add(obj); }

function _checkPrivateRedeclaration(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }

function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }

var getTemplate = function getTemplate() {
  var data = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];
  var placeholder = arguments.length > 1 ? arguments[1] : undefined;
  var selectedId = arguments.length > 2 ? arguments[2] : undefined;
  var text = placeholder !== null && placeholder !== void 0 ? placeholder : 'Placeholder по умолчанию';
  var items = data.map(function (item) {
    var cls = '';

    if (item.id === selectedId) {
      text = item.value;
      cls = 'selected';
    }

    return "\n            <li class=\"sellect__item ".concat(cls, "\" data-type=\"item\" data-id=\"").concat(item.id, "\">").concat(item.value, "</li>\n        ");
  });
  return "\n        <div class=\"sellect__backdrop\" data-type=\"backdrop\"></div>\n        <div class=\"sellect__input\" data-type=\"input\">\n            <span data-type=\"value\">".concat(text, "</span>\n            <div class=\"sellect__icon\"><img src=\"/images/icons/expand/expand_more-w.svg\" data-type=\"arrow\"></div>\n        </div>\n        <div class=\"sellect__dropdown\">\n            <ul class=\"sellect__list\">\n                ").concat(items.join(''), "\n            </ul>\n        </div>    \n    ");
};

var _render = /*#__PURE__*/new WeakSet();

var _setup = /*#__PURE__*/new WeakSet();

var Select = /*#__PURE__*/function () {
  function Select(selector, options) {
    _classCallCheck(this, Select);

    _classPrivateMethodInitSpec(this, _setup);

    _classPrivateMethodInitSpec(this, _render);

    this.$el = document.querySelector(selector);
    this.options = options;
    this.selectedId = options.selectedId;

    _classPrivateMethodGet(this, _render, _render2).call(this);

    _classPrivateMethodGet(this, _setup, _setup2).call(this);
  }

  _createClass(Select, [{
    key: "clickHandler",
    value: function clickHandler(event) {
      var type = event.target.dataset.type;

      if (type === 'input') {
        this.toggle();
      } else if (type === 'item') {
        var id = event.target.dataset.id;
        this.select(id);
      } else if (type === 'backdrop') {
        this.close();
      }
    }
  }, {
    key: "toggle",
    value: function toggle() {
      this.isOpen ? this.close() : this.open();
    }
  }, {
    key: "isOpen",
    get: function get() {
      return this.$el.classList.contains('open');
    }
  }, {
    key: "current",
    get: function get() {
      var _this = this;

      return this.options.data.find(function (item) {
        return item.id === _this.selectedId;
      });
    }
  }, {
    key: "select",
    value: function select(id) {
      this.selectedId = id;
      this.$value.textContent = this.current.value;
      this.$el.querySelectorAll('[data-type="item"]').forEach(function (el) {
        el.classList.remove('selected');
      });
      this.$el.querySelector("[data-id=\"".concat(id, "\"]")).classList.add('selected');
      this.options.onSelect ? this.options.onSelect(this.current) : null;
      this.close();
    }
  }, {
    key: "open",
    value: function open() {
      this.$el.classList.add('open'); //написать поворот стрелки при открытии
      // this.$arrow
      // this.$arrow.classList.remove('sellect__icon')
    }
  }, {
    key: "close",
    value: function close() {
      this.$el.classList.remove('open');
    }
  }, {
    key: "destroy",
    value: function destroy() {
      this.$el.removeEventListener('click', this.clickHandler);
      this.$el.innerHTML = '';
    }
  }]);

  return Select;
}();

function _render2() {
  var _this$options = this.options,
      placeholder = _this$options.placeholder,
      data = _this$options.data;
  this.$el.classList.add('sellect');
  this.$el.innerHTML = getTemplate(data, placeholder, this.selectedId);
}

function _setup2() {
  this.clickHandler = this.clickHandler.bind(this);
  this.$el.addEventListener('click', this.clickHandler);
  this.$arrow = this.$el.querySelector('[data-type="arrow"]');
  this.$value = this.$el.querySelector('[data-type="value"]');
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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
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