(window.webpackJsonp=window.webpackJsonp||[]).push([[216],{546:function(n,t,a){"use strict";a.r(t);var s=a(6),e=Object(s.a)({},(function(){var n=this,t=n.$createElement,a=n._self._c||t;return a("ContentSlotsDistributor",{attrs:{"slot-key":n.$parent.slotKey}},[a("h1",{attrs:{id:"multi-axis-line-chart"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#multi-axis-line-chart"}},[n._v("#")]),n._v(" Multi Axis Line Chart")]),n._v(" "),a("chart-editor",{attrs:{code:"// <block:actions:2>\nconst actions = [\n  {\n    name: 'Randomize',\n    handler(chart) {\n      chart.data.datasets.forEach(dataset => {\n        dataset.data = Utils.numbers({count: chart.data.labels.length, min: -100, max: 100});\n      });\n      chart.update();\n    }\n  },\n];\n// </block:actions>\n\n// <block:setup:1>\nconst DATA_COUNT = 7;\nconst NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};\n\nconst labels = Utils.months({count: 7});\nconst data = {\n  labels: labels,\n  datasets: [\n    {\n      label: 'Dataset 1',\n      data: Utils.numbers(NUMBER_CFG),\n      borderColor: Utils.CHART_COLORS.red,\n      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),\n      yAxisID: 'y',\n    },\n    {\n      label: 'Dataset 2',\n      data: Utils.numbers(NUMBER_CFG),\n      borderColor: Utils.CHART_COLORS.blue,\n      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),\n      yAxisID: 'y1',\n    }\n  ]\n};\n// </block:setup>\n\n// <block:config:0>\nconst config = {\n  type: 'line',\n  data: data,\n  options: {\n    responsive: true,\n    interaction: {\n      mode: 'index',\n      intersect: false,\n    },\n    stacked: false,\n    plugins: {\n      title: {\n        display: true,\n        text: 'Chart.js Line Chart - Multi Axis'\n      }\n    },\n    scales: {\n      y: {\n        type: 'linear',\n        display: true,\n        position: 'left',\n      },\n      y1: {\n        type: 'linear',\n        display: true,\n        position: 'right',\n\n        // grid line settings\n        grid: {\n          drawOnChartArea: false, // only want the grid lines for one axis to show up\n        },\n      },\n    }\n  },\n};\n// </block:config>\n\nmodule.exports = {\n  actions: actions,\n  config: config,\n};\n"}}),a("h2",{attrs:{id:"docs"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#docs"}},[n._v("#")]),n._v(" Docs")]),n._v(" "),a("ul",[a("li",[a("RouterLink",{attrs:{to:"/axes/"}},[n._v("Axes scales")])],1),n._v(" "),a("li",[a("RouterLink",{attrs:{to:"/axes/cartesian/"}},[n._v("Cartesian Axes")]),n._v(" "),a("ul",[a("li",[a("RouterLink",{attrs:{to:"/axes/cartesian/#axis-position"}},[n._v("Axis Position")])],1)])],1),n._v(" "),a("li",[a("RouterLink",{attrs:{to:"/general/data-structures.html"}},[n._v("Data structures ("),a("code",[n._v("labels")]),n._v(")")])],1),n._v(" "),a("li",[a("RouterLink",{attrs:{to:"/Graficas/line.html"}},[n._v("Line")])],1)])],1)}),[],!1,null,null,null);t.default=e.exports}}]);