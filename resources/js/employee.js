require('./vue-asset');
import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css'


window.Vue = require('vue');
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueIziToast);
Vue.component('add-employee', require('./components/Employee/AddEmployee.vue').default);
Vue.component('view-employees', require('./components/Employee/ViewEmployees.vue').default);
Vue.component('update-employee', require('./components/Employee/UpdateEmployee.vue').default)

var app = new Vue({

    el: '#employee'
});
