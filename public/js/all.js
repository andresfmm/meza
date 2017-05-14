(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){

alert('chat')
},{}],2:[function(require,module,exports){
require('./chat.js')
},{"./chat.js":1}],3:[function(require,module,exports){
alert('custom')
},{}],4:[function(require,module,exports){
require('./custom.js')
},{"./custom.js":3}],5:[function(require,module,exports){
alert('employes')
},{}],6:[function(require,module,exports){
require('./employes.js')
},{"./employes.js":5}],7:[function(require,module,exports){

require ('./office/index.js')
require ('./chat/index.js')
require ('./customs/index.js')
require ('./employes/index.js')
},{"./chat/index.js":2,"./customs/index.js":4,"./employes/index.js":6,"./office/index.js":8}],8:[function(require,module,exports){

require('./office.js')
},{"./office.js":9}],9:[function(require,module,exports){
alert('office')
},{}]},{},[7]);
