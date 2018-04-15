
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/*
Vuex is a state management pattern + library for Vue.js applications.
It serves as a centralized store for all the components in an application,
 with rules ensuring that the state can only be mutated in a predictable fashion.
It also integrates with Vue's official devtools extension to provide advanced features
such as zero-config time-travel debugging and state snapshot export / import.

...Its Like redux
*/
import Vuex from 'Vuex';
Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    itens: { testing: "This works well..." },
  },
  mutations: {
    setItens(state, obj){
      state.itens = obj;
    }
  }
});


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
Vue.component('modal-button', require('./components/modal/ModalButton.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));

const app = new Vue({
    el: '#app',
    store
});
