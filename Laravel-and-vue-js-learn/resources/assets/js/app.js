
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('Navigation', require('./components/Navigation.vue'));
Vue.component('panel-content', require('./components/PanelContent.vue'));
Vue.component('box-dashboard', require('./components/BoxDashboard.vue'));
Vue.component('container', require('./components/Container.vue'));
Vue.component('table-component', require('./components/TableComponent.vue'));
Vue.component('bread-crumb', require('./components/BreadCrumb.vue'));
Vue.component('modal-content', require('./components/modal/ModalContent.vue'));
Vue.component('modal-link', require('./components/modal/ModalLink.vue'));

const app = new Vue({
    el: '#app'
});
