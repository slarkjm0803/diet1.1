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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var gender;
var physical;
var meat = [];
var vegetable = [];
var products = [];
var material = [];
var nomeat = "";
var briefing = 0;
var bmi;
var water;
var age = 0;
var bmr;
var metabolicAge = 0;
var target_weight;
var profile = [];

function initChart(el) {
  var data = el.data();
  var size = data.size ? data.size : 270;
  var line = data.line ? data.line : 20;
  var bgcolor = data.bgcolor ? data.bgcolor : "#ffffff";
  var trackcolor = data.trackcolor ? data.trackcolor : "#c14240";
  var speed = data.speed ? data.speed : 3000;
  el.easyPieChart({
    barColor: trackcolor,
    trackColor: bgcolor,
    scaleColor: false,
    scaleLength: false,
    lineCap: "butt",
    lineWidth: line,
    size: size,
    rotate: 0,
    animate: speed,
    onStep: function onStep(from, to, percent) {
      $(el).find(".percent").text(Math.round(percent));
    }
  });
} // prev button event


$("#btn-prev").click(function () {
  if ($(".diet-step-1").hasClass("active")) {
    $(this).removeAttr("data-slide");
  }

  if ($(".diet-step-2").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-1").addClass("m-progress-bar__dot--active");
    $(".process-1").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "0%");
    $(".process-2").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-3").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-2").addClass("m-progress-bar__dot--active");
    $(".process-2").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "17%");
    $(".process-3").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-4").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-3").addClass("m-progress-bar__dot--active");
    $(".process-3").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "34%");
    $(".process-4").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-5").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-4").addClass("m-progress-bar__dot--active");
    $(".process-4").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "50%");
    $(".process-5").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-6").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-5").addClass("m-progress-bar__dot--active");
    $(".process-5").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "67%");
    $(".process-6").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-7").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-6").addClass("m-progress-bar__dot--active");
    $(".process-6").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", "");
    $("#progress-bar").css("width", "83%");
    $(".process-7").removeClass("m-progress-bar__dot--active");
  }
}); // end preve button event
// next button event

