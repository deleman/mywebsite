/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueResource from 'vue-resource';

import VueRouter from 'vue-router';
import mydropdown from './components/navbar/Dropdown.vue'
import mynavbar from './components/Navbar.vue'
import search from './components/navbar/search.vue'


window.Vue = require('vue');
window.Vue.use(VueRouter);
window.Vue.use(VueResource);

const routes = [
    {path:'/', component:mydropdown, name:'mydropdown'},
    {path:'/mynavbar', component:mynavbar, name:'mynavbar'},
    {path:'/search', component:search, name:'search'}
];

const router = new VueRouter({
    mode: 'history',
    routes
});


// Vue.component('exampleme', require('./components/ExampleComponent.vue').default);
//new vue instance

import newpost from './components/signup/NewPost.vue'

import exampleme from './components/ExampleComponent.vue'
import useme from './components/Use.vue'

//general components
require('./General.js');

const app = new Vue({
    el: '#app',
    router,
    components:{
        mydropdown,
        mynavbar,
        exampleme,
        newpost,
        useme
    },
}).$mount('#app')

