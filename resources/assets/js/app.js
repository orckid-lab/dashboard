require('./bootstrap');

import Vue from 'vue';
import router from './routes/app.js';

const app = new Vue({
    el: '#app',
	router
});
