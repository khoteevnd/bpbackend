/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 45);
/******/ })
/************************************************************************/
/******/ ({

/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(46);


/***/ }),

/***/ 46:
/***/ (function(module, exports) {

//OWL-CAROUSEL SETTINGS
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        //animateOut: 'slideOutDown',
        //animateIn: 'flipInX',
        loop: true,
        margin: 30,
        nav: true,
        //autoWidth:true,
        items: 3,
        center: true,
        stagePadding: 30,
        smartSpeed: 500,
        navText: ["<i class=\"fa fa-3x fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-3x fa-angle-right\" aria-hidden=\"true\"></i>"],
        dots: true
    });
});
//OWL-CAROUSEL BTN Animate
$(function () {
    /*    $('.owl-prev').hover(
            function() {
                $('.owl-prev')
                    .removeClass('opacityIn animated')
                    .addClass('opacityOut animated');
            },
            function() {
                $('.owl-prev')
                    .removeClass('opacityOut animated')
                    .addClass('opacityIn animated');
            }
        );
        $('.owl-next').hover(
            function() {
                $('.owl-next')
                    .removeClass('opacityIn animated')
                    .addClass('opacityOut animated');
            },
            function() {
                $('.owl-next')
                    .removeClass('opacityOut animated')
                    .addClass('opacityIn animated');
            }
        );*/
});

/***/ })

/******/ });