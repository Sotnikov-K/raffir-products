!function (e) { "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? module.exports = e() : window.wNumb = e() }(function () { "use strict"; function e(e) { return e.split("").reverse().join("") } function n(e, n) { return e.substring(0, n.length) === n } function t(e, n) { return e.slice(-1 * n.length) === n } function r(e, n, t) { if ((e[n] || e[t]) && e[n] === e[t]) throw new Error(n) } function i(e) { return "number" == typeof e && isFinite(e) } function o(e, n) { var t = Math.pow(10, n); return (Math.round(e * t) / t).toFixed(n) } function f(n, t, r, f, u, a, c, s, d, p, l, h) { var g, v, w, m = h, x = "", y = ""; return a && (h = a(h)), i(h) ? (n !== !1 && 0 === parseFloat(h.toFixed(n)) && (h = 0), 0 > h && (g = !0, h = Math.abs(h)), n !== !1 && (h = o(h, n)), h = h.toString(), -1 !== h.indexOf(".") ? (v = h.split("."), w = v[0], r && (x = r + v[1])) : w = h, t && (w = e(w).match(/.{1,3}/g), w = e(w.join(e(t)))), g && s && (y += s), f && (y += f), g && d && (y += d), y += w, y += x, u && (y += u), p && (y = p(y, m)), y) : !1 } function u(e, r, o, f, u, a, c, s, d, p, l, h) { var g, v = ""; return l && (h = l(h)), h && "string" == typeof h ? (s && n(h, s) && (h = h.replace(s, ""), g = !0), f && n(h, f) && (h = h.replace(f, "")), d && n(h, d) && (h = h.replace(d, ""), g = !0), u && t(h, u) && (h = h.slice(0, -1 * u.length)), r && (h = h.split(r).join("")), o && (h = h.replace(o, ".")), g && (v += "-"), v += h, v = v.replace(/[^0-9\.\-.]/g, ""), "" === v ? !1 : (v = Number(v), c && (v = c(v)), i(v) ? v : !1)) : !1 } function a(e) { var n, t, i, o = {}; for (n = 0; n < d.length; n += 1)if (t = d[n], i = e[t], void 0 === i) "negative" !== t || o.negativeBefore ? "mark" === t && "." !== o.thousand ? o[t] = "." : o[t] = !1 : o[t] = "-"; else if ("decimals" === t) { if (!(i >= 0 && 8 > i)) throw new Error(t); o[t] = i } else if ("encoder" === t || "decoder" === t || "edit" === t || "undo" === t) { if ("function" != typeof i) throw new Error(t); o[t] = i } else { if ("string" != typeof i) throw new Error(t); o[t] = i } return r(o, "mark", "thousand"), r(o, "prefix", "negative"), r(o, "prefix", "negativeBefore"), o } function c(e, n, t) { var r, i = []; for (r = 0; r < d.length; r += 1)i.push(e[d[r]]); return i.push(t), n.apply("", i) } function s(e) { return this instanceof s ? void ("object" == typeof e && (e = a(e), this.to = function (n) { return c(e, f, n) }, this.from = function (n) { return c(e, u, n) })) : new s(e) } var d = ["decimals", "thousand", "mark", "prefix", "postfix", "encoder", "decoder", "negativeBefore", "negative", "edit", "undo"]; return s });

import noUiSlider from 'nouislider';
const rangeSliderWidth = document.getElementById('range-slider__weight');
const rangeSliderPrice = document.getElementById('range-slider__price');

if (rangeSliderWidth) {
    noUiSlider.create(rangeSliderWidth, {
        range: {
            'min': 0,
            'max': 200
        },
        step: 10,
        start: [0, 10],
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: wNumb({
            decimals: 0
        }),
        pips: {
            mode: 'steps',
            stepped: true,
            density: 25
        }
    });

    const input0 = document.getElementById('input-0');
    const input1 = document.getElementById('input-1');
    let inputs = [input0, input1];

    rangeSliderWidth.noUiSlider.on('update', function (values, handle) {
        inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        let arr = [null, null];
        arr[i] = value;
        rangeSliderWidth.noUiSlider.set(arr);

    };

    inputs.forEach((element, index) => {
        element.addEventListener('change', (event) => {
            setRangeSlider(index, event.currentTarget.value);
        });
    });

}


if (rangeSliderPrice) {
    noUiSlider.create(rangeSliderPrice, {
        range: {
            'min': 0,
            'max': 25000
        },

        step: 1000,
        start: [0, 5000],
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: wNumb({
            decimals: 2
        }),
        // pips: false,

        pips: {
            mode: 'positions',
            values: [0, 20, 50, 70, 100],
            density: 4,
            stepped: true
        },

    });

    const input1 = document.getElementById('input-price-1');
    const input2 = document.getElementById('input-price-2');
    let inputs = [input1, input2];

    rangeSliderPrice.noUiSlider.on('update', function (values, handle) {
        inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        let arr = [null, null];
        arr[i] = value;
        rangeSliderPrice.noUiSlider.set(arr);

    };

    inputs.forEach((element, index) => {
        element.addEventListener('change', (event) => {
            setRangeSlider(index, event.currentTarget.value);
        });
    });
}


// console.log(rangeSliderWidth.noUiSlider.get());


