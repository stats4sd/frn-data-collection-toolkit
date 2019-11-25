/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import filesize from 'filesize';

window.filesize = filesize;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import Vue from 'vue';

import InstantSearch from 'vue-instantsearch';
// import Elements from './components/Elements';
// import ElementFile from './components/ElementFile';
// import ElementVideo from './components/ElementVideo';
// import ElementLink from './components/ElementLink';
// import Resources from './components/Resources';
// import Contact from './components/Contact';

Vue.use(InstantSearch);

// Vue.component("contact-form", Contact);
// Vue.component("elements",Elements);
// Vue.component("element-file",ElementFile);
// Vue.component("element-video",ElementVideo);
// Vue.component("element-link",ElementLink);
// Vue.component("resources",Resources);

const app = new Vue({
    el: '#app',
});

