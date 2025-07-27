// Import vendor JS
import '../vendor/plugins/js/plugins.min.js';
import '../vendor/bootstrap/css/bootstrap.min.css';


// Import Theme JS
import $ from 'jquery';
import './theme.js';
import './demos/demo-accounting-1.js';
import './custom.js';
import './theme.init.js';


import.meta.glob([
    '../images/**', // Process all images in the resources/images directory
]);

window.$ = $;
window.jQuery = $;

// Now import plugins that require jQuery
// import './path-to-your-plugins/plugins.min.js';

import '../css/app.css';
