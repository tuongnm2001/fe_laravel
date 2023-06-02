/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
var ctx = document.getElementById('kt_chartjs_1');

// Define colors
var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
var successColor = KTUtil.getCssVariableValue('--kt-success');

// Define fonts
var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

// Chart labels
var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// Chart data
var data = {
  labels: labels,
  datasets: [a]
};

// Chart config
var config = {
  type: 'bar',
  data: data,
  options: {
    plugins: {
      title: {
        display: false
      }
    },
    responsive: true,
    interaction: {
      intersect: false
    },
    scales: {
      x: {
        stacked: true
      },
      y: {
        stacked: true
      }
    }
  },
  defaults: {
    global: {
      defaultFont: fontFamily
    }
  }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);
/******/ })()
;