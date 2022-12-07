/* flatpickr v4.3.2, @license MIT */
(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
	typeof define === 'function' && define.amd ? define(['exports'], factory) :
	(factory((global.fa = {})));
}(this, (function (exports) { 'use strict';

var fp = typeof window !== "undefined" && window.flatpickr !== undefined
    ? window.flatpickr
    : {
        l10ns: {},
    };
var Persian = {
    weekdays: {
        shorthand: ['ÛŒÚ©', 'Ø¯Ùˆ', 'Ø³Ù‡', 'Ú†Ù‡Ø§Ø±', 'Ù¾Ù†Ø¬', 'Ø¬Ù…Ø¹Ù‡', 'Ø´Ù†Ø¨Ù‡'],
        longhand: [
            "ÛŒÚ©â€ŒØ´Ù†Ø¨Ù‡",
            "Ø¯ÙˆØ´Ù†Ø¨Ù‡",
            "Ø³Ù‡â€ŒØ´Ù†Ø¨Ù‡",
            "Ú†Ù‡Ø§Ø±Ø´Ù†Ø¨Ù‡",
            "Ù¾Ù†Ú†â€ŒØ´Ù†Ø¨Ù‡",
            "Ø¬Ù…Ø¹Ù‡",
            "Ø´Ù†Ø¨Ù‡",
        ],
    },
    months: {
        shorthand: [
            "ÙØ±ÙˆØ±Ø¯ÛŒÙ†",
            "Ø§Ø±Ø¯ÛŒØ¨Ù‡Ø´Øª",
            "Ø®Ø±Ø¯Ø§Ø¯",
            "ØªÛŒØ±",
            "Ù…Ø±Ø¯Ø§Ø¯",
            "Ø´Ù‡Ø±ÛŒÙˆØ±",
            "Ù…Ù‡Ø±",
            "Ø¢Ø¨Ø§Ù†",
            "Ø¢Ø°Ø±",
            "Ø¯ÛŒ",
            "Ø¨Ù‡Ù…Ù†",
            "Ø§Ø³ÙÙ†Ø¯",
        ],
        longhand: [
            "ÙØ±ÙˆØ±Ø¯ÛŒÙ†",
            "Ø§Ø±Ø¯ÛŒØ¨Ù‡Ø´Øª",
            "Ø®Ø±Ø¯Ø§Ø¯",
            "ØªÛŒØ±",
            "Ù…Ø±Ø¯Ø§Ø¯",
            "Ø´Ù‡Ø±ÛŒÙˆØ±",
            "Ù…Ù‡Ø±",
            "Ø¢Ø¨Ø§Ù†",
            "Ø¢Ø°Ø±",
            "Ø¯ÛŒ",
            "Ø¨Ù‡Ù…Ù†",
            "Ø§Ø³ÙÙ†Ø¯",
        ],
    },
    ordinal: function () {
        return "";
    },
    amPM: ["ØµØ¨Ø­", "Ø¨Ø¹Ø¯Ø§Ø²Ø¸Ù‡Ø±"]
};
fp.l10ns.fa = Persian;
var fa = fp.l10ns;

exports.Persian = Persian;
exports.default = fa;

Object.defineProperty(exports, '__esModule', { value: true });

})));