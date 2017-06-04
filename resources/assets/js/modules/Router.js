import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default class {
	constructor(){
		this._path = 'views';

		this._routes = [];
	}

	path(path){
		this._path = path;
	}

	get(path, component){
		if(typeof component === 'string'){
			component = require(`../${this._path}/${component}.vue`);
		}

		this._routes.push({
			path,
			component,
		})
	}

	routes(){
		return new VueRouter({
			routes: this._routes
		});
	}
}