$("#btn-next").click(function () {
  if ($(".diet-step-1").hasClass("active")) {
    $(this).removeAttr("data-slide");
    alert("Please select the above!");
  }

  if ($(".diet-step-2").hasClass("active")) {
    $(this).removeAttr("data-slide");
    alert("Please select the above!");
  }

  if ($(".diet-step-3").hasClass("active")) {
    $(this).removeAttr("data-slide");

    if (nomeat == "" && meat.length == 0) {
      alert("Please select the above!");
    }

    if (nomeat == "nomeat" || meat.length != 0) {
      var meats = meat.toString();
      localStorage.setItem("meat", meats);
      $(this).attr("data-slide", "next");
      $(".process-3").removeClass("m-progress-bar__dot--active");
      $(".process-3").addClass("m-progress-bar__dot--previous");
      $("#progress-bar").css("width", "50%");
      $(".process-4").addClass("m-progress-bar__dot--active");
      $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
    }
  }

  if ($(".diet-step-4").hasClass("active")) {
    $(this).attr("data-slide", "next");
    var vegetables = vegetable.toString();
    localStorage.setItem("veggies", vegetables);
    $(".process-4").removeClass("m-progress-bar__dot--active");
    $(".process-4").addClass("m-progress-bar__dot--previous");
    $("#progress-bar").css("width", "67%");
    $(".process-5").addClass("m-progress-bar__dot--active");
    $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  }

  if ($(".diet-step-5").hasClass("active")) {
    $(this).attr("data-slide", "next");
    var product = products.toString();
    localStorage.setItem("products", product);
    $(".process-5").removeClass("m-progress-bar__dot--active");
    $(".process-5").addClass("m-progress-bar__dot--previous");
    $("#progress-bar").css("width", "83%");
    $(".process-6").addClass("m-progress-bar__dot--active");
    $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  }

  if ($(".diet-step-6").hasClass("active")) {
    if (briefing != 0) {
      $(this).attr("data-slide", "next");
      $(".process-6").removeClass("m-progress-bar__dot--active");
      $(".process-6").addClass("m-progress-bar__dot--previous");
      $("#progress-bar").css("width", "98%");
      $(".process-7").addClass("m-progress-bar__dot--active");
      $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
    } else {
      $(this).removeAttr("data-slide");
      alert("Select content the above!");
    }
  }

  if ($(".diet-step-7").hasClass("active")) {
    $(this).removeAttr("data-slide");

    if ($("#material_measurement").hasClass("active")) {
      if (parseFloat($("#age").val()) > 14 && parseFloat($("#age").val()) < 99 && parseFloat($("#height").val()) > 135 && parseFloat($("#height").val()) < 255 && parseFloat($("#weight").val()) > 40 && parseFloat($("#weight").val()) < 180 && parseFloat($("#target_weight").val()) > 40 && parseFloat($("#target_weight").val()) < 180) {
        if (parseFloat($("#weight").val()) < parseFloat($("#target_weight").val())) {
          alert("Please check weight and target weight!");
        } else {
          calculator();
          $(this).attr("data-slide", "next");
          $("#footer-process").hide();
          setTimeout(function () {
            $("#btn_show_result").show();
          }, 10000);
        }
      } else {
        alert("Please enter the correct data!");
      }
    } else {
      if (parseFloat($("#imperial_age").val()) > 14 && parseFloat($("#imperial_age").val()) < 99 && parseFloat($("#ft").val()) > 4 && parseFloat($("#ft").val()) < 8 && parseFloat($("#inch").val()) < 11 && parseFloat($("#imperial_weight").val()) > 90 && parseFloat($("#imperial_weight").val()) < 400 && parseFloat($("#imperial_target_weight").val()) > 90 && parseFloat($("#imperial_target_weight").val()) < 400) {
        if (parseFloat($("#imperial_weight").val()) < parseFloat($("#imperial_target_weight").val())) {
          alert("Please check imperial weight and target weight!");
        } else {
          calculator();
          $(this).attr("data-slide", "next");
          $("#footer-process").hide();
          setTimeout(function () {
            $("#btn_show_result").show();
          }, 10000);
        }
      } else {
        alert("Please enter the correct data!");
      }
    }
  }
}); // end next button event
// my story event

$(".my_story").click(function () {
  if ($("#first_story").hasClass("flex-active-slide")) {
    $("#first_story").removeClass("flex-active-slide");
    $("#first_story").css("opacity", 0);
    $("#second_story").addClass("flex-active-slide");
    $("#second_story").css("opacity", 1);
  }
}); // end my story event
// stop frame

$(".carousel").carousel({
  interval: false
}); // end stop frame
// svg-select animation

$(".svg-select").click(function () {
  if ($(".diet-step-3").hasClass("active")) {
    if ($(this).attr("data-products") == "nomeat") {
      meat = [];
      nomeat = "nomeat";
      $(".svg-select").removeClass("checked");
      $(this).addClass("checked");
    } else {
      nomeat = "";
      $("#nomeat").removeClass("checked");

      if ($(this).hasClass("checked")) {
        $(this).removeClass("checked");
        meat.splice($.inArray($(this).attr("data-products"), meat), 1);
      } else {
        $(this).addClass("checked");
        meat.push($(this).attr("data-products"));
      }
    }
  }

  if ($(".diet-step-4").hasClass("active")) {
    if ($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      vegetable.splice($.inArray($(this).attr("data-products"), vegetable), 1);
    } else {
      $(this).addClass("checked");
      vegetable.push($(this).attr("data-products"));
    }
  }

  if ($(".diet-step-5").hasClass("active")) {
    if ($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      products.splice($.inArray($(this).attr("data-products"), products), 1);
    } else {
      $(this).addClass("checked");
      products.push($(this).attr("data-products"));
    }
  }
}); // end svg-select animation
// get gender

$(".gender").click(function () {
  gender = $(this).attr("data-gender");
  $(".process-1").removeClass("m-progress-bar__dot--active");
  $(".process-1").addClass("m-progress-bar__dot--previous");
  $("#progress-bar").css("width", "17%");
  $(".process-2").addClass("m-progress-bar__dot--active");
  $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  localStorage.setItem("gender", gender);
}); // end get gender
// get physical activity

