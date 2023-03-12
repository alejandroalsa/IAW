(window.webpackJsonp=window.webpackJsonp||[]).push([[137],{467:function(t,a,e){"use strict";e.r(a);var s=e(6),r=Object(s.a)({},(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[e("h1",{attrs:{id:"axes"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#axes"}},[t._v("#")]),t._v(" Axes")]),t._v(" "),e("p",[t._v("Axes are an integral part of a chart. They are used to determine how data maps to a pixel value on the chart. In a cartesian chart, there is 1 or more X-axis and 1 or more Y-axis to map points onto the 2-dimensional canvas. These axes are known as "),e("RouterLink",{attrs:{to:"/axes/cartesian/"}},[t._v("'cartesian axes'")]),t._v(".")],1),t._v(" "),e("p",[t._v("In a radial chart, such as a radar chart or a polar area chart, there is a single axis that maps points in the angular and radial directions. These are known as "),e("RouterLink",{attrs:{to:"/axes/radial/"}},[t._v("'radial axes'")]),t._v(".")],1),t._v(" "),e("p",[t._v("Scales in Chart.js >v2.0 are significantly more powerful, but also different than those of v1.0.")]),t._v(" "),e("ul",[e("li",[t._v("Multiple X & Y axes are supported.")]),t._v(" "),e("li",[t._v("A built-in label auto-skip feature detects would-be overlapping ticks and labels and removes every nth label to keep things displaying normally.")]),t._v(" "),e("li",[t._v("Scale titles are supported.")]),t._v(" "),e("li",[t._v("New scale types can be extended without writing an entirely new chart type.")])]),t._v(" "),e("h2",{attrs:{id:"default-scales"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#default-scales"}},[t._v("#")]),t._v(" Default scales")]),t._v(" "),e("p",[t._v("The default "),e("code",[t._v("scaleId")]),t._v("'s for carterian Graficas are "),e("code",[t._v("'x'")]),t._v(" and "),e("code",[t._v("'y'")]),t._v(". For radial Graficas: "),e("code",[t._v("'r'")]),t._v(".\nEach dataset is mapped to a scale for each axis (x, y or r) it requires. The scaleId's that a dataset is mapped to, is determined by the "),e("code",[t._v("xAxisID")]),t._v(", "),e("code",[t._v("yAxisID")]),t._v(" or "),e("code",[t._v("rAxisID")]),t._v(".\nIf the ID for an axis is not specified, first scale for that axis is used. If no scale for an axis is found, a new scale is created.")]),t._v(" "),e("p",[t._v("Some examples:")]),t._v(" "),e("p",[t._v("The following chart will have "),e("code",[t._v("'x'")]),t._v(" and "),e("code",[t._v("'y'")]),t._v(" scales:")]),t._v(" "),e("div",{staticClass:"language-js extra-class"},[e("pre",{pre:!0,attrs:{class:"language-js"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'line'")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("The following chart will have scales "),e("code",[t._v("'x'")]),t._v(" and "),e("code",[t._v("'myScale'")]),t._v(":")]),t._v(" "),e("div",{staticClass:"language-js extra-class"},[e("pre",{pre:!0,attrs:{class:"language-js"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'bar'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("data")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("datasets")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("data")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("1")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("2")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("3")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("options")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("scales")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("myScale")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'logarithmic'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("position")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'right'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token comment"}},[t._v("// `axis` is determined by the position as `'y'`")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("The following chart will have scales "),e("code",[t._v("'xAxis'")]),t._v(" and "),e("code",[t._v("'yAxis'")]),t._v(":")]),t._v(" "),e("div",{staticClass:"language-js extra-class"},[e("pre",{pre:!0,attrs:{class:"language-js"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'bar'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("data")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("datasets")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("yAxisID")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'yAxis'")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("options")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("scales")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("xAxis")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token comment"}},[t._v("// The axis for this scale is determined from the first letter of the id as `'x'`")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token comment"}},[t._v("// It is recommended to specify `position` and / or `axis` explicitly.")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'time'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("The following chart will have "),e("code",[t._v("'r'")]),t._v(" scale:")]),t._v(" "),e("div",{staticClass:"language-js extra-class"},[e("pre",{pre:!0,attrs:{class:"language-js"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'radar'")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("The following chart will have "),e("code",[t._v("'myScale'")]),t._v(" scale:")]),t._v(" "),e("div",{staticClass:"language-js extra-class"},[e("pre",{pre:!0,attrs:{class:"language-js"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'radar'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("scales")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("myScale")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n      "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("axis")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'r'")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n  "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("h2",{attrs:{id:"common-configuration"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#common-configuration"}},[t._v("#")]),t._v(" Common Configuration")]),t._v(" "),e("div",{staticClass:"custom-block tip"},[e("p",{staticClass:"custom-block-title"},[t._v("Note")]),t._v(" "),e("p",[t._v("These are only the common options supported by all axes. Please see specific axis documentation for all of the available options for that axis.")])]),t._v(" "),e("h3",{attrs:{id:"common-options-to-all-axes"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#common-options-to-all-axes"}},[t._v("#")]),t._v(" Common options to all axes")]),t._v(" "),e("p",[t._v("Namespace: "),e("code",[t._v("options.scales[scaleId]")])]),t._v(" "),e("table",[e("thead",[e("tr",[e("th",[t._v("Name")]),t._v(" "),e("th",[t._v("Type")]),t._v(" "),e("th",[t._v("Default")]),t._v(" "),e("th",[t._v("Description")])])]),t._v(" "),e("tbody",[e("tr",[e("td",[e("code",[t._v("type")])]),t._v(" "),e("td",[e("code",[t._v("string")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Type of scale being employed. Custom scales can be created and Registroed with a string key. This allows changing the type of an axis for a chart.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("alignToPixels")])]),t._v(" "),e("td",[e("code",[t._v("boolean")])]),t._v(" "),e("td",[e("code",[t._v("false")])]),t._v(" "),e("td",[t._v("Align pixel values to device pixels.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("backgroundColor")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/general/colors.html"}},[e("code",[t._v("Color")])])],1),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Background color of the scale area.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("display")])]),t._v(" "),e("td",[e("code",[t._v("boolean")]),t._v("|"),e("code",[t._v("string")])]),t._v(" "),e("td",[e("code",[t._v("true")])]),t._v(" "),e("td",[t._v("Controls the axis global visibility (visible when "),e("code",[t._v("true")]),t._v(", hidden when "),e("code",[t._v("false")]),t._v("). When "),e("code",[t._v("display: 'auto'")]),t._v(", the axis is visible only if at least one associated dataset is visible.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("grid")])]),t._v(" "),e("td",[e("code",[t._v("object")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Grid line configuration. "),e("RouterLink",{attrs:{to:"/axes/styling.html#grid-line-configuration"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("min")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("User defined minimum number for the scale, overrides minimum value from data. "),e("RouterLink",{attrs:{to:"/axes/#axis-range-settings"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("max")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("User defined maximum number for the scale, overrides maximum value from data. "),e("RouterLink",{attrs:{to:"/axes/#axis-range-settings"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("reverse")])]),t._v(" "),e("td",[e("code",[t._v("boolean")])]),t._v(" "),e("td",[e("code",[t._v("false")])]),t._v(" "),e("td",[t._v("Reverse the scale.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("stacked")])]),t._v(" "),e("td",[e("code",[t._v("boolean")]),t._v("|"),e("code",[t._v("string")])]),t._v(" "),e("td",[e("code",[t._v("false")])]),t._v(" "),e("td",[t._v("Should the data be stacked. "),e("RouterLink",{attrs:{to:"/axes/#stacking"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("suggestedMax")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Adjustment used when calculating the maximum data value. "),e("RouterLink",{attrs:{to:"/axes/#axis-range-settings"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("suggestedMin")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Adjustment used when calculating the minimum data value. "),e("RouterLink",{attrs:{to:"/axes/#axis-range-settings"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("ticks")])]),t._v(" "),e("td",[e("code",[t._v("object")])]),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Tick configuration. "),e("RouterLink",{attrs:{to:"/axes/#tick-configuration"}},[t._v("more...")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("weight")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td",[e("code",[t._v("0")])]),t._v(" "),e("td",[t._v("The weight used to sort the axis. Higher weights are further away from the chart area.")])])])]),t._v(" "),e("h2",{attrs:{id:"tick-configuration"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#tick-configuration"}},[t._v("#")]),t._v(" Tick Configuration")]),t._v(" "),e("div",{staticClass:"custom-block tip"},[e("p",{staticClass:"custom-block-title"},[t._v("Note")]),t._v(" "),e("p",[t._v("These are only the common tick options supported by all axes. Please see specific axis documentation for all of the available tick options for that axis.")])]),t._v(" "),e("h3",{attrs:{id:"common-tick-options-to-all-axes"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#common-tick-options-to-all-axes"}},[t._v("#")]),t._v(" Common tick options to all axes")]),t._v(" "),e("p",[t._v("Namespace: "),e("code",[t._v("options.scales[scaleId].ticks")])]),t._v(" "),e("table",[e("thead",[e("tr",[e("th",[t._v("Name")]),t._v(" "),e("th",[t._v("Type")]),t._v(" "),e("th",{staticStyle:{"text-align":"center"}},[t._v("Scriptable")]),t._v(" "),e("th",[t._v("Default")]),t._v(" "),e("th",[t._v("Description")])])]),t._v(" "),e("tbody",[e("tr",[e("td",[e("code",[t._v("backdropColor")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/general/colors.html"}},[e("code",[t._v("Color")])])],1),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[e("code",[t._v("'rgba(255, 255, 255, 0.75)'")])]),t._v(" "),e("td",[t._v("Color of label backdrops.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("backdropPadding")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/general/padding.html"}},[e("code",[t._v("Padding")])])],1),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td",[e("code",[t._v("2")])]),t._v(" "),e("td",[t._v("Padding of label backdrop.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("callback")])]),t._v(" "),e("td",[e("code",[t._v("function")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td"),t._v(" "),e("td",[t._v("Returns the string representation of the tick value as it should be displayed on the chart. See "),e("RouterLink",{attrs:{to:"/axes/labelling.html#creating-custom-tick-formats"}},[t._v("callback")]),t._v(".")],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("display")])]),t._v(" "),e("td",[e("code",[t._v("boolean")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td",[e("code",[t._v("true")])]),t._v(" "),e("td",[t._v("If true, show tick labels.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("color")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/general/colors.html"}},[e("code",[t._v("Color")])])],1),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[e("code",[t._v("Chart.defaults.color")])]),t._v(" "),e("td",[t._v("Color of ticks.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("font")])]),t._v(" "),e("td",[e("code",[t._v("Font")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[e("code",[t._v("Chart.defaults.font")])]),t._v(" "),e("td",[t._v("See "),e("RouterLink",{attrs:{to:"/general/fonts.html"}},[t._v("Fonts")])],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("major")])]),t._v(" "),e("td",[e("code",[t._v("object")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td",[e("code",[t._v("{}")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/axes/styling.html#major-tick-configuration"}},[t._v("Major ticks configuration")]),t._v(".")],1)]),t._v(" "),e("tr",[e("td",[e("code",[t._v("padding")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td",[e("code",[t._v("3")])]),t._v(" "),e("td",[t._v("Sets the offset of the tick labels from the axis")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("showLabelBackdrop")])]),t._v(" "),e("td",[e("code",[t._v("boolean")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[e("code",[t._v("true")]),t._v(" for radial scale, "),e("code",[t._v("false")]),t._v(" otherwise")]),t._v(" "),e("td",[t._v("If true, draw a background behind the tick labels.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("textStrokeColor")])]),t._v(" "),e("td",[e("RouterLink",{attrs:{to:"/general/colors.html"}},[e("code",[t._v("Color")])])],1),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[t._v("``")]),t._v(" "),e("td",[t._v("The color of the stroke around the text.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("textStrokeWidth")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}},[t._v("Yes")]),t._v(" "),e("td",[e("code",[t._v("0")])]),t._v(" "),e("td",[t._v("Stroke width around the text.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("z")])]),t._v(" "),e("td",[e("code",[t._v("number")])]),t._v(" "),e("td",{staticStyle:{"text-align":"center"}}),t._v(" "),e("td",[e("code",[t._v("0")])]),t._v(" "),e("td",[t._v("z-index of tick layer. Useful when ticks are drawn on chart area. Values <= 0 are drawn under datasets, > 0 on top.")])])])]),t._v(" "),e("h2",{attrs:{id:"axis-range-settings"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#axis-range-settings"}},[t._v("#")]),t._v(" Axis Range Settings")]),t._v(" "),e("p",[t._v("Given the number of axis range settings, it is important to understand how they all interact with each other.")]),t._v(" "),e("p",[t._v("The "),e("code",[t._v("suggestedMax")]),t._v(" and "),e("code",[t._v("suggestedMin")]),t._v(" settings only change the data values that are used to scale the axis. These are useful for extending the range of the axis while maintaining the auto fit behaviour.")]),t._v(" "),e("div",{staticClass:"language-javascript extra-class"},[e("pre",{pre:!0,attrs:{class:"language-javascript"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" minDataValue "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" Math"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),e("span",{pre:!0,attrs:{class:"token function"}},[t._v("min")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("mostNegativeValue"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" options"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("suggestedMin"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" maxDataValue "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" Math"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),e("span",{pre:!0,attrs:{class:"token function"}},[t._v("max")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("mostPositiveValue"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" options"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("suggestedMax"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("In this example, the largest positive value is 50, but the data maximum is expanded out to 100. However, because the lowest data value is below the "),e("code",[t._v("suggestedMin")]),t._v(" setting, it is ignored.")]),t._v(" "),e("div",{staticClass:"language-javascript extra-class"},[e("pre",{pre:!0,attrs:{class:"language-javascript"}},[e("code",[e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("let")]),t._v(" chart "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("Chart")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("ctx"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("type")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'line'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("data")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("datasets")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n            "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("label")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'First dataset'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("data")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("0")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("20")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("40")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("50")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("labels")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'January'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'February'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'March'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token string"}},[t._v("'April'")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("options")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("scales")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n            "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("y")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n                "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("suggestedMin")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("50")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n                "),e("span",{pre:!0,attrs:{class:"token literal-property property"}},[t._v("suggestedMax")]),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v(":")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("100")]),t._v("\n            "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n        "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n    "),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("p",[t._v("In contrast to the "),e("code",[t._v("suggested*")]),t._v(" settings, the "),e("code",[t._v("min")]),t._v(" and "),e("code",[t._v("max")]),t._v(" settings set explicit ends to the axes. When these are set, some data points may not be visible.")]),t._v(" "),e("h2",{attrs:{id:"stacking"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#stacking"}},[t._v("#")]),t._v(" Stacking")]),t._v(" "),e("p",[t._v("By default data is not stacked. If the "),e("code",[t._v("stacked")]),t._v(" option of the value scale (y-axis on horizontal chart) is "),e("code",[t._v("true")]),t._v(", positive and negative values are stacked separately. Additionally a "),e("code",[t._v("stack")]),t._v(" option can be defined per dataset to further divide into stack groups "),e("RouterLink",{attrs:{to:"/general/data-structures/#dataset-configuration"}},[t._v("more...")]),t._v(".\nFor some Graficas, you might want to stack positive and negative values together. That can be achieved by specifying "),e("code",[t._v("stacked: 'single'")]),t._v(".")],1),t._v(" "),e("h2",{attrs:{id:"callbacks"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#callbacks"}},[t._v("#")]),t._v(" Callbacks")]),t._v(" "),e("p",[t._v("There are a number of config callbacks that can be used to change parameters in the scale at different points in the update process. The options are supplied at the top level of the axis options.")]),t._v(" "),e("p",[t._v("Namespace: "),e("code",[t._v("options.scales[scaleId]")])]),t._v(" "),e("table",[e("thead",[e("tr",[e("th",[t._v("Name")]),t._v(" "),e("th",[t._v("Arguments")]),t._v(" "),e("th",[t._v("Description")])])]),t._v(" "),e("tbody",[e("tr",[e("td",[e("code",[t._v("beforeUpdate")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback called before the update process starts.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeSetDimensions")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before dimensions are set.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterSetDimensions")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after dimensions are set.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeDataLimits")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before data limits are determined.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterDataLimits")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after data limits are determined.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeBuildTicks")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before ticks are created.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterBuildTicks")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after ticks are created. Useful for filtering ticks.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeTickToLabelConversion")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before ticks are converted into strings.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterTickToLabelConversion")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after ticks are converted into strings.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeCalculateLabelRotation")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before tick rotation is determined.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterCalculateLabelRotation")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after tick rotation is determined.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("beforeFit")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs before the scale fits to the canvas.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterFit")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs after the scale fits to the canvas.")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("afterUpdate")])]),t._v(" "),e("td",[e("code",[t._v("axis")])]),t._v(" "),e("td",[t._v("Callback that runs at the end of the update process.")])])])]),t._v(" "),e("h3",{attrs:{id:"updating-axis-defaults"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#updating-axis-defaults"}},[t._v("#")]),t._v(" Updating Axis Defaults")]),t._v(" "),e("p",[t._v("The default configuration for a scale can be easily changed. All you need to do is set the new options to "),e("code",[t._v("Chart.defaults.scales[type]")]),t._v(".")]),t._v(" "),e("p",[t._v("For example, to set the minimum value of 0 for all linear scales, you would do the following. Any linear scales created after this time would now have a minimum of 0.")]),t._v(" "),e("div",{staticClass:"language-javascript extra-class"},[e("pre",{pre:!0,attrs:{class:"language-javascript"}},[e("code",[t._v("Chart"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("defaults"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("scales"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("linear"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(".")]),t._v("min "),e("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),e("span",{pre:!0,attrs:{class:"token number"}},[t._v("0")]),e("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),e("h2",{attrs:{id:"creating-new-axes"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#creating-new-axes"}},[t._v("#")]),t._v(" Creating New Axes")]),t._v(" "),e("p",[t._v("To create a new axis, see the "),e("RouterLink",{attrs:{to:"/developers/axes.html"}},[t._v("developer docs")]),t._v(".")],1)])}),[],!1,null,null,null);a.default=r.exports}}]);