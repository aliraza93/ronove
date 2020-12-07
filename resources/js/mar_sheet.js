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
Vue.use(require('vue-moment'));
Vue.use(VueIziToast);
Vue.component('add-mar-sheet', require('./components/MarSheet/AddMarSheet.vue').default);
Vue.component('view-mar-sheet', require('./components/MarSheet/ViewMarSheet.vue').default);
Vue.component('update-mar-sheet', require('./components/MarSheet/UpdateMarSheet.vue').default);
Vue.component('add-medication', require('./components/MarSheet/AddMedication.vue').default);
Vue.component('book-staff', require('./components/MarSheet/BookServiceStaff.vue').default);
var app = new Vue({

    el: '#mar-sheet'
});
