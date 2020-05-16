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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/header.js":
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// ES6 Class
var TypeWriter = /*#__PURE__*/function () {
  function TypeWriter(txtElement, words) {
    var wait = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 1500;

    _classCallCheck(this, TypeWriter);

    // time to wait before cursor starts deleting
    this.txtElement = txtElement; // where the cursor currently is

    this.words = words;
    this.txt = '';
    this.wordIndex = 0; // which word we are on. Set to 0 by default

    this.wait = parseInt(wait, 10); // makes sure wait (base 10) is an integer

    this.type(); // does the main work 

    this.isDeleting = false; // where the cursor is actually deleting
  }

  _createClass(TypeWriter, [{
    key: "type",
    value: function type() {
      var _this = this;

      // Current index of word
      var current = this.wordIndex % this.words.length; // Get full text of current word

      var fullTxt = this.words[current]; // Check if deleting

      if (this.isDeleting) {
        // Remove char
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        // Add char
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      } // Insert txt into element


      this.txtElement.innerHTML = "<span class=\"txt\">".concat(this.txt, "</span>"); // Initial Type Speed -- dynamic, so using let

      var typeSpeed = 150;

      if (this.isDeleting) {
        typeSpeed /= 2; // half a second; faster when deleting
      } // If word is complete


      if (!this.isDeleting && this.txt === fullTxt) {
        // Make pause at end
        typeSpeed = this.wait; // Set delete to true

        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false; // Move to next word

        this.wordIndex++; // Pause before start typing

        typeSpeed = 500;
      }

      setTimeout(function () {
        return _this.type();
      }, typeSpeed); // runs each time a character gets deleted
    }
  }]);

  return TypeWriter;
}(); // Init On DOM Load --- runs when the dom has been loaded


document.addEventListener('DOMContentLoaded', init); // will init our app
// Init App

function init() {
  var txtElement = document.querySelector('.txt-type'); // gets and parses the word the word so js can use it instead of leaving it as a string

  var words = JSON.parse(txtElement.getAttribute('data-words'));
  var wait = txtElement.getAttribute('data-wait'); // Init(ialize) the TypeWriter

  new TypeWriter(txtElement, words, wait);
}

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/header.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/s.o./Desktop/bsx_web/resources/js/header.js */"./resources/js/header.js");


/***/ })

/******/ });