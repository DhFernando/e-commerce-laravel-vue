/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/userOption.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


Vue.component('user_show_promt', require('./components/user/user_show_promt.vue').default);
Vue.component('user_permission_promt', require('./components/user/user_permission_promt.vue').default);
Vue.component('user_index', require('./components/user/user_index.vue').default);
Vue.component('form_input', require('./components/Advertistments/formInput.vue').default);
Vue.component('form_customize', require('./components/Advertistments/formCustomize.vue').default);
Vue.component('form_picture_input', require('./components/Advertistments/formPictureInput.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
