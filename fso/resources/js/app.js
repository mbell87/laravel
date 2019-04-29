/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import $ from 'jquery';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-datetimepicker/build/jquery.datetimepicker.full.min.js';
import 'select2/dist/js/select2.min.js';

$(function () {
    jQuery('.datetimepicker').datetimepicker({
        step: 15
    });
});


$(function () {
    jQuery('.selectable').select2({
        width: 'resolve'
    });
});
require('./bootstrap');

import Vue from 'vue'
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('example-component2', require('./components/ExampleComponent2.vue').default);

const app = new Vue({
    el: '#app'
});