$(".physical").click(function () {
  physical = $(this).attr("data-physical");
  $(".process-2").removeClass("m-progress-bar__dot--active");
  $(".process-2").addClass("m-progress-bar__dot--previous");
  $("#progress-bar").css("width", "34%");
  $(".process-3").addClass("m-progress-bar__dot--active");
  $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  localStorage.setItem("physical", physical);
}); // end gt physical activity
// select typical day

$(".briefing").click(function () {
  if ($(this).hasClass("checked")) {
    if ($(this).attr("data-briefing") == "6") {
      $(".briefing").addClass("checked");
      $(this).removeClass("checked");
      briefing += 5;
    } else {
      $(this).removeClass("checked");
      briefing -= 1;
    }
  } else {
    if ($(this).attr("data-briefing") == "6") {
      $(".briefing").removeClass("checked");
      $(this).addClass("checked");
      briefing -= 5;
    } else {
      $("#noabove").removeClass("checked");
      $(this).addClass("checked");
      briefing += 1;
    }
  }
}); // end select typical day
// get measurements

function calculator() {
  var $chart = $("#chart-processing .chart");
  $chart.appear();
  initChart($chart);

  if ($("#material_measurement").hasClass("active")) {
    age = parseInt($("#age").val());
    height = parseInt($("#height").val());
    weight = parseInt($("#weight").val());
    target_weight = parseInt($("#target_weight").val());
  } else {
    age = parseInt($("#imperial_age").val());
    var ft = parseInt($("#ft").val());
    var inch = parseInt($("#inch").val()) || 0; // It is possible isNaN($("#inch").val());

    height = 30.48 * ft + 2.54 * inch;
    var imweight = parseInt($("#imperial_weight").val());
    weight = 0.45 * imweight;
    var im_ta_weight = parseInt($("#imperial_target_weight").val());
    target_weight = 0.45 * im_ta_weight;
  } // get bmi


  bmi = weight * 10000 / (height * height);
  bmi = bmi.toFixed(2); // end get bmi
  // get water

  water = weight * 0.03;
  water = water.toFixed(1); // end get water

  var genders = localStorage.getItem("gender");

  if (genders == "1") {
    bmr = 9.99 * weight + (6.25 * height - (4.92 * age + 5));
  } else {
    bmr = 9.99 * weight + (6.25 * height - 4.92 * age - 161);
  }

  if (physical == "1") {
    bmr = bmr * 1.2 - 500;
    metabolicAge += 3;
  }

  if (physical == "2") {
    bmr = bmr * 1.375 - 500;
    metabolicAge += 2;
  }

  if (physical == "3") {
    bmr = bmr * 1.55 - 500;
  }

  if (physical == "4") {
    bmr = bmr * 1.725 - 500;
    metabolicAge -= 2;
  }

  if (physical == "5") {
    bmr = bmr * 1.9 - 500;
    metabolicAge -= 3;
  } // get Caloires


  bmr = bmr.toFixed(0);
  localStorage.setItem("cal", bmr); // end get Calories
  // get metabolic Age

  metabolicAge = metabolicAge + briefing + age; // end get metabolic Age

  bmr = (bmr - 50).toString() + "~" + (+bmr + 50).toString();
  target_weight = weight - 4;
  profile.push(bmr, water, metabolicAge, weight, target_weight, bmi);
  profile = profile.toString();
  localStorage.setItem("profile", profile); //save material in localstorage

  var meats = localStorage.getItem("meat");
  meats = meats.split(",");
  var vegetables = localStorage.getItem("veggies");
  vegetables = vegetables.split(",");
  var products = localStorage.getItem("products");
  products = products.split(",");
  var material = meats.concat(vegetables, products);
  material = material.toString();
  localStorage.setItem("material", material);
  localStorage.removeItem("meat");
  localStorage.removeItem("veggies");
  localStorage.removeItem("products"); // end save material in localstorage
} // end get measurements
// show first result


