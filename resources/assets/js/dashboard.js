require('./bootstrap');

import Vue from 'vue';
import router from './routes/dashboard.js';

const app = new Vue({
	el: '#app',
	router
});
