webpackJsonp([1],{

/***/ 7:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(8);
module.exports = __webpack_require__(9);


/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {$(document).ready(function () {
	$('.peliculas').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});

	$('.container .submenu h4').click(function () {
		$(this).siblings('ul').slideToggle();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}
	});

	var index;
	// var seats = {!! json_decode($seats->seats) !!};
	// var funcion = {{ App\Models\Funcion::find($seats->function_id) }};
	// console.log(seats);
	// console.log(funcion);

	$('.asientos .seat').click(function () {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			index = $('span').index(this);
			alert(index);
		} else {
			$(this).removeClass('active');
		}
	});
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(1)))

/***/ }),

/***/ 9:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

},[7]);