$("#btn_show_result").click(function () {
  $(".diet-slider").css("height", "auto");
  var show_result = localStorage.getItem("profile");
  show_result = show_result.split(',');
  var archieve_weight = parseInt(show_result[3]) - 1;
  var archieve_weight_1 = archieve_weight - 1;
  var archieve_weight_2 = archieve_weight - 2;
  var archieve_weight_3 = archieve_weight - 3;
  archieve_weight = archieve_weight.toString();
  archieve_weight_1 = archieve_weight_1.toString();
  archieve_weight_2 = archieve_weight_2.toString();
  archieve_weight_3 = archieve_weight_3.toString();
  $("#weight-1").text(archieve_weight);
  $("#weight-2").text(archieve_weight_1);
  $("#weight-3").text(archieve_weight_2);
  $("#weight-4").text(archieve_weight_3);
  $("#diet_bmi").text(show_result[5]);
  $("#diet_bmio").text(show_result[5]);
  $("#diet_metabolic_age").text(show_result[2]);
  $("#diet_cal").text(show_result[0]);
  $("#diet_calo").text(show_result[0]);
  $("#diet_archieve_weight").text(show_result[4]);
  $("#diet_target_weight").text(show_result[4]);
  $("#diet_target_weighto").text(show_result[4]);
  $("#diet_water").text(show_result[1]);
  $("#diet_watero").text(show_result[1]);

  if (show_result[5] > 18 && show_result[5] <= 25) {
    $("#Oval-2").attr("cx", "208.631");
    $("#Oval-2").attr("cy", "355.442");
  }

  if (show_result[5] <= 18) {
    $("#Oval-2").attr("cx", "138.042");
    $("#Oval-2").attr("cy", "376.034");
    $("#Oval-2").css({
      "color": "rgb(0, 173, 238)"
    });
    $("#Oval-2").css({
      "fill": "rgb(0, 173, 238)"
    });
    $("#diet_bmi").css({
      "color": "rgb(0, 173, 238)"
    });
    $("#diet_bmi").css({
      "fill": "rgb(0, 173, 238)"
    });
    $("#diet_bmio").css({
      "color": "rgb(0, 173, 238)"
    });
  }

  if (show_result[5] > 25 && show_result[5] <= 32) {
    $("#Oval-2").attr("cx", "296.807");
    $("#Oval-2").attr("cy", "339.42");
    $("#Oval-2").css({
      "color": "rgb(129, 194, 47)"
    });
    $("#Oval-2").css({
      "fill": "rgb(129, 194, 47)"
    });
    $("#diet_bmi").css({
      "color": "rgb(129, 194, 47)"
    });
    $("#diet_bmi").css({
      "fill": "rgb(129, 194, 47)"
    });
    $("#diet_bmio").css({
      "color": "rgb(129, 194, 47)"
    });
  }

  if (show_result[5] > 32 && show_result[5] <= 40) {
    $("#Oval-2").attr("cx", "433.056");
    $("#Oval-2").attr("cy", "301.192");
    $("#Oval-2").css({
      "color": "rgb(243, 174, 4)"
    });
    $("#Oval-2").css({
      "fill": "rgb(243, 174, 4)"
    });
    $("#diet_bmi").css({
      "color": "rgb(243, 174, 4)"
    });
    $("#diet_bmi").css({
      "fill": "rgb(243, 174, 4)"
    });
    $("#diet_bmio").css({
      "color": "rgb(243, 174, 4)"
    });
  }

  if (show_result[5] > 41) {
    $("#Oval-2").attr("cx", "484.014");
    $("#Oval-2").attr("cy", "274.628");
    $("#Oval-2").css({
      "color": "rgb(194, 19, 0)"
    });
    $("#Oval-2").css({
      "fill": "rgb(194, 19, 0)"
    });
    $("#diet_bmi").css({
      "color": "rgb(194, 19, 0)"
    });
    $("#diet_bmi").css({
      "fill": "rgb(194, 19, 0)"
    });
    $("#diet_bmio").css({
      "color": "rgb(194, 19, 0)"
    });
  }

  if (show_result[2] > 30 && show_result[2] < 45) {
    $("#graph-2").css({
      transform: 'matrix(1, 0, 0, 1, -130, 0)'
    });
    $("#young").removeClass("m-item-summary__graph-2-item--active");
    $("#young-svg").css({
      "opacity": "0.5"
    });
    $("#young-svg").css({
      transform: 'matrix(0.7, 0, 0, 0.7, 0, -30)'
    });
    $("#middle-age").addClass("m-item--summary__graph-2-item--active");
    $("#middle-age-svg").css({
      "opacity": "1"
    });
    $("#middle-age-svg").css({
      transform: 'matrix(1, 0, 0, 1, 0, 0)'
    });
    $(".stroke-2").css("stroke", "#f3da1a");
    $("#old-age-svg").css({
      "opacity": "0.5"
    });
    $("#old-age-svg").css({
      transform: 'matrix(0.7, 0, 0, 0.7, 0, -30)'
    });
    $("#older-age-svg").css({
      "opacity": "0.2"
    });
    $("#older-age-svg").css({
      transform: 'matrix(0.5, 0, 0, 0.5, 0, -50)'
    });
    $(".js-item-color-graph-2").css("color", "#f3da1a");
  }

  if (show_result[2] >= 45 && show_result[2] < 65) {
    $("#graph-2").css({
      transform: 'matrix(1, 0, 0, 1, -260, 0)'
    });
    $("#young").removeClass("m-item-summary__graph-2-item--active");
    $("#young-svg").css({
      "opacity": "0.2"
    });
    $("#young-svg").css({
      transform: 'matrix(0.5, 0, 0, 0.5, 0, -50)'
    });
    $("#middle-age-svg").css({
      "opacity": "0.5"
    });
    $("#middle-age-svg").css({
      transform: 'matrix(0.7, 0, 0, 0.7, 0, -30)'
    });
    $("#old-age").addClass("m-item--summary__graph-2-item--active");
    $(".stroke-3").css("stroke", "#ffbb42");
    $("#old-age-svg").css({
      "opacity": "1"
    });
    $("#old-age-svg").css({
      transform: 'matrix(1, 0, 0, 1, 0, 0)'
    });
    $("#older-age-svg").css({
      "opacity": "0.5"
    });
    $("#older-age-svg").css({
      transform: 'matrix(0.7, 0, 0, 0.7, 0, -30)'
    });
    $(".js-item-color-graph-2").css("color", "#ffbb42");
  }

  if (show_result[2] >= 65) {
    $("#graph-2").css({
      transform: 'matrix(1, 0, 0, 1, -390, 0)'
    });
    $("#young").removeClass("m-item-summary__graph-2-item--active");
    $("#young-svg").css({
      "opacity": "0.2"
    });
    $("#young-svg").css({
      transform: 'matrix(0, 0, 0, 0, 0, -50)'
    });
    $("#middle-age-svg").css({
      "opacity": "0.2"
    });
    $("#middle-age-svg").css({
      transform: 'matrix(0.5, 0, 0, 0.5, 0, -50)'
    });
    $(".stroke-4").css("stroke", "#f94b2c");
    $("#old-age-svg").css({
      "opacity": "0.5"
    });
    $("#old-age-svg").css({
      transform: 'matrix(0.7, 0, 0, 0.7, 0, -30)'
    });
    $("#older-age").addClass("m-item--summary__graph-2-item--active");
    $("#older-age-svg").css({
      "opacity": "1"
    });
    $("#older-age-svg").css({
      transform: 'matrix(1, 0, 0, 1, 0, 0)'
    });
    $(".js-item-color-graph-2").css("color", "#f94b2c");
  }
}); // end show first result
// email address check

