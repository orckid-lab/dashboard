require('./bootstrap');

window.Vue = require('vue');

import router from './routes/dashboard.js';

const app = new Vue({
	el: '#app',
	router
});
