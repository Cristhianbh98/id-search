<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Reconocer Documentos</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <script>
      var defaultPDF = "{{ asset('documents/default.pdf') }}"
      var assetsURL = "{{ asset('documents/') }}"
    </script>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-4">
          <svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" width="100%" height="32.836163mm" viewBox="0 0 170.26904 32.836163" id="svg683" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" sodipodi:docname="el-cambio-sigue.svg"><defs id="defs680"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath18"><path d="M 0,566.929 H 566.929 V 0 H 0 Z" id="path16"></path></clipPath></defs><g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-13.026498,-67.89972)"><g id="g12" transform="matrix(0.35277777,0,0,-0.35277777,-1.8388514,189.31782)"><g id="g14" clip-path="url(#clipPath18)"><g id="g20" transform="translate(419.1261,334.4269)"><path d="m 0,0 c 0,-0.366 -0.193,-0.564 -0.579,-0.594 l -10.939,-0.855 v -4.824 l 9.514,0.743 c 0.386,0.03 0.579,-0.138 0.579,-0.504 v -2.805 c 0,-0.386 -0.193,-0.589 -0.579,-0.609 l -9.514,-0.743 v -4.632 l 10.939,0.855 C -0.193,-13.938 0,-14.106 0,-14.472 v -2.82 c 0,-0.386 -0.193,-0.594 -0.579,-0.624 l -15.11,-1.18 c -0.406,-0.032 -0.609,0.145 -0.609,0.531 V 1.562 c 0,0.386 0.203,0.595 0.609,0.627 l 15.11,1.179 C -0.193,3.398 0,3.221 0,2.835 Z" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path22"></path></g><g id="g24" transform="translate(425.7029,316.5794)"><path d="M 0,0 C -1.415,-0.111 -2.543,0.126 -3.384,0.708 -4.225,1.29 -4.646,2.141 -4.646,3.259 V 22.05 c 0,0.386 0.193,0.594 0.579,0.625 l 3.399,0.265 c 0.386,0.03 0.579,-0.148 0.579,-0.534 V 5.069 C -0.089,4.298 0.257,3.939 0.95,3.993 1.296,4.02 1.598,4.078 1.855,4.168 2.261,4.239 2.474,4.092 2.494,3.728 L 2.805,1.229 C 2.845,0.885 2.681,0.66 2.315,0.552 1.484,0.24 0.712,0.056 0,0" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path26"></path></g><g id="g28" transform="translate(510.1072,306.0383)"><path d="m 0,0 c -1.197,-0.094 -2.164,-0.543 -2.902,-1.347 -0.737,-0.805 -1.105,-1.826 -1.105,-3.063 0,-1.237 0.368,-2.197 1.105,-2.882 0.738,-0.684 1.705,-0.98 2.902,-0.887 1.197,0.094 2.165,0.541 2.902,1.34 0.737,0.8 1.106,1.818 1.106,3.055 0,1.237 -0.369,2.2 -1.106,2.89 C 2.165,-0.204 1.197,0.093 0,0" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path30"></path></g><g id="g32" transform="translate(484.9819,304.2842)"><path d="m 0,0 c -1.134,-0.089 -2.06,-0.559 -2.783,-1.412 -0.723,-0.854 -1.084,-1.918 -1.084,-3.195 0,-1.257 0.361,-2.257 1.084,-3.002 0.723,-0.745 1.649,-1.074 2.783,-0.985 1.133,0.088 2.071,0.562 2.813,1.422 0.742,0.859 1.113,1.917 1.113,3.174 0,1.277 -0.371,2.284 -1.113,3.023 C 2.071,-0.237 1.133,0.088 0,0" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path34"></path></g><g id="g36" transform="translate(434.4304,300.3367)"><path d="m 0,0 c -1.158,-0.09 -2.1,-0.562 -2.827,-1.416 -0.728,-0.854 -1.091,-1.918 -1.091,-3.195 0,-1.257 0.363,-2.257 1.091,-3.002 0.727,-0.744 1.669,-1.072 2.827,-0.981 1.138,0.089 2.061,0.561 2.768,1.418 0.708,0.857 1.062,1.914 1.062,3.17 0,1.277 -0.354,2.286 -1.062,3.027 C 2.061,-0.238 1.138,0.089 0,0" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path38"></path></g><g id="g40" transform="translate(516.1704,296.7225)"><path d="m 0,0 c -1.528,-1.559 -3.55,-2.437 -6.063,-2.633 -2.514,-0.196 -4.534,0.366 -6.063,1.686 -1.529,1.321 -2.294,3.158 -2.294,5.513 0,2.376 0.765,4.34 2.294,5.894 1.529,1.554 3.549,2.43 6.063,2.626 C -3.55,13.282 -1.528,12.72 0,11.4 1.529,10.079 2.294,8.237 2.294,5.872 2.294,3.517 1.529,1.56 0,0 m -16.685,15.21 c -0.52,-0.525 -1.163,-0.818 -1.929,-0.878 -0.768,-0.06 -1.411,0.132 -1.93,0.577 -0.52,0.444 -0.78,1.02 -0.78,1.728 0,0.707 0.26,1.319 0.78,1.834 0.519,0.516 1.162,0.803 1.93,0.863 0.766,0.06 1.409,-0.127 1.929,-0.562 0.519,-0.434 0.779,-1.005 0.779,-1.712 0,-0.708 -0.26,-1.325 -0.779,-1.85 m 0.349,-17.576 c 0,-0.386 -0.193,-0.594 -0.579,-0.624 l -3.4,-0.266 c -0.385,-0.03 -0.578,0.148 -0.578,0.534 v 13.581 c 0,0.386 0.193,0.594 0.578,0.624 l 3.4,0.266 c 0.386,0.03 0.579,-0.148 0.579,-0.534 z m -8.693,0.449 c -1.489,-1.581 -3.421,-2.464 -5.796,-2.65 -1.642,-0.128 -3.063,0.207 -4.26,1.004 V -3.83 c 0,-0.386 -0.203,-0.595 -0.608,-0.627 l -3.34,-0.261 c -0.386,-0.03 -0.579,0.148 -0.579,0.534 V 17.16 c 0,0.386 0.193,0.594 0.579,0.625 l 3.429,0.267 c 0.386,0.031 0.579,-0.147 0.579,-0.534 v -7.97 c 1.197,0.944 2.597,1.479 4.2,1.604 2.375,0.186 4.307,-0.393 5.796,-1.736 1.49,-1.344 2.234,-3.178 2.234,-5.504 0,-2.305 -0.744,-4.249 -2.234,-5.829 m -16.945,-2.451 c 0,-0.386 -0.203,-0.595 -0.608,-0.627 l -3.414,-0.266 c -0.386,-0.031 -0.579,0.147 -0.579,0.534 V 2.59 c 0,1.029 -0.282,1.838 -0.846,2.427 -0.564,0.59 -1.326,0.847 -2.286,0.772 -0.831,-0.065 -1.499,-0.416 -2.004,-1.054 -0.505,-0.639 -0.757,-1.452 -0.757,-2.442 v -7.481 c 0,-0.386 -0.193,-0.594 -0.579,-0.624 l -3.428,-0.268 c -0.386,-0.03 -0.579,0.148 -0.579,0.534 v 7.318 c 0,1.028 -0.265,1.839 -0.794,2.431 -0.53,0.592 -1.23,0.854 -2.101,0.786 -0.93,-0.072 -1.674,-0.43 -2.233,-1.072 -0.56,-0.643 -0.839,-1.458 -0.839,-2.448 v -7.481 c 0,-0.386 -0.193,-0.594 -0.579,-0.624 l -3.399,-0.266 c -0.386,-0.03 -0.579,0.148 -0.579,0.534 v 9.544 c 0,0.792 -0.396,1.157 -1.187,1.095 -0.08,-0.006 -0.302,-0.053 -0.668,-0.141 -0.446,-0.035 -0.668,0.106 -0.668,0.423 v 2.493 c 0,0.347 0.153,0.581 0.46,0.704 0.624,0.296 1.351,0.477 2.182,0.541 1.742,0.136 2.939,-0.388 3.592,-1.575 1.237,1.334 2.958,2.087 5.165,2.259 2.048,0.16 3.651,-0.432 4.809,-1.776 1.257,1.533 3.028,2.388 5.314,2.567 1.989,0.155 3.587,-0.334 4.794,-1.466 1.207,-1.133 1.811,-2.714 1.811,-4.742 z m -28.945,-2.958 c -0.831,-0.312 -1.589,-0.496 -2.271,-0.549 -1.86,-0.145 -3.137,0.374 -3.83,1.556 -1.415,-1.347 -3.122,-2.099 -5.121,-2.255 -2.355,-0.184 -4.274,0.396 -5.758,1.74 -1.485,1.344 -2.227,3.173 -2.227,5.489 0,2.335 0.744,4.288 2.234,5.859 1.489,1.571 3.406,2.448 5.751,2.631 1.683,0.131 3.122,-0.221 4.32,-1.058 v 0.327 c 0,0.386 0.193,0.594 0.578,0.624 l 3.355,0.262 c 0.386,0.03 0.574,-0.148 0.564,-0.535 v -9.544 c 0,-0.792 0.336,-1.161 1.009,-1.109 0.366,0.029 0.678,0.088 0.936,0.177 0.405,0.071 0.618,-0.075 0.638,-0.44 l 0.311,-2.499 c 0.04,-0.343 -0.123,-0.568 -0.489,-0.676 m -36.293,2.939 c 1.227,-1.16 2.84,-1.663 4.839,-1.507 1.415,0.111 2.637,0.56 3.666,1.348 1.029,0.788 1.756,1.837 2.182,3.146 0.119,0.356 0.341,0.547 0.668,0.572 l 3.74,0.292 c 0.426,0.033 0.609,-0.155 0.55,-0.566 -0.505,-2.553 -1.737,-4.64 -3.696,-6.263 -1.96,-1.622 -4.34,-2.543 -7.14,-2.761 -3.443,-0.269 -6.219,0.533 -8.327,2.407 -2.108,1.874 -3.161,4.483 -3.161,7.828 0,3.325 1.053,6.086 3.161,8.284 2.108,2.198 4.884,3.432 8.327,3.701 2.8,0.219 5.173,-0.336 7.117,-1.663 1.945,-1.328 3.184,-3.218 3.719,-5.67 0.059,-0.401 -0.124,-0.618 -0.55,-0.651 l -3.74,-0.292 c -0.327,-0.026 -0.549,0.12 -0.668,0.437 -0.426,1.264 -1.146,2.212 -2.16,2.845 -1.014,0.633 -2.244,0.894 -3.688,0.781 -2.009,-0.157 -3.625,-0.917 -4.846,-2.279 -1.223,-1.362 -1.833,-3.067 -1.833,-5.115 0,-2.088 0.613,-3.713 1.84,-4.874 m -11.844,19.989 V -16.431 L 8.62,-6.281 v 32.034 z" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path42"></path></g><g id="g44" transform="translate(414.4349,256.1866)"><path d="m 0,0 c -2.632,-0.206 -4.834,0.226 -6.605,1.295 -1.771,1.069 -2.801,2.597 -3.087,4.583 -0.06,0.401 0.123,0.618 0.549,0.652 l 3.622,0.282 C -5.215,6.836 -5.002,6.69 -4.883,6.372 -4.636,5.501 -4.064,4.836 -3.169,4.376 -2.274,3.917 -1.173,3.738 0.134,3.84 1.252,3.927 2.138,4.209 2.79,4.686 3.444,5.162 3.77,5.766 3.77,6.499 3.77,7.122 3.538,7.609 3.073,7.958 2.607,8.308 2.006,8.545 1.269,8.671 0.532,8.796 -0.289,8.895 -1.195,8.968 -2.1,9.041 -3.003,9.174 -3.904,9.366 c -0.9,0.191 -1.719,0.466 -2.456,0.824 -0.737,0.358 -1.341,0.94 -1.811,1.744 -0.47,0.804 -0.705,1.805 -0.705,3.003 0,1.969 0.786,3.621 2.36,4.956 1.574,1.335 3.626,2.101 6.16,2.299 2.375,0.186 4.401,-0.208 6.078,-1.18 C 7.399,20.039 8.401,18.636 8.728,16.801 8.826,16.423 8.644,16.216 8.179,16.179 L 4.542,15.895 c -0.307,-0.024 -0.534,0.112 -0.683,0.407 -0.227,0.774 -0.683,1.344 -1.366,1.712 -0.682,0.367 -1.543,0.51 -2.582,0.429 -1.079,-0.084 -1.949,-0.38 -2.612,-0.887 -0.663,-0.507 -0.995,-1.146 -0.995,-1.918 0,-0.752 0.307,-1.319 0.92,-1.702 0.614,-0.382 1.388,-0.614 2.323,-0.694 C 0.482,13.161 1.487,13.037 2.56,12.869 3.634,12.7 4.636,12.474 5.566,12.19 6.496,11.907 7.271,11.354 7.889,10.531 8.508,9.709 8.817,8.629 8.817,7.294 8.817,5.305 8.01,3.644 6.397,2.31 4.784,0.977 2.652,0.207 0,0" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path46"></path></g><g id="g48" transform="translate(426.1627,257.5625)"><path d="m 0,0 c -0.386,-0.03 -0.579,0.148 -0.579,0.534 v 13.581 c 0,0.386 0.193,0.594 0.579,0.624 l 3.399,0.266 c 0.386,0.03 0.579,-0.148 0.579,-0.534 V 0.89 C 3.978,0.504 3.785,0.296 3.399,0.265 Z M 3.629,18.466 C 3.11,17.941 2.466,17.648 1.7,17.588 c -0.767,-0.06 -1.41,0.133 -1.93,0.577 -0.519,0.444 -0.779,1.02 -0.779,1.728 0,0.707 0.26,1.318 0.779,1.834 0.52,0.516 1.163,0.804 1.93,0.864 0.766,0.059 1.41,-0.128 1.929,-0.562 0.52,-0.435 0.78,-1.006 0.78,-1.713 0,-0.708 -0.26,-1.325 -0.78,-1.85" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path50"></path></g><g id="g52" transform="translate(440.5621,261.8484)"><path d="M 0,0 C 1.138,0.089 2.061,0.557 2.768,1.404 3.476,2.25 3.83,3.302 3.83,4.559 3.83,5.816 3.471,6.809 2.754,7.54 2.036,8.271 1.118,8.593 0,8.505 -1.138,8.417 -2.076,7.945 -2.813,7.091 -3.55,6.236 -3.918,5.191 -3.918,3.954 c 0,-1.257 0.363,-2.252 1.09,-2.987 C -2.1,0.232 -1.158,-0.09 0,0 m 7.852,12.191 c 0.386,0.03 0.579,-0.148 0.579,-0.534 V -2.874 c 0,-2.147 -0.75,-3.943 -2.249,-5.385 -1.499,-1.444 -3.466,-2.26 -5.9,-2.45 -2.187,-0.171 -4.015,0.193 -5.484,1.093 -1.47,0.899 -2.358,2.178 -2.664,3.836 -0.1,0.379 0.083,0.586 0.548,0.622 l 3.4,0.266 c 0.286,0.022 0.509,-0.114 0.668,-0.409 0.197,-0.588 0.613,-1.035 1.246,-1.342 0.633,-0.307 1.386,-0.426 2.256,-0.358 1.099,0.086 1.969,0.468 2.613,1.147 0.642,0.678 0.965,1.542 0.965,2.591 v 1.276 c -1.158,-0.961 -2.564,-1.506 -4.216,-1.635 -2.335,-0.183 -4.253,0.402 -5.752,1.755 -1.499,1.352 -2.248,3.174 -2.248,5.465 0,2.29 0.749,4.224 2.248,5.801 1.499,1.576 3.417,2.456 5.752,2.638 1.682,0.132 3.122,-0.221 4.319,-1.058 v 0.327 c 0,0.386 0.188,0.594 0.564,0.623 z" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path54"></path></g><g id="g56" transform="translate(469.8935,261.4971)"><path d="m 0,0 c 0.02,-0.345 -0.134,-0.569 -0.46,-0.674 -0.851,-0.314 -1.618,-0.498 -2.301,-0.551 -1.969,-0.154 -3.329,0.328 -4.081,1.448 -1.277,-1.278 -2.999,-2.001 -5.166,-2.17 -1.969,-0.154 -3.555,0.336 -4.757,1.469 -1.202,1.133 -1.804,2.714 -1.804,4.742 v 7.927 c 0,0.386 0.194,0.594 0.579,0.624 l 3.4,0.265 c 0.386,0.03 0.579,-0.148 0.579,-0.534 V 5.229 c 0,-1.029 0.288,-1.838 0.868,-2.426 0.579,-0.588 1.353,-0.844 2.322,-0.769 1.01,0.079 1.819,0.441 2.427,1.088 0.609,0.646 0.913,1.469 0.913,2.468 v 7.466 c 0,0.386 0.193,0.594 0.579,0.625 l 3.429,0.267 c 0.386,0.031 0.579,-0.147 0.579,-0.533 V 3.87 c 0,-0.791 0.336,-1.161 1.009,-1.108 0.366,0.029 0.678,0.087 0.935,0.177 0.386,0.069 0.609,-0.077 0.668,-0.438 z" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path58"></path></g><g id="g60" transform="translate(475.0907,270.0222)"><path d="M 0,0 7.258,0.567 C 7.218,1.513 6.885,2.261 6.256,2.811 5.628,3.361 4.809,3.596 3.8,3.517 2.81,3.44 1.964,3.074 1.262,2.421 0.559,1.767 0.138,0.96 0,0 m 3.948,-8.821 c -2.493,-0.194 -4.51,0.368 -6.048,1.688 -1.539,1.32 -2.309,3.157 -2.309,5.512 0,2.375 0.745,4.338 2.234,5.889 1.49,1.551 3.441,2.421 5.856,2.609 2.434,0.191 4.364,-0.369 5.788,-1.678 1.425,-1.308 2.138,-3.125 2.138,-5.451 0,-0.119 -0.005,-0.292 -0.015,-0.52 -0.01,-0.229 -0.015,-0.402 -0.015,-0.521 -0.059,-0.351 -0.272,-0.541 -0.638,-0.569 L 0.03,-2.714 c 0.247,-0.892 0.729,-1.571 1.447,-2.039 0.717,-0.469 1.571,-0.665 2.56,-0.587 1.118,0.087 1.95,0.454 2.494,1.1 0.267,0.219 0.51,0.341 0.727,0.368 l 3.414,0.267 c 0.227,0.018 0.386,-0.027 0.475,-0.134 0.089,-0.107 0.089,-0.252 0,-0.437 C 10.622,-5.474 9.722,-6.539 8.445,-7.371 7.169,-8.203 5.67,-8.686 3.948,-8.821" style="fill:#0258a5;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path62"></path></g><path d="m 386.123,251.609 h -2.173 v 91.217 h 2.173 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path64"></path><g id="g66" transform="translate(227.784,296.504)"><path d="m 0,0 v 29.64 c 0,0.657 0.531,1.189 1.19,1.189 h 12.881 z m 29.684,45.631 c -0.194,0.421 -0.614,0.695 -1.082,0.695 h -6.694 c -0.004,0 -0.007,-0.003 -0.011,-0.003 h -50.252 v 0 h -14.63 c -0.657,0 -1.197,-0.539 -1.191,-1.199 l 0.226,-26.862 c 0.007,-1.158 -1.481,-1.645 -2.158,-0.704 l -20.328,28.273 c -0.223,0.312 -0.585,0.497 -0.965,0.497 h -14.176 c -0.658,0 -1.189,-0.536 -1.189,-1.192 l 0.017,-23.666 -11.077,24.161 c -0.194,0.421 -0.614,0.695 -1.082,0.695 h -6.694 c -0.466,0 -0.89,-0.276 -1.082,-0.697 l -13.81,-30.258 -4.897,29.954 c -0.094,0.576 -0.591,0.999 -1.172,0.999 h -8.411 c -0.421,0 -0.812,-0.223 -1.025,-0.587 l -15.688,-26.681 c -0.461,-0.783 -1.596,-0.781 -2.053,0.004 l -15.519,26.671 c -0.214,0.368 -0.605,0.593 -1.028,0.593 h -8.528 c -0.579,0 -1.072,-0.419 -1.17,-0.993 l -9.661,-57.233 h 16.74 l 4.032,22.577 c 0.19,1.061 1.58,1.344 2.166,0.441 l 12.994,-19.915 c 0.467,-0.717 1.521,-0.719 1.991,-0.002 l 13.025,19.923 c 0.597,0.911 1.996,0.609 2.169,-0.464 l 3.587,-22.56 h 16.906 l -0.001,10e-4 h 0.021 l 12.698,28.664 c 0.418,0.941 1.758,0.943 2.176,10e-4 l 12.775,-28.665 h 1.641 15.276 0.153 l 0.002,28.312 c 0,1.154 1.477,1.632 2.151,0.693 l 20.839,-29.005 15.95,-0.004 v 42.734 l 11.547,0.022 c 0.658,0.001 1.196,-0.53 1.196,-1.188 l 0.045,-41.555 10.136,-0.007 -0.001,-0.002 h 2.665 L 0,-11.903 v 0.002 h 11.494 l 12.699,28.664 c 0.417,0.941 1.757,0.943 2.175,10e-4 L 39.143,-11.901 H 56.06 Z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path68"></path></g><g id="g70" transform="translate(365.6791,321.1833)"><path d="M 0,0 H -47.097 V 21.642 L 0,21.638 Z m 0,-36.581 h -47.096 v 21.629 H 0 Z m 1.3,59.566 v 0.001 h -14.678 l -92.767,0.008 0.619,-1.348 h 0.004 v 10e-4 l 43.643,-0.004 V -0.001 h -33.711 -0.003 l 6.861,-14.95 v 0 h 26.854 v -21.63 h -16.929 l 0.619,-1.348 h 2.381 13.929 14.781 0.001 32.599 H 1.3 1.347 v 60.914 z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path72"></path></g><path d="m 318.583,284.602 h 47.096 v 21.629 h -47.096 z" style="fill:#009fe3;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path74"></path><g id="g76" transform="translate(318.5824,321.1833)"><path d="M 0,0 H 47.097 V 21.638 L 0,21.642 Z" style="fill:#009fe3;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path78"></path></g><g id="g80" transform="translate(303.8005,321.1822)"><path d="M 0,0 V 21.644 L -43.643,21.648 -33.712,0 Z" style="fill:#009fe3;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path82"></path></g><g id="g84" transform="translate(303.8009,306.232)"><path d="m 0,0 h -26.853 l 2.755,-6.006 7.17,-15.624 H 0 Z" style="fill:#009fe3;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path86"></path></g><g id="g88" transform="translate(143.1931,265.9494)"><path d="m 0,0 -2.796,-7.1 h 5.538 z m -4.222,-10.801 -1.398,-3.537 h -5.017 l 8.279,19.191 h 5.017 l 8.088,-19.191 H 5.538 l -1.371,3.537 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path90"></path></g><g id="g92" transform="translate(168.7465,255.6963)"><path d="m 0,0 v -4.085 h -13.022 v 19.191 h 4.88 V 0 Z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path94"></path></g><g id="g96" transform="translate(187.8017,267.7314)"><path d="m 0,0 -2.824,-3.344 c -1.261,1.535 -3.125,2.494 -4.825,2.494 -3.043,0 -5.346,-2.412 -5.346,-5.565 0,-3.208 2.303,-5.648 5.346,-5.648 1.618,0 3.482,0.878 4.825,2.248 l 2.851,-3.015 c -2.056,-2.111 -5.099,-3.509 -7.923,-3.509 -5.784,0 -10.088,4.249 -10.088,9.869 0,5.538 4.414,9.705 10.253,9.705 C -4.88,3.235 -1.919,1.974 0,0" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path98"></path></g><g id="g100" transform="translate(198.4408,265.9494)"><path d="m 0,0 -2.796,-7.1 h 5.538 z m -4.222,-10.801 -1.398,-3.537 h -5.017 l 8.279,19.191 h 5.017 l 8.088,-19.191 H 5.538 l -1.371,3.537 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path102"></path></g><g id="g104" transform="translate(223.9941,255.6963)"><path d="m 0,0 v -4.085 h -13.022 v 19.191 h 4.88 V 0 Z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path106"></path></g><g id="g108" transform="translate(231.2059,255.5041)"><path d="m 0,0 h 3.482 c 2.988,0 5.127,2.303 5.127,5.675 0,3.4 -2.249,5.73 -5.347,5.73 H 0 Z m 3.372,15.298 c 6.031,0 10.198,-3.893 10.198,-9.596 0,-5.675 -4.221,-9.595 -10.39,-9.595 h -8.06 v 19.191 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path110"></path></g><g id="g112" transform="translate(251.0294,272.4744)"><path d="m 0,0 h -3.619 l 2.906,4.606 4.277,-1.508 z m -3.674,-1.672 h 4.88 v -19.191 h -4.88 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path114"></path></g><g id="g116" transform="translate(264.6555,265.9494)"><path d="m 0,0 -2.796,-7.1 h 5.538 z m -4.222,-10.801 -1.398,-3.537 h -5.017 l 8.279,19.191 h 5.017 l 8.088,-19.191 H 5.538 l -1.371,3.537 z" style="fill:#004f9f;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path118"></path></g></g></g></g></svg>
        </div>
      </div>

      <hr/>

      <div class="row justify-content-center mt-2">
        <div class="col-md-7">
          <h1 class="text-primary text-center">Validación de credenciales</h1>
          <form class="mt-4 d-flex justify-content-center align-items-center" id="form">
            <div class="form-group d-flex justify-content-center align-items-center">
              <label for="cedula">Cédula:</label>
              <input type="number" class="form-control ms-1" id="cedula" placeholder="Ingresa la cedula..." pattern="[0-9]*"/>
            </div>
            <button type="submit" class="btn btn-primary ms-1">Comprobar</button>
          </form>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-10 d-flex justify-content-center">
          <canvas id="pdf"></canvas>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>