$("#go_payment").click(function () {
  $(this).removeAttr('data-slide');
  var email = $("#email_address").val();

  if (email.trim().length == 0) {
    $("#email_empty").show();
    $("#email_type_error").hide();
  } else {
    $("#email_empty").hide();

    if (email.indexOf('@') == -1) {
      $("#email_type_error").show();
    } else {
      $("#email_empty").hide();
      $("#email_type_error").hide();
      localStorage.setItem("emailaddress", email);
      $(this).attr("data-slide", "next");
      $("#toTop").trigger('click');
    }
  }
}); // end email address check
// select week

$("#select_week").on("change", function () {
  var link_url = "/";
  var locale = $("html").attr("lang");
  var userkey = $("#user_key").val();
  var week = "/week/";
  var week_val = $("#select_week").val();
  link_url = link_url.concat(locale, "/showdiet/", userkey, week, week_val); // window.open(link_url, '_blank');

  $.ajax({
    url: link_url,
    method: "post",
    data: {
      _token: $('meta[name="csrf-token"]').attr("content")
    },
    success: function success(response) {
      // Begin process response
      if (response.success == true) {
        var profile = response.data.profile;
        var start_date = response.data.diet_plan["startDate"];
        var diet_plan = response.data.diet_plan["recipe"];
        $list1 = $("#date_num");
        $list1 = $list1.empty();
        $list2 = $("#tab_selector");
        $list2 = $list2.empty();

        for (i = 0; i < 7; i++) {
          row1 = '<li class="nav-item week-num">\
                    <a class="one-week nav-link" href="#tab' + (i + 1) + '" data-toggle="tab"> ' + (start_date + i) + "</a>\
                  </li>", $list1.append(row1);
          row2 = '<option value="' + i + '">' + (start_date + i) + "</option>", $list2.append(row2);
        }

        $tabContent = $(".tab-content");
        $tabContent.empty();

        for (i = 0; i < 7; i++) {
          if (i == 0) {
            var temp_header = '<div class="tab-pane fade in active show" id="tab' + (i + 1) + '">';
          } else {
            var temp_header = '<div class="tab-pane" id="tab' + (i + 1) + '">';
          }

          $.each(diet_plan, function () {
            var temp_recipe = '<div class="media bordered">\
                    <div>\
                        <img src="' + this[i].image_url + '">\
                    </div>\
                    <div class="media-body">\
                        <h5>' + this[i].name + '</h5>\
                        <div class="btn-timetable diet_detail" data-recipe-id="' + this[i].id + '">\
                          <button class="btn btn-light">More Info</button>\
                        </div>\
                    </div>\
                </div>';
            temp_header += temp_recipe;
          });
          temp_header += "</div>";
          $tabContent.append(temp_header); // diet detail

          $(".diet_detail").on("click", function () {
            var locale = $("html").attr("lang");
            var link_url = "/";
            var userkey = $("#user_key").val();
            var diet_id = $(this).attr("data-recipe-id");
            link_url = link_url.concat(locale, "/dietdetail/", userkey, "/recipe/", diet_id);
            window.open(link_url, "_blank");
          }); // end diet detail
        }
      }
    }
  });
}); // end select week change
// diet detail

$(".diet_detail").on("click", function () {
  var locale = $("html").attr("lang");
  var link_url = "/";
  var userkey = $("#user_key").val();
  var diet_id = $(this).attr("data-recipe-id");
  link_url = link_url.concat(locale, "/dietdetail/", userkey, "/recipe/", diet_id);
  window.open(link_url, "_blank");
}); // end diet detail
// age value

$("#age").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_age_empty").show();
    $("#metric_age_small").hide();
    $("#metric_age_big").hide();
  } else {
    $("#metric_age_empty").hide();
    $("#metric_age_big").hide();

    if ($(this).val() < 14) {
      $("#metric_age_small").show();
    } else {
      $("#metric_age_small").hide();

      if ($(this).val() > 99) {
        $("#metric_age_big").show();
      } else {
        $("#metric_age_big").hide();
      }
    }
  }
}); // end age value
// height value

$("#height").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_height_empty").show();
    $("#metric_height_small").hide();
    $("#metric_height_big").hide();
  } else {
    $("#metric_height_empty").hide();
    $("#metric_height_big").hide();

    if ($(this).val() < 135) {
      $("#metric_height_small").show();
    } else {
      $("#metric_height_small").hide();

      if ($(this).val() > 255) {
        $("#metric_height_big").show();
      } else {
        $("#metric_height_big").hide();
      }
    }
  }
}); // end height value
// weight value

$("#weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_weight_empty").show();
    $("#metric_weight_small").hide();
    $("#metric_weight_big").hide();
  } else {
    $("#metric_weight_empty").hide();
    $("#metric_weight_big").hide();

    if ($(this).val() < 40) {
      $("#metric_weight_small").show();
    } else {
      $("#metric_weight_small").hide();

      if ($(this).val() > 180) {
        $("#metric_weight_big").show();
      } else {
        $("#metric_weight_big").hide();
      }
    }
  }
}); // end weight value
// target_weight value

$("#target_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_target_weight_empty").show();
    $("#metric_target_weight_small").hide();
    $("#metric_target_weight_big").hide();
  } else {
    $("#metric_target_weight_empty").hide();
    $("#metric_target_weight_big").hide();

    if ($(this).val() < 40) {
      $("#metric_target_weight_small").show();
    } else {
      $("#metric_target_weight_small").hide();

      if ($(this).val() > 180) {
        $("#metric_target_weight_big").show();
      } else {
        $("#metric_target_weight_big").hide();
      }
    }
  }
}); // end target_weight value
//imperial age value

$("#imperial_age").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_age_empty").show();
    $("#imperial_age_small").hide();
    $("#imperial_age_big").hide();
  } else {
    $("#imperial_age_empty").hide();
    $("#imperial_age_big").hide();

    if ($(this).val() < 14) {
      $("#imperial_age_small").show();
    } else {
      $("#imperial_age_small").hide();

      if ($(this).val() > 99) {
        $("#imperial_age_big").show();
      } else {
        $("#imperial_age_big").hide();
      }
    }
  }
}); // end imperial age value
//imperial ft value

$("#ft").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_ft_empty").show();
    $("#imperial_ft_small").hide();
    $("#imperial_ft_big").hide();
  } else {
    $("#imperial_ft_empty").hide();
    $("#imperial_ft_big").hide();

    if ($(this).val() < 4) {
      $("#imperial_ft_small").show();
    } else {
      $("#imperial_ft_small").hide();

      if ($(this).val() > 8) {
        $("#imperial_ft_big").show();
      } else {
        $("#imperial_ft_big").hide();
      }
    }
  }
}); // end imperial ft value
//imperial inch value

$("#inch").on("blur", function () {
  if ($(this).val() > 11) {
    $("#imperial_inch_big").show();
  } else {
    $("#imperial_inch_big").hide();
  }
}); //end imperial inch value
//imperial weight value

$("#imperial_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_weight_empty").show();
    $("#imperial_weight_small").hide();
    $("#imperial_weight_big").hide();
  } else {
    $("#imperial_weight_empty").hide();
    $("#imperial_weight_big").hide();

    if ($(this).val() < 90) {
      $("#imperial_weight_small").show();
    } else {
      $("#imperial_weight_small").hide();

      if ($(this).val() > 400) {
        $("#imperial_weight_big").show();
      } else {
        $("#imperial_weight_big").hide();
      }
    }
  }
}); // end imperial weight value
// imperial target_weight value

$("#imperial_target_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_target_weight_empty").show();
    $("#imperial_target_weight_small").hide();
    $("#imperial_target_weight_big").hide();
  } else {
    $("#imperial_target_weight_empty").hide();
    $("#imperial_target_weight_big").hide();

    if ($(this).val() < 90) {
      $("#imperial_target_weight_small").show();
    } else {
      $("#imperial_target_weight_small").hide();

      if ($(this).val() > 400) {
        $("#imperial_target_weight_big").show();
      } else {
        $("#imperial_target_weight_big").hide();
      }
    }
  }
}); // end imperial target_weight value
//preloader remove after 3s

$(document).ready(function () {
  $("#btn_show_result").hide();
  var val1 = Math.floor(Math.random() * 10) + 1;
  var val2 = Math.floor(Math.random() * 10) + 1;
  $("#add_val_1").text(val1);
  $("#add_val_2").text(val2);
  setInterval(function () {
    $("#carbs").removeClass("ketogenic-hidden");
    $("#fat").addClass("ketogenic-hidden");
    setTimeout(function () {
      $("#carbs").addClass("ketogenic-hidden");
      $("#protein").removeClass("ketogenic-hidden");
    }, 3000);
    setTimeout(function () {
      $("#protein").addClass("ketogenic-hidden");
      $("#fat").removeClass("ketogenic-hidden");
    }, 6000);
  }, 9000);
}); //end preloader remove after 3s
// price checked

$(document).on("click", "#price-4-weeks", function () {
  $("#price-checked-4").css("background-color", "#78bf4d");
  $("#price-checked-12").css("background-color", "red");
  $("#price-checked-year").css("background-color", "red");
});
$(document).on("click", "#price-12-weeks", function () {
  $("#price-checked-12").css("background-color", "#78bf4d");
  $("#price-checked-4").css("background-color", "red");
  $("#price-checked-year").css("background-color", "red");
});
$(document).on("click", "#price-1-year", function () {
  $("#price-checked-year").css("background-color", "#78bf4d");
  $("#price-checked-4").css("background-color", "red");
  $("#price-checked-12").css("background-color", "red");
}); // end price checked
// Stripe dialog

$(document).on("click", ".show_stripe", function (event) {
  event.preventDefault();
  $("#stripe_modal").modal("show");
}); //end Stripe dialog
// pdf download

$(document).on("click", "#download_pdf", function () {
  var pathname = window.location.pathname;
  var locale = pathname.substring(0, 3);
  var week_val = $("#select_week").val();
  var userkey = $("#user_key").val();
  locale = locale.concat("/pdfdownload/", userkey, "/", week_val);
  console.log(locale);
  window.open(locale, "_blank");
}); // end pdf download
// modal stripe payment

$(document).on("click", "#stripe_pay", function () {
  $("#paypal-button-container").css("display", "none");
});
$(document).on("click", "#show-paypal-button", function () {
  $("#paypal-button-container").show();
}); // end modal stripe payment
// payment check

$(document).on("click", "#payment_check", function () {
  if ($("#payment_check").prop("checked") == false) {
    $("#paypal-button-container").addClass("disabled_button");
    $("#stripe_pay").addClass("disabled_button");
  } else if ($("#payment_check").prop("checked") == true) {
    $("#paypal-button-container").removeClass("disabled_button");
    $("#stripe_pay").removeClass("disabled_button");
  }
}); // end payment check
// Send Contact

$(document).on("click", "#checkbox1", function () {
  if ($("#checkbox1").prop("checked") == false) {
    $("#send_contact").addClass("send-contact");
    $("#send_contact").removeClass("able-to-contact");
  } else if ($("#checkbox1").prop("checked") == true) {
    $("#send_contact").removeClass("send-contact");
    $("#send_contact").addClass("able-to-contact");
  }
});
$(document).on("click", "#send_contact", function () {
  var val1 = parseInt($("#add_val_1").text());
  var val2 = parseInt($("#add_val_2").text());
  var sum = val1 + val2;
  var sum_val = parseInt($("#sum_val").val());

  if (sum_val != sum) {
    $("#sum_val").css("border-color", "#dc5753");
  } else if ($("#name").val().trim().length != 0 && $("#email").val().trim().length != 0 && $("#phone").val().trim().length != 0 && $("#message").val().trim().length != 0) {
    $("#sum_val").css("border-color", "#aaaaa9");
    $("#is-sent").show();
  }
}); // end Send Contact

$("#test-form").unbind("submit").bind("submit", function (event) {
  event.preventDefault();
});

/***/ }),

/***/ "./resources/sass/scss/app.scss":
/*!**************************************!*\
  !*** ./resources/sass/scss/app.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!******************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/scss/app.scss ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\Projects\005_diet_project_laravel\diet_plan_v.1.0\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\Projects\005_diet_project_laravel\diet_plan_v.1.0\resources\sass\scss\app.scss */"./resources/sass/scss/app.scss");


/***/ })

/******